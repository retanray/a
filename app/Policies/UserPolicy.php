<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserInterface;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\UserInterface  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(UserInterface $user)
    {
        if ($user->isAccessibleUsers()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\UserInterface  $user
     * @param  \App\Models\Admin  $createdAdmin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(UserInterface $user, Admin $createdAdmin)
    {
        if ($admin->isAccessibleUsers()) {
            //            return true;
            return Response::allow();
        }
        return Response::deny('You do not permitted this page.' , 403);
        // //
        // return $admin->id === $createdAdmin->user_id
        //             ? Response::allow()
        //             : Response::deny('You do not own this post.');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\UserInterface  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(UserInterface  $user)
    {
        if ($admin->isAccessibleUsers()) {
            //            return true;
            return Response::allow();
        }
        return Response::deny('You do not permitted this page.' , 403);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\UserInterface  $user
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(UserInterface  $user, Admin $createdAdmin)
    {
        if ($admin->isAccessibleUsers()) {
            //            return true;
            return Response::allow();
        }
        return Response::deny('You do not permitted this page.');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\UserInterface  $user
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(UserInterface  $user, Admin $createdAdmin)
    {
        if ($admin->isAccessibleUsers()) {
            //            return true;
            return Response::allow();
        }
        return Response::deny('You do not permitted this page.');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\UserInterface  $user
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(UserInterface  $user, Admin $createdAdmin)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\UserInterface  $user
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(UserInterface  $user, Admin $createdAdmin)
    {
        //
    }
}