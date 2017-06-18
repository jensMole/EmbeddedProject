<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\VerantwoordelijkenModel;

use Illuminate\Http\Request;

class VerantwoordelijkenController extends Controller
{
    function index(){

    }
    
    function GetVerantwoordelijken(){
        $Verantwoordelijken = VerantwoordelijkenModel::all();
        return response()-> json($Verantwoordelijken);
    }
    
    function UpdateVerantwoordelijke(Request $request, $verantwoordelijke_id){
        $verantwoordelijke = VerantwoordelijkenModel::find($verantwoordelijke_id);
        $verantwoordelijke->Naam = $request->Naam;
        $verantwoordelijke->Van = $request->Van;
        $verantwoordelijke->Tot = $request->Tot;
        $verantwoordelijke->save();
    }
    
    function CreateVerantwoordelijke(Request $request){
        $verantwoordelijke = new VerantwoordelijkenModel;
        $verantwoordelijke->Naam = $request->Naam;
        $verantwoordelijke->Van = $request->Van;
        $verantwoordelijke->Tot = $request->Tot;
        $verantwoordelijke->save();
        return response()-> json($verantwoordelijke);
    }
    
    function DeleteVerantwoordelijke($verantwoordelijke_id){
        $verantwoordelijke = VerantwoordelijkenModel::find($verantwoordelijke_id);
        $verantwoordelijke->delete();
    }
}