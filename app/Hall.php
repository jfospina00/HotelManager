<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $table = 'halls';

    protected $guarded = ['id'];

    protected $fillable = ['name_hall','capacity','description_hall','state_id','hall_inventory_id'];

    public function hall()
    {
    	return $this->belongsTo('App\State');
    	return $this->belongsTo('App\HallInventory');
    }
}