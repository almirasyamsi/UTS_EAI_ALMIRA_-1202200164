<?php

namespace App\Http\Controllers;

use App\Models\HotelRooms;
use Illuminate\Http\Request;

class HotelRoomController extends Controller
{
    public function index()
    {
        $hotelRooms = HotelRooms::all();
        return response()->json($hotelRooms);
    }

    public function show($roomNumber)
    {
        $hotelRoom = HotelRooms::where('room_number', $roomNumber)->first();
        return response()->json($hotelRoom);
    }

    public function store(Request $request)
    {
        $hotelRoom = HotelRooms::create($request->all());
        return response()->json($hotelRoom, 201);
    }

    public function update(Request $request, $roomNumber)
    {
        $hotelRoom = HotelRooms::where('room_number', $roomNumber)->first();
        $hotelRoom->update($request->all());
        return response()->json($hotelRoom);
    }

    public function destroy($roomNumber)
    {
        $hotelRoom = HotelRooms::where('room_number', $roomNumber)->first();
        $hotelRoom->delete();
        return response()->json(null, 204);
    }

    public function search($room_type)
    {
        $hotelRoom = HotelRooms::where('room_type', $room_type)->get();
        return response()->json($hotelRoom);
    }

    public function find($id)
    {
        $hotelRoom = HotelRooms::find($id);
        return response()->json($hotelRoom);
    }
}
