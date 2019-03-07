<?php

namespace App\Policies;

use App\User;
use App\Destination;
use Illuminate\Auth\Access\HandlesAuthorization;

class DestinationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the destination.
     *
     * @param  \App\User  $user
     * @param  \App\Destination  $destination
     * @return mixed
     */
    public function view(User $user)//, Destination $destination)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can create destinations.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can update the destination.
     *
     * @param  \App\User  $user
     * @param  \App\Destination  $destination
     * @return mixed
     */
    public function update(User $user, Destination $destination)
    {
        return $user->id === $destination->user_id || $user->hasRole('admin');
    }

    /**
     * Determine whether the user can delete the destination.
     *
     * @param  \App\User  $user
     * @param  \App\Destination  $destination
     * @return mixed
     */
    public function delete(User $user, Destination $destination)
    {
        return $user->id === $destination->user_id || $user->hasRole('admin');
    }

    /**
     * Determine whether the user can restore the destination.
     *
     * @param  \App\User  $user
     * @param  \App\Destination  $destination
     * @return mixed
     */
    public function restore(User $user, Destination $destination)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the destination.
     *
     * @param  \App\User  $user
     * @param  \App\Destination  $destination
     * @return mixed
     */
    public function forceDelete(User $user, Destination $destination)
    {
        //
    }
}
