<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstallatiesModel extends Model 
{
    protected $connection = 'mysql2';
    
    protected $fillable = [
        'Installatie_ID', 'Klant_ID', 'Verantwoordelijk_ID', 'Van', 'Tot'
    ];
    
    protected $primaryKey = "Installatie_ID";
    
    protected $table = "installaties";
    
    public $timestamps = false;
}

