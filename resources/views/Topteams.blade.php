@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-6">
                <div class="side-info">
                    {{--Top Teams--}}
                    <h2 class="side-title"><a style="color: rgb(8,59,236);" href="{{ url('/topteams') }}">Top Teams</a>
                    </h2>

                    <table class="table now-playing">
                        <tbody>

                        @foreach($topteams as $data)
                            <tr>
                                <td>{{ $data->team }} &nbsp;&nbsp; Pts: <p class="cup-name">{{ $data->pts }}</p></td>
                            </tr>
                            <tr>
                                <td class="cup-name"> {{ $data->league }}</td>
                            </tr>
                            <tr>
                                <td class="cup-name"> {{ $data->country }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="container-sm">
                        {!! $topteams->links() !!}
                    </div>
                    {{--End of Top Teams--}}
                </div>
            </div>

            <div class="col-md-6">
                @include('Betslip')

                <div class="container-fluid">
                    <a type="button" class="btn btn-outline-warning" href="{{ url('/nowplaying') }}">Now Playing</a>
                    &nbsp;&nbsp;
                    <a type="button" class="btn btn-primary" href="{{ url('/tournaments') }}">Tournaments</a>
                </div>

            </div>

        </div>
    </div>
@endsection


