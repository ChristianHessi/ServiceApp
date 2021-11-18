<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Throwable;
use App\Models\Logs;
use Illuminate\Support\Facades\Log;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class client_controller extends Controller
{
    //fonction de création d'un client
    public function save_custumer(array $donnees){
        try{
            //create custumer
            $user = Client::create($donnees);

            //save custumer
            //$user->save();

            //inscription des activités dans la base de données
            Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created the custumer ".$user->name. "  ".$user->surname]);
            Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created the custumer ".$user->name. "  ".$user->surname);

            return true;
        }
        catch(Throwable $e){
            return false;
            //return $e;

        }

    }

    //fonction de modification d'un client
     public function modify_custumer($donnees){
        try{
            $id = $donnees["id"]; //on récupére l'id du template
            $precedent_custumer = Client::find($id)->name; //on récupré l'ancien appelation
            unset($donnees["id"]); //supprimer la clé id des données

            $new_custumer = Client::find($id)->update($donnees); //mise à jour du template

             //inscription des activités dans la base de données
            Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has modified an custumer ".$precedent_custumer. " to ".$donnees["name"]]);
            Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has modified an custumer ".$precedent_custumer." to ".$donnees["name"]);

            return true;
        }
        catch(Throwable $e){
            return false;
        }
    }

    //supprimer un client
     public function delete_custumer($id){
        try{
            $custumer = Client::find($id); // on récupére le type de notification correspondant
            if(isset($custumer)){
                $precedent_custumer = Client::find($id)->name;
                Client::find($id)->delete(); // on supprime

                 //inscription des activités dans la base de données
                Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  has deleted the  ".$precedent_custumer." custumer "]);
                Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  has deleted the  ".$precedent_custumer." custumer ");

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
