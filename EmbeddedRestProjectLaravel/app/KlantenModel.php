<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KlantenModel extends Model 
{
    protected $connection = 'mysql2';
    
    protected $fillable = [
        'Klant_ID', 'Klantnaam', 'Adres', 'Telnr', 'Email'
    ];
    
    protected $primaryKey = "Klant_ID";
    
    protected $table = "klanten";
    
    public $timestamps = false;
}

