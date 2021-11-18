<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Spatie\Permission\Models\Permission;
use Exception;
use Illuminate\Support\Facades\Lang;
use App\Http\Controllers\service_controller;
use Throwable;

function is_valid_name_service($name){
    $service = Service::where('name', $name)->first();
    if(isset($service->name)){
        return false;
    }
    else{
        return true;
    }
}

function is_conform_name_service($name, $id){
    $service = Service::where('name', $name)->first();
    if(isset($service->name) and ($service->id != $id)){
        return false;
    }
    else{
        return true;
    }
}

class service_function extends Controller
{

    /**
     * Page for adding a service
     *
     * This page is used to fill in the elements necessary to create a service
     * @group Admin
     * @authenticated
    */
    public function add_service_page(){
        return view("add_service_page");
    }


    /**
     * Add service
     *
     * Function which creates a service (by an admin)
     * @bodyParam name string  required The name of service
     * @bodyParam price int required The price of service
     * @group Admin
     * @authenticated
    */
    public function add_service(){

        try{
            $name = $_POST['name'];
            $price = $_POST['price'];
            if(isset($name)  && isset($price)){
                if(is_valid_name_service($name)){
                    $service = array(
                        "name" => $name,
                        "price" => $price,
                    );

                    $registre = new service_controller;
                    $result = $registre->save_service($service);
                    //return $result;

                    if($result){
                        return redirect()->route('all_services')->with('success', Lang::get('lang.create_service'));
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
     * Services list page
     *
     * This page lists all services
     * @group Admin
     * @authenticated
    */
    public function all_service_page(){
        $all_services = Service::paginate(20);
        return view("all_service_page", ['all_services' => $all_services, "search" => null, "categorie" => null, "typeorder" => "asc"]);

    }

    /**
     * List of services following a search
     *
     * List of all services following a search
     * @bodyParam name string required The research element
     * @group Admin
     * @authenticated
    */
    /*public function all_service_with_search_page(){
        try{
            $search = $_GET['search']; //élément à recherche
            if(! empty($search)){
                //recherche sur le nom et prénom
                $all_word = explode(" ", $search);
                $all_services = Service::Where(function ($query) use($all_word) {
                    for ($i = 0; $i < count($all_word); $i++){
                       $query->orwhere('name', 'like',  '%' . $all_word[$i] .'%');
                    }
               })->paginate(20);

                return view("all_service_page", ["all_services" => $all_services, "search" => $search, "categorie" => null, "typeorder" => "asc"]);
            }
            else{
                $all_services = Service::paginate(20);
                return view("all_service_page", ["all_services" => $all_services, "search" => null, "categorie" => null, "typeorder" => "asc"]);
            }
        }
        catch(Throwable $e){
            $all_services = Service::paginate(20);
            return view("all_service_page", ["all_services" => $all_services, "search" => null, "categorie" => null, "typeorder" => "asc"]);
        }
    }*/

    public function all_service_with_search_page(){
        try{
            $search = $_GET['search']; //élément à recherche
            if(! empty($search)){

               $all_services = Service::Where('name', 'like', $search.'%')
                                        ->paginate(20);

                return view("all_service_page", ["all_services" => $all_services, "search" => $search, "categorie" => null, "typeorder" => "asc"]);
            }
            else{
                $all_services = Service::paginate(20);
                return view("all_service_page", ["all_services" => $all_services, "search" => null, "categorie" => null, "typeorder" => "asc"]);
            }
        }
        catch(Throwable $e){
            $all_services = Service::paginate(20);
            return view("all_service_page", ["all_services" => $all_services, "search" => null, "categorie" => null, "typeorder" => "asc"]);
        }
    }





    /**
     * Sort services
     *
     * List of all services with sort
     * @bodyParam type string required The Search order (ascending / descending)
     * @bodyParam categorie string required The search index (role/email/Lastname and firstname)
     * @group Admin
     * @authenticated
    */
    public function all_service_with_sort_page(){
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
                    if($categorie == "name"){
                        $all_services = Service::Where(function ($query) use($all_word) {
                                        for ($i = 0; $i < count($all_word); $i++){
                                        $query->orwhere('name', 'like',  '%' . $all_word[$i] .'%');
                                        }
                                    })
                                    ->orderBy("name", $typeorder)
                                    ->paginate(20);
                    }
                    else{
                        $all_services = Service::Where(function ($query) use($all_word) {
                                        for ($i = 0; $i < count($all_word); $i++){
                                        $query->orwhere('name', 'like',  '%' . $all_word[$i] .'%');
                                        }
                                    })
                                    ->orderBy("price", $typeorder)
                                    ->paginate(20);
                    }
                }
                else{
                    $all_services = Service::Where(function ($query) use($all_word) {
                                    for ($i = 0; $i < count($all_word); $i++){
                                    $query->orwhere('name', 'like',  '%' . $all_word[$i] .'%');
                                    }
                                })
                                ->paginate(20);
                }
                return view("all_service_page", ["all_services" => $all_services, "search" => $search, "categorie" => $categorie, "typeorder" => $typeorder]);
            }
            else{

                if(!empty($categorie)){
                    if($categorie == "name"){
                        $all_services = Service::orderBy("name", $typeorder)->paginate(20);
                    }
                    else{
                        $all_services = Service::orderBy("price", $typeorder)->paginate(20);
                    }
                }
                else{
                    $all_services = Service::paginate(20);
                }
                return view("all_service_page", ["all_services" => $all_services, "search" => null, "categorie" => $categorie, "typeorder" => $typeorder]);
            }
        }
        catch(Throwable $e){
            return $e;
            $all_services = Service::paginate(20);
            return view("all_service_page", ["all_services" => $all_services, "search" => null]);
        }
    }

    /**
     * Service  modification page
     *
     * This page is the interface for modifying a service
     * @bodyParam id int required The id of the service  to modify
     * @group Admin
     * @authenticated
    */
    public function modify_service_page(){
        try{
            $id = $_GET["id"];
            if(isset($id)){
                $service = Service::find($id);
                if($service){
                    return view("modify_service_page",["service" => $service]);
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
     * Change data service
     *
     * function that modifies the information of a service (by an admin)
     * @bodyParam id int required The id of service
     * @bodyParam name required The name of service
     * @bodyParam price int required  The price of price
     * @group Admin
     * @authenticated
    */
    public function modify_service(){

        try{
            $name = $_POST['name'];
            $price = $_POST['price'];
            $id = $_POST['id'];

            if(isset($name)  && isset($price)){
                if(is_conform_name_service($name, $id)){
                    $service = array(
                        "name" => $name,
                        "price" => $price,
                        "id" => $id,
                    );

                    $registre = new service_controller;
                    $result = $registre->modify_service($service);
                    //return $result;

                    if($result){
                        return redirect()->route('all_services')->with('success', Lang::get('lang.modified_service'));
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
     * Function to delete a service
     *
     * This function allows you to delete a service only if it is not assigned to a prestation service.
     * @bodyParam id int required The id of the service to delete
     * @group Admin
     * @authenticated
    */
    public function delete_service_function(){
        try{
            $id = $_GET["id"];
            if(isset($id)){
                //$count_prestation = EmailTemplate::where('email_type_id', $id)->get();
                //if(count($count_email_tmp) == 0){ // si aucun template de notification n'est attribué à ce type de notification
                    $register = new service_controller;
                    $result = $register->delete_service($id);
                    if($result){
                        return redirect()->route("all_services")->with("success", Lang::get('lang.success_delete_service'));
                    }
                    else{
                        return redirect()->route("all_services")->with("warning", Lang::get('lang.fill_data_correctly'));
                    }
                /*}
                else{
                    return redirect()->route("all_email_type_page")->with("warning", Lang::get('lang.fail_delete_email_type'));
                }*/
            }
            else{
                return redirect()->route("all_services")->with("warning", Lang::get('lang.fill_data_correctly'));
            }

        }
        catch(Throwable $e){
            return redirect()->route("all_services");
        }
    }

}
