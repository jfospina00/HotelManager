<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
    	if (Auth::check()) {
    		return view('dashboard');
    	}else{
    		return view('app');
    	}
    }
}
