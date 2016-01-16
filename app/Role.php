<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $guarded = ['id'];

    protected $fillable = ['name_role','description_role'];

    public function roles()
    {
    	return $this->hasMany('App\Employee', 'id');
    	return $this->hasMany('App\Client', 'id');
    }
}