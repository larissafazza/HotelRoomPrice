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
        $hotelId = $request->hotel;
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

    public function showSearchPage()
    {
        $hotels = Hotel::all();
        return view('search', ['hotels' => $hotels]);
    }

    // Método para processar a pesquisa
    public function searchResults(Request $request)
    {
        $hotels;
        $rooms;
        $prices;
        $hotelID = $request->input('hotel');
        if($hotelID != null){
            foreach(Hotel::all() as $hotel){
                if($hotel->id == $hotelID){
                    array_push($hotels, $hotel);
                }
            }
        }else{
            foreach(Hotel::all() as $hotel){
                array_push($hotels, $hotel);
            }
        }
        $roomID = $request->input('room');
        if($roomID != null){
            foreach($hotels as $hotel){
                if($hotel->room->id == $roomID){
                    array_push($rooms, $hotel->room);
                }
            }
        }else{
            foreach($hotels as $hotel){
                array_push($rooms, $hotel->room);
            }
        }
        
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');
        $numRooms = $request->input('num_rooms');
        array_push($lista, $objeto);


        return view('searchresults', ['filteredHotels' => $filteredHotels]);
    }
}
