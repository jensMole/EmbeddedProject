<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerantwoordelijkenModel extends Model 
{
    protected $connection = 'mysql2';
    
    protected $fillable = [
        'Verantwoordelijke_ID', 'Naam', 'Van', 'Tot'
    ];
    
    protected $primaryKey = "Verantwoordelijke_ID";
    
    protected $table = "verantwoordelijken";
    
    public $timestamps = false;
}

