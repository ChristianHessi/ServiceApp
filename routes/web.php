<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\registration_function;
use App\Http\Controllers\authentification_function;

use Spatie\Permission\Models\Permission;
use App\Http\Controllers\role_function;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\user_function;
use App\Http\Controllers\email_function;
use App\Http\Controllers\client_function;
use App\Http\Controllers\service_function;
use App\Http\Controllers\prestation_function;
use App\Models\User;
use App\Http\Controllers\log_function;
use Illuminate\Console\Scheduling\Schedule;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
    * Redirect  login page
    *
    *This link allows the redirection to the login page
    * @group All Group
*/
Route::get('/', function () {
    return view('registration_login');
});

Route::get('export', [prestation_function::class, "service_export_excel"]);

/**
    * Registration page
    *
    *This page allows a user to create an account
    *@group All Group
*/
Route::get('registration_page', function(){
    return view('registration_page');
})->name('registration');


/**
    * Login page
    *
    *This page allows the user to login
    *@group All Group
*/
Route::get('registration_login', function(){
    return view('registration_login');
})->name('login');


/**
    * Change your parameters
    *
    *This page allows the user to modify his profile
    *@group All Group
*/
Route::get('change_your_parameters', function(){
    return view('parameters_page', ["tabName" => "profile"]);
})->middleware('auth')->middleware('can:change_profile')->name('change_your_parameters');



/**
    * Forgot_password
    *
    *This page allows the user to enter his email address in order to receive a password reset email
    *@group All Group
*/
Route::get('forgot_password', function(){
    return view('forgot_password');
})->name('forgot_password');

//page pour la création d'un template de mail
Route::get('add_email_template', [email_function::class, "add_email_template_page"])->middleware('auth')->middleware('can:add_notification_template')->name("add_email_template_page");

//page pour la création d'un template de mail
Route::get('view_email_template', [email_function::class, "view_email_template_page"])->middleware('auth')->middleware('can:view_notification_template')->name("view_email_template_page");


//fonction pour la création d'un template de mail
Route::post('register_email_template', [email_function::class, "add_email_template_function"])->middleware('auth')->middleware('can:add_notification_template')->name("register_email_template");

//page pour la modification d'un template de mail
Route::get('modify_email_template', [email_function::class, "modify_email_template_page"])->middleware('auth')->middleware('can:modify_notification_template')->name("modify_email_template_page");

//fonction pour la modification d'un template de mail
Route::post('change_email_template', [email_function::class, "modify_email_template_function"])->middleware('auth')->middleware('can:modify_notification_template')->name("change_email_template");


//page  pour l'ensemble des template de mail
Route::get('all_email_template', [email_function::class, "all_email_template_page"])->middleware('auth')->middleware('can:view_notification_template')->name("all_email_template_page");


//page pour le recherche selon un nom sur le template de mail
Route::get('all_email_template_search', [email_function::class, "all_email_template_with_search_page"])->middleware('auth')->middleware('can:view_notification_template')->name("all_email_template_search");

//page de trie sur l'ensemble des template de notification
Route::get('sort_email_template', [email_function::class, "all_email_template_with_sort_page"])->middleware('auth')->middleware('can:view_notification_template')->name("sort_email_template");


//page pour la création d'un type de mail
Route::get("add_email_type", [email_function::class, "add_email_type_page"])->middleware('auth')->middleware('can:add_notification_type')->name('add_email_type_page');

//page pour la création d'un type de mail
Route::post("register_email_type", [email_function::class, "add_type_email_function"])->middleware('auth')->middleware('can:add_notification_type')->name('register_email_type');

//page de tous les types d'emails
Route::get("all_email_type", [email_function::class, "all_email_type_page"])->middleware('auth')->middleware('can:view_notification_type')->name('all_email_type_page');


//page de modification de type de mail
Route::get("modify_email_type", [email_function::class, "modify_email_type_page"])->middleware('auth')->middleware('can:modify_notification_type')->name('modify_email_type_page');


//page de modification de type de mail
Route::post("change_email_type", [email_function::class, "modify_email_type_function"])->middleware('auth')->middleware('can:modify_notification_type')->name('change_email_type');

//function de suppression d'un type de mail
Route::get("delete_email_type", [email_function::class, "delete_email_type_function"])->middleware('auth')->middleware('can:delete_notification_type')->name('delete_email_type');


//fonction pour l'envoie du mail pour l'option mot de passe oublié
Route::post("send_email_forgot_password", [authentification_function::class, "forgot_pwd"])->name('send_email_forgot_password');

//page qui permet la réinitialisation du mot de passe
Route::get("reset_password", [authentification_function::class, "reset_password_page"])->name("reset_password_page");

//fonction qui permet de réinitialiser le mot de passe d'un utilisateur
Route::post("reset_password_function", [authentification_function::class, "reset_password"])->name("reset_password_function");

//page d'ajout d'un role
Route::get("add_role", [role_function::class, "add_role_page"])->middleware('auth')->middleware('can:add_role')->name("add_role_page");

//page de modification d'un role
Route::get("modify_role", [role_function::class, "modify_role_page"])->middleware('auth')->middleware('can:modify_role')->name("modify_role_page");

//fonction de suppression d'un utilsiateur
Route::get("delete_role", [role_function::class, "delete_role"])->middleware('auth')->middleware('can:delete_role')->name("delete_role");

//déconnecter un utilisateur
Route::get("logout", [authentification_function::class, "logout"])->middleware('auth')->middleware('auth')->middleware('can:logout')->name("logout");

//fonction qui permet de modifier le password d'un utilisateur
Route::post("password_modification", [registration_function::class, "password_modification"])->middleware('auth')->middleware('can:change_profile')->name("password_modification");

//fonction qui permet de modifier l'adresse email d'un utilisateur
Route::post("email_modification", [registration_function::class, "email_modification"])->middleware('auth')->middleware('can:change_profile')->name("email_modification");

//fonction qui active la modification de l'adresse email d'un utilisateur
Route::get("email_modification_active", [registration_function::class, "email_modification_active"])->middleware('auth')->middleware('can:change_profile')->name("email_modification_active");

//fonction qui permet de modifier le profil d'un utilisateur
Route::post('profile_modification', [registration_function::class, "profile_modification"])->middleware('auth')->middleware('can:change_profile')->name("profile_modification");

//fonction qui permet d'enregistrer un utilisateur
Route::post("registration_account", [registration_function::class, "registration_send"])->name("registration_account");

//fonction qui permet d'activer le compte d'un utilisateur
Route::get("activation_account", [registration_function::class, "registration_activation"])->name("activation_account");

//fonction qui permet d'authentifier un user et le connecter à l'application
Route::post("login_account", [authentification_function::class, "authenticate"])->name("login_account");

//pour l'enregistrer d'un rôle
Route::post("register_role", [role_function::class, "add_role"])->middleware('auth')->middleware('can:add_role')->name("register_role");

//pour modifier un role
Route::post("register_role_change", [role_function::class, "modify_role"])->middleware('auth')->middleware('can:modify_role')->name("modify_role");

//tous les rôles
Route::get("all_role", [role_function::class, "all_role_page"])->middleware('auth')->middleware('can:view_role')->name('all_role');

//page de création d'un utilisateur
Route::get('add_user', [user_function::class, "add_user_page"])->middleware('auth')->middleware('can:add_user')->name('add_user_page');

//page de modification d'un utilisateur
Route::get('view_user', [user_function::class, "view_user_page"])->middleware('auth')->middleware('can:view_user')->name('view_user_page');


//page de modification d'un utilisateur
Route::get('modify_user', [user_function::class, "modify_user_page"])->middleware('auth')->middleware('can:modify_user')->name('modify_user_page');

//page de modification du mot de passe  d'un utilisateur
Route::get('modify_user_password', [user_function::class, "change_password_page"])->middleware('auth')->middleware('can:change_user_password')->name('change_password_page');

//fonction de modification du mot de passe  d'un utilisateur
Route::post('change_user_password', [user_function::class, "change_password"])->middleware('auth')->middleware('can:change_user_password')->name('change_password');


//fonction pour la  modification d'un utilisateur
Route::post('change_user_role', [user_function::class, "modify_user"])->middleware('auth')->middleware('can:modify_user')->name('modify_user');



//fonction de création d'un utilisateur
Route::post("registration_user", [user_function::class, "add_user"])->middleware('auth')->middleware('can:add_user')->name("registration_user");

//tous les utilisateurs du systéme
Route::get("all_users", [user_function::class, "all_user_page"])->middleware('auth')->middleware('can:view_user')->name("all_users");

//activer un utilisateur
Route::get("active_user", [user_function::class, "active_user"])->middleware('auth')->middleware('can:active_user')->name("active_user");

//désactiver un utilisateur
Route::get("deactive_user", [user_function::class, "deactive_user"])->middleware('auth')->middleware('can:deactive_user')->name("deactive_user");

//change langue of user
Route::get("change_language", [user_function::class, "change_language"])->middleware('auth')->middleware('can:change_language')->name("change_language");

//change avatar of user
Route::post("change_avatar_user", [registration_function::class, "save_avatar_user"])->middleware('auth')->middleware('can:change_profile')->name("change_avatar_user");

//page de visualisation du dashboard
Route::get("dashboard", [user_function::class, "view_dashboard"])->middleware('auth')->middleware('can:view_dashboard')->name("view_dashboard");


//page liste des utilisateurs avec recherche
Route::get("all_users_search", [user_function::class, "all_user_with_search_page"])->middleware('auth')->middleware('can:view_user')->name("all_users_search");


//page liste des utilisateurs avec recherche et trie
Route::get("sort_users", [user_function::class, "all_user_with_sort_page"])->middleware('auth')->middleware('can:view_user')->name("all_user_with_sort");


//page liste des logs fonctionnels de l'application
Route::get("all_logs", [log_function::class, "all_logs_page"])->middleware('auth')->middleware('can:view_logging')->name("all_logs");

//page liste des logs fonctionnels de l'application avec intervalle
//Route::post("all_logs_search", [log_function::class, "all_logs_search_page"])->middleware('auth')->middleware('can:view_logging')->name("all_logs_search");

Route::match(array('GET','POST'),'all_logs_search', [log_function::class, "all_logs_search_page"])->middleware('auth')->middleware('can:view_logging')->name("all_logs_search");


//to get all client page
Route::get("all_custumers", [client_function::class, "all_custumer_page"])->middleware('auth')->middleware('can:view_custumer')->name("all_custumers");

//Page de création d'un client normal
Route::get("add_custumer", [client_function::class, "add_custumer_page"])->middleware('auth')->middleware('can:add_custumer')->name("add_custumer_page");


//Page de création d'un client normal
Route::get("add_custumer_by_admin", [client_function::class, "add_custumer_by_admin_page"])->middleware('auth')->middleware('can:add_custumer')->name("add_custumer_by_admin_page");

//Page de création d'un client normal
Route::get("add_custumer_by_technician", [client_function::class, "add_custumer_by_technician_page"])->middleware('auth')->middleware('can:add_custumer')->name("add_custumer_by_technician_page");


//Enregistrement d'un client normal
Route::post("register_custumer", [client_function::class, "add_custumer"])->middleware('auth')->middleware('can:add_custumer')->name("register_custumer");

//Enregistrement d'un client par un administrateur
Route::post("register_custumer_by_admin", [client_function::class, "add_custumer_by_admin"])->middleware('auth')->middleware('can:add_custumer')->name("register_custumer_by_admin");

//Enregistrement d'un client par un technicien
Route::post("register_custumer_by_technician", [client_function::class, "add_custumer_by_technician"])->middleware('auth')->middleware('can:add_custumer')->name("register_custumer_by_technician");

//page liste des clients avec recherche
Route::get("all_custumer_search", [client_function::class, "all_custumer_with_search_page"])->middleware('auth')->middleware('can:view_custumer')->name("all_custumer_search");

//page liste des clients avec recherche et trie
Route::get("sort_custumers", [client_function::class, "all_custumer_with_sort_page"])->middleware('auth')->middleware('can:view_custumer')->name("all_custumer_with_sort");

//page de donnee d'un client speficique
Route::get('view_custumer', [client_function::class, "view_custumer_page"])->middleware('auth')->middleware('can:view_custumer')->name('view_custumer_page');

//page de modification des données d'un client
Route::get('modify_custumer', [client_function::class, "modify_custumer_page"])->middleware('auth')->middleware('can:modify_custumer')->name('modify_custumer_page');

//code modification des données d'un client
Route::post("modify_data_custumer", [client_function::class, "modify_custumer"])->middleware('auth')->middleware('can:modify_custumer')->name("modify_custumer");

//function de suppression d'un client
Route::get("delete_custumer", [client_function::class, "delete_custumer_function"])->middleware('auth')->middleware('can:delete_custumer')->name('delete_custumer');

//to get all service page
Route::get("all_services", [service_function::class, "all_service_page"])->middleware('auth')->middleware('can:view_custumer')->name("all_services");

//Page de création d'un service
Route::get("add_service", [service_function::class, "add_service_page"])->middleware('auth')->middleware('can:add_service')->name("add_service_page");

//Enregistrement d'un service
Route::post("register_service", [service_function::class, "add_service"])->middleware('auth')->middleware('can:add_service')->name("register_service");

//page liste des services avec recherche
Route::get("all_service_search", [service_function::class, "all_service_with_search_page"])->middleware('auth')->middleware('can:view_service')->name("all_service_search");

//page liste des services avec recherche et trie
Route::get("sort_services", [service_function::class, "all_service_with_sort_page"])->middleware('auth')->middleware('can:view_service')->name("all_service_with_sort");


//page des données d'un service
Route::get('modify_service', [service_function::class, "modify_service_page"])->middleware('auth')->middleware('can:modify_service')->name('modify_service_page');

//modification des données d'un service
Route::post("modify_data_service", [service_function::class, "modify_service"])->middleware('auth')->middleware('can:modify_service')->name("modify_service");

//function de suppression d'un service
Route::get("delete_service", [service_function::class, "delete_service_function"])->middleware('auth')->middleware('can:delete_service')->name('delete_service');

//to get all prestation page
Route::get("all_prestations", [prestation_function::class, "all_prestation_page"])->middleware('auth')->middleware('can:view_all_prestation')->name("all_prestations");

//to get all prestation from a period
Route::post("all_prestation_search", [prestation_function::class, "all_prestation_search_page"])->middleware('auth')->middleware('can:view_all_prestation')->name("all_prestation_search");
Route::post("service_export_excel", [prestation_function::class, "service_export_excel"])->middleware('auth')->middleware('can:view_all_prestation')->name("service_export_excel");


//Page de création d'une prestation pour un admin
Route::get("add_prestation", [prestation_function::class, "add_prestation_page"])->middleware('auth')->middleware('can:add_prestation')->name("add_prestation_page");

//Page de création d'une prestation pour un technicien
Route::get("add_only_prestation", [prestation_function::class, "add_only_prestation_page"])->middleware('auth')->middleware('can:add_prestation')->name("add_only_prestation_page");


//Enregistrement d'une prestation
Route::post("register_prestation", [prestation_function::class, "add_prestation"])->middleware('auth')->middleware('can:add_prestation')->name("register_prestation");

//Enregistrement d'une prestation
Route::post("register_only_prestation", [prestation_function::class, "add_only_prestation"])->middleware('auth')->middleware('can:add_prestation')->name("register_only_prestation");


//function de suppression d'une prestation
Route::get("delete_prestation", [prestation_function::class, "delete_prestation_function"])->middleware('auth')->middleware('can:delete_prestation')->name('delete_prestation');

//page des données d'une prestation
Route::get('modify_prestation', [prestation_function::class, "modify_prestation_page"])->middleware('auth')->middleware('can:modify_prestation')->name('modify_prestation_page');

//page des données d'une prestation
Route::get('modify_only_prestation', [prestation_function::class, "modify_only_prestation_page"])->middleware('auth')->middleware('can:modify_prestation')->name('modify_only_prestation_page');


//modification des données d'une prestation
Route::post("modify_data_prestation", [prestation_function::class, "modify_prestation"])->middleware('auth')->middleware('can:modify_prestation')->name("modify_prestation");

//modification des données d'une prestation
Route::post("modify_data_only_prestation", [prestation_function::class, "modify_only_prestation"])->middleware('auth')->middleware('can:modify_prestation')->name("modify_only_prestation");


//to get only prestation page
Route::get("only_prestations", [prestation_function::class, "only_prestation_page"])->middleware('auth')->middleware('can:view_only_prestation')->name("only_prestations");

//to get all prestation from a period for only
Route::post("only_prestation_search", [prestation_function::class, "only_prestation_search_page"])->middleware('auth')->middleware('can:view_only_prestation')->name("only_prestation_search");
