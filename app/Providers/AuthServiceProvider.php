<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
  
    protected $policies = [
        'App\Models\Bb' => 'App\Policies\BbPolicy',
    ];

  
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
