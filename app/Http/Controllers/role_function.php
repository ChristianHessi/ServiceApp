<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\role_controller;
use Exception;
use Illuminate\Support\Facades\Lang;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Throwable;


class role_function extends Controller
{
    /**
     * Add a role page
     *
     * Add a role page
     * @group Admin
     * @authenticated
    */
    public function add_role_page(){
        $all_permissions = Permission::all();
        return view("add_role_page", ['all_permissions' => $all_permissions]);
    }


    /**
     * Role update page
     *
     * Role update page
     * @bodyParam id int required The id of role
     * @group Admin
     * @authenticated
    */
    public function modify_role_page(){
        try{
            $id = $_GET["id"];
            $all_permissions = Permission::all();
            $role = Role::findById($id);
            $id_permission_role = array();
            $permissions_role = $role->getAllPermissions();
            foreach($permissions_role as $permission){
                $id_permission_role[] = $permission->id;
            }
            return view("modify_role_page", ['all_permissions' => $all_permissions, "role" => $role, "id_permission_role" => $id_permission_role]);
        }
        catch(Throwable $e){

        }
    }

    /**
     * List of roles
     *
     * List of roles
     * @group Admin
     * @authenticated
    */
    public function all_role_page(){
        $all_role = Role::paginate(20);
        return view("all_role_page", ['all_role' => $all_role]);
    }


    /**
     * Register a role
     *
     * Function that registers a role and its permissions
     * @bodyParam name string required The name of role
     * @bodyParam permissions object required The permissions of role
     * @group Admin
     * @authenticated
    */
    public function add_role(){
        try{
            $name = $_POST['name'];
            $permissions = $_POST["permission"];

            if(isset($name)){ // si le nom du rôle existe
                if(count($permissions) != 0){ //s'il y a des permissions
                    $donnees = array(
                        "name" => $name,
                        "permissions" => $permissions
                    );
                    $new_role = new role_controller;
                    $result = $new_role->save_role($donnees); // on sauvegarde le rôle et ses permissions
                    if($result){
                        return redirect()->route("all_role")->with("success", Lang::get('lang.create_role'));
                    }
                    else{
                        return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
                    }
                }
                else{
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_permission_role'));
                }
            }
            else{
                return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_name_role'));
            }
        }
        catch(Throwable $e){
            return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_permission_role'));
        }
    }

    /**
     * Update a role
     *
     * Function that modifies the permissions assigned to a role
     * @bodyParam id int required The id of role
     * @bodyParam name string required The name of role
     * @bodyParam permissions object required The permissions of role
     * @group Admin
     * @authenticated
    */
    public function modify_role(){

        try{
            $name = $_POST["name"];
            $id = $_POST['id'];
            $permissions = $_POST["permission"];

            if(isset($name) && isset($id)){
                if(count($permissions) != 0){
                    $donnees = array(
                        "id" => $id,
                        "name" => $name,
                        "permissions" => $permissions
                    );

                    $new_role = new role_controller;
                    $result = $new_role->save_role_change($donnees); //on modifie le rôle

                    if($result){
                        return redirect()->route("all_role")->with("success", Lang::get('lang.modify_role'));
                    }
                    else{
                        return back()->with("warning", Lang::get('lang.fill_data_correctly'));
                    }
                }
                else{
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_permission_role'));
                }
            }
            else{
                return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_name_role'));
            }
        }
        catch(Throwable $e){
            return redirect()->back()->withInput()->with('warning', Lang::get('lang.enter_permission_role'));
        }
    }


    /**
     * Delete a role
     *
     * Function to delete a role only if the role is not assigned to a user
     * @bodyParam id int required The id of role
     * @group Admin
     * @authenticated
    */
    public function delete_role(){
        try{
            $id_role = $_GET["id"];
            if(isset($id_role)){

                $rolesWithUserCount =  Role::where('id', $id_role)->first()->users()->get();
                if(count($rolesWithUserCount) == 0){ // si aucun utilisateur ne posséde ce rôle
                    $register = new role_controller;
                    $result = $register->delete_role($id_role); //on supprime
                    if($result){
                        return redirect()->route('all_role')->with('success', Lang::get('lang.success_delete'));
                    }
                    else{
                        return redirect()->route('all_role')->with('warning', Lang::get('lang.fail_delete'));
                    }
                }
                else{
                    return redirect()->route('all_role')->with('warning', Lang::get('lang.fail_delete_role'));
                }
            }
            else{
                return redirect()->route('all_role')->with('warning', Lang::get('lang.fail_delete'));
            }
        }
        catch(Throwable $e){
            return redirect()->route('all_role')->with('warning', Lang::get('lang.fail_delete'));
        }
    }

}
