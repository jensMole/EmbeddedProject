<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\KlantenModel;

use Illuminate\Http\Request;

class KlantenController extends Controller
{
    function index(){

    }
    
    function GetKlanten(){
        $klanten = KlantenModel::all();
        return response()-> json($klanten);
    }
    
    function UpdateKlant(Request $request, $klant_id){
        $klant = KlantenModel::find($klant_id);
        $klant->Klantnaam = $request->Klantnaam;
        $klant->Adres = $request->Adres;
        $klant->Telnr = $request->Telnr;
        $klant->Email = $request->Email;
        $klant->save();
    }
    
    function CreateKlant(Request $request){
        $klant = new KlantenModel;
        $klant->Klantnaam = $request->Klantnaam;
        $klant->Adres = $request->Adres;
        $klant->Telnr = $request->Telnr;
        $klant->Email = $request->Email;
        $klant->save();
        return response()-> json($klant);
    }
    
    function DeleteKlant($klant_id){
        $klant = KlantenModel::find($klant_id);
        $klant->delete();
    }
}
