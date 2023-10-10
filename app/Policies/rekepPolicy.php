<?php

namespace App\Policies;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\laporan_kegiatan;
use App\Models\User;

class rekepPolicy extends ServiceProvider
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $authUser, laporan_kegiatan $lapkeu): bool
    {

        return $authUser->id === $lapkeu->user_id;

    }
}
