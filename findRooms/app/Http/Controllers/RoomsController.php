<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HotelsController;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $hotelId = $request->input('hotel');
        $hotel = Hotel::find($hotelId);
        return view('rooms.create', ['hotel' => $hotel]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'type' => 'required|string',
            'description' => 'required|string',
            'number' => 'required|integer',
        ]);

        $data = [
            'hotel_id' => $request->hotel_id,
            'type' => $request->type,
            'description' => $request->description,
            'number_of_rooms' => $request->number,
        ];
    
        $room = Room::create($data);

        if ($request->ajax()) {
            return response()->json(['message' => 'Room created successfully', 'room' => $room], 201);
        } else {
            return redirect()->route('rooms.show', ['room' => $room])->with('success', 'Room created successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        $hotel_id = $room->hotel_id;
        $hotel = Hotel::find($hotel_id);
        return view('rooms.show', ['room' => $room, 'hotel' => $hotel]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        $hotel_id = $room->hotel_id;
        $hotel = Hotel::find($hotel_id);
        return view('rooms.edit',compact('room', 'hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
{
    $request->validate([
        'type' => 'required|string',
        'description' => 'required|string',
        'number' => 'required|numeric',
    ]);

    $hotel_id = $room->hotel->id;

    $data = [
        'type' => $request->type,
        'description' => $request->description,
        'number_of_rooms' => $request->number,
    ];

    $room->update($data);

    return redirect()->route('hotels.show', ['hotel' => $hotel_id]);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('hotels.index');
    }
}
