<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use App\Actions\LoginResponse;
use App\Actions\RegisterResponse;
use App\Actions\PasswordResetResponse;
use Laravel\Fortify\Contracts\LoginResponse as ContractsLoginResponse;
use Laravel\Fortify\Contracts\PasswordResetResponse as ContractsPasswordResetResponse;
use Laravel\Fortify\Contracts\RegisterResponse as ContractsRegisterResponse;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
{
    Fortify::createUsersUsing(CreateNewUser::class);
    Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
    Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
    Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

    RateLimiter::for('login', function (Request $request) {
        $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());
        return Limit::perMinute(5)->by($throttleKey);
    });

    RateLimiter::for('two-factor', function (Request $request) {
        return Limit::perMinute(5)->by($request->session()->get('login.id'));
    });

    // Definir uma classe de resposta de login personalizada
    // Sobrescreve a resposta de login
    $this->app->singleton(ContractsLoginResponse::class, LoginResponse::class);

    // Sobrescreve a resposta de registro
    $this->app->singleton(ContractsRegisterResponse::class, RegisterResponse::class);

    // Sobrescreve a resposta de redefinição de senha
    $this->app->singleton(ContractsPasswordResetResponse::class, PasswordResetResponse::class);
}
}
