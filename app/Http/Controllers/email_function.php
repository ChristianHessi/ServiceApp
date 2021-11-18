<?php

namespace App\Http\Controllers;

use App\Models\Emailtype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Throwable;
use App\Models\EmailTemplate;


class email_function extends Controller
{

    /*pour la gestion des types de notification*/

    /**
     * Page for adding a notification type
     *
     * This page is used to fill in the elements necessary to create a type of notification
     * @group Admin
     * @authenticated
    */
    public function add_email_type_page(){
        return view("add_email_type");
    }

    /**
     * Function for adding a notification type
     *
     * Request for the creation of a notification type
     * @bodyParam name string required The name of notification type
     * @group Admin
     * @authenticated
    */
    public function add_type_email_function(){
        try{
            $name = $_POST["name"]; //on récupre le nom de la notif
            //return isset($allo);
            if(isset($name)){
                $donnees = array(
                    "name" => $name,
                );

                $register = new email_controller;
                $result = $register->add_email_type($donnees); // on enregistre en BD


                if($result){
                    return redirect()->route("all_email_type_page")->with("success", Lang::get('lang.created_email_type_msg'));
                }
                else{
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_name_notif'));
                }
            }
            else{
                return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_name_notif'));
            }
        }
        catch(Throwable $e){
            return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_name_notif'));

        }
    }

    /**
     * Notification types list page
     *
     * This page lists all types of notifications
     * @group Admin
     * @authenticated
    */
    public function all_email_type_page(){
        //$all_email_type = Emailtype::all();
        $all_email_type = Emailtype::paginate(20); //on pagine la liste des notifications
        return view("all_email_type", ["all_email_type" => $all_email_type]);

    }

    /**
     * Notification type modification page
     *
     * This page is the interface for modifying a type of notification
     * @bodyParam id int required The id of the notification type to modify
     * @group Admin
     * @authenticated
    */
    public function modify_email_type_page(){
        try{
            $id = $_GET["id"];
            if(isset($id)){
                $email_type = Emailtype::find($id);
                if($email_type){
                    return view("modify_email_type", ["email_type" => $email_type]);
                }
                else{
                    return redirect()->route("all_email_type_page");
                }
            }
            else{
                return redirect()->route("all_email_type_page");
            }
        }
        catch(Throwable $e){
           return redirect()->route("all_email_type_page");
        }
    }

    /**
     * Function for modifying a notification type
     *
     * This function is used to modify a type of notification
     * @bodyParam id int required The id of the notification type to modify
     * @bodyParam name string required  The new name of the notification type
     * @group Admin
     * @authenticated
    */
    public function modify_email_type_function(){
        try{
            $name = $_POST["name"];
            $id = $_POST["id"];
            if(isset($name) && isset($id)){
                $donnees = array(
                    "id" => $id,
                    "name" => $name,
                );

                $register = new email_controller; //appel du controlleur des notifications
                $result = $register->modify_email_type($donnees); //modification de la notification

                //return $result;
                if($result){
                    return redirect()->route("all_email_type_page")->with("success", Lang::get('lang.modified_email_type_msg'));
                }
                else{
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_name_notif'));
                }
            }
            else{
                return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_name_notif'));
            }

        }
        catch(Throwable $e){
            return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_name_notif'));
        }
    }

    /**
     * Function to delete a notification type
     *
     * This function allows you to delete a notification type only if it is not assigned to a notification template.
     * @bodyParam id int required The id of the notification type to delete
     * @group Admin
     * @authenticated
    */
    public function delete_email_type_function(){
        try{
            $id = $_GET["id"];
            if(isset($id)){
                $count_email_tmp = EmailTemplate::where('email_type_id', $id)->get();
                if(count($count_email_tmp) == 0){ // si aucun template de notification n'est attribué à ce type de notification
                    $register = new email_controller;
                    $result = $register->delete_email_type($id);
                    if($result){
                        return redirect()->route("all_email_type_page")->with("success", Lang::get('lang.success_delete_email_type'));
                    }
                    else{
                        return redirect()->route("all_email_type_page")->with("warning", Lang::get('lang.fill_data_correctly'));
                    }
                }
                else{
                    return redirect()->route("all_email_type_page")->with("warning", Lang::get('lang.fail_delete_email_type'));
                }
            }
            else{
                return redirect()->route("all_email_type_page")->with("warning", Lang::get('lang.fill_data_correctly'));
            }

        }
        catch(Throwable $e){
            return redirect()->route("all_email_type_page");
        }
    }


/*pour la gestion des templates d'emails*/

    /**
     * Page for adding a notification template
     *
     * This page is used to fill in the elements necessary to create a template of notification
     * @group Admin
     * @authenticated
    */
    public function add_email_template_page(){
        $all_email_type = Emailtype::all();
        return view('add_email_template', ["all_email_type" => $all_email_type]);
    }

    /**
     * Function for adding a notification template
     *
     * Request for the creation of a notification template
     * @bodyParam name string required The name of notification template
     * @bodyParam language string required The language  of notification template
     * @bodyParam object string required The  object of notification template
     * @bodyParam description string  required The description of notification template
     * @bodyParam  link_name string required The link name of the notification template
     * @bodyParam signature string required The signature of the notification template
     * @group Admin
     * @authenticated
    */
    public function add_email_template_function(){
        try{
            $email_type_id = $_POST["type"];
            $language = $_POST["language"];
            $object = $_POST["email_title"];
            $description = $_POST["email_description"];
            $link_name = $_POST["link_name"];
            $signature = $_POST["email_signature"];

            //on vérifie la conformité de l'ensemble des données
            if(strlen($email_type_id)){
                if(strlen($language)){
                    if(strlen($object)){
                        if(strlen(htmlspecialchars_decode($description))){
                            if(strlen(htmlspecialchars_decode($link_name))){
                                if(strlen(htmlspecialchars_decode($signature))){
                                    $eventuel_template = EmailTemplate::where("email_type_id", $email_type_id)->where('language', $language)->get();

                                    if(count($eventuel_template) == 0){
                                        $donnees = array(
                                            "email_type_id" => $email_type_id,
                                            "object" => $object,
                                            "language" => $language,
                                            "description" => $description,
                                            "link_name" => $link_name,
                                            "signature" => $signature
                                        );


                                        $register = new email_controller;
                                        $result = $register->add_email_template($donnees);
                                        if($result){
                                            return redirect()->route("all_email_template_page")->with("success", Lang::get('lang.created_email_tmp_msg'));
                                        }
                                        else{
                                            return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_template'));
                                        }
                                    }
                                    else{
                                        return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_template'));
                                    }
                                }
                                else{
                                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_signature'));
                                }
                            }
                            else{
                                return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_link_name'));
                            }
                        }
                        else{
                            return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_description'));
                        }
                    }
                    else{
                        return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_object'));
                    }
                }
                else{
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_language'));
                }
            }
            else{
                return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_notif_type'));
            }
        }
        catch(Throwable $e){
            return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_template'));
        }
    }


    /**
     * Notification template modification page
     *
     * This page is the interface for modifying a template of notification
     * @bodyParam id int required The id of notification template
     * @group Admin
     * @authenticated
    */
    public function modify_email_template_page(){
        try{
            $id = $_GET["id"];
            if(isset($id)){
                $email_template = EmailTemplate::find($id);
                $all_email_type = Emailtype::all();
                if($email_template){
                    return view("modify_email_template", ["email_template" => $email_template, "all_email_type" => $all_email_type]);
                }
                else{
                    return redirect()->route("all_email_type_page");
                }
            }
            else{
                //return redirect()->back();
                return redirect()->route("all_email_type_page");
            }
        }
        catch(Throwable $e){
           // return redirect()->back();
           return redirect()->route("all_email_type_page");
        }
    }

    /**
     * Function for modifying a notification template
     *
     * This function is used to modify a template of notification
     * @bodyParam name string required The name of notification template
     * @bodyParam language string required The language  of notification template
     * @bodyParam object string required The  object of notification template
     * @bodyParam description string  required The description of notification template
     * @bodyParam  link_name string required The link name of the notification template
     * @bodyParam signature string required The signature of the notification template
     * @group Admin
     * @authenticated
    */
    public function modify_email_template_function(){
        try{
            $id = $_POST["id"];
            $email_type_id = $_POST["type"];
            $language = $_POST["language"];
            $object = $_POST["email_title"];
            $description = $_POST["email_description"];
            $link_name = $_POST["link_name"];
            $signature = $_POST["email_signature"];

            if(strlen($email_type_id)){
                if(strlen($language)){
                    if(strlen($object)){
                        if(strlen(htmlspecialchars_decode($description))){
                            if(strlen(htmlspecialchars_decode($link_name))){
                                if(strlen(htmlspecialchars_decode($signature))){
                                    $eventuel_template_count = EmailTemplate::where("email_type_id", $email_type_id)->where('language', $language)->get();
                                    $eventuel_template = EmailTemplate::where("email_type_id", $email_type_id)->where('language', $language)->first();
                                    $now_template = EmailTemplate::find($id);
                                    $possibility = false;


                                    if(count($eventuel_template_count) == 0){
                                        $possibility = true;
                                    }
                                    elseif($eventuel_template->id == $now_template->id){
                                        $possibility = true;
                                    }
                                    else{
                                        $possibility = false;
                                    }

                                    if($possibility){
                                        $donnees = array(
                                            "id" => $id,
                                            "email_type_id" => $email_type_id,
                                            "object" => $object,
                                            "language" => $language,
                                            "description" => $description,
                                            "link_name" => $link_name,
                                            "signature" => $signature
                                        );


                                        $register = new email_controller;
                                        $result = $register->modify_email_template($donnees);


                                        if($result){
                                            return redirect()->route("all_email_template_page")->with("success", Lang::get('lang.modified_email_tmp_msg'));
                                        }
                                        else{
                                            return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_template'));
                                        }
                                    }
                                    else{
                                        return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_template'));
                                    }
                                }
                                else{
                                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_signature'));
                                }
                            }
                            else{
                                return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_link_name'));
                            }
                        }
                        else{
                            return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_description'));
                        }
                    }
                    else{
                        return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_object'));
                    }
                }
                else{
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_language'));
                }
            }
            else{
                return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_notif_type'));
            }

        }
        catch(Throwable $e){
            return redirect()->back()->withInput()->with('warning', Lang::get('lang.exist_template'));
        }
    }


    /**
     * Notification template list page
     *
     * This page lists all template of notifications
     * @group Admin
     * @authenticated
    */
    public function all_email_template_page(){
        $all_email_template = EmailTemplate::paginate(20); //on pagine de 20 élements
        return view("all_email_template",["all_email_template" => $all_email_template, "search" => null, "categorie" => null, "typeorder" => "asc"]);
    }

    /**
     * List of notification templates following a search
     *
     * This function allows you to search for notification templates based on a name entered by a user
     * @bodyParam name string required The object of the notification template
     * @group Admin
     * @authenticated
    */
    public function all_email_template_with_search_page(){
        try{
            $search = $_GET['search'];
            if(! empty($search)){
                $all_email_template = EmailTemplate::where('object', 'LIKE', '%'.$search.'%')
                                        ->paginate(20);

                return view("all_email_template", ["all_email_template" => $all_email_template, "search" => $search, "categorie" => null, "typeorder" => "asc"]);
            }
            else{
                $all_email_template = EmailTemplate::paginate(20);
                return view("all_email_template", ["all_email_template" => $all_email_template, "search" => null, "categorie" => null, "typeorder" => "asc"]);
            }
        }
        catch(Throwable $e){
            $all_email_template = EmailTemplate::paginate(20);
            return view("all_email_template", ["all_email_template" => $all_email_template, "search" => null, "categorie" => null, "typeorder" => "asc"]);
        }
    }

    /**
     * List of notification templates following a sort (ascending / descending)
     *
     * This function sorts the notification templates according to the subject and type of notification
     * @bodyParam type string required The Search order (ascending / descending)
     * @bodyParam categorie string required The search index (object / type of notification)
     * @group Admin
     * @authenticated
    */
    public function all_email_template_with_sort_page(){
        try{
            $search = $_GET['search'];
            try{
                $categorie = $_GET['categorie'];
            }
            catch(Throwable $e){
                $categorie = '';
            }
            $typeorder = $_GET['typeorder'];
            if($typeorder == 'desc'){
                $typeorder = 'desc';
            }
            else{
                $typeorder = 'asc';
            }

            if(! empty($search)){
                if(!empty($categorie)){
                    if($categorie == "object"){
                        $all_email_template = EmailTemplate::where('object', 'LIKE', '%'.$search.'%')
                                    ->orderBy("object", $typeorder)
                                    ->paginate(20);
                    }
                    else{
                        $all_email_template = EmailTemplate::join('emailtype as e', 'emailtemplate.email_type_id', '=', 'e.id')
                                    ->orderBy('e.name', $typeorder)
                                    ->where('object', 'LIKE', '%'.$search.'%')
                                    ->select('emailtemplate.*')
                                    ->paginate(20);
                    }
                }
                else{
                    $all_email_template = EmailTemplate::where('object', 'LIKE', '%'.$search.'%')
                                ->paginate(20);
                }
                return view("all_email_template", ["all_email_template" => $all_email_template, "search" => $search, "categorie" => $categorie, "typeorder" => $typeorder]);
            }
            else{

                if(!empty($categorie)){
                    if($categorie == "object"){
                        $all_email_template = EmailTemplate::orderBy("object", $typeorder)->paginate(20);
                    }
                    else
                    {

                        $all_email_template = EmailTemplate::join('emailtype as e', 'emailtemplate.email_type_id', '=', 'e.id')
                                                ->orderBy('e.name', $typeorder)
                                                ->select('emailtemplate.*')
                                                ->paginate(20);
                    }
                }
                else{
                    $all_email_template = EmailTemplate::paginate(20);
                }
                return view("all_email_template", ["all_email_template" => $all_email_template, "search" => null, "categorie" => $categorie, "typeorder" => $typeorder]);
            }
        }
        catch(Throwable $e){
            return $e;
            $all_email_template = EmailTemplate::paginate(20);
            return view("all_email_template", ["all_email_template" => $all_email_template, "search" => null]);
        }
    }


    /**
     * Notification template details page
     *
     * This page displays all the data of a notification template
     * @bodyParam id int required The id of the notification template
     * @group Admin
     * @authenticated
    */
    public function view_email_template_page(){
        try{
            $id = $_GET["id"];
            if(isset($id)){
                $email_template = EmailTemplate::find($id);
                if($email_template){
                    return view('view_email_template', ["email_template" => $email_template]);

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
}
