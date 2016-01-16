<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeRoom extends Model
{
    protected $table = 'type_rooms';

    protected $guarded = ['id'];

    protected $fillable = ['name_state','name_type_room','description_type_room'];

    public function Rooms()
    {
    	return $this->hasMany('App\Room');
    }
    public function reserveRoom()
    {
    	return $this->belongsTo('App\ReserveRoom', 'id');
    }
}
