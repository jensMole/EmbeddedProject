<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContainersModel extends Model 
{
    protected $connection = 'mysql2';
    
    protected $fillable = [
        'Container_ID', 'Serienummer', 'Volume', 'Van', 'Tot'
    ];
    
    protected $primaryKey = "Container_ID";
    
    protected $table = "containers";
    
    public $timestamps = false;
}

