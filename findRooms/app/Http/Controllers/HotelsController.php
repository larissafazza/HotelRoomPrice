<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->check()){
            $hotels = Auth::user()->hotels;
        }
        else{
            $hotels = Hotel::all();
        }
        return view('landingpage', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user_id =  Auth::id();
        return view('hotels.create', compact('user_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = $request->user_id;
        
        $request->validate([
            'name' => 'required|string',
            'street' => 'required|string',
            'number' => 'required|integer',
            'city' => 'required|string',
            'country' => 'required',
            'phone' => 'required|numeric',
            'website' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $image_path = '';
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_path = $image->store('public/images');
        }

        $data = [
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'location' => $request->street . ', ' . $request->number . ', ' . $request->city . ', ' . $request->country,
            'phone' => $request->phone,
            'website' => $request->website, 
            'image_url' => $image_path,
        ];
    
        $hotel = Hotel::create($data);

        if ($request->ajax()) {
            return response()->json(['message' => 'Hotel created successfully', 'hotel' => $hotel], 201);
        } else {
            return redirect()->route('hotels.show', ['hotel' => $hotel])->with('success', 'Hotel created successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        $rooms = $hotel->rooms;
        return view('hotels.show', ['hotel' => $hotel, 'rooms' => $rooms]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        return view('hotels.edit',compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {        
        $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'phone' => 'required|numeric',
            'website' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $image_path = $hotel->image_url;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_path = $image->store('public/images');
        }

        $data = [
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'location' => $request->location,
            'phone' => $request->phone,
            'website' => $request->website, 
            'image_url' => $image_path,
        ];
    
        $hotel->update($data);

        return redirect()->route('hotels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        Session::flash('deleted_message', $deleted_message);
        return redirect()->route('todos.index');
    }
}
