<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $roomType = null)
    {
        //$rooms = DB::table('rooms')->get();
        // if(isset($roomType)) {
        //     $rooms = Room::where('room_type_id', $roomType)->get();
        // } else {
        //     $rooms = Room::get();
        // }

        //using scope
        $rooms = Room::ByType($roomType)->get();
        return view('rooms.index', ['rooms' => $rooms]);
    }
}
