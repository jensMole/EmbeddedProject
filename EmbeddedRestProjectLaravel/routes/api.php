<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => '/v1'], function() {
    
    //api/v1/
    Route::get('/',"LogController@index");
    
    Route::group(['prefix' => '/GET'], function() {
        
        //api/v1/GET/klanten
        Route::get('/klanten',"KlantenController@GetKlanten");
        
        //api/v1/GET/installaties
        Route::get('/installaties',"InstallatiesController@GetInstallaties");
        
        //api/v1/GET/containers
        Route::get('/containers',"ContainersController@GetContainers");
        
        //api/v1/GET/modules
        Route::get('/modules',"ModulesController@GetModules");
        
        //api/v1/GET/logs
        Route::get('/logs',"LogsController@GetLogs");
        
        //api/v1/GET/verantwoordelijken
        Route::get('/verantwoordelijken',"VerantwoordelijkenController@GetVerantwoordelijken");
        
    });
    
    Route::group(['prefix' => '/POST'], function() {
        
        Route::group(['prefix' => '/create'], function() {
            
            //api/v1/POST/create/klant
            Route::post('/klanten',"KlantenController@CreateKlant");
            
            //api/v1/POST/create/installaties
            Route::post('/installaties',"InstallatiesController@CreateInstallatie");
            
            //api/v1/POST/create/containers
            Route::post('/containers',"ContainersController@CreateContainer");
            
            //api/v1/POST/create/modules
            Route::post('/modules',"ModulesController@CreateModule");
            
            //api/v1/POST/create/logs
            Route::post('/logs',"LogsController@CreateLog");

            //api/v1/POST/create/verantwoordelijken
            Route::post('/verantwoordelijken',"VerantwoordelijkenController@CreateVerantwoordelijke");
            
        });
        
        Route::group(['prefix' => '/update'], function() {
            
            //api/v1/POST/update/klant/{klant_id}
            Route::post('/klanten/{klant_id}',"KlantenController@UpdateKlant");
        
            //api/v1/POST/update/installaties/{installatie_id}
            Route::post('/installaties/{installatie_id}',"InstallatiesController@UpdateInstallatie");
            
            //api/v1/POST/update/containers/{container_id}
            Route::post('/containers/{container_id}',"ContainersController@UpdateContainer");
        
            //api/v1/POST/update/modules/{module_id}
            Route::post('/modules/{module_id}',"ModulesController@UpdateModule");
             
            //api/v1/POST/update/logs/{log_id}
            Route::post('/logs/{log_id}',"LogsController@UpdateLog");
        
            //api/v1/POST/update/verantwoordelijken/{verantwoordelijke_id}
            Route::post('/verantwoordelijken/{verantwoordelijke_id}',"VerantwoordelijkenController@UpdateVerantwoordelijke");
                
        });
        
    });
    
    Route::group(['prefix' => '/DELETE'], function() {
        
        //api/v1/DELETE/klanten/{klant_id}
        Route::delete('/klanten/{klant_id}',"KlantenController@DeleteKlant");
        
        //api/v1/DELETE/installaties/{installatie_id}
        Route::delete('/installaties/{installatie_id}',"InstallatiesController@DeleteInstallatie"); 
        
        //api/v1/DELETE/containers/{container_id}
        Route::delete('/containers/{container_id}',"ContainersController@DeleteContainer"); 
        
        //api/v1/DELETE/modules/{module_id}
        Route::delete('/modules/{module_id}',"ModulesController@DeleteModule"); 
        
        //api/v1/DELETE/logs/{log_id}
        Route::delete('/logs/{log_id}',"LogsController@DeleteLog"); 
        
        //api/v1/DELETE/verantwoordelijken/{verantwoordelijke_id}
        Route::delete('/verantwoordelijken/{verantwoordleijke_id}',"VerantwoordelijkenController@DeleteVerantwoordelijke"); 
        
        
    }); 
    
});
