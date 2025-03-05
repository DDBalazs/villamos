@extends('layout')
@section('content')

<main class="container pb-2">
    <h1 class="text-center display-6 py-3">{{$nev->nev}}</h1>
    <p class="text-center fs-5">Járatok:</p>
    <p class="line-p fs-5 mt-3 text-center">
        @foreach ($jaratok as $row)
            <a class="line-number" style="background-color: {{$row->hatterszin}};" href="/jarat/{{$row->jaratok_id}}"><span style="color: {{$row->betuszin}}">{{$row->jaratszam}}</span></a>
        @endforeach
    </p>
</main>

@endsection
