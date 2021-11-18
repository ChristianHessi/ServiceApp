<?php

namespace App\Http\Controllers;

include_once("authentification_controller.php");
use Illuminate\Http\Request;
use App\Http\Controllers\authentification_controller ;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Throwable;
use Illuminate\Support\Facades\Cookie;

//function qui verifie si un password remplit tous les critéres de sécurité
function is_valid_password_auth($password){
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


class authentification_function extends Controller
{


    /**
     * Authentification
     *
     * Function that login a user
     * @bodyParam email string required The email of user
     * @bodyParam password string required The Password of user
     * @group All Group
    */
    public function authenticate(){
        try{
            //on récupére les données entrées par l'utilisateur
            $email = $_POST['email'];
            $password = $_POST['password'];

            //on verifie que ses données sont non  nul
            if(isset($email) && isset($password)){
                $exist_user = User::where('email', $email)->first();
                try{
                    if($exist_user->is_active == 1){
                        //on crée le controlleur d'authentification
                        $user = new authentification_controller(array(
                            "email" => $email,
                            "password" => $password,
                        ));
                        //on récupére la reponse obtenu du test de connexion
                        $reponse = $user->is_authenticate();

                        //si l'utilisateur est connecté
                        if($reponse == "1"){
                            return redirect()->route("change_your_parameters");
                            //return "Authentification OK ";
                        }
                        //si l'utilisateur est à moins de 4 tentatives de connexion
                        elseif($reponse == "0"){
                            return redirect()->back()->withInput()->with("warning", Lang::get('lang.incorrect_pwd_email'));
                            //return redirect()->route($route)->with("warning", Lang::get('lang.incorrect_pwd_email'));
                        }
                        // si le user est à 5 tentatives de connexion
                        else{
                            return redirect()->back()->withInput()->with("error", Lang::get('lang.attempt_10'))->with('stop', "ok");
                            //return redirect()->route($route, ['stop' => "ok"])->with("error", Lang::get('lang.attempt_10'));
                        }
                    }
                    else{
                        return redirect()->back()->withInput()->with("warning", Lang::get('lang.is_active'));
                    }
                }
                catch(Exception $e){
                    return redirect()->back()->withInput()->with("warning", Lang::get('lang.inexist_email'));
                }
            }
            //si les données(email, password) sont nuls
            else{
                return redirect()->back()->withInput()->with("warning", Lang::get('lang.fill_data_correctly'));
                //return redirect()->route("login")->with("warning", Lang::get('lang.fill_data_correctly'));
            }
        }
        catch(Throwable $e){
            return redirect()->back()->withInput()->with("warning", Lang::get('lang.fill_data_correctly'));
        }
    }


    /**
     * Logout
     *
     * Function that logout a user
     * @group All Group
     * @authenticated
    */
    public function logout(){
        try{
            $reponse = logout_user(); //on déconnecte l'utilisateur
            if($reponse){
                return redirect()->route("login");
            }
        }
        catch(Throwable $e){
            return redirect()->back();
        }
    }

    /**
     * Send password reset email
     *
     * Send password reset email to a user
     * @bodyParam email string required A user's email address
     * @group All Group
    */
    public function forgot_pwd(){
        try{
            $email = $_POST["email"]; //on récupére l'adresse email
            if(isset($email)){
                $exist_email = User::where("email", $email)->first();
                if($exist_email){ //test d'existance de l'adresse email
                    $result = forgot_pwd_send_email($email); // on envoie le mail de réinitialisaion
                    if($result){
                        return redirect()->route("forgot_password")->with("success", Lang::get('lang.change_pwd_email'));
                    }
                    else{
                        return redirect()->back()->withInput()->with("warning", Lang::get('lang.enter_correct_email'));
                    }
                }
                else{
                    return redirect()->back()->withInput()->with("warning", Lang::get('lang.inexist_email'));
                }
            }
            else{
                return redirect()->back()->withInput()->with("warning", Lang::get('lang.enter_email'));
            }
        }
        catch(Throwable $e){
            return redirect()->back()->withInput()->with("warning", Lang::get('lang.enter_correct_email'));
        }
    }

    /**
     * Password reset page
     *
     * Password reset page
     * @bodyParam reset_key string required The reset key of the user assigned to it
     * @group All Group
    */
    public function reset_password_page(){
        try{
            $id = $_GET["id"]; //on récupére le reset key du forgot password
            $user = User::where('reset_key', $id)->first(); //on identifie le user correspondant
            if($user){
                //on check si la date de validation du reset key est correcte
                $user = User::where('reset_key', $id)->where("reset_date", ">=" , date("Y-m-d H:i:s"))->first();
                if($user){ //si Ok
                    return view('reset_password', ['user' => $user]);
                }
                else{ //si NOk
                    return redirect()->route('forgot_password')->with("warning", Lang::get('lang.expire_reset_pwd'));
                }
            }
            else{
                //return "OK";
                return  redirect()->route('forgot_password');
            }
        }
        catch(Throwable $e){
            return redirect()->back();
        }
    }

    /**
     * Reset password
     *
     * Resetting a user's password
     * @bodyParam id int required The id of user
     * @bodyParam password string required The password of user
     * @bodyParam Confirm_Password string required The confirm password of user
     * @group All Group
    */
    public function reset_password(){
        try{
            $id_user = $_POST["id"];
            $new_pwd = $_POST["password1"];
            $cf_new_pwd = $_POST["password2"];
            if(isset($id_user) && isset($new_pwd) && isset($cf_new_pwd)){
                if(($new_pwd == $cf_new_pwd)){ // si les deux password sont identiques
                    //test si les password sont conformes
                    if(is_valid_password_auth($new_pwd) && is_valid_password_auth($cf_new_pwd)){
                        $donnees = array(
                            "id_user" => $id_user,
                            "new_password" => $new_pwd,
                        );

                        $result = reset_pwd_user($donnees); //mise à jour du password
                        if($result){
                            return redirect()->route("login")->with("success", Lang::get('lang.success_reset_pwd'));
                        }
                        else{
                            return redirect()->back()->with("warning", Lang::get('lang.fail_reset_pwd'));
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
            return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
        }
    }
}
