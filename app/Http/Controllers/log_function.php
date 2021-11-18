<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logs;
use Illuminate\Support\Facades\Lang;
use Throwable;
use Carbon\Carbon;
use Exception;

class log_function extends Controller
{
    /**
     * Logging
     *
     * Lists of activities from the platform
     * @group Admin
     * @authenticated
    */
    public function all_logs_page(){
        $all_logs = Logs::whereDate('created_at', date('Y-m-d'))
                    ->orderBy("id", 'asc')
                    ->paginate(20);
        $date_start = date('Y-m-d');
        $date_stop = date('Y-m-d');
        return view('all_logs', ['all_logs' => $all_logs, 'date_start' => $date_start, "date_stop" => $date_stop]);
    }


    /**
     * Logging over a period
     *
     * List of activities on the platform over a given period
     * @bodyParam start_date date required The start date of search
     * @bodyParam end_date date required the end date of search
     * @group Admin
     * @authenticated
    */
    public function all_logs_search_page(){
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
                        $all_logs = Logs::whereDate('created_at',">=" , date($date_start))
                        ->whereDate('created_at',"<=" ,date($date_stop))
                        ->orderBy("id", 'asc')
                        ->paginate(20);
                    }
                    else{
                        $all_logs = Logs::whereDate('created_at',">=" ,$date_start)
                        ->whereDate('created_at',"<=" ,$date_stop)
                        ->orderBy("id", 'asc')
                        ->paginate(20);

                        redirect()->route('all_logs',['all_logs' => $all_logs, 'date_start' => $date_start, "date_stop" => $date_stop ])->with('warning', Lang::get('lang.start_less_end'));
                    }
                }
                else{
                    $all_logs = Logs::whereDate('created_at', date('Y-m-d'))
                    ->orderBy("id", 'asc')
                    ->paginate(20);
                }
            return view('all_logs', ['all_logs' => $all_logs, 'date_start' => $date_start, "date_stop" => $date_stop ]);
        }
        catch(Throwable $e){
            return redirect()->route('all_logs');
        }
    }
}
