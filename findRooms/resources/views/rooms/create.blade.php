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
                    {{ __('Insert the Room informations') }}
                </div>

                <div class="card-body">
                    <form class="hotel-form" method="post" action="{{ route('rooms.store') }}" id="create-form" enctype="multipart/form-data">
                        @csrf
                        <input class="input-form form-control" type="hidden" name="hotel_id" value="{{ $hotel->id }}">
                        <div class="form-group form-div">
                            <label class="label">Hotel</label>
                            <input class="input-form form-control" type="text" name="hotel_id" value="{{ $hotel->name }}" disabled>
                        </div>
                        <div class="form-group form-div">
                            <label for="type">Room Type</label>
                            <select id="form-type" name="type" class="form-control input-form" required>
                                <option value="" selected disabled>Select Room Type</option>
                                <option value="Single">Single</option>
                                <option value="Double">Double</option>
                                <option value="Suite">Suite</option>
                            </select>
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Description</label>
                            <input class="input-form form-control" id="form-description" class="form-input" name="description" type="text" required>
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Number of Rooms</label>
                            <input class="input-form form-control" type="number" id="form-number-of-rooms" name="number" pattern="\d*" required>
                        </div>
                        <button type="submit" name="submit" class="btn-form btn btn-light">Save</button>
                        <a href="{{ route('hotels.index') }}" class="btn-form btn-cancel btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection