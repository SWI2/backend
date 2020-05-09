<?php

namespace App\Providers;

use App\Enums\UserType;
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
        
        Passport::routes();

        Passport::tokensCan([
            UserType::Admin()->key => 'Edit everything',
            UserType::Seller()->key => 'Edit sales',
            UserType::Mechanician()->key => 'Edit cars',
        ]);
    }
}
