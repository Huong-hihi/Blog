<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // App\Article::class => App\Policies\DeletePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->registerPolicies();
        // Gate::define('edit articles', function ($user, $edit) {
        //     return $user->id == $edit->user_id;
        // });
        // // Gate::define('users', function ($user) {
        // //     return $user->role == User::users;
        // // });

        // //
    }
}
