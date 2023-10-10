<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\laporan_kegiatan;
use App\Policies\rekepPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        laporan_kegiatan::class => rekepPolicy::class,
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
