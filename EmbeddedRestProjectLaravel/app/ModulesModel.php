<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModulesModel extends Model 
{
    protected $connection = 'mysql2';
    
    protected $fillable = [
        'Module_ID', 'Serienummer', 'Fabrikant', 'Van', 'Tot'
    ];
    
    protected $primaryKey = "Module_ID";
    
    protected $table = "modules";
    
    public $timestamps = false;
}

