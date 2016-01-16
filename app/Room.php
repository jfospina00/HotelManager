<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $guarded = ['id'];

    protected $fillable = ['number_room','description_room','type_room_id','state_id','room_inventory_id'];

    public function room()
    {
    	return $this->belongsTo('App\TypeRoom');
    	return $this->belongsTo('App\State');
    	return $this->belongsTo('App\RoomInventory');
    }
    public function reserveRoom()
    {
    	return $this->belongsTo('App\ReserveRoom', 'id');
    }
}