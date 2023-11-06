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
                    @if ($filteredHotels->isEmpty())
                        <p>No results found.</p>
                    @else
                        <ul>
                            @foreach ($filteredHotels as $hotel)
                                <li>
                                    <h2>{{ $hotel->name }}</h2>
                                    <p>Location: {{ $hotel->location }}</p>
                                    <ul>
                                        @foreach ($hotel->rooms as $room)
                                            <li>
                                                <h3>{{ $room->type }}</h3>
                                                <p>Description: {{ $room->description }}</p>
                                                <p>Price: ${{ $room->price }}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection