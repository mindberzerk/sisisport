@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="side-info">
                    {{--Tournaments--}}
                    <h2 class="side-title"><a style="color: rgb(8,59,236);"
                                              href="{{ url('/tournaments') }}">Tournaments</a>
                    </h2>

                    <table class="table table-striped">
                        <tbody>

                        @foreach($tournaments as $data)
                            <tr>
                                <td>{{ $data->tournament_id }}. {{ $data->name }}</td>
                            </tr>
                            <tr>
                                <td class="cup-name"> {{ $data->country }} </td>
                            </tr>
                            <tr>
                                <td class="cup-name"> {{ $data->league }} </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="container-sm">
                        {!! $tournaments->links() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                @include('Betslip')

                <div class="container-fluid">
                    <a type="button" class="btn btn-outline-warning" href="{{ url('/nowplaying') }}">Now Playing</a>
                    &nbsp;&nbsp;
                    <a type="button" class="btn btn-primary" href="{{ url('/topteams') }}">Topteams</a>
                </div>

            </div>

        </div>
    </div>
@endsection
