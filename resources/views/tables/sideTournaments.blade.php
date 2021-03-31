{{--Tournaments--}}
<div>
    <h2 class="side-title"><a style="color: rgb(8,59,236);" href="{{ url('/tournaments') }}">Tournaments</a></h2>

    <div class="title-line">
        <div class="side-line"></div>
        <div class="circle"></div>
    </div>

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
    &nbsp;&nbsp;
    <div class="container-fluid">
        <a type="button" class="btn btn-outline-warning" href="{{ url('/tournaments') }}">more</a>
    </div>

</div>

{{--end of Tournaments--}}
