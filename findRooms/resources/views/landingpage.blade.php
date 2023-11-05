@extends('layouts.app')

@section('content')

@auth
    <a href="{{ route('hotels.create') }}" class="btn-create-hotel btn-form btn btn-light">Host a new Hotel</a>
@endauth

<div id="hotels" class="hotels">
    <div class="container-hotels">
        @foreach($hotels as $hotel)
        <div class="hotel-box">
            <div class="hotel-image">
                @if($hotel->image_url == '')
                    <img src="https://hryoutest.in.ua/uploads/images/default.jpg" alt="File wasn't uploaded">        
                @else
                    <img src="{{ asset($hotel->image_url) }}" alt="{{ $hotel->name }}">       
                @endif
            </div>
            <div class="hotel-content">
                <a href="{{ route('hotels.show', ['hotel' => $hotel]) }}"><h3>{{ $hotel->name }}</h3></a> 
                <ul>
                    <li class="hotel-info">
                        <a href="{{ $hotel->website }}" target="_blank"><ion-icon class="hotel-icon" name="globe-outline"></ion-icon>{{ $hotel->website }}</a>
                    </li>
                    <li class="hotel-info">
                        <ion-icon class="hotel-icon" name="location-outline"></ion-icon>{{ $hotel->location }}
                    </li>
                    <li class="hotel-info">
                        <a href="https://wa.me/{{$hotel->phone}}" target="_blank"><ion-icon class="hotel-icon" name="call"></ion-icon>{{ $hotel->phone }}</a>
                    </li>
                    <li class="hotel-info">
                        <a href=""><ion-icon class="hotel-icon" name="bed-outline"></ion-icon>{{ ('Rooms Avaluable') }}</a>
                    </li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection