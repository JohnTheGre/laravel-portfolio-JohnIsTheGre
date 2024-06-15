<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Validator::extend('strong_password', function ($attribute, $value, $parameters, $validator) {
            // Implement your stronger password validation logic here
            return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',$value);
        });

        Validator::replacer('strong_password', function ($message, $attribute, $rule, $parameters) {
            return 'The password must be at least 8 characters long and contain at least one uppercase letter, one number, and one special character.';
        });

        if (config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
    }
}
