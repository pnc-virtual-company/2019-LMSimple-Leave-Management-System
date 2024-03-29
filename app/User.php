<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'email_verified_at', 'remember_token', 'created_at', 'updated_at',
    ];

    /**
     * Returns the list of roles of a user
     *
     * @return array
     */
    public function roles()
    { 
      return $this->belongsToMany(Role::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }  
    public function position(){
        return $this->belongsTo(Position::class);
    }
    public function leave_reqest(){ 
        return $this->belongsTo(Leave_reqest::class);
    }
    /**
    * @param string|array $roles
    */
    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) || 
                    abort(401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) || 
                abort(401, 'This action is unauthorized.');
    }

    /**
    * Check multiple roles 
    * @param array $roles
    */
    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    /**
    * Check one role
    * @param string $role
    */
    public function hasRole($role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }
} 
