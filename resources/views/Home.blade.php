@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md">
                @include('tables.sideInfo')
            </div>

            <div class="col-md"
            @include('tables.centerNowPlaying')
        </div>

        <div class="col-md">
            @include('Betslip')
        </div>

    </div>
    </div>

@endsection
