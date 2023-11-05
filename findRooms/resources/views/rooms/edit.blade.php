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
                    <form class="hotel-form" method="post" action="{{ route('rooms.update', $room->id) }}" id="create-form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h3>Room {{ $room->type }}</h3>
                        <div class="form-group form-div">
                            <label class="label">Room Type</label>
                            <input value="{{ $room->type }}" class="input-form form-control" id="form-type" class="form-input" name="type" type="text">
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Description</label>
                            <input value="{{ $room->description }}" class="input-form form-control" id="form-description" class="form-input" name="description" type="text">
                        </div>
                        <div class="form-group form-div">
                            <label class="label">Number of Rooms</label>
                            <input value="{{ $room->number_of_rooms }}" class="input-form form-control" type="number" id="form-number-of-rooms" name="number" pattern="\d*">
                        </div>
                        <button type="submit" name="submit" class="btn-form btn btn-light">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection