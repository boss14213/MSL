<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class mainController extends Controller
{
    function home() {
        return view('welcome');
    }
    
    function create() {

        $rooms = Room::all();

        return view('room.create',compact('rooms'));
    }
    
    function check() {

        $rooms = Room::all();
        $responses = response()->json($rooms);
        return view('room.check',compact('responses'));
    }

    public function storeRoom(){

        $room = new Room();

        $room->room_type_name = request('roomType');
        $room->room_type_id = request('roomId');

        $room->save();

        return redirect('/room/create');

    } 
}
