<?php

namespace App\Policies;

use App\User;
use App\GiaoVien;
use Illuminate\Auth\Access\HandlesAuthorization;

class GiaoVienPolicy
{
    use HandlesAuthorization;

    // public function __construct()
    // {
    //     //
    // }
    public function view(User $user)
    {
        return true;
    }
}
