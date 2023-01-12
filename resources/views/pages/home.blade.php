@extends('app')

@section('title')

@section('content')

    <img src="{{asset('images/benevel.png')}}" alt="BENIN drapeau" width="250px" height="150" class="mt-12 rounded shadow-md">

    <h1 class="mt-5 text-3xl mb:text-5xl font-bold text-indigo-500">Hello from Cotonou!</h1>

    <p class="mt-2 text-lg text-gray-700">Aujourd'hui nous sommes le : <span class="text-teal-600">{{date('d/M/Y')}}</span>.</p>
    <p class="mt-2 text-lg text-gray-700">Il est exactement <span class="text-teal-600">{{date('h:i A')}}</span>.</p>
@endsection
