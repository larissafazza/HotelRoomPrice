@extends('layouts.app')

@section('title')
    Upload Your Hotel here!
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Edit the price and date informations') }}
                </div>

                <div class="card-body">
                    <form class="hotel-form" method="post" action="{{ route('prices.update', $price->id) }}" id="create-form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input class="input-form form-control" type="hidden" name="room_id" value="{{ $room->id }}">
                        <div class="form-group form-div">
                            <label class="label">Hotel</label>
                            <input class="input-form form-control" type="text" name="hotel_id" value="{{ $room->hotel->name }}" disabled>
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Room Type</label>
                            <input class="input-form form-control" type="text" name="room_id" value="{{ $room->type }}" disabled>
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Start date of this value</label>
                            <input value="{{ $price->start_date }}" class="input-form form-control" id="form-date" name="start_date" type="date" required>
                        </div>
                        <div class="form-group form-div">
                            <label class="label">End date of this value</label>
                            <input value="{{ $price->end_date }}" class="input-form form-control" id="form-date" name="end_date" type="date" required>
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Price</label>
                            <input value="{{ $price->price }}" class="input-form form-control" id="form-price" name="price" type="number" step="0.01" required>
                        </div>
                        <button type="submit" name="submit" class="btn-form btn btn-light">Save</button>
                        <a href="{{ route('prices.index', ['room' => $room->id]) }}" class="btn-form btn-cancel btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection