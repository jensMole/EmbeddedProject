<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        Passport::tokensCan([
            'read-logs' => 'FIND LOGS [LOG_ID] || [INSTALLATION_ID]',
            'write-logs' => 'WRITE LOGS [INSTALLATION_ID]',
            'update-logs' => 'UPDATE LOGS [LOG_ID] && [VALUE]'
        ]);

        Passport::routes();
    }
}
