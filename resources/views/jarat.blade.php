@extends('layout')
@section('content')
<main class="container pb-2">
    <p class="line-p fs-5 mt-3">
            <span class="line-number" style="background-color: {{ $jarat->hatterszin }};">
                <span style="color: {{ $jarat->betuszin }}">{{ $jarat->jaratszam }}</span>
            </span>
            {{$jarat->utvonal}}
    </p>
    <div class="row">
        <div class="col-md">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th colspan="2">Megállók oda:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($megallok as $row)
                        @if($row->utirany == "o")
                        <tr>
                            <td style="width: 10% text-align: center">
                                {{$sv_o++}}
                            </td>
                            <td>
                                <a href="/megallo/{{$row->megallo_id}}">{{$row->nev}}</a>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th colspan="2">Megállók vissza:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($megallok as $row)
                        @if($row->utirany == "v")
                        <tr>
                            <td style="width: 10%">
                                {{$sv_v++}}
                            </td>
                            <td>
                                <a href="/megallo/{{$row->megallo_id}}">{{$row->nev}}</a>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</main>
@endsection
