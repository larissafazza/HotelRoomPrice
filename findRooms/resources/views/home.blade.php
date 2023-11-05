@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Your account has been created!') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('hotels.create') }}"><button type="button" class="add-hotel-btn btn btn-primary">Click here and host your hotel</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
