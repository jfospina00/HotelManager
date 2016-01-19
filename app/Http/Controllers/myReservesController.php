<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ReserveRoom;
use App\Client;
use App\Room;
use Auth;

class myReservesController extends Controller
{   //===============================
    //    RESERVAS DE HABITACIONES
    //===============================
    public function index()
    {
        $id = Auth::user()->client->id;
        $reserveRooms = ReserveRoom::All()->where('client_id',$id);
        return view('Rooms/list',compact('reserveRooms'));
    }

    public function create()
    {
        return view('Rooms/create',compact('reserveRooms'));
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
