<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $guarded = ['id'];

    protected $fillable = ['first_name','last_name','genere','email','telephone','mobile','adreess','city','user_id', 'state_id'];

    public function client()
    {
    	return $this->belongsTo('App\User');
    	return $this->hasMany('App\State');
    }
    public function reserveRoom()
    {
    	return $this->hasOne('App\ReserveRoom');
    }
}