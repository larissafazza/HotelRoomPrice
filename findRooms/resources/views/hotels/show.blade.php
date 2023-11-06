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
                    <form class="hotel-form" method="put" action="{{ route('hotels.edit', $hotel->id) }}" id="create-form" enctype="multipart/form-data">
                        @csrf
                        @auth
                            <input class="input-form form-control" type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        @endauth    
                        <h3>{{ $hotel->name }}</h3>
                        <div class="form-group form-div form-div-img">
                            <img src="{{ asset($hotel->image_url) }}" alt="">
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Hotel Name</label>
                            <input value="{{ $hotel->name }}" class="input-form form-control" id="form-name" class="form-input" name="name" type="text" disabled>
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Location</label>
                            <input value="{{ $hotel->location }}" class="input-form form-control" id="form-street" class="form-input" name="location" type="text" disabled>
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Phone</label>
                            <input value="{{ $hotel->phone }}" class="input-form form-control" type="number" id="form-phone" name="phone" pattern="\d*" disabled>
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Hotel Website URL</label>
                            <input value="{{ $hotel->website }}" class="input-form form-control" type="url" id="website" name="website" disabled>
                        </div>
                        @auth
                            <button type="submit" name="submit" class="btn-form btn btn-light">Edit</button>
                            <a class="btn-form btn btn-light" href="{{ route('rooms.create', ['hotel' => $hotel]) }}">Add Room Type</a>
                        @endauth
                    </form>
                    <div class="show-rooms">
                        @foreach($hotel->rooms as $room)
                        <a class="room-link" href="{{ route('rooms.show', ['room' => $room]) }}"><div class="room-box">
                            <h2>{{ $room->type }}</h2>
                            <span> {{ $room->number_of_rooms }} rooms available</span>
                            <h4>{{ $room->description }}<h4>
                        </div></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection