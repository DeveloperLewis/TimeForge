@extends('pages.layout')

@section('content')
    <x-navbar></x-navbar>

    <div class="flex h-screen border-t border-gray-600">
        <x-partials.dashboard_navbar></x-partials.dashboard_navbar>

        <div class="bg-cover bg-no-repeat w-full" style="background-image: url('{{asset('/images/dashboard_background_01.webp')}}');">
           <p class="text-4xl text-center mt-10 font-semibold">WELCOME TO THE DASHBOARD</p>
        </div>
    </div>
@endsection
