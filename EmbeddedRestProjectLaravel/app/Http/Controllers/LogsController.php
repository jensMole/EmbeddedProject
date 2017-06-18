<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\LogsModel;

use Illuminate\Http\Request;

class LogsController extends Controller
{
    function index(){

    }
    
    function GetLogs(){
        $logs = LogsModel::all();
        return response()-> json($logs);
    }
    
    function UpdateLog(Request $request, $log_id){
        $log = LogsModel::find($log_id);
        $log->Container_ID = $request->Container_ID;
        $log->Meting = $request->Meting;
        $log->save();
    }
    
    function CreateLog(Request $request){
        $log = new LogsModel;
        $log->Container_ID = $request->Container_ID;
        $log->Meting = $request->Meting;
        $log->save();
        return response()-> json($log);
    }
    
    function DeleteLog($log_id){
        $log = LogsModel::find($log_id);
        $log->delete();
    }
}
