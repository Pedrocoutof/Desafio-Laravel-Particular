<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class FuncionarioPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function delete()
    {
        return Auth::user()->is_admin;
    }

    public function update(User $user, User $obj)
    {
        return Auth::user()->is_admin || $obj->id == Auth::user()->id;
    }

    public function create()
    {
        return Auth::user()->is_admin;
    }

}
