<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Logs;
use Illuminate\Support\Facades\Log;
use Throwable;
use Illuminate\Support\Facades\Auth;

class service_controller extends Controller
{
    //fonction de création d'un service
    public function save_service(array $donnees){
        try{
            //create custumer
            $service = Service::create($donnees);

            //inscription des activités dans la base de données
            Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created the service ".$service->name]);
            Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created the service ".$service->name);

            return true;
        }
        catch(Throwable $e){
            return false;
            //return $e;

        }

    }

    //fonction de modification d'un service
    public function modify_service($donnees){
        try{
            $id = $donnees["id"]; //on récupére l'id du template
            $precedent_service = Service::find($id)->name; //on récupré l'ancien appelation
            unset($donnees["id"]); //supprimer la clé id des données

            $new_service = Service::find($id)->update($donnees); //mise à jour du template

             //inscription des activités dans la base de données
            Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has modified an service ".$precedent_service. " to ".$donnees["name"]]);
            Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has modified an service ".$precedent_service." to ".$donnees["name"]);

            return true;
        }
        catch(Throwable $e){
            return false;
        }
    }

    //supprimer un service
     public function delete_service($id){
        try{
            $service = Service::find($id); // on récupére le type de notification correspondant
            if(isset($service)){
                $precedent_service = Service::find($id)->name;
                Service::find($id)->delete(); // on supprime

                //inscription des activités dans la base de données
                Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  has deleted the  ".$precedent_service." service "]);
                Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  has deleted the  ".$precedent_service." service ");

                return true;
            }
            else{
                return false;
            }
        }
        catch(Throwable $e){
            return false;
        }
    }


}
