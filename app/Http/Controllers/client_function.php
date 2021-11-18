<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Lang;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Client;
use App\Http\Controllers\client_controller;
use App\Models\Logs;
use Illuminate\Support\Facades\Log;
use Throwable;
use Carbon\Carbon;


//fonction qui détermine si l'adresse email est unique
function is_valid_email_custumer($email){
    $user = Client::where('email', $email)->first();
    if(isset($user->email)){
        return false;
    }
    else{
        return true;
    }
}

function is_valid_name_custumer($name){
    $user = Client::where('name', $name)->first();
    if(isset($user->name)){
        return false;
    }
    else{
        return true;
    }
}

function is_conform_name_custumer($name, $id){
    $user = Client::where('name', $name)->first();
    if(isset($user->name) and ($user->id != $id)){
        return false;
    }
    else{
        return true;
    }
}

class client_function extends Controller
{

    /**
     * Page for adding a custumer
     *
     * This page is used to fill in the elements necessary to create a custumer
     * @group Admin
     * @authenticated
    */
    public function add_custumer_page(){
        return view("add_custumer_page");
    }

    public function add_custumer_by_admin_page(){
        return view("add_custumer_by_admin_page");
    }

    public function add_custumer_by_technician_page(){
        return view("add_custumer_by_technician_page");
    }

    /**
     * Add custumer
     *
     * Function which creates a custumer (by an admin)
     * @bodyParam name string  required The name of custumer
     * @bodyParam surname string required The surname of custumer
     * @bodyParam sex string required The sex of custumer
     * @bodyParam birthday date required The birthday of custumer
     * @bodyParam Phone_number int required The phone number of custumer
     * @bodyParam email string required The email of custumer
     * @group Admin
     * @authenticated
    */

    public function add_custumer(){

        try{
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $sexe = $_POST['sexe'];
            $birthday = $_POST['birthday'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];

            //format de date
            if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }

            if($birthday){
                $birthday = Carbon::createFromFormat($format, $birthday)->format("Y-m-d");
            }
            else{
                $birthday = null;
            }

            if(isset($name)  && isset($sexe)){
                if(is_valid_name_custumer($name)){
                    /*if($email) {
                        if(is_valid_email_custumer($email)){
                        }
                        else{
                            return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_email'));
                        }
                    }*/

                    $user = array(
                        "name" => $name,
                        "surname" => $surname,
                        "sexe" => $sexe,
                        "birthday" => $birthday,
                        "phone_number" => $phone_number,
                        "email" => $email,
                    );

                    $registre = new client_controller;
                    $result = $registre->save_custumer($user);
                    //return $result;

                    if($result){
                        return redirect()->route('all_custumers')->with('success', Lang::get('lang.create_custumer'));
                    }
                    else{
                        //return "oker";
                        return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
                    }
                }
                else{
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_name'));
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

    public function add_custumer_by_admin(){

        try{
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $sexe = $_POST['sexe'];
            $birthday = $_POST['birthday'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];

            //format de date
            if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }

            if($birthday){
                $birthday = Carbon::createFromFormat($format, $birthday)->format("Y-m-d");
            }
            else{
                $birthday = null;
            }

            if(isset($name)  && isset($sexe)){
                if(is_valid_name_custumer($name)){
                    /*if($email) {
                        if(is_valid_email_custumer($email)){
                        }
                        else{
                            return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_email'));
                        }
                    }*/

                    $user = array(
                        "name" => $name,
                        "surname" => $surname,
                        "sexe" => $sexe,
                        "birthday" => $birthday,
                        "phone_number" => $phone_number,
                        "email" => $email,
                    );

                    $registre = new client_controller;
                    $result = $registre->save_custumer($user);
                    //return $result;

                    if($result){
                        return redirect()->route('add_prestation_page')->with('success', Lang::get('lang.create_custumer'));
                    }
                    else{
                        //return "oker";
                        return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
                    }
                }
                else{
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_name'));
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


    public function add_custumer_by_technician(){

        try{
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $sexe = $_POST['sexe'];
            $birthday = $_POST['birthday'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];

            //format de date
            if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }

            if($birthday){
                $birthday = Carbon::createFromFormat($format, $birthday)->format("Y-m-d");
            }
            else{
                $birthday = null;
            }

            if(isset($name)  && isset($sexe)){
                if(is_valid_name_custumer($name)){
                    /*if($email) {
                        if(is_valid_email_custumer($email)){
                        }
                        else{
                            return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_email'));
                        }
                    }*/

                    $user = array(
                        "name" => $name,
                        "surname" => $surname,
                        "sexe" => $sexe,
                        "birthday" => $birthday,
                        "phone_number" => $phone_number,
                        "email" => $email,
                    );

                    $registre = new client_controller;
                    $result = $registre->save_custumer($user);
                    //return $result;

                    if($result){
                        return redirect()->route('add_only_prestation_page')->with('success', Lang::get('lang.create_custumer'));
                    }
                    else{
                        //return "oker";
                        return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
                    }
                }
                else{
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_name'));
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
     * Custumers list page
     *
     * This page lists all custumers
     * @group Admin
     * @authenticated
    */
    public function all_custumer_page(){
        /*Permission::create([
            "id" => 23,
            "name" => "add_custumer",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        Permission::create([
            "id" => 24,
            "name" => "modify_custumer",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        Permission::create([
            "id" => 25,
            "name" => "view_custumer",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        Permission::create([
            "id" => 26,
            "name" => "delete_custumer",
            "guard_name"  => "web",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        */
        $all_custumers = Client::paginate(20);
        return view("all_custumer_page", ['all_custumers' => $all_custumers, "search" => null, "categorie" => null, "typeorder" => "asc"]);

    }


    /**
     * List of custumers following a search
     *
     * List of all custumers following a search
     * @bodyParam name string required The research element
     * @group Admin
     * @authenticated
    */
    public function all_custumer_with_search_page(){
        try{
            $search = $_GET['search']; //élément à recherche
            if(! empty($search)){
                //recherche sur le nom et prénom
                $all_word = explode(" ", $search);
                $all_custumers = Client::Where(function ($query) use($all_word) {
                    for ($i = 0; $i < count($all_word); $i++){
                       $query->orwhere('name', 'like',  '%' . $all_word[$i] .'%');
                       $query->orwhere('surname', 'like',  '%' . $all_word[$i] .'%');
                    }
               })->paginate(20);

                return view("all_custumer_page", ["all_custumers" => $all_custumers, "search" => $search, "categorie" => null, "typeorder" => "asc"]);
            }
            else{
                $all_custumers = Client::paginate(20);
                return view("all_custumer_page", ["all_custumers" => $all_custumers, "search" => null, "categorie" => null, "typeorder" => "asc"]);
            }
        }
        catch(Throwable $e){
            $all_custumers = Client::paginate(20);
            return view("all_custumer_page", ["all_custumers" => $all_custumers, "search" => null, "categorie" => null, "typeorder" => "asc"]);
        }
    }

    /**
     * Sort custumers
     *
     * List of all custumers with sort
     * @bodyParam type string required The Search order (ascending / descending)
     * @bodyParam categorie string required The search index (role/email/Lastname and firstname)
     * @group Admin
     * @authenticated
    */
    public function all_custumer_with_sort_page(){
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
                        $all_custumers = Client::Where(function ($query) use($all_word) {
                                        for ($i = 0; $i < count($all_word); $i++){
                                        $query->orwhere('name', 'like',  '%' . $all_word[$i] .'%');
                                        $query->orwhere('surname', 'like',  '%' . $all_word[$i] .'%');
                                        }
                                    })
                                    ->orderBy("email", $typeorder)
                                    ->paginate(20);
                    }
                    else{
                        $all_custumers = Client::Where(function ($query) use($all_word) {
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
                    $all_custumers = Client::Where(function ($query) use($all_word) {
                                    for ($i = 0; $i < count($all_word); $i++){
                                    $query->orwhere('name', 'like',  '%' . $all_word[$i] .'%');
                                    $query->orwhere('surname', 'like',  '%' . $all_word[$i] .'%');
                                    }
                                })
                                ->paginate(20);
                }
                return view("all_custumer_page", ["all_custumers" => $all_custumers, "search" => $search, "categorie" => $categorie, "typeorder" => $typeorder]);
            }
            else{

                if(!empty($categorie)){
                    if($categorie == "email"){
                        $all_custumers = Client::orderBy("email", $typeorder)->paginate(20);
                    }
                    elseif($categorie == "role")
                    {
                        $all_custumers = Client::leftJoin('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
                                    ->join('roles as r', 'model_has_roles.role_id', '=', 'r.id')
                                    ->where('model_has_roles.model_type', '=', 'App\Models\User')
                                    ->orderBy('r.name', $typeorder)
                                    ->select('users.*')
                                    ->paginate(20);
                    }
                    else{
                        $all_custumers = Client::orderBy("name", $typeorder)->orderBy("surname")->paginate(20);
                    }
                }
                else{
                    $all_custumers = Client::paginate(20);
                }
                return view("all_custumer_page", ["all_custumers" => $all_custumers, "search" => null, "categorie" => $categorie, "typeorder" => $typeorder]);
            }
        }
        catch(Throwable $e){
            return $e;
            $all_custumers = Client::paginate(20);
            return view("all_custumer_page", ["all_custumers" => $all_custumers, "search" => null]);
        }
    }


    /**
     * View client page
     *
     * View page for all of a custumer's data
     * @bodyParam id int required The id of custumer
     * @group Admin
     * @authenticated
    */
    public function view_custumer_page(){
        try{
            $id = $_GET["id"];
            if(isset($id)){
                $custumer = Client::find($id);
                if($custumer){
                    return view("view_custumer",["custumer" => $custumer]);
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
     * Custumer  modification page
     *
     * This page is the interface for modifying a custumer
     * @bodyParam id int required The id of the custumer  to modify
     * @group Admin
     * @authenticated
    */
    public function modify_custumer_page(){
        try{
            $id = $_GET["id"];
            if(isset($id)){
                $custumer = Client::find($id);
                if($custumer){
                    return view("modify_custumer_page",["custumer" => $custumer]);
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
     * Change data custumer
     *
     * function that modifies the information of a customer (by an admin)
     * @bodyParam id int required The id of custumer
     * @bodyParam name required The name of custumer
     * @bodyParam surname The surname of custumer
     * @bodyParam phone_number The phone number of custumer
     * @group Admin
     * @authenticated
    */
    public function modify_custumer(){

        try{
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $sexe = $_POST['sexe'];
            $birthday = $_POST['birthday'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];

            $id = $_POST['id'];


            //format de date
            if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }



            if($birthday){
                $birthday = Carbon::createFromFormat($format, $birthday)->format("Y-m-d");
            }
            else{
                $birthday = null;
            }

            if(isset($name)  && isset($sexe)){
                if(is_conform_name_custumer($name, $id)){
                    /*if($email) {
                        if(is_valid_email_custumer($email)){
                        }
                        else{
                            return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_email'));
                        }
                    }*/



                    $user = array(
                        "name" => $name,
                        "surname" => $surname,
                        "sexe" => $sexe,
                        "birthday" => $birthday,
                        "phone_number" => $phone_number,
                        "email" => $email,
                        "id" => $id,
                    );

                    $registre = new client_controller;
                    $result = $registre->modify_custumer($user);
                    //return $result;

                    if($result){
                        return redirect()->route('all_custumers')->with('success', Lang::get('lang.modified_custumer'));
                    }
                    else{
                        //return "oker";
                        return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
                    }
                }
                else{
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_name'));
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
     * Function to delete a custumer
     *
     * This function allows you to delete a custumer only if it is not assigned to a prestation service.
     * @bodyParam id int required The id of the custumer to delete
     * @group Admin
     * @authenticated
    */
    public function delete_custumer_function(){
        try{
            $id = $_GET["id"];
            if(isset($id)){
                //$count_prestation = EmailTemplate::where('email_type_id', $id)->get();
                //if(count($count_email_tmp) == 0){ // si aucun template de notification n'est attribué à ce type de notification
                    $register = new client_controller;
                    $result = $register->delete_custumer($id);
                    if($result){
                        return redirect()->route("all_custumers")->with("success", Lang::get('lang.success_delete_custumer'));
                    }
                    else{
                        return redirect()->route("all_custumers")->with("warning", Lang::get('lang.fill_data_correctly'));
                    }
                /*}
                else{
                    return redirect()->route("all_email_type_page")->with("warning", Lang::get('lang.fail_delete_email_type'));
                }*/
            }
            else{
                return redirect()->route("all_custumers")->with("warning", Lang::get('lang.fill_data_correctly'));
            }

        }
        catch(Throwable $e){
            return redirect()->route("all_custumers");
        }
    }



}
