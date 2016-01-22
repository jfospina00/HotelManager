<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotization extends Model
{
    protected $table = 'cotizations';

    protected $guarded = ['id'];

    protected $fillable = ['turnout', 'adult', 'child', 'child_menu', 'assembly_hall', 'intake', 'main_course', 'dessert', 'beverage', 'child_menu_price', 'intake_price', 'main_course_price','dessert_price','beverage_price'];

    public function client()
    {
    	return $this->hasOne('App\Client');
    }
}
