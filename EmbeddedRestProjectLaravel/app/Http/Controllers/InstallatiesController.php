<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\InstallatiesModel;

use Illuminate\Http\Request;

class InstallatiesController extends Controller
{
    function index(){

    }
    
    function GetInstallaties(){
        $installaties = InstallatiesModel::all();
        return response()-> json($installaties);
    }
    
    function UpdateInstallatie(Request $request, $installatie_id){
        $installatie = InstallatiesModel::find($installatie_id);
        $installatie->Klant_ID = $request->Klant_ID;
        $installatie->Verantwoordelijk_ID = $request->Verantwoordelijk_ID;
        $installatie->Van = $request->Van;
        $installatie->Tot = $request->Tot;
        $installatie->save();
    }
    
    function CreateInstallatie(Request $request){
        $installatie = new InstallatiesModel;
        $installatie->Klant_ID = $request->Klant_ID;
        $installatie->Verantwoordelijk_ID = $request->Verantwoordelijk_ID;
        $installatie->Van = $request->Van;
        $installatie->Tot = $request->Tot;
        $installatie->save();
        return response()-> json($installatie);
    }
    
    function DeleteInstallatie($installatie_id){
        $installatie = InstallatiesModel::find($installatie_id);
        $installatie->delete();
    }
    

}
