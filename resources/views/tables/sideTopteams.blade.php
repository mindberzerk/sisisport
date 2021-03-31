{{--Top Teams--}}
<div>
    <h2 class="side-title"><a style="color: rgb(8,59,236);" href="{{ url('/topteams') }}">Top Teams</a></h2>

    <div class="title-line">
        <div class="side-line"></div>
        <div class="circle"></div>
    </div>
    <table class="table ">
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
    &nbsp;&nbsp;
    <div class="container ">
        <a type="button " class="btn btn-outline-warning" href="{{ url('/topteams') }}">more</a>
    </div>

</div>


{{--End of Top Teams--}}


