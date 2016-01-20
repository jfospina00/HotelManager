<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\ReserveRoom;
use App\Client;


class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function searchReserve(request $request)
    {
        $id = $request->get('id');
        $reserveRoom = ReserveRoom::find($id);
        return view('ajax.searchReserve',['reserve'=>$reserveRoom]);
    }
}
