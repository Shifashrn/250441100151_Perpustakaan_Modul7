<?php

namespace App\Providers;

use App\Models\Anggota;
use App\Models\User;
use App\Policies\AnggotaPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
    public function boot(): void
    {
        // Production (Vercel): paksa semua URL memakai HTTPS
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        Gate::policy(Anggota::class, AnggotaPolicy::class);

        // Gate: hanya admin dan petugas yang boleh mengelola buku
        Gate::define('kelola-buku', function (User $user) {
            return $user->hasAnyRole(['admin', 'petugas']);
        });
    }
}