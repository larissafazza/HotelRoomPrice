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
                        @csrf
                        <div class="form-group form-div">
                            <label class="label label-room">Hotel</label>
                            <h5>{{ $room->hotel->name }} - Hotel Type: {{ $room->type }}</h5>
                        </div>
                        <div class="form-group form-div">
                            <label class="label label-room">Description</label>
                            <h5>{{ $room->description }}</h5>
                        </div>
                        <div class="show-rooms">
                            @foreach($prices as $price)
                            <div class="price-box">
                                <h5>Dates:</h5>
                                <p> From {{ $price->start_date }} to {{ $price->end_date }}
                                <h4> US$ {{ $price->price }} / day<h4>
                                @auth
                                <a class="edit-price-buton btn btn-light" href="{{ route('prices.edit', ['price' => $price]) }}">Edit Price</a>
                                @endauth
                            </div>
                            @endforeach
                        </div>
                        @auth
                            <a href="{{ route('prices.create', ['room' => $room->id]) }}"><button type="button" name="create-price" class="btn-form btn btn-light">Create new Price date for this room</button></a>
                        @endauth
                    
                        <a class="btn-form btn btn-light btn-simulate" href="{{ route('prices.index', ['room' => $room->id]) }}">Simulate Budget</a>
                    @auth
                    <form id="delete-room-form-{{ $price->id }}" action="{{ route('prices.destroy', ['price' => $price->id]) }}" method="POST" style="display: none;">
                    <button type="button" name="delete" class="btn-form btn-delete btn btn-light" onclick="confirmDelete({{ $price->id }}, event)">Delete Price</button>
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