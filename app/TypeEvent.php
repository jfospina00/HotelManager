<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeEvent extends Model
{
    protected $table = 'type_events';

    protected $guarded = ['id'];

    protected $fillable = ['name_state','name_type_event','description_type_event'];
}
