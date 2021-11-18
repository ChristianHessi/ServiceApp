<?php

namespace App\Http\Controllers;

use App\Exports\ServicesExport;
use Illuminate\Http\Request;
use App\Models\Prestation;
use Exception;
use Spatie\Permission\Models\Permission;
use App\Models\Service;
use  App\Models\User;
use App\Models\Client;
use App\Http\Controllers\prestation_controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;



class prestation_function extends Controller
{


    /**
     * Page for adding a prestation
     *
     * This page is used to fill in the elements necessary to create a prestation
     * @group Admin
     * @authenticated
    */
    public function add_prestation_page(){
        $all_services = Service::all();
        $all_users = User::all();
        $all_custumers = Client::all();
        return view("add_prestation_page",["all_services" => $all_services, "all_users" => $all_users, "all_custumers" => $all_custumers]);
    }

    /**
     * Page for adding a prestation for only person
     *
     * This page is used to fill in the elements necessary to create a prestation for only person
     * @group Admin
     * @authenticated
    */
    public function add_only_prestation_page(){
        $all_services = Service::all();
        $all_users = User::all();
        $all_custumers = Client::all();
        return view("add_only_prestation_page",["all_services" => $all_services, "all_users" => $all_users, "all_custumers" => $all_custumers]);
    }


    /**
     * Add prestation
     *
     * Function which creates a prestation (by an admin or technician)
     * @bodyParam custumer_id int  required The id of custumer
     * @bodyParam service_id int  required The id of service
     * @bodyParam user_id int  required The id of technician
     * @bodyParam price int required The price of service
     * @group Admin
     * @authenticated
    */
    public function add_prestation(){
        try{
            $custumer_id = $_POST['custumer'];
            $price = $_POST['price'];
            $technician_id = $_POST['technicien'];
            $service_id = $_POST['service'];
            $date_prestation = $_POST['date_prestation'];
            //format de date
            if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }
            $date_prestation = Carbon::createFromFormat($format, $date_prestation)->format("Y-m-d");


            if(isset($custumer_id)  && isset($price) && isset($technician_id) && isset($service_id) && isset($date_prestation)){
                //create code prestation
                $current_timestamp = Carbon::now()->timestamp;
                $code_string = (string)$current_timestamp. "" . (string)Auth::user()->id;
                $code_int = (int)$code_string;

                $service = array(
                    "code" => $code_int,
                    "price" => $price,
                    "service_id" => $service_id,
                    "custumer_id" => $custumer_id,
                    "user_id" => $technician_id,
                    "date_prestation" => $date_prestation,
                );

                $registre = new prestation_controller;
                $result = $registre->save_prestation($service);


                if($result){
                    return redirect()->route('all_prestations')->with('success', Lang::get('lang.create_prestation'));
                }
                else{
                    //return "oker";
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
                }

            }
            else{

                return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
            }


        }
        catch(Exception $e){
            return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
        }
    }

    /**
     * Add prestation for only person
     *
     * Function which creates a prestation (by an admin or technician)
     * @bodyParam custumer_id int  required The id of custumer
     * @bodyParam service_id int  required The id of service
     * @bodyParam user_id int  required The id of technician
     * @bodyParam price int required The price of service
     * @group Admin
     * @authenticated
    */
    public function add_only_prestation(Request $request){
        try{
            $custumer_id = $_POST['custumer'];
            $price = $_POST['price'];
            $technician_id = $_POST['technicien'];
            $services = $request->service;
            $date_prestation = $_POST['date_prestation'];
            //format de date
            if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }
            $date_prestation = Carbon::createFromFormat($format, $date_prestation)->format("Y-m-d");


            if(isset($custumer_id)  && isset($price) && isset($technician_id) && isset($services) && isset($date_prestation)){
                //create code prestation


                foreach($services as $service_id){
                    $current_timestamp = Carbon::now()->timestamp;
                    $code_string = (string)$current_timestamp. "" . (string)Auth::user()->id .(string)$service_id;
                    $code_int = (int)$code_string;
                    $service = array(
                        "code" => $code_int,
                        "price" => $price,
                        "service_id" => $service_id,
                        "custumer_id" => $custumer_id,
                        "user_id" => $technician_id,
                        "date_prestation" => $date_prestation,
                    );


                    $registre = new prestation_controller;
                    $result = $registre->save_prestation($service);

                }


                if($result){
                    return redirect()->route('only_prestations')->with('success', Lang::get('lang.create_prestation'));
                }
                else{
                    //return "oker";
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
                }

            }
            else{

                return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
            }


        }
        catch(Exception $e){
            return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
        }
    }

    /**
     * Prestation  modification page
     *
     * This page is the interface for modifying a prestation
     * @bodyParam id int required The id of the service  to modify
     * @group Admin
     * @authenticated
    */
    public function modify_prestation_page(){
        try{
            $id = $_GET["id"];
            if(isset($id)){
                $all_services = Service::all();
                $all_users = User::all();
                $all_custumers = Client::all();
                $prestation = Prestation::find($id);
                if($prestation){
                    return view("modify_prestation_page",["prestation" => $prestation, "all_services" => $all_services, "all_users" => $all_users, "all_custumers" => $all_custumers]);
                }
                else{
                    return redirect()->back();
                }
            }
            else{
                return redirect()->back();
            }
        }
        catch(Throwable $e){
            return redirect()->back();
        }

    }

    /**
     * Only Prestation  modification page
     *
     * This page is the interface for modifying a prestation for only person
     * @bodyParam id int required The id of the service  to modify
     * @group Admin
     * @authenticated
    */
    public function modify_only_prestation_page(){
        try{
            $id = $_GET["id"];
            if(isset($id)){
                $all_services = Service::all();
                $all_users = User::all();
                $all_custumers = Client::all();
                $prestation = Prestation::find($id);
                if($prestation){
                    return view("modify_only_prestation_page",["prestation" => $prestation, "all_services" => $all_services, "all_users" => $all_users, "all_custumers" => $all_custumers]);
                }
                else{
                    return redirect()->back();
                }
            }
            else{
                return redirect()->back();
            }
        }
        catch(Throwable $e){
            return redirect()->back();
        }

    }


    /**
     * Change data prestation
     *
     * function that modifies the information of a prestation (by an admin)
     * @bodyParam id int required The id of prestation
     * @bodyParam custumer_id int  required The id of custumer
     * @bodyParam service_id int  required The id of service
     * @bodyParam user_id int  required The id of technician
     * @bodyParam price int required The price of service
     * @group Admin
     * @authenticated
    */
    public function modify_prestation(){

        try{
            $custumer_id = $_POST['custumer'];
            $price = $_POST['price'];
            $technician_id = $_POST['technicien'];
            $service_id = $_POST['service'];
            $date_prestation = $_POST['date_prestation'];
            $id = $_POST['id'];
            //format de date
            if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }
            $date_prestation = Carbon::createFromFormat($format, $date_prestation)->format("Y-m-d");

            if(isset($custumer_id)  && isset($price) && isset($technician_id) && isset($service_id) && isset($date_prestation)){
                $prestation = array(
                    "price" => $price,
                    "service_id" => $service_id,
                    "custumer_id" => $custumer_id,
                    "user_id" => $technician_id,
                    "date_prestation" => $date_prestation,
                    "id" => $id,
                );

                $registre = new prestation_controller;
                $result = $registre->modify_prestation($prestation);


                if($result){
                    return redirect()->route('all_prestations')->with('success', Lang::get('lang.modified_prestation'));
                }
                else{
                    //return "oker";
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
                }

            }
            else{

                return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
            }


        }
        catch(Exception $e){
            return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
        }
    }

    /**
     * Change data prestation for only person
     *
     * function that modifies the information of a prestation (by an admin)
     * @bodyParam id int required The id of prestation
     * @bodyParam custumer_id int  required The id of custumer
     * @bodyParam service_id int  required The id of service
     * @bodyParam user_id int  required The id of technician
     * @bodyParam price int required The price of service
     * @group Admin
     * @authenticated
    */
    public function modify_only_prestation(){

        try{
            $custumer_id = $_POST['custumer'];
            $price = $_POST['price'];
            $technician_id = $_POST['technicien'];
            $service_id = $_POST['service'];
            $date_prestation = $_POST['date_prestation'];
            $id = $_POST['id'];
            //format de date
            if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }
            $date_prestation = Carbon::createFromFormat($format, $date_prestation)->format("Y-m-d");

            if(isset($custumer_id)  && isset($price) && isset($technician_id) && isset($service_id) && isset($date_prestation)){
                $prestation = array(
                    "price" => $price,
                    "service_id" => $service_id,
                    "custumer_id" => $custumer_id,
                    "user_id" => $technician_id,
                    "date_prestation" => $date_prestation,
                    "id" => $id,
                );

                $registre = new prestation_controller;
                $result = $registre->modify_prestation($prestation);


                if($result){
                    return redirect()->route('only_prestations')->with('success', Lang::get('lang.modified_prestation'));
                }
                else{
                    //return "oker";
                    return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
                }

            }
            else{

                return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
            }


        }
        catch(Exception $e){
            return redirect()->back()->withInput()->with('warning', Lang::get('lang.fill_data_correctly'));
        }
    }


    /**
        * Prestation list page
        *
        * This page lists all prestations
        * @group Admin
        * @authenticated
   */
    public function all_prestation_page(){
        $all_prestations = Prestation::whereDate('date_prestation', date('Y-m-d'))
                            ->orderBy("date_prestation", 'asc')
                            ->get();

        $date_start = date('Y-m-d');
        $date_stop = date('Y-m-d');
        $montant = Prestation::whereDate('date_prestation', date('Y-m-d'))
                    ->orderBy("date_prestation", 'asc')
                    ->sum('price');
        $all_custumers = Client::all();
        $all_services = Service::all();
        $all_users = User::all();
        return view('all_prestation_page', ['all_prestations' => $all_prestations, 'date_start' => $date_start, "date_stop" => $date_stop, "montant" =>$montant
        , "all_custumers" => $all_custumers, "all_services" => $all_services, "all_users" => $all_users]);

    }

    /**
     *
     * Export services to excel
     *
     */

     public function service_export_excel(){
        $all_custumers = Client::all();
        $all_services = Service::all();
        $all_users = User::all();
        try{

            try{
                $date_start = $_POST['date_start'];
                $date_stop = $_POST['date_stop'];
            }
            catch(Exception $e){
                $date_start = "17/10/2021";//$_GET['date_start'];
                $date_stop = "17/11/2021";//$_GET['date_stop'];
            }


            //format de date
             if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }

            //convert birthday to date format Y-m-d
            $date_start = Carbon::createFromFormat($format, $date_start)->format("Y-m-d");
            $date_stop = Carbon::createFromFormat($format, $date_stop)->format("Y-m-d");

                if(! empty($date_start) and ! empty($date_stop)){
                    if($date_start <= $date_stop){
                        $all_prestations = Prestation::whereDate('date_prestation',">=" , date($date_start))
                                            ->whereDate('date_prestation',"<=" ,date($date_stop))
                                            ->orderBy("date_prestation", 'asc')
                                            ->get();
                        $montant = Prestation::whereDate('date_prestation',">=" , date($date_start))
                                    ->whereDate('date_prestation',"<=" ,date($date_stop))
                                    ->orderBy("date_prestation", 'asc')
                                    ->sum('price');
                    }
                    else{
                        $all_prestations = Prestation::whereDate('date_prestation',">=" ,$date_start)
                                            ->whereDate('date_prestation',"<=" ,$date_stop)
                                            ->orderBy("date_prestation", 'asc')
                                            ->get();
                        $montant = Prestation::whereDate('date_prestation',">=" ,$date_start)
                                    ->whereDate('date_prestation',"<=" ,$date_stop)
                                    ->orderBy("date_prestation", 'asc')
                                    ->sum('price');

                        // redirect()->route('all_prestations',['all_prestations' => $all_prestations, 'date_start' => $date_start, "date_stop" => $date_stop, "montant" => $montant,  "all_custumers" => $all_custumers, "all_services" => $all_services, "all_users" => $all_users ])->with('warning', Lang::get('lang.start_less_end'));
                    }
                }
                else{
                    $all_prestations = Prestation::whereDate('date_prestation', date('Y-m-d'))
                                        ->orderBy("date_prestation", 'asc')
                                        ->get();
                    $montant = Prestation::whereDate('date_prestation', date('Y-m-d'))
                                ->orderBy("date_prestation", 'asc')
                                ->sum('price');
                }
            // return view('all_prestation_page', ['all_prestations' => $all_prestations, 'date_start' => $date_start, "date_stop" => $date_stop, "montant" => $montant , "all_custumers" => $all_custumers, "all_services" => $all_services, "all_users" => $all_users]);
        }
        catch(Throwable $e){
            return redirect()->route('all_prestations');

        }

        $prest = [];

        foreach($all_prestations as $p){
            $prestation = [
                "Date de prestation" => $p->date_prestation,
                "Code" => $p->code,
                "Technicien" => $p->Technicien->name. " " .$p->Technicien->surname,
                "Client" => $p->Custumer->name. " " .$p->Custumer->surname,
                "Service" => $p->Service->name,
                "Prix" => $p->Service->price,
            ];
            $prest[$p->id] = $prestation;
        }

        // dd($prest);
        $col = new ServicesExport($prest);

        return Excel::download($col, 'Services.xlsx');
     }

    /**
     * Prestation over a period
     *
     * List of prestations on the platform over a given period
     * @bodyParam start_date date required The start date of search
     * @bodyParam end_date date required the end date of search
     * @group Admin
     * @authenticated
    */
    public function all_prestation_search_page(){
        $all_custumers = Client::all();
        $all_services = Service::all();
        $all_users = User::all();
        try{

            try{
                $date_start = $_POST['date_start'];
                $date_stop = $_POST['date_stop'];
            }
            catch(Exception $e){
                $date_start = $_GET['date_start'];
                $date_stop = $_GET['date_stop'];
            }

            //format de date
             if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }

            //convert birthday to date format Y-m-d
            $date_start = Carbon::createFromFormat($format, $date_start)->format("Y-m-d");
            $date_stop = Carbon::createFromFormat($format, $date_stop)->format("Y-m-d");

                if(! empty($date_start) and ! empty($date_stop)){
                    if($date_start <= $date_stop){
                        $all_prestations = Prestation::whereDate('date_prestation',">=" , date($date_start))
                                            ->whereDate('date_prestation',"<=" ,date($date_stop))
                                            ->orderBy("date_prestation", 'asc')
                                            ->get();
                        $montant = Prestation::whereDate('date_prestation',">=" , date($date_start))
                                    ->whereDate('date_prestation',"<=" ,date($date_stop))
                                    ->orderBy("date_prestation", 'asc')
                                    ->sum('price');
                    }
                    else{
                        $all_prestations = Prestation::whereDate('date_prestation',">=" ,$date_start)
                                            ->whereDate('date_prestation',"<=" ,$date_stop)
                                            ->orderBy("date_prestation", 'asc')
                                            ->get();
                        $montant = Prestation::whereDate('date_prestation',">=" ,$date_start)
                                    ->whereDate('date_prestation',"<=" ,$date_stop)
                                    ->orderBy("date_prestation", 'asc')
                                    ->sum('price');

                        redirect()->route('all_prestations',['all_prestations' => $all_prestations, 'date_start' => $date_start, "date_stop" => $date_stop, "montant" => $montant,  "all_custumers" => $all_custumers, "all_services" => $all_services, "all_users" => $all_users ])->with('warning', Lang::get('lang.start_less_end'));
                    }
                }
                else{
                    $all_prestations = Prestation::whereDate('date_prestation', date('Y-m-d'))
                                        ->orderBy("date_prestation", 'asc')
                                        ->get();
                    $montant = Prestation::whereDate('date_prestation', date('Y-m-d'))
                                ->orderBy("date_prestation", 'asc')
                                ->sum('price');
                }
            return view('all_prestation_page', ['all_prestations' => $all_prestations, 'date_start' => $date_start, "date_stop" => $date_stop, "montant" => $montant , "all_custumers" => $all_custumers, "all_services" => $all_services, "all_users" => $all_users]);
        }
        catch(Throwable $e){
            return redirect()->route('all_prestations');
        }
    }

    /**
        * Prestation only list page
        *
        * This page lists only prestations
        * @group Admin
        * @authenticated
   */
    public function only_prestation_page(){
        $all_prestations = Prestation::whereDate('date_prestation', date('Y-m-d'))
                                        ->Where('user_id', '=', Auth::user()->id)
                                        ->orderBy("date_prestation", 'asc')
                                        ->get();

        $date_start = date('Y-m-d');
        $date_stop = date('Y-m-d');
        $montant = Prestation::whereDate('date_prestation', date('Y-m-d'))
                    ->Where('user_id', '=', Auth::user()->id)
                    ->orderBy("date_prestation", 'asc')
                    ->sum('price');
        $all_custumers = Client::all();
        $all_services = Service::all();
        return view('only_prestation_page', ['all_prestations' => $all_prestations, 'date_start' => $date_start, "date_stop" => $date_stop, "montant" =>$montant,
        "all_custumers" => $all_custumers, "all_services" => $all_services]);

    }

    /**
     * Prestation for only over a period
     *
     * List of prestations for only on the platform over a given period
     * @bodyParam start_date date required The start date of search
     * @bodyParam end_date date required the end date of search
     * @group Admin
     * @authenticated
    */
    public function only_prestation_search_page(){
        $all_custumers = Client::all();
        $all_services = Service::all();
        try{
            try{
                $date_start = $_POST['date_start'];
                $date_stop = $_POST['date_stop'];
            }
            catch(Exception $e){
                $date_start = $_GET['date_start'];
                $date_stop = $_GET['date_stop'];
            }


            //format de date
             if(session("selected_language") == "en"){
                $format = "m/d/Y";
            }
            else{
                $format = "d/m/Y";
            }

            //convert birthday to date format Y-m-d
            $date_start = Carbon::createFromFormat($format, $date_start)->format("Y-m-d");
            $date_stop = Carbon::createFromFormat($format, $date_stop)->format("Y-m-d");

                if(! empty($date_start) and ! empty($date_stop)){
                    if($date_start <= $date_stop){
                        $all_prestations = Prestation::whereDate('date_prestation',">=" , date($date_start))
                                            ->whereDate('date_prestation',"<=" ,date($date_stop))
                                            ->Where('user_id', '=', Auth::user()->id)
                                            ->orderBy("date_prestation", 'asc')
                                            ->get();
                        $montant = Prestation::whereDate('date_prestation',">=" , date($date_start))
                                    ->whereDate('date_prestation',"<=" ,date($date_stop))
                                    ->Where('user_id', '=', Auth::user()->id)
                                    ->orderBy("date_prestation", 'asc')
                                    ->sum('price');
                    }
                    else{
                        $all_prestations = Prestation::whereDate('date_prestation',">=" ,$date_start)
                                            ->whereDate('date_prestation',"<=" ,$date_stop)
                                            ->Where('user_id', '=', Auth::user()->id)
                                            ->orderBy("date_prestation", 'asc')
                                            ->get();
                        $montant = Prestation::whereDate('date_prestation',">=" ,$date_start)
                                    ->whereDate('date_prestation',"<=" ,$date_stop)
                                    ->Where('user_id', '=', Auth::user()->id)
                                    ->orderBy("date_prestation", 'asc')
                                    ->sum('price');

                        redirect()->route('only_prestations',['all_prestations' => $all_prestations, 'date_start' => $date_start, "date_stop" => $date_stop, "montant" => $montant, "all_custumers" => $all_custumers, "all_services" => $all_services ])->with('warning', Lang::get('lang.start_less_end'));
                    }
                }
                else{
                    $all_prestations = Prestation::whereDate('date_prestation', date('Y-m-d'))
                                        ->Where('user_id', '=', Auth::user()->id)
                                        ->orderBy("date_prestation", 'asc')
                                        ->get();
                    $montant = Prestation::whereDate('date_prestation', date('Y-m-d'))
                                ->Where('user_id', '=', Auth::user()->id)
                                ->orderBy("date_prestation", 'asc')
                                ->sum('price');
                }
            return view('only_prestation_page', ['all_prestations' => $all_prestations, 'date_start' => $date_start, "date_stop" => $date_stop, "montant" => $montant, "all_custumers" => $all_custumers, "all_services" => $all_services ]);
        }
        catch(Throwable $e){
            return redirect()->route('only_prestations');
        }
    }



    /**
     * Function to delete a prestation
     *
     * This function allows you to delete a prestation
     * @bodyParam id int required The id of the service to delete
     * @group Admin
     * @authenticated
    */
    public function delete_prestation_function(){
        try{
            $id = $_GET["id"];
            if(isset($id)){

                $register = new prestation_controller;
                $result = $register->delete_prestation($id);
                if($result){
                    return redirect()->route("all_prestations")->with("success", Lang::get('lang.success_delete_prestation'));
                }
                else{
                    return redirect()->route("all_prestations")->with("warning", Lang::get('lang.fill_data_correctly'));
                }

            }
            else{
                return redirect()->route("all_prestations")->with("warning", Lang::get('lang.fill_data_correctly'));
            }

        }
        catch(Throwable $e){
            return redirect()->route("all_prestations");
        }
    }
}
