<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $guarded = ['id'];

    protected $fillable = ['first_name','last_name','genere','email','telephone','mobile','adreess','city','position_id','user_id', 'state_id'];

    public function user()
    {
    	return $this->belongTo('App\User', 'id');
    }
    public function state()
    {
    	return $this->hasOne('App\States', 'id');
    }
    public function position()
    {
    	return $this->hasOne('App\Position', 'id');
    }
}