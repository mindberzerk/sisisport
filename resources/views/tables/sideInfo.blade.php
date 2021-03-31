<!--The Start of Side Information-->

<div class="side-info">
    <h2 class="side-title"><a style="color: rgb(8,59,236);" href="{{ url('/nowplaying') }}">Now Playing</a></h2>

    <div class="title-line">
        <div class="side-line"></div>
        <div class="circle"></div>
    </div>

    <table class="table now-playing">
        <tbody>
        @foreach($nowplayings as $nowplayingdata)
            <tr>
                <td>{{$nowplayingdata->team_a}}
                    <br>
                    <p>vs</p> {{$nowplayingdata->team_b}}

                </td>
                <td>{{$nowplayingdata->time}}</td>
            </tr>
            <tr>
                <td class="cup-name" href="{{ url('/tournaments') }}">{{$nowplayingdata->league}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    &nbsp;&nbsp;
    <div class="container ">
        <a type="button " class="btn btn-outline-warning align-content-end" href="{{ url('/nowplaying') }}">more</a>
    </div>

    {{--End of nowplaying--}}

    @include('tables.sideTournaments')

    @include('tables.sideTopteams')


</div>

<!--End of Side Information-->
