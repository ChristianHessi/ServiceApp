<?php

namespace App\Http\Controllers;

include_once("registration_controller.php");

use Illuminate\Http\Request;
use App\Http\Controllers\registration_controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Throwable;
use Carbon\Carbon;


//test de conformité du password d'un user
function is_valid_password_reg($password){
    $len = strlen($password);
    if($len >= 8 && $len <= 16){
        if(preg_match('~[0-9]+~', $password) && preg_match('/[A-Z]/', $password)){
            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
}

//test d'existance d'une adresse email en BD
function is_valid_email_reg($email){
    $email = User::where("email", $email)->first();
    if($email){
        return false;
    }
    else{
        return true;
    }
}


class registration_function extends Controller
{


    /**
     * User registration
     *
     * User registration function with sending account activation email
     * @bodyParam name string  required The name of user
     * @bodyParam surname string required The surname of user
     * @bodyParam sex string required The sex of user
     * @bodyParam birthday date required The birthday of user
     * @bodyParam Phone_number int required The phone number of user
     * @bodyParam password string required The password of user
     * @bodyParam confirm_password string required The confirm password of user
     * @bodyParam email string required The email of user
     * @group All Group
    */
    public function registration_send(){

        try{
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $sexe = $_POST['sexe'];
            $birthday = $_POST['birthday'];
            $phone_number = $_POST['phone_number'];
            $password = $_POST['password1'];
            $cf_password = $_POST['password2'];
            $email = $_POST['email'];

            //format de date
             if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }

            //convert birthday to date format Y-m-d
            $birthday = Carbon::createFromFormat($format, $birthday)->format("Y-m-d");
            //$birthday = \Carbon\Carbon::parse($birthday)->format("Y-m-d");

            //vérifier que les données ont été fournies
            if(isset($name) && isset($surname) && isset($sexe) && isset($birthday) && isset($phone_number) && isset($email) && isset($password) && isset($cf_password)){
                if($password == $cf_password){ //verifie l'identicité des deux password
                    if(is_valid_password_reg($password) && is_valid_password_reg($cf_password)){ //verifier les conformités des password

                        if(is_valid_email_reg($email)){ //verifier que l'adresse email n'est pas encore attribué


                            $user = array(
                                "name" => $name,
                                "surname" => $surname,
                                "sexe" => $sexe,
                                "birthday" => $birthday,
                                "phone_number" => $phone_number,
                                "password" => $password,
                                "email" => $email,
                            ); //on met tous les données dans un array

                            $registre = new registration_controller;
                            $result = $registre->save($user); // on enregistre l'utilisateur en lui envoyant un mail d'activation de compte

                            if($result){
                                return redirect()->route('login')->with('success', Lang::get('lang.success_active_account'));
                            }
                            else{
                                return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_email'));
                            }
                        }
                        else{
                            return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_email'));
                        }

                    }
                    else{
                        return redirect()->back()->withInput()->with('warning', Lang::get('lang.pwd_maj_num'));
                    }
                }
                else{
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.pwd_inchorent'));
                }
            }
            else{
                return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
            }
        }
        catch(Throwable $e){
            return redirect()->back()->withInput()->with("warning", Lang::get('lang.fill_data_correctly'));
        }
    }


    /**
     * Account activation
     *
     * Function that allows the activation of a user's account
     * @bodyParam id int  required The id of user
     * @group All Group
    */
    public function registration_activation(){
        try{
            $id = $_GET['id'];
            if(isset($id)){
                $register = new registration_controller; // on créer un controlleur des enregistrements
                $reponse = $register->activate_account($id); //on active le compte du user
                if($reponse){
                    return redirect()->route("login")->with("success", Lang::get('lang.active_account'));
                }
                else{
                    return redirect()->route("login")->with("warning", Lang::get('lang.no_active_account'));
                }
            }
            else{
                return redirect()->route("login")->with("warning", Lang::get('lang.no_active_account'));
            }
        }
        catch(Throwable $e){
            return redirect()->route("login")->with("warning", Lang::get('lang.no_active_account'));
        }
    }


    /**
     * Profile update
     *
     * User profile modification function
     * @bodyParam name string  required The name of user
     * @bodyParam surname string required The surname of user
     * @bodyParam sex string required The sex of user
     * @bodyParam birthday date required The birthday of user
     * @bodyParam Phone_number int required The phone number of user
     * @group All Group
     * @authenticated
    */
    public function profile_modification(){
        try{
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $birthday = $_POST['birthday'];
            $sexe = $_POST['sexe'];
            $telephone = $_POST['phone_number'];
            $format = "";
            //format de date
            if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }

            //convert birthday to date format Y-m-d
            $birthday = Carbon::createFromFormat($format, $birthday)->format("Y-m-d");

            if(isset($name) && isset($surname) && isset($birthday) && isset($sexe) && isset($telephone)){

                $user = array(
                    "name" => $name,
                    "surname" =>$surname,
                    "birthday" => $birthday,
                    "sexe" => $sexe,
                    "phone_number" => $telephone,
                );

                $register = new registration_controller; //instance du controlleur d'enregistrements
                $reponse = $register->change_profile($user); //mise à jour du profile
                if($reponse){
                    return redirect()->back()->with("success", Lang::get('lang.modify_profil_msg'));
                }
            }
            else{
                return redirect()->back()->with("warning", Lang::get('lang.fill_data_correctly'));
            }
        }
        catch(Throwable $e){
            return redirect()->back()->with("warning", Lang::get("lang.fill_data_correctly"));

        }
    }


    /**
     * Update Password
     *
     * User password modification function
     * @bodyParam current_password string  required The current password
     * @bodyParam password string required The new password of user
     * @bodyParam confirm_password string required The confirm password of user
     * @group All Group
     * @authenticated
    */
    public function password_modification(){
        try{

            $current_password = $_POST["password"];
            $new_password = $_POST["password1"];
            $cf_password = $_POST['password2'];
            if(isset($current_password) && isset($new_password) && isset($cf_password)){
                if(Hash::check($current_password, Auth::user()->password)){
                    if($cf_password == $new_password){
                        if(is_valid_password_reg($new_password)){
                            //$password_confirmation = $_POST['password2'];
                            $donnees = array(
                                "current_password" => $current_password,
                                "new_password" => $new_password,
                            );

                            $register = new registration_controller;//une insatnce du controlleur d'enregistrement
                            $reponse = $register->change_password($donnees); //mise à jour du password
                            if($reponse){
                                return redirect()->route("login")->with("success", Lang::get('lang.pwd_modify_success'));
                            }
                            else{
                                return redirect()->route("change_your_parameters")->with(["warning" => Lang::get('lang.cpwd_incorrect'), "tabName" => "pwd"]);
                            }
                        }
                        else{
                            return redirect()->back()->with(["warning" => Lang::get('lang.fill_data_correctly'), "tabName" => "pwd"]);
                        }
                    }
                    else{
                        return redirect()->back()->with(["warning" => Lang::get('lang.pwd_inchorent'), "tabName" => "pwd"]);
                    }
                }
                else{
                    return redirect()->route("change_your_parameters")->with(["warning" => Lang::get('lang.cpwd_incorrect'), "tabName" => "pwd"]);
                }
            }
            else{
                return redirect()->back()->with(["warning" => Lang::get('lang.fill_data_correctly'), "tabName" => "pwd" ]);
            }

        }
        catch(Throwable $e){
            return redirect()->back()->with(["warning" => Lang::get('lang.fill_data_correctly'), "tabName" => "pwd"]);
        }

    }

    /**
     * Resetting email address
     *
     * Mail sending function for updating an email for a user
     * @bodyParam email string  required The email of user
     * @bodyParam password string required The  password of user
     * @group All Group
     * @authenticated
    */
    public function email_modification(){
        try{
            $new_email = $_POST['email'];
            $password = $_POST['password'];
            if(isset($new_email) && isset($password)){
                if(Hash::check($password, Auth::user()->password)){
                    $donnees = array(
                        "new_email" => $new_email,
                        "current_password" => $password,
                    );

                    $register = new registration_controller;
                    $reponse = $register->change_email($donnees); //envoie du mail
                    if($reponse){
                        return redirect()->route("change_your_parameters")->with(["success" => Lang::get('lang.consult_email_active'), "tabName" => "email"]);
                    }
                    else{
                        return redirect()->route("change_your_parameters")->withInput()->with(["warning" => Lang::get('lang.pwd_email_exist'), "tabName" => "email"]);
                    }
                }
                else{
                    return redirect()->back()->withInput()->with(["warning" => Lang::get('lang.cpwd_incorrect'), "tabName" => "email"]);
                }
            }
            else{
                return redirect()->back()->withInput()->with(["warning" => Lang::get('lang.fill_data_correctly'), "tabName" => "email"]);
            }
        }
        catch(Throwable $e){
            return redirect()->back()->withInput()->with(["warning" =>  Lang::get('lang.fill_data_correctly'), "tabName" => "email"]);
        }
    }


    /**
     * Email address update
     *
     * Email update function following the email address reset
     * @bodyParam email string  required The email of user
     * @group All Group
     * @authenticated
    */
    public function email_modification_active(){
        try{
            //$new_email = $_GET["email"];
            $id = $_GET["id"];
            $user = User::where('reset_key', $id)->first();
            if($user){
                if(isset($id)){
                    $register = new registration_controller;
                    $reponse = $register->change_email_active($id);
                    if($reponse){
                        return redirect()->route("change_your_parameters")->with(["success" => Lang::get('lang.email_modify_success'), "tabName" => "email"]);
                    }
                    else{
                        return redirect()->route("change_your_parameters")->with(["warning" => Lang::get('lang.pwd_email_exist'), "tabName" => "email"]);
                    }
                }
                else{
                    return redirect()->route("change_your_parameters")->with(["warning" => Lang::get('lang.incorrect_email'), "tabName" => "email"]);
                }
            }
            else{
                return redirect()->route("change_your_parameters")->with(["warning" => Lang::get('lang.incorrect_reset_key'), "tabName" => "email"]);
            }
        }
        catch(Throwable $e){
            return redirect()->route("change_your_parameters")->with(["warning" => Lang::get('lang.lost_activation'), "tabName" => "email"]);
        }
    }

    /**
     * Update avatar
     *
     * Update avatar of user
     * @bodyParam image file  required The avatar of a user
     * @group All Group
     * @authenticated
    */
    public function save_avatar_user(){
        try{
            $file = $_FILES['fichier'];
            if(isset($file)){
                //get extension of file
                $ext =  pathinfo($file["name"], PATHINFO_EXTENSION);

                //get timestamp
                $date = date_create();
                $timestamp =  date_timestamp_get($date);

                //get url avatar
                $url_avatar = Auth::user()->email.$timestamp.".".$ext;

                //save a url avatar to database
                $user = User::find(Auth::user()->id);
                $user->url_avatar = $url_avatar;
                $user->save();

                //save avatar to directory
                move_uploaded_file($_FILES["fichier"]["tmp_name"],
                getcwd() . "/avatar-user/". $url_avatar);

                return redirect()->back()->with("success", Lang::get('lang.success_avatar_change'));

            }
            else{
                return redirect()->back()->with("warning", Lang::get('lang.enter_avatar'));
            }
        }
        catch(Throwable $e){
            return redirect()->back()->with("warning", Lang::get('lang.enter_avatar'));
        }
    }

}
