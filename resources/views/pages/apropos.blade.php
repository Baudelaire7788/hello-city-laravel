@extends('app')

@section('title', 'À propos | '.config('app.name'))

@section('content')

<img src="{{asset('images/baud.jpg')}}" alt="BAUD Img" width="200px" height="250" class="mt-12 rounded-full shadow-md">

        <p class="mt-5 text-lg text-gray-700">Réalisé avec <span class="text-pink-400">&hearts;</span> par Baudelaire Gboyou.</p>

        <p class="mt-5 text-lg text-blue-500 underline"><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
@endsection
