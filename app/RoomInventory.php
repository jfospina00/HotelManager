<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomInventory extends Model
{
    protected $table = 'room_inventories';

    protected $guarded = ['id'];

    protected $fillable = ['general_inventory_id'];

    public function roomInventories()
    {
    	return $this->belongsTo('App\GeneralInventory');
    }
}