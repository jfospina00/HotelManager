<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mguest extends Model
{
    protected $table = 'mguests';

    protected $guarded = ['id'];

    protected $fillable = ['first_name','last_name','genere','email','genere','telephone','mobile','adreess','email','city_h','country_h','ocupation','trasportation','reservation','purpose_trip','coming_from','destination','stay','name_establishment','city','departament','adult_occupant','child_occupant','start_at','country_permanece','way_pay','state_id','room_id'];

    public function mguest()
    {
    	return $this->belongsTo('App\State');
    	return $this->belongsTo('App\TypePlan');
    	return $this->hasMany('App\Room');
    }
}