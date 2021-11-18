<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Models\Logs;
use Exception;
use Throwable;
use Illuminate\Support\Facades\Mail;
use App\Mail\change_password_account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

//fonction de création d'une chaine aléatoire
function chaine_aleatoire($nb_car, $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789')
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
function exist_genkey($genkey){
    $user = User::where('reset_key', $genkey)->first();
    if($user){
        return false;
    }
    else{
        return true;
    }
}

class authentification_controller extends Controller
{
    //

    private $_email; //email d'un utilisateur
    private $_password;  //password d'un utilisateur

    public static $num_occurence = 0; //nombre d'occurence de tentative de connexion à la plateforme

    public function __construct(array $donnees)
    {
        //attribution des clé(représente les champs de la base de données) et valeur
        foreach ($donnees as $key => $value){
            $attr = "_".$key;
            $this->{$attr} = $value;
        }


    }

    //test de connexion à la plateforme
    public function is_authenticate(){
        try{
            //on verifie s'il l'utilisateur a déjà une session du nombre d'occurence de connexion à la plateforme
            if(session()->has("num_occurence")){
                session(["num_occurence" => session("num_occurence") + 1]);
            }
            //sinon on crée une occurence de connexion
            else{
                session(["num_occurence" => 1]);
            }

            if(Auth::attempt(['email' => $this->_email, 'password' => $this->_password, "is_active" => 1])){
                session(["num_occurence" => 0]); //on remet l'occurence à zéro
                $user = User::where('email', $this->_email)->first(); //on récupére le user correspondant

                Auth::login($user); //pour connecter le User

                //on update le last login du user
                $user->last_login = date("Y-m-d H:i:s");
                $user->save();

                 //gestion des logs(on inscrit l'activité dans le fichier des logs)
                Logs::create(["description" => "The user ".$user->name. "  ".$user->surname. " has connected "]);
                Log::channel("log_application_base")->info("The user  ".$user->name. "  ".$user->surname. " has connected ");

                return "1";
            }
            //si  le nombre d'occurence de connexion à la plateforme est inférieur à 5
            elseif(session("num_occurence") < 5){
                 //gestion des logs(on inscrit l'activité dans le fichier des logs)
                Logs::create(["description" => "An attempt to connect with the email addressl ".$this->_email. " failed "]);
                Log::channel("log_application_base")->info("An attempt to connect with the email address ".$this->_email. " failed ");

                return "0";
            }
            //sinon on renvoie le code qui va bloquer l'application pendant 10 minutes
            else{
                session(["num_occurence" => 0]);
                 //gestion des logs(on inscrit l'activité dans le fichier des logs)
                Logs::create(["description" => "A connection attempt 5 times with the address ".$this->_email. " failed "]);
                Log::channel("log_application_base")->info("A connection attempt 5 times with the address ".$this->_email. " failed ");

                return "-1";
            }
        }
        catch(Throwable $e){
            return false;
        }
    }
}

//déconnection de la plateforme
function logout_user(){
    try{
        //gestion des logs(on inscrit l'activité dans le fichier des logs)
        Logs::create(["description" => "The user ".Auth::user()->name. " ".Auth::user()->surname. " has disconnected "]);
        Log::channel("log_application_base")->info("The user ".Auth::user()->name. " ".Auth::user()->surname. " has disconnected ");
        Auth::logout(); //on déconnecte l'utilisateur

        return true;
    }
    catch(Throwable $e){
        return false;
    }
}

//fonction d'envoie du mail lors de l'option "Mot de passe oublié"
function forgot_pwd_send_email($email){
    try{

        //on récupére le user correspondant à l'email
        $user = User::where("email", $email)->first();

        //on génére une chaine aléatoir qui corresponde au reset key
        $genkey = chaine_aleatoire(32);

        //on verifie si ce reset key est unique
        while(exist_genkey($genkey) ==  false){
            $genkey = chaine_aleatoire(32);
        }

        //on assigne le reset key généré au user
        $user->reset_key = $genkey;
        //on attribue la durée de validation du reset key(24 heures)
        $user->reset_date =  date("Y-m-d H:i:s", strtotime('+24 hours'));
        $user->save();  //on sauvegarde les modifications


        //envoie du mail de réinitialisation du password
        Mail::to($user->email)->send(new change_password_account($user->toArray()));

        //si l'envoie du mail a échoué
        if (Mail::failures()) {
             //gestion des logs(on inscrit l'activité dans le fichier des logs)
            Logs::create(["description" => "The user ".$user->name. "  ".$user->surname. " wanted to reset his password but did not receive a reset email"]);
            Log::channel('log_application_base')->info("The user ".$user->name. "  ".$user->surname. " wanted to reset his password but did not receive a reset email");
        }
        //sinon
        else{
             //gestion des logs(on inscrit l'activité dans le fichier des logs)
            Logs::create(["description" => "The user ".$user->name. "  ".$user->surname. " has received a password reset email"]);
            Log::channel('log_application_base')->info("The user ".$user->name. "  ".$user->surname. " has received a password reset email");
        }

        return true;
    }
    catch(Throwable $e){
        return false;
    }
}

//fonction de réinitialisation du mot de passe d'un utilisateur
function reset_pwd_user($donnees){
    try{
        $reset_key = $donnees["id_user"]; //on récupére le reset key
        $new_password = $donnees["new_password"]; //on récupére le nouveau mot de passe


        $user = User::where("reset_key", $reset_key)->first();  // on récupére le user correspondant au reset key
        $user->password = Hash::make($new_password); //on hash le password et on l'assigne au user
        $user->save();  // on sauvegarde les modifications

        //gestion des logs(on inscrit l'activité dans le fichier des logs)
        Logs::create(["description" => "The user ".$user->name. "  ".$user->surname. " has reset his password"]);
        Log::channel('log_application_base')->info("The user ".$user->name. "  ".$user->surname. " has reset his password");

        return true;
    }
    catch(Throwable $e){
        return false;
    }
}
