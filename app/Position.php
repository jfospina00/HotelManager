<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';

    protected $guarded = ['id'];

    protected $fillable = ['name_position','security_level','description_position'];

    public function user()
    {
    	return $this->belongTo('App\User', 'id');
    }
    public function state()
    {
    	return $this->hasOne('App\States', 'id');
    }
}