<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReserveHall extends Model
{
    protected $table = 'reserve_halls';

    protected $guarded = ['id'];

    //protected $fillable = ['']; No es llenable, creo

}
