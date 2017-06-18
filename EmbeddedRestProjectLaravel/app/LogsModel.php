<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogsModel extends Model 
{
    protected $connection = 'mysql2';
    
    protected $fillable = [
        'Log_ID', 'Container_ID', 'Meting'
    ];
    
    protected $primaryKey = "Log_ID";
    
    protected $table = "logs";
    
    public $timestamps = false;
}

