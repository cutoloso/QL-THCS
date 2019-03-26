<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use App\GiaoVien;
use App\User;
use App\Policies\GiaoVienPolicy;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        GiaoVien::class => GiaoVienPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // Gate::define('giaovien',function (User $user)
        // {
        //     if ($user->id == 2) {
        //         return true;
        //     }
        // });
        // Gate::define('admin',function (User $user)
        // {
        //     if ($user->id == 1) {
        //         return true;
        //     }
        // });
        
    }
}
