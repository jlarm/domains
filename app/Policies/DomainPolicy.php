<?php

namespace App\Policies;

use App\Models\Domain;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DomainPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

    }

    public function view(User $user, Domain $domain)
    {
    }

    public function create(User $user)
    {
    }

    public function update(User $user, Domain $domain)
    {
    }

    public function delete(User $user, Domain $domain)
    {
    }

    public function restore(User $user, Domain $domain)
    {
    }

    public function forceDelete(User $user, Domain $domain)
    {
    }
}
