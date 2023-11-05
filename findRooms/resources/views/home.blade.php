@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('You are welcome!') }}</div>
                @if(auth()->user()->hotels->count() > 0)
                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('hotels.index') }}"><button type="button" class="add-hotel-btn btn btn-primary">Click here to manage your hotels</button></a>
                @else
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="{{ route('hotels.create') }}"><button type="button" class="add-hotel-btn btn btn-primary">Click here and host your hotel</button></a>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
