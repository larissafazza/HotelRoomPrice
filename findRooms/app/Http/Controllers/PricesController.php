<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $room = Room::find($request->room);
        $prices = $room->prices;
        return view('prices.index', compact('room', 'prices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $room = Room::find($request->room);
        return view('prices.create', ['room' => $room]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'price' => 'required|numeric|between:0,9999999.99',
        ]);        

        $data = [
            'room_id' => $request->room_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'price' => $request->price,
        ];
    
        $price = Price::create($data);

        if ($request->ajax()) {
            return response()->json(['message' => 'Room created successfully', 'room' => $room], 201);
        } else {
            return redirect()->route('rooms.show', ['room' => $price->room])->with('success', 'Room created successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Price $price)
    {
        $room = $price->room;
        return view('prices.edit',compact('room', 'price'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Price $price)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'price' => 'required|numeric|between:0,9999999.99',
        ]);

        $data = [
            'room_id' => $request->room_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'price' => $request->price,
        ];

        $price->update($data);

        return redirect()->route('rooms.show', ['room' => $price->room])->with('success', 'Room created successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price $price)
    {
        $hotel = $price->room;
        $price->delete();
        return redirect()->route('prices.index', compact('room'));
    }
}
