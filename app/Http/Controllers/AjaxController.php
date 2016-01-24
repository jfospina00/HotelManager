<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\ReserveRoom;
use App\Room;
use App\typeRoom;
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
    public function searchTypeRoom(request $request)
    {
    	$id    = $request->get('id');
    	$type  = TypeRoom::find($id)->id;
    	$rooms = Room::where('type_room_id','=',$type)->get();
    	$start = $request->get('start');
    	$exit  = $request->get('exit');
    	$start = str_replace('-','', $start);
    	$exit  = str_replace('-','',$exit);
    	// $reserveRoom = ReserveRoom::
    	// $reserveRoomExit  = str_replace('-','',$reserveRoom->exit_at);
    	// $reserveRoomStart = str_replace('-','',$reserveRoom->start_at);
    	$reserveRooms     = ReserveRoom::where('type_room_id',$type)->get();
    	
    	// foreach ($reserveRooms as $reserveRoom) {
    	// 	echo $reserveRoom->id;
    	// }

    	// if ($start >= $reserveRoomStart && $start <= $reserveRoomExit) {
    	// 	echo "denegado";
    	// }else{
    	// 	echo "Aceptado";
    	// }
    }
    function cancel(){
    	echo "denegado";
    }
}
