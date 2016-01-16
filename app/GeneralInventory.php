<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralInventory extends Model
{
    protected $table = 'general_inventories';

    protected $guarded = ['id'];

    protected $fillable = ['name_product','model','quantity'];

    public function generalInventory()
    {
    	return $this->hasMany('App\HallInventory');
    	return $this->hasMany('App\RoomInventory');
    }
}