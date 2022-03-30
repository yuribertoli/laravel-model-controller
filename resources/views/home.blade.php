{{-- estendo il layout di default definito in html5 --}}
@extends('layouts.default')

{{-- cambio il titolo della pagina in "Movies", che saraà visualizzato scrivendo dentro al segnaposto del layout @yield('pageTitle') --}}
@section('pageTitle', 'Movies')

{{-- utilizzo il segnaposto @yield('content') nel layout esteso per inserire il contenuto della pagina --}}
@section('content')
    
    {{-- @dump($movies)  --}}{{-- visualizzo il contenuto del database --}}

    <div class="cards">

        <ul>

            {{-- ciclo tutti gli elementi dell'array movies --}}
            @foreach ($movies as $movie)

            <li>

                <p>{{$movie->title}} ("{{$movie->original_title}}" in original language), is an {{$movie->nationality}} movie released on {{$movie->date}}, the movie was rated by the audience with an average rating of {{$movie->vote}}</p>

            </li>

            @endforeach

        </ul>

    </div>

@endsection