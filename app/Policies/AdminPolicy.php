<?php

namespace App\Policies;

use App\Models\Admin;
//use App\Models\User;
use App\Models\UserInterface;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(UserInterface $admin)
    {
        if ($admin->isAccessibleAdmins()) {
            //            return true;
            return Response::allow();
        }
        return Response::deny('You Are Not Allowed to Access This Page.' , 403);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin  $dmin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(UserInterface $admin, Admin $createdAdmin)
    {
        if ($admin->isAccessibleAdmins()) {
            //            return true;
            return Response::allow();
        }
        return Response::deny('Sorry, You Are Not Allowed to Access This Page.' , 403);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(UserInterface $admin)
    {
        if ($admin->isAccessibleAdmins()) {
            //            return true;
            return Response::allow();
        }
        return Response::deny('Sorry, You Are Not Allowed to Access This Page.');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(UserInterface $admin, Admin $createdAdmin)
    {
        if ($admin->isAccessibleAdmins()) {
            //            return true;
            return Response::allow();
        }
        return Response::deny('You Are Not Allowed to Access This Page.');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(UserInterface $admin, Admin $createdAdmin)
    {
        if ($admin->isAccessibleAdmins()) {
            //            return true;
            return Response::allow();
        }
        return Response::deny('You Are Not Allowed to Access This Page.');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(UserInterface $admin, Admin $createdAdmin)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(UserInterface $admin, Admin $createdAdmin)
    {
        //
    }
}
