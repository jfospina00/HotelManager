<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypePlan extends Model
{
    protected $table = 'type_plans';

    protected $guarded = ['id'];

    protected $fillable = ['name_state','name_type_plan','price_plan','description_type_plan'];

    public function typePlans()
    {
    	return $this->hasMany('App\Mguest');
    }
}
