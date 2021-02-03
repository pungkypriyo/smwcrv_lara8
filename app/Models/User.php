<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'user_role',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Description:
     * Check user roles, which type  of users login.
     *
     */
    public function role()
    {
        return $this->hasOne('App\Roles', 'id', 'user_role');
    }

    /**
     * Mengecek user jika memiliki banyak role yang di sandang.
     */
    public function hasRole($roles)
    {
        // die('inside hasRole');
        $this->have_role = $this->getUserRole();
        // Check jika user merupakan administrator.
        if ($this->have_role->role_name == "Admin") {
            return true;
        }
        if (is_array($roles)) {
            foreach($roles as $nRole){
                if ($this->checkIfUserHasRole($nRole)) {
                    return true;
                }
            }
        }else{
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }

    /**
     * #Desc
     * Check role from database.
     */
    private function getUserRole()
    {
        return $this->role()->getResults();
    }

    #
    private function checkIfUserHasRole($nRole)
    {
        return (strtolower($nRole) == strtolower($this->have_role->role_name)) ? true : false;
    }
}
