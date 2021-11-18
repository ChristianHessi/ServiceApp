<?php

namespace App\Http\Controllers;
use Exception;
use App\Http\Controllers\registration_controller;
use Illuminate\Http\Request;
use App\Http\Controllers\user_controller;
use App\Models\Client;
use App\Models\Prestation;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Input\Input;
use Throwable;
use Carbon\Carbon;

//fonction qui vérifie la conformité d'un mot de passe
function is_valid_password_user($password){
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

//fonction qui détermine si l'adresse email est unique
function is_valid_email($email){
    $user = User::where('email', $email)->first();
    if(isset($user->email)){
        return false;
    }
    else{
        return true;
    }
}


class user_function extends Controller
{

    /**
     * Add user Page
     *
     * Add user Page
     * @group Admin
     * @authenticated
    */
    public function add_user_page(){
        $all_role = Role::all();
        return view('add_user_page', ["all_role" => $all_role]);
    }

    /**
     * Add user
     *
     * Function which creates a user (by an admin)
     * @bodyParam name string  required The name of user
     * @bodyParam surname string required The surname of user
     * @bodyParam sex string required The sex of user
     * @bodyParam birthday date required The birthday of user
     * @bodyParam Phone_number int required The phone number of user
     * @bodyParam password string required The password of user
     * @bodyParam confirm_password string required The confirm password of user
     * @bodyParam email string required The email of user
     * @group Admin
     * @authenticated
    */
    public function add_user(){

        try{
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $sexe = $_POST['sexe'];
            $birthday = $_POST['birthday'];
            $phone_number = $_POST['phone_number'];
            $password = $_POST['password1'];
            $confirm_password = $_POST["password2"];
            $email = $_POST['email'];
            $id_role = $_POST["role"];
            //format de date
            if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }

            $birthday = Carbon::createFromFormat($format, $birthday)->format("Y-m-d");
            //$birthday = \Carbon\Carbon::parse($birthday)->format("Y-m-d");
            if(isset($name) && isset($surname) && isset($sexe) && isset($birthday) && isset($phone_number) && isset($email) && isset($password) && isset($confirm_password) &&  isset($id_role)){

                if($confirm_password == $password){
                    if(is_valid_password_user($confirm_password) && is_valid_password_user($password)){


                        if(is_valid_email($email)){
                            $user = array(
                                "name" => $name,
                                "surname" => $surname,
                                "sexe" => $sexe,
                                "birthday" => $birthday,
                                "phone_number" => $phone_number,
                                "password" => $password,
                                "email" => $email,
                                "id_role" => $id_role,
                            );

                            $registre = new user_controller;
                            $result = $registre->save_user($user);

                            if($result){
                                return redirect()->route('all_users')->with('success', Lang::get('lang.create_user'));
                            }
                            else{
                                return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
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
        catch(Exception $e){
            return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
        }
    }

    /**
     * User edit page
     *
     * User edit page
     * @bodyParam id int required The id of user
     * @group Admin
     * @authenticated
    */
    public function modify_user_page(){
        try{
            $id = $_GET["id"];
            $user = User::find($id);

                $id_role_user = User::find($id)->roles()->first();
                $id_role_user = $id_role_user['id'];
                $all_role = Role::all();

                return view("modify_user_page", ["user" => $user, "all_role" => $all_role, "id_role_user" => $id_role_user]);

        }
        catch(Throwable $e){
            return redirect()->route("all_users");
        }
    }


    /**
     * Change role user
     *
     * Function that modifies the role of a user (by an admin)
     * @bodyParam id_role int required The id of role
     * @bodyParam id int required The id of user
     * @group Admin
     * @authenticated
    */
    public function modify_user(){
        try{
            $role_id = $_POST["role"];
            $user_id = $_POST['id'];
            if(isset($role_id) && $user_id){
                $donnees = array(
                    "role_id" => $role_id,
                    "user_id" => $user_id
                );
                $register = new user_controller;
                $result = $register->change_role_user($donnees); //change role user
                if($result){
                    return redirect()->route("all_users")->with("success", Lang::get('lang.success_modify_user'));
                }
                else{
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.fail_modify_user'));
                }
            }
            else{
                return redirect()->back()->withInput()->with('warning', Lang::get('lang.fail_modify_user'));
            }
        }
        catch(Throwable $e){
            return redirect()->back()->withInput()->with('warning', Lang::get('lang.fail_modify_user'));
        }

    }

    /**
     * Users list page
     *
     * This page lists all users
     * @group Admin
     * @authenticated
    */
    public function all_user_page(){
        $all_users = User::paginate(20);
        return view("all_user_page", ["all_users" => $all_users, "search" => null, "categorie" => null, "typeorder" => "asc"]);
    }

    /**
     * List of users following a search
     *
     * List of all users following a search
     * @bodyParam name string required The research element
     * @group Admin
     * @authenticated
    */
    public function all_user_with_search_page(){
        try{
            $search = $_GET['search']; //élément à recherche
            if(! empty($search)){
                //recherche sur le nom et prénom
                $all_word = explode(" ", $search);
                $all_users = User::Where(function ($query) use($all_word) {
                    for ($i = 0; $i < count($all_word); $i++){
                       $query->orwhere('name', 'like',  '%' . $all_word[$i] .'%');
                       $query->orwhere('surname', 'like',  '%' . $all_word[$i] .'%');
                    }
               })->paginate(20);
                //$all_users = User::whereIn('name', $all_word)->orwhereIn('surname', $all_word)->paginate(20);
                //$all_users = User::where('name', 'LIKE', '%'.$search.'%')->orwhere('surname', 'LIKE', '%'.$search.'%')->paginate(20);

                return view("all_user_page", ["all_users" => $all_users, "search" => $search, "categorie" => null, "typeorder" => "asc"]);
            }
            else{
                $all_users = User::paginate(20);
                return view("all_user_page", ["all_users" => $all_users, "search" => null, "categorie" => null, "typeorder" => "asc"]);
            }
        }
        catch(Throwable $e){
            $all_users = User::paginate(20);
            return view("all_user_page", ["all_users" => $all_users, "search" => null, "categorie" => null, "typeorder" => "asc"]);
        }
    }

    /**
     * Sort users
     *
     * List of all users with sort
      * @bodyParam type string required The Search order (ascending / descending)
     * @bodyParam categorie string required The search index (role/email/Lastname and firstname)
     * @group Admin
     * @authenticated
    */
    public function all_user_with_sort_page(){
        try{
            $search = $_GET['search']; //élement à rechercher
            try{
                $categorie = $_GET['categorie']; //select critére de trie
            }
            catch(Exception $e){
                $categorie = '';
            }
            $typeorder = $_GET['typeorder']; //select ordre du trie(desc, asc)
            if($typeorder == 'desc'){
                $typeorder = 'desc';
            }
            else{
                $typeorder = 'asc';
            }

            if(! empty($search)){
                $all_word = explode(" ", $search);
                if(!empty($categorie)){
                    if($categorie == "email"){
                        $all_users = User::Where(function ($query) use($all_word) {
                                        for ($i = 0; $i < count($all_word); $i++){
                                        $query->orwhere('name', 'like',  '%' . $all_word[$i] .'%');
                                        $query->orwhere('surname', 'like',  '%' . $all_word[$i] .'%');
                                        }
                                    })
                                    ->orderBy("email", $typeorder)
                                    ->paginate(20);
                    }
                    elseif($categorie == "role"){

                        $all_users = User::leftJoin('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
                                    ->join('roles as r', 'model_has_roles.role_id', '=', 'r.id')
                                    ->where('model_has_roles.model_type', '=', 'App\Models\User')
                                    ->Where(function ($query) use($all_word) {
                                        for ($i = 0; $i < count($all_word); $i++){
                                        $query->orwhere('users.name', 'like',  '%' . $all_word[$i] .'%');
                                        $query->orwhere('users.surname', 'like',  '%' . $all_word[$i] .'%');
                                        }
                                    })
                                    ->orderBy('r.name', $typeorder)
                                    ->select('users.*')
                                    ->paginate(20);

                        /*$all_users = User::join('roles as r', 'users.id', '=', 'r.id')
                                    ->orderBy('r.name', $typeorder == "desc" ? 'asc' : 'desc')
                                    ->where('users.name', 'LIKE', '%'.$search.'%')
                                    ->orwhere('users.surname', 'LIKE', '%'.$search.'%')
                                    ->select('users.*')
                                    ->paginate(20);*/
                    }
                    else{
                        $all_users = User::Where(function ($query) use($all_word) {
                                        for ($i = 0; $i < count($all_word); $i++){
                                        $query->orwhere('name', 'like',  '%' . $all_word[$i] .'%');
                                        $query->orwhere('surname', 'like',  '%' . $all_word[$i] .'%');
                                        }
                                    })
                                    ->orderBy("name", $typeorder)
                                    ->orderBy("surname")
                                    ->paginate(20);
                    }
                }
                else{
                    $all_users = User::Where(function ($query) use($all_word) {
                                    for ($i = 0; $i < count($all_word); $i++){
                                    $query->orwhere('name', 'like',  '%' . $all_word[$i] .'%');
                                    $query->orwhere('surname', 'like',  '%' . $all_word[$i] .'%');
                                    }
                                })
                                ->paginate(20);
                }
                return view("all_user_page", ["all_users" => $all_users, "search" => $search, "categorie" => $categorie, "typeorder" => $typeorder]);
            }
            else{

                if(!empty($categorie)){
                    if($categorie == "email"){
                        $all_users = User::orderBy("email", $typeorder)->paginate(20);
                    }
                    elseif($categorie == "role")
                    {
                        $all_users = User::leftJoin('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
                                    ->join('roles as r', 'model_has_roles.role_id', '=', 'r.id')
                                    ->where('model_has_roles.model_type', '=', 'App\Models\User')
                                    ->orderBy('r.name', $typeorder)
                                    ->select('users.*')
                                    ->paginate(20);
                    }
                    else{
                        $all_users = User::orderBy("name", $typeorder)->orderBy("surname")->paginate(20);
                    }
                }
                else{
                    $all_users = User::paginate(20);
                }
                return view("all_user_page", ["all_users" => $all_users, "search" => null, "categorie" => $categorie, "typeorder" => $typeorder]);
            }
        }
        catch(Throwable $e){
            return $e;
            $all_users = User::paginate(20);
            return view("all_user_page", ["all_users" => $all_users, "search" => null]);
        }
    }

    /**
     * Active user
     *
     * Function to activate a user
     * @bodyParam id int required The id of user
     * @group Admin
     * @authenticated
    */
    public function active_user(){
        try{
            $id_user = $_GET["id"];
            if(isset($id_user)){
                $register = new user_controller;
                $result = $register->activation_user($id_user); //active user
                if($result){
                    return redirect()->route("all_users")->with("success", Lang::get('lang.active_user'));
                }
                else{
                    return redirect()->route("all_users")->with("warning", Lang::get('lang.no_active_user'));
                }
            }
            else{
                return redirect()->route("all_users")->with("warning", Lang::get('lang.no_active_user'));
            }
        }
        catch(Throwable $e){
            return redirect()->route("all_users")->with("warning", Lang::get('lang.no_active_user'));
        }

    }


    /**
     * Deactive user
     *
     * Function to deactivate a user
     * @bodyParam id int required The id of user
     * @group Admin
     * @authenticated
    */
    public function deactive_user(){
        try{
            $id_user = $_GET["id"];
            if(isset($id_user)){
                $register = new user_controller;
                $result = $register->desactivation_user($id_user); //deactive user
                if($result){
                    return redirect()->route("all_users")->with("success", Lang::get('lang.deactive_user'));
                }
                else{
                    return redirect()->route("all_users")->with("warning", Lang::get('lang.no_deactive_user'));
                }

            }
            else{
                return redirect()->route("all_users")->with("warning", Lang::get('lang.no_deactive_user'));
            }
        }
        catch(Throwable $e){
            return redirect()->route("all_users")->with("warning", Lang::get('lang.no_deactive_user'));
        }
    }


    /**
     * Change language
     *
     * Function to change the language of a user
     * @bodyParam lang string required The language of user
     * @group Admin
     * @authenticated
    */
    public function change_language(){
        try{
            $code_lang = $_GET["lang"]; //select language
            if(isset($code_lang)){
                $register = new user_controller;
                $result = $register->change_langue_user($code_lang); //change language
                if($result){
                    return redirect()->back()->with("success", Lang::get('lang.change_language'));
                }
                else{
                    return redirect()->back()->with("warning", Lang::get('lang.no_change_language'));
                }
            }
            else{
                return redirect()->back()->with("warning", Lang::get('lang.no_change_language'));
            }
        }
        catch(Throwable $e){
            return redirect()->back()->with("warning", Lang::get('lang.no_change_language'));
        }

    }

    /**
     * User Password Change Page
     *
     * user password modification page
     * @bodyParam id int required The id of user
     * @group Admin
     * @authenticated
    */
    public function change_password_page(){
        try{
            $id_user = $_GET["id"];
            $user = User::find((int) $id_user);
            if($user){
                return view('change_password_user', ["user" => $user]);
            }
            else{
                return redirect()->route("all_users");
            }

        }
        catch(Throwable $e){
            return redirect()->route("all_users");
        }
    }


    /**
     * Change user password
     *
     * Function that changes the role of a user
     * @bodyParam id int required The id of user
     * @bodyParam password string required The new password of user
     * @bodyParam confirm_password string required The confirm password of user
     * @group Admin
     * @authenticated
    */
    public function change_password(){
        try{
            $id = $_POST["id"];
            $new_password = $_POST['password1'];
            $confirm_password = $_POST['password2'];
            if(isset($new_password) && isset($confirm_password)){
                if($new_password == $confirm_password){
                    if(($new_password == $confirm_password) && is_valid_password_user($new_password) && is_valid_password_user($confirm_password)){

                        $donnees = array(
                            "id_user" => $id,
                            "new_password" => $new_password,
                        );
                        $register = new user_controller;
                        $result = $register->change_pwd_user($donnees);
                        if($result){
                            return redirect()->route("all_users")->with("success", Lang::get('lang.success_modify_pwd'));
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


    /**
     * View user page
     *
     * View page for all of a user's data
     * @bodyParam id int required The id of user
     * @group Admin
     * @authenticated
    */
    public function view_user_page(){
        try{
            $id = $_GET["id"];
            if(isset($id)){
                $user = User::find($id);
                if($user){
                    return view("view_user",["user" => $user]);
                }
                else{
                    return redirect()->back();
                }
            }
            else{
                return redirect()->back();
            }
        }
        catch(Throwable $e){
            return redirect()->back();
        }

    }

    /**
     * Dashboard
     *
     * Last 30 Days registrations dashboard page
     * @group Admin
     * @authenticated
    */
    public function view_dashboard(){
        $total_prestations = count(Prestation::all());
        $total_custumers = count(Client::all());
        $total_users = count(User::where("is_active", true)->get());
        $date_start = date("Y-m-d", strtotime('-30 days'));
        $date_stop = date("Y-m-d"); //date de début du tablau de bord
        $array_dashboard = array(); //date de fin du tablau de bord
        while($date_start <= $date_stop){
            //pour determiner l'intervalle
            $inter_start = $date_start;
            $inter_stop = date('Y-m-d', strtotime($date_start. '+5 days'));

            //on collecte les données sur chaque période
            $array_day_data = array(
                (int) date('Y', strtotime($date_start)),
                (int) date('m', strtotime($date_start)),
                (int) date('d', strtotime($date_start)),
                count(Prestation::whereDate('created_at', ">=" , $inter_start)->whereDate('created_at', "<" , $inter_stop)->get()),
            );
            array_push($array_dashboard, $array_day_data);
            //$date_start = date('Y-m-d', strtotime($date_start. ' +5 days'));
            $date_start = $inter_stop;

        };

        return view("dashboard",
            [
                "total_users" => $total_users,
                "total_custumers" => $total_custumers,
                "total_prestations" => $total_prestations,
                "array_dashboard" => $array_dashboard,
                "date_start" => $date_start
            ]
        );
    }


    /**
     *Date format for input
     *
     * Allows you to specify the date format from input
     * @group All
     */
    public static function date_format(){
        if(session('selected_language') == 'en'){
            return "mm/dd/yyyy";
            //return \Carbon\Carbon::parse($date)->format('m-d-Y');
        }
        else{
            return "dd/mm/yyyy";
            //return \Carbon\Carbon::parse($date)->format('d-m-Y');
        }
    }

    /**
     *Date format for date
     *
     * Allows you to specify the date format from input
     * @group All
     */
    public static function date_format_value(){
        if(session('selected_language') == 'en'){
            return "m/d/Y";
            //return \Carbon\Carbon::parse($date)->format('m-d-Y');
        }
        else{
            return "d/m/Y";
            //return \Carbon\Carbon::parse($date)->format('d-m-Y');
        }
    }
}
