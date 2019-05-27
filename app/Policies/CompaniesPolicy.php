<?php

namespace App\Policies;

use App\User;
use App\Companies;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompaniesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the companies.
     *
     * @param  \App\User  $user
     * @param  \App\Companies  $companies
     * @return mixed
     */
    public function view(User $user, Companies $companies)
    {
        //
    }

    /**
     * Determine whether the user can create companies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the companies.
     *
     * @param  \App\User  $user
     * @param  \App\Companies  $companies
     * @return mixed
     */
    public function update(User $user, Companies $companies)
    {
        //
    }

    /**
     * Determine whether the user can delete the companies.
     *
     * @param  \App\User  $user
     * @param  \App\Companies  $companies
     * @return mixed
     */
    public function delete(User $user, Companies $companies)
    {
        //
    }
}
