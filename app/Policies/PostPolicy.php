<?php

namespace App\Policies;

use App\Models\user\post;
use App\Models\admin\admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\admin\admin  $user
     * @return mixed
     */
    public function viewAny(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\admin\admin  $user
     * @param  \App\Models\user\post  $post
     * @return mixed
     */
    public function view(admin $user, post $post)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\admin\admin  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        return $this->getPermission($user,1);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\admin\admin  $user
     * @param  \App\Models\user\post  $post
     * @return mixed
     */
    public function update(admin $user)
    {
        return $this->getPermission($user,2);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\admin\admin  $user
     * @param  \App\Models\user\post  $post
     * @return mixed
     */
    public function delete(admin $user)
    {
        return $this->getPermission($user,3);
    }
    public function tag(admin $user)
    {
        return $this->getPermission($user,8);
    }

    public function category(admin $user)
    {
        return $this->getPermission($user,9);
    }


    protected function getPermission($user, $p_id)
    {

        foreach ($user->roles as $role)
        {
            foreach ($role->permissions as $permission)
            {
                if($permission->id==$p_id)
                {
                    return  true;
                }
            }
        }
        return  false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\admin\admin  $user
     * @param  \App\Models\user\post  $post
     * @return mixed
     */
    public function restore(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\admin\admin $user
     * @param  \App\Models\user\post  $post
     * @return mixed
     */
    public function forceDelete(admin $user, post $post)
    {
        //
    }
}
