<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Log;
use App\Models\Logs;
use Illuminate\Support\Facades\Auth;

use Throwable;

class role_controller extends Controller
{
    //fonction d'enregistrement d'un rôle
    public function save_role($donnees){
        try{

            $name = $donnees["name"];
            $permissions = $donnees["permissions"];
            $role = Role::create(["name" => $name]); //create role
            foreach($permissions as $permission){
                $id = (int) $permission;
                $perm  = Permission::find($id);
                if($perm){
                    $role->givePermissionTo($perm); //assgin permission t role
                }
            }

            //Inscription des activtés dans la base de données
            Logs::create(["description" => "The user ".Auth::user()->name. " ".Auth::user()->surname. " created the  ".$role->name. " role"]);
            Log::channel("log_application_base")->info("The user ".Auth::user()->name. " ".Auth::user()->surname. " created the  ".$role->name. " role");

            return true;
        }
        catch(Throwable $e){
            return false;
        }
    }

    //fonction de modification des permission d'un rôle
    public function save_role_change($donnees){
        try{
            $id = $donnees['id'];
            $new_name = $donnees['name'];
            $new_permissions = $donnees["permissions"];
            $role = Role::findById($id);
            $last_name = $role->name;

            //obtenir les anciennes permissions
            $need_delete_ids = array();
            foreach($role->getAllPermissions() as $permission){
                $need_delete_ids[] = (int) $permission->id;

            }

            //mise à jour du nom
            $role->name = $new_name;
            $role->updated_at = now();
            $role->save();

            //revoker les anciennes permissions
            $role->permissions()->detach($need_delete_ids);

            //attribuer les nouvelles permissions
            foreach($new_permissions as $permission){
                $id_perm = (int) $permission;
                $perm  = Permission::find($id_perm);
                //if(isset($perm)){
                    $role->givePermissionTo($perm);
                //}
            }

            //écriture des logs
            Logs::create(["description" => "The user ".Auth::user()->name."  ".Auth::user()->surname. " has modified the ".$last_name. " role to".$role->name]);
            Log::channel("log_application_base")->info("The user ".Auth::user()->name."  ".Auth::user()->surname. " has modified the ".$last_name. " role to".$role->name);

            return true;
        }
        catch(Throwable $e){
            return false;

        }
    }

    //fonction de suppression d'un rôle
    public function delete_role($id){
        try{
            $role = Role::findById($id);
            $name_role = $role->name;
            $role->delete(); //on supprime

             //Inscription des activtés dans la base de données
            Logs::create(["description" => "The user ".Auth::user()->name."  ".Auth::user()->surname. " has deleted the ".$name_role. " role"]);
            Log::channel("log_application_base")->info("The user ".Auth::user()->name."  ".Auth::user()->surname. " has deleted the ".$name_role. " role");

            return true;

        }
        catch(Throwable $e){
            return false;

        }

    }
}
