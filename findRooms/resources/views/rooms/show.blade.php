@extends('layouts.app')

@section('title')
Upload Your Hotel here!
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">               
                <div class="card-body">
                    <form class="hotel-form" method="put" action="{{ route('rooms.edit', $room->id) }}" id="create-form" enctype="multipart/form-data">
                        @csrf 
                        <h3>Room {{ $room->type }}</h3>
                        <div class="form-group form-div">
                            <label class="label label-room">Room Type</label>
                            <h5>{{ $room->type }}</h5>
                        </div>
                        <div class="form-group form-div">
                            <label class="label label-room">Description</label>
                            <h5>{{ $room->description }}</h5>
                        </div>
                        <div class="form-group form-div">
                            <label class="label label-room">Number of Rooms available</label>
                            <h5>{{ $room->number_of_rooms }}</h5>
                        </div>
                        <div class="form-group form-div">
                            <label class="label label-room">Hotel</label>
                            <h5>{{ $hotel->name }}</h5>
                        </div>
                        @auth
                            <button type="submit" name="submit" class="btn-form btn btn-light">Edit</button>
                        @endauth
                    </form>
                    <a class="btn-form btn btn-light" href="{{ route('prices.index', ['room' => $room->id]) }}">Search dates and prices</a>
                    <a class="btn-form btn btn-light btn-simulate" href="{{ route('search') }}">Simulate Budget</a>
                    
                    @auth
                    <button type="button" name="delete" class="btn-form btn-delete btn btn-light" onclick="confirmDelete({{ $room->id }}, event)">Delete Room Type</button>
                    <form id="delete-room-form-{{ $room->id }}" action="{{ route('rooms.destroy', ['room' => $room->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                    @endauth

                </div>
            </div>
        </div>
    </div>
</div>
@endsection