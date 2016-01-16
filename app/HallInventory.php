<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HallInventory extends Model
{
    protected $table = 'hall_inventories';

    protected $guarded = ['id'];

    protected $fillable = ['general_inventory_id'];

    public function hallInventory()
    {
    	return $this->belongsTo('App\GeneralInventory');
    }
}