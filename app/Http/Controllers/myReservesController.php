<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ReserveRoom;
use App\Client;
use App\Room;
use App\State;
use App\TypeRoom;
use App\TypePlan;
use Auth;

class myReservesController extends Controller
{   //===============================
    //    RESERVAS DE HABITACIONES
    public function index()
    {
        $id = Auth::user()->client->id;
        $reserveRooms = ReserveRoom::All()->where('client_id',$id);
        return view('Rooms.list',['reservas'=>$reserveRooms]);
    }

    public function create()
    {
        $typeRooms = TypeRoom::All();
        $rooms     = Room::All()->where('state_id',5);
        $typePlan  = TypePlan::All();
        return view('Rooms.create',['typeRooms'=>$typeRooms],['rooms'=>$rooms],['typePlan'=>$typePlan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $reserveRoom = ReserveRoom::find($id);
        return view('Rooms.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
