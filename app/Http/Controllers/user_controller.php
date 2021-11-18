<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\registration_email;
use App\Models\Logs;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Throwable;

class user_controller extends Controller
{
    //fonction de création d'un utilisateur
    public function save_user(array $donnees){
        try{

            $donnees['password'] = Hash::make($donnees['password']);
            $donnees['is_active'] = 0;
            $id_role = $donnees["id_role"];
            $role = Role::findById((int)$id_role);

            //on supprime la clé id_role du array
            unset($donnees['id_role']);

            //create user
            $user = User::create($donnees);

            //assign default avatar
            $user->url_avatar = "avatar1.png";
            $user->save();

            //assign role to user
            $user->assignRole($role);

            //envoie du mail d'activation de compte
            Mail::to($user->email)->send(new registration_email($user->toArray()));

            //test d'envoie du mail
            if (Mail::failures()) { //si NOk
                //Inscription des activités dans la base de données
                Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created the user ".$user->name. "  ".$user->surname. " but failed to send the activation email  "]);
                Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created the user ".$user->name. "  ".$user->surname. " but failed to send the activation email  ");
            }
            else{
                //Inscription des activités dans la base de données
                Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created the user ".$user->name. "  ".$user->surname]);
                Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has created the user ".$user->name. "  ".$user->surname);
            }

            return true;
        }
        catch(Throwable $e){
            return false;

        }

    }

    //fonction d'activation d'un utilisateur
    public function activation_user($id){
        try{
            $user =  User::find((int) $id); //on recherche le user
            $user->is_active = true; //on active
            $user->save();

            //Inscription des activités dans la base de données
            Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  has activated the user ".$user->name. "  ".$user->surname]);
            Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  has activated the user ".$user->name. "  ".$user->surname);

            return true;
        }
        catch(Throwable $e){
            return false;
        }

    }

    //fonction de désactivation d'un utilisateur
    public function desactivation_user($id){
        try{
            $user =  User::find((int) $id); //on recherche le user
            $user->is_active = false; //on le désactive
            $user->save();

            //Inscription des activités dans la base de données
            Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  has deactivated the user ".$user->name. "  ".$user->surname]);
            Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname."  has deactivated the user ".$user->name. "  ".$user->surname);

            return true;
        }
        catch(Throwable $e){
            return false;
        }

    }

    //fonction pour changer la langue de l'utilisateur
    public function change_langue_user($lang){
        try{
            $user = User::find(Auth::user()->id); //on select le user
            $user->language = $lang; //on assign la nouvelle langue
            $user->save(); //on sauvegarde
            //Inscription des activités dans la base de données
            Logs::create(["description" => "The  user ".Auth::user()->name."  ".Auth::user()->surname."  has changed his language => ".$lang]);
            Log::channel('log_application_base')->info("The  user ".Auth::user()->name."  ".Auth::user()->surname."  has changed his language => ".$lang);

            //on créer la session selected_language
            $language = $user->language ?? 'fr';
            session(['selected_language' =>$language]); //on assigne la langue

            return true;
        }
        catch(Throwable $e){
            return false;
        }
    }

    //fonction pour changer le rôle d'un utilisateur
    public function change_role_user($donnees){
        try{
            $user = User::find((int) $donnees['user_id']); //on selec le user
            $role = Role::findById((int) $donnees['role_id']); //on select le rôle

            if(isset($user) && isset($role)){
                $id_role_user = User::find((int) $donnees['user_id'])->roles()->first();
                if($id_role_user){
                    $id_role_user = $id_role_user['id'];
                    $user->removeRole($id_role_user); //on revoke l'ancien rôle
                }

                $user->assignRole($role); //on assign le nouveau rôle

                //Inscription des activités dans la base de données
                Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has assigned the ".$role->name."  role to the user ".$user->name. "  ".$user->surname]);
                Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has assigned the ".$role->name."  role to the user ".$user->name. "  ".$user->surname);


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

    //fonction pour changer le mot de passe d'un utilisateur
    public function change_pwd_user($donnees){
        try{
            $id_user = $donnees["id_user"]; //on select le user
            $new_password = $donnees["new_password"]; //on récupére le nouveau password

            //change de user password
            $user = User::find((int) $id_user);
            $user->password  = Hash::make($new_password);

            $user->save(); //on sauvegarde

            //write the logs
            Logs::create(["description" => "The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has changed the password of the user  ".$user->name. "  ".$user->surname]);
            Log::channel('log_application_base')->info("The administrator user ".Auth::user()->name."  ".Auth::user()->surname." has changed the password of the user  ".$user->name. "  ".$user->surname);


            return true;
        }
        catch(Throwable $e){
            return false;
        }
    }
}
