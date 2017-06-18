<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\ContainersModel;

use Illuminate\Http\Request;

class ContainersController extends Controller
{
    function index(){

    }
    
    function GetContainers(){
        $Containers = ContainersModel::all();
        return response()-> json($Containers);
    }
    
    function UpdateContainer(Request $request, $container_id){
        $Container = ContainersModel::find($container_id);
        $Container->Serienummer = $request->Serienummer;
        $Container->Volume = $request->Volume;
        $Container->Van = $request->Van;
        $Container->Tot = $request->Tot;
        $Container->save();
    }
    
    function CreateContainer(Request $request){
        $Container = new ContainersModel;
        $Container->Serienummer = $request->Serienummer;
        $Container->Volume = $request->Volume;
        $Container->Van = $request->Van;
        $Container->Tot = $request->Tot;
        $Container->save();
        return response()-> json($Container);
    }
    
    function DeleteContainer($Container_ID){
        $Container = ContainersModel::find($Container_ID);
        $Container->delete();
    }
}

