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
                <form method="get" action="{{ route('search.results') }}">
                @csrf
                <h1>Find your date and your hotel!</h1>
                <div class="form-group">
                    <label for="hotel">Select a Hotel:</label>
                    <select name="hotel" id="hotel" class="form-control">
                        <option value="">-- Select a Hotel --</option>
                        @foreach ($hotels as $hotel)
                            <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="room">Select a Room:</label>
                    <select name="room" id="room" class="form-control">
                        <option value="">-- Select a Room --</option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
                        <option value="Suite">Suite</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="checkin">Check-In Date:</label>
                    <input type="date" name="checkin" id="checkin" class="form-control">
                </div>

                <div class="form-group">
                    <label for="checkout">Check-Out Date:</label>
                    <input type="date" name="checkout" id="checkout" class="form-control">
                </div>

                <div class="form-group">
                    <label for="num_rooms">Number of Rooms:</label>
                    <input type="number" name="num_rooms" id="num_rooms" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
</div>
@endsection