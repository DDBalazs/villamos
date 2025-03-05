@extends('layout')
@section('content')
<main class="container pb-2">
    <p class="fs-5 mt-3">Tram-train</p>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th style="width: 10%; text-align: center">Járatszám</th>
                <th>Útvonal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tramtrain as $row)
                <tr>
                    <td class="text-center"><a href="/jarat/{{ $row->jaratok_id }}">{{ $row->jaratszam }}</a></td>
                    <td>{{ $row->jarat_leiras }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p class="fs-5">Villamos</p>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th style="width: 10%; text-align: center">Járatszám</th>
                <th>Útvonal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($villamos as $row)
                <tr>
                    <td class="text-center"><a href="/jarat/{{ $row->jaratok_id }}">{{ $row->jaratszam }}</a></td>
                    <td>{{ $row->jarat_leiras }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p class="fs-5">Trolibusz</p>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th style="width: 10%; text-align: center">Járatszám</th>
                <th>Útvonal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trolibusz as $row)
                <tr>
                    <td class="text-center"><a href="/jarat/{{ $row->jaratok_id }}">{{ $row->jaratszam }}</a></td>
                    <td>{{ $row->jarat_leiras }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
