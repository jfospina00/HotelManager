<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $table = 'states';

    protected $guarded = ['id'];

    protected $fillable = ['name_state','type_state','description_state'];

    public function states()
    {
        return $this->hasMany('App\Room');
        return $this->hasMany('App\ReserveRoom');
    	return $this->hasMany('App\Hall');
    	return $this->hasMany('App\User');
    	return $this->hasMany('App\Employee');
    	return $this->hasMany('App\Client');
        return $this->belongsTo('App\Mguest');
    }
}