<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\ReserveRoom;
use App\Client;
use App\Cotization;


class AjaxController extends Controller
{

    public function searchReserve(request $request)
    {
        $id = $request->get('id');
        $reserveRoom = ReserveRoom::find($id);
        return view('ajax.searchReserve',['reserve'=>$reserveRoom]);
    }

}
