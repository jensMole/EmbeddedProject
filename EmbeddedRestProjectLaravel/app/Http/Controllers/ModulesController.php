<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\ModulesModel;

use Illuminate\Http\Request;

class ModulesController extends Controller
{
    function index(){

    }
    
    function GetModules(){
        $Modules = ModulesModel::all();
        return response()-> json($Modules);
    }
    
    function UpdateModule(Request $request, $module_id){
        $module = ModulesModel::find($module_id);
        $module->Serienummer = $request->Serienummer;
        $module->Fabrikant = $request->Fabrikant;
        $module->Van = $request->Van;
        $module->Tot = $request->Tot;
        $module->save();
    }
    
    function CreateModule(Request $request){
        $module = new ModulesModel;
        $module->Serienummer = $request->Serienummer;
        $module->Fabrikant = $request->Fabrikant;
        $module->Van = $request->Van;
        $module->Tot = $request->Tot;
        $module->save();
        return response()-> json($module);
    }
    
    function DeleteModule($Module_ID){
        $module = ModulesModel::find($Module_ID);
        $module->delete();
    }
    

}

