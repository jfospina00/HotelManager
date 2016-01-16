<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'users';

    protected $fillable = ['email', 'password', 'role_id', 'state_id'];

    protected $hidden = ['password', 'remember_token'];

    public function employee()
    {
    	return $this->hasOne('App\Employee', 'user_id');
    }
    public function client()
    {
    	return $this->hasOne('App\Client', 'user_id');
    }
    public function state()
    {
    	return $this->hasOne('App\States', 'id');
    }
    public function role()
    {
    	return $this->hasOne('App\Role', 'id');
    }
}
