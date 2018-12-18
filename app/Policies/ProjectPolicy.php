<?php
//php artisan make:policy ProjectPolicy --model=Project
namespace App\Policies;

use App\User;
use App\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the projecct.
     *
     * @param  \App\User  $user
     * @param  \App\Project  $projecct
     * @return mixed
     */
    public function view(User $user, Project $projecct)
    {
        return $projecct->owner_id == $user->id;
    }

    /**
     * Determine whether the user can create projeccts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the projecct.
     *
     * @param  \App\User  $user
     * @param  \App\Project  $projecct
     * @return mixed
     */
    public function update(User $user, Project $projecct)
    {
        return $projecct->owner_id == $user->id;
    }

    /**
     * Determine whether the user can delete the projecct.
     *
     * @param  \App\User  $user
     * @param  \App\Project  $projecct
     * @return mixed
     */
    public function delete(User $user, Project $projecct)
    {
        //
    }

    /**
     * Determine whether the user can restore the projecct.
     *
     * @param  \App\User  $user
     * @param  \App\Project  $projecct
     * @return mixed
     */
    public function restore(User $user, Project $projecct)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the projecct.
     *
     * @param  \App\User  $user
     * @param  \App\Project  $projecct
     * @return mixed
     */
    public function forceDelete(User $user, Project $projecct)
    {
        //
    }
}
