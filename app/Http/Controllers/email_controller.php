<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emailtype;
use Throwable;
use App\Models\Logs;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\EmailTemplate;




class email_controller extends Controller
{
    //ajout d'un type de notification
    public function add_email_type(array $donnees){
        try{

            $email_type = Emailtype::create($donnees); //enregistrement en BD


            //inscription des activités dans la base de données
            Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created an email type ".$email_type->name]);
            Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created an email type ".$email_type->name);

            return true;

        }
        catch(Throwable $e){
            return false;
        }
    }

    //modifier un type de notification
    public function modify_email_type(array $donnees){
        try{
            $precedent_name = Emailtype::find($donnees["id"])->name; //on récupére le type de notification à modifier
            $id = $donnees["id"];
            unset($donnees["id"]);
            $new_name = Emailtype::find($id)->update($donnees); //mise à jour des données

             //inscription des activités dans la base de données
            Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  modified the email type  ".$precedent_name." to ".$donnees["name"]]);
            Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  modified the email type  ".$precedent_name." to ".$donnees["name"]);

            return true;
        }
        catch(Throwable $e){
            return false;
        }

    }

    //supprimer un type de notification
    public function delete_email_type($id){
        try{
            $email = Emailtype::find($id); // on récupére le type de notification correspondant
            if(isset($email)){
                $precedent_name = Emailtype::find($id)->name;
                Emailtype::find($id)->delete(); // on supprime

                 //inscription des activités dans la base de données
                Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  has deleted the  ".$precedent_name." email type "]);
                Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  has deleted the  ".$precedent_name." email type ");

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

    //ajout d'un template de notification
    public function add_email_template($donnees){
        try{
            $email_template = EmailTemplate::create($donnees); // on crée un template de notification

             //inscription des activités dans la base de données
            Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created an email template ".$email_template->object]);
            Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created an email template ".$email_template->object);

            return true;
        }
        catch(Throwable $e){
            return false;
        }
    }


    //modifier un template de notification
    public function modify_email_template($donnees){
        try{
            $id = $donnees["id"]; //on récupére l'id du template
            $precedent_name = EmailTemplate::find($id)->object; //on récupré l'ancien appelation
            unset($donnees["id"]);

            $new_template = EmailTemplate::find($id)->update($donnees); //mise à jour du template

             //inscription des activités dans la base de données
            Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has modified an email template ".$precedent_name. " to ".$donnees["object"]]);
            Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has modified an email template ".$precedent_name." to ".$donnees["object"]);

            return true;
        }
        catch(Throwable $e){
            return false;
        }
    }
}
