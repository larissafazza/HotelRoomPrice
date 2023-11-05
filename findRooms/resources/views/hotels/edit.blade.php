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
                    <form class="hotel-form" method="post" action="{{ route('hotels.update', $hotel->id) }}" id="create-form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input class="input-form form-control" type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <h3>{{ $hotel->name }}</h3>
                        <div class="form-group form-div form-div-img">
                            <img src="{{ asset($hotel->image_url) }}" alt="">
                        </div>
                        <div class="form-group form-div">
                                <label for="image" class="label">Change Image</label>
                                <input class="input-form form-control" type="file" id="form-image" name="image" accept="image/*">
                            </div>
                        <div class="form-group form-div">
                            <label class="label">Hotel Name</label>
                            <input value="{{ $hotel->name }}" class="input-form form-control" id="form-name" class="form-input" name="name" type="text">
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Location</label>
                            <input value="{{ $hotel->location }}" class="input-form form-control" id="form-street" class="form-input" name="location" type="text">
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Phone</label>
                            <input value="{{ $hotel->phone }}" class="input-form form-control" type="number" id="form-phone" name="phone" pattern="\d*">
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Hotel Website URL</label>
                            <input value="{{ $hotel->website }}" class="input-form form-control" type="url" id="website" name="website">
                        </div>
                        <button type="submit" name="submit" class="btn-form btn btn-light">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection