<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\registration_email;
use App\Mail\change_email_account;
use App\Models\Logs;
use Exception;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Throwable;

//fonction de création d'une chaine aléatoire
function chaine_aleatoire_reg($nb_car, $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789')
{
    $nb_lettres = strlen($chaine) - 1;
    $generation = '';
    for($i=0; $i < $nb_car; $i++)
    {
        $pos = mt_rand(0, $nb_lettres);
        $car = $chaine[$pos];
        $generation .= $car;
    }
    return $generation;
}

//fonction qui check l'instance d'une clé générer
function exist_genkey_reg($genkey){
    $user = User::where('reset_key', $genkey)->first();
    if($user){
        return false;
    }
    else{
        return true;
    }
}


class registration_controller extends Controller
{

    //
    //enregistrement d'un utilisateur
    public function save(array $donnees){
        try{

            //on génére une chaine aléatoir qui corresponde au reset key
            $genkey = chaine_aleatoire_reg(32);

            //on verifie si ce reset key est unique
            while(exist_genkey_reg($genkey) ==  false){
                $genkey = chaine_aleatoire(32);
            }

            $donnees['password'] = Hash::make($donnees['password']);
            $donnees['is_active'] = 0;
            //$donnees["reset_key"] = $genkey;

            $id_role = 1;
            $role = Role::findById((int)$id_role); //on récupére le rôle par défaut(user)

            $user = User::create($donnees); //on créer l'utilsiateur
            $user->url_avatar = "avatar1.png"; //on lui associe la photo de profil par défaut
            $user->reset_key = $genkey; //on attribue la clé de d'activation de compte
            $user->save(); //on enregistre
            $user->assignRole($role); //on lui assign le rôle user

            //envoie du mail d'activation de compte
            Mail::to($user->email)->send(new registration_email($user->toArray()));

            //test d'envoie du mail
            if (Mail::failures()) {
                //Inscription des activtés dans la base de données
                Logs::create(["description" => "The user ".$user->name. "  ".$user->surname. " registered but failed to send the activation email  "]);
                Log::channel('log_application_base')->info("The user ".$user->name. "  ".$user->surname. " registered but failed to send the activation email  ");
            }
            else{
                 //Inscription des activtés dans la base de données
                Logs::create(["description" => "The user ".$user->name. "  ".$user->surname. " has registered"]);
                Log::channel('log_application_base')->info("The user ".$user->name. "  ".$user->surname. " has registered");
            }

            return true;
        }
        catch(Throwable $e){

            return false;
        }
    }

    //activation d'un compte user
    public function activate_account($id){
        try{
            //User::where("id", $id)->update(["is_active" => 1]); //on active
            User::where("reset_key", $id)->update(["is_active" => 1]); //on active
            //$user = User::find($id);
            $user = User::where("reset_key", $id)->first();
            //Inscription des activtés dans la base de données
            Logs::create(["description" => "The user".$user->name."  ".$user->surname."  has activated his account"]);
            Log::channel("log_application_base")->info("The user".$user->name."  ".$user->surname."  has activated his account" );
            return true;
        }
        catch(Throwable $e){
            return false;
        }
    }

    //mise du profile d'un user(name, surname, etc)
    public function change_profile(array $donnees){
        try{
            User::find(Auth::user()->id)->update($donnees); //update des données
             //Inscription des activtés dans la base de données
            Logs::create(["description" => "The user ".Auth::user()->name. " ".Auth::user()->surname." modified his profile "]);
            Log::channel("log_application_base")->info("The user ".Auth::user()->name. " ".Auth::user()->surname." modified his profile ");

            return true;
        }
        catch(Throwable $e){
            return false;
        }
    }

    //mise à jour du password d'un user
    public function change_password(array $donnees){
        try{
            if(Hash::check($donnees['current_password'], Auth::user()->password)){ // si le mot de passe courant est vrai
                User::find(Auth::user()->id)->update(["password" => Hash::make($donnees["new_password"])]);
                 //Inscription des activtés dans la base de données
                Logs::create(["description" => "The user ".Auth::user()->name. " ".Auth::user()->surname." has changed his password"]);
                Log::channel("log_application_base")->info("The user".Auth::user()->name. " ".Auth::user()->surname." has changed his password");

                return true;
            }
            else{
                Logs::create(["description" => "The user".Auth::user()->name. " ".Auth::user()->surname." tried to change his password but the current password is incorrect"]);
                Log::channel("log_application_base")->info("The user".Auth::user()->name. " ".Auth::user()->surname." tried to change his password but the current password is incorrect");

                return false;
            }
        }
        catch(Throwable $e){
            return false;
        }

    }

    //envoie du mail de la mise à jour d'un adresse email
    public function change_email(array $donnees){
        try{
            if(Hash::check($donnees["current_password"], Auth::user()->password)){
                if(Auth::user()->email == $donnees["new_email"] || count(User::where("email", $donnees["new_email"])->get()) == 0){

                    $user = User::find(Auth::user()->id);
                    //on génére une clé si l'utilisateur ne posséde pas une
                    if($user->reset_key == null){
                        //on génére une chaine aléatoire qui corresponde au reset key
                        $genkey = chaine_aleatoire_reg(32);

                        //on verifie si ce reset key est unique
                        while(exist_genkey_reg($genkey) ==  false){
                            $genkey = chaine_aleatoire(32);
                        }
                        $user->reset_key = $genkey;
                    }
                    $user->reset_email = $donnees["new_email"];
                    $user->save();
                    //préparation des données pour l'envoie de mail
                    $elements = array(
                        "user" => $user->toArray(),
                        "new_email" => $donnees["new_email"],
                    );
                    Mail::to($user->email)->send(new change_email_account($elements)); //envoie du mail

                    //test d'envoie du mail
                    if (Mail::failures()) {
                         //Inscription des activtés dans la base de données
                        Logs::create(["description" => "The email address modification email could not be sent to the user ".Auth::user()->name."  ".Auth::user()->surname]);
                        Log::channel("log_application_base")->info("The email address modification email could not be sent to the user".Auth::user()->name."  ".Auth::user()->surname);
                    }
                    else{
                         //Inscription des activtés dans la base de données
                        Logs::create(["description" => "A modification email address has been sent to the user ".Auth::user()->name."  ".Auth::user()->surname]);
                        Log::channel("log_application_base")->info("A modification email address has been sent to the user ".Auth::user()->name."  ".Auth::user()->surname);
                    }
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        }
        catch(Throwable $e){
            return false;
        }
    }

    //activation de la mise à jour de l'adresse email
    public function change_email_active($id){
        try{
            $user = User::where("reset_key", $id)->first();

            if(User::where("reset_email", $user->reset_email)->first() == Auth::user()->reset_email || count(User::where("email", $user->reset_email)->get()) == 0){
                User::where("reset_key", $id)->update(["email" => $user->reset_email]);
                 //Inscription des activtés dans la base de données
                Logs::create(["description" => "The user ".$user->name."  ".$user->surname. " has activated the modification of his email address.His new email address is : ".$user->email]);
                Log::channel("log_application_base")->info("The user ".$user->name."  ".$user->surname. "  has activated the modification of his email address.His new email address is : ".$user->email);
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







