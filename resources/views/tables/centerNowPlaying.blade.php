<!--Start of Center-->

<div class="row side-info">
    <table class="table table-dark bg-transparent mb-0">

        @foreach($nowplayings as $nowplayingdata)
            <thead>
            <tr>
                <th>
                    <h2 style="color: rgb(8,59,236);">{{$nowplayingdata->league}}</h2>
                    <h3 class="cup-name"> {{ $nowplayingdata->country }}</h3>
                    <h3 class="cup-name"> {{ $nowplayingdata->tournament }}</h3>
                </th>
                <th scope="col">1</th>
                <th scope="col">X</th>
                <th scope="col">2</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$nowplayingdata->team_a}}
                    <div>vs</div> {{$nowplayingdata->team_b}}</td>
                <br> <br>
                <td>(1)<br>
                    <button type="button" class="btn btn-outline-info" data-toggle="button"
                            aria-pressed="false">{{$nowplayingdata->odds}}</button>
                </td>
                <td>(x)<br>
                    <button type="button" class="btn btn-outline-info" data-toggle="button"
                            aria-pressed="false">{{$nowplayingdata->odds}}</button>
                </td>
                <td>(2)<br>
                    <button type="button" class="btn btn-outline-info" data-toggle="button"
                            aria-pressed="false">{{$nowplayingdata->odds}}</button>
                </td>
                <td><br>
                    <button type="button" class="btn btn-outline-success" data-toggle="button" aria-pressed="false">
                        more
                    </button>
                </td>
                <th class="cup-name"> {{ $nowplayingdata->time }}</th>
            </tr>
            @endforeach
            </tbody>
    </table>
    &nbsp;&nbsp;&nbsp;
    <div class="container-fluid">
        <a type="button" class="btn btn-outline-warning" href="{{ url('/nowplaying') }}">More Playing</a>
    </div>

</div>

<!--End of Center-->
