    @extends('layout')
    @section('content')
    <main class="container pb-2">
        <p class="line-p fs-5 mt-3 text-center">
            @foreach ($result as $row)
                <a class="line-number" style="background-color: {{ $row->hatterszin }};" href="/jarat/{{ $row->jaratok_id }}"><span style="color: {{ $row->betuszin }}">{{ $row->jaratszam }}</span></a>
            @endforeach
        </p>
        <p class="fs-5">
            <img src="{{ asset('img/map_of_szeged.png') }}" alt="map_of_szeged.png" class="w-100">
        </p>
    </main>
    @endsection