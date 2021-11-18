<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use Illuminate\Http\Request;
use App\Models\Logs;
use Illuminate\Support\Facades\Log;
use Throwable;
use Illuminate\Support\Facades\Auth;


class prestation_controller extends Controller
{
    //fonction de création d'une prestation
    public function save_prestation(array $donnees){

        try{
            //return $donnees;
            //create prestation
            $prestation = Prestation::create($donnees);


            //inscription des activités dans la base de données
            Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created the service ".$prestation->code]);
            Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created the service ".$prestation->code);

            return true;
        }
        catch(Throwable $e){
            return false;
            //return $e;
        }
    }

    //fonction de modification d'une  prestation
    public function modify_prestation($donnees){
        try{
            $id = $donnees["id"]; //on récupére l'id du template
            $precedent_prestation = Prestation::find($id)->code; //on récupré l'ancien appelation
            unset($donnees["id"]); //supprimer la clé id des données

            $new_prestation = Prestation::find($id)->update($donnees); //mise à jour du template

             //inscription des activités dans la base de données
            Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has modified an prestation ".$precedent_prestation]);
            Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has modified an prestation ".$precedent_prestation);

            return true;
        }
        catch(Throwable $e){
            return false;
        }
    }

    //supprimer un service
    public function delete_prestation($id){
        try{
            $prestation = Prestation::find($id); // on récupére le type de notification correspondant
            if(isset($prestation)){
                $precedent_prestation = Prestation::find($id)->code;
                Prestation::find($id)->delete(); // on supprime

                //inscription des activités dans la base de données
                Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  has deleted the  ".$precedent_prestation." prestation "]);
                Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  has deleted the  ".$precedent_prestation." prestation ");

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
