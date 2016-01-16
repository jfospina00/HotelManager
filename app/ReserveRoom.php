<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReserveRoom extends Model
{
    protected $table = 'reserve_rooms';

    protected $guarded = ['id'];

    protected $fillable = ['adult_occupant','child_occupant','start_at','exit_at','price','client_id','state_id','type_room_id','room_id'];

    public function state()
    {
    	return $this->hasOne('App\State');
    }
    public function client()
    {
    	return $this->belongsTo('App\Client', 'id');
    }
    public function typeRoom()
    {
    	return $this->hasOne('App\TypeRoom', 'id');
    }
    public function room()
    {
    	return $this->hasOne('App\Room', 'id');
    }
}
