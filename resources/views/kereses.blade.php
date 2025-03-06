@extends('layout')
@section('content')

        <main class="container pb-2">
            <div class="row d-flex justify-content-center align-items-center my-4">
                <div class="col-md-8">
                    <div class="search">
                        <form action="/kereses" method="POST">
                            @csrf
                            <i class="fa fa-search"></i>
                            <input type="text" name="hiba" class="form-control" placeholder="Megálló neve, pl: Somogyi utca">
                            <button class="btn btn-dark" type="submit">Keresés</button>
                            @error('hiba')
                                <spam class="text-danger">{{$message}}</spam>
                            @enderror
                        </form>
                    </div>
                </div>
            </div>
            @isset($result)
                @if (count($result)>0)
                    <p class="fs-5">A keresés eredménye:</p>
                    @foreach ($result as $row)
                        <p class="fs-5"><a href="/megallo/{{$row->megallo_id}}">{{$row->nev}}</a></p>
                    @endforeach
                @else
                    <p class="fs-5">A keresés nem hozott eredményt</p>
                @endif
            @endisset

        </main>

@endsection
