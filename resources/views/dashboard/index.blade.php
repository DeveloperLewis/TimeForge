@extends('layout')

@section('content')
    <x-navbar></x-navbar>

    <div class="flex h-screen">
        <div class="bg-custom-blue-light text-lg md:text-4xl flex flex-col whitespace-nowrap p-5">
            <a href="#" class="cursor-default pointer-events-none text-xs py-1 text-gray-300">TIME TRACKING</a>
            <a href="/dashboard/activities" class="pb-2">ACTIVITIES</a>
            <a href="/dashboard/habits" class="py-2">HABITS</a>
            <a href="#" class="cursor-default pointer-events-none text-xs py-1 text-gray-300">ANALYTICS</a>
            <a href="/dashboard/calendar" class="pb-2">CALENDAR</a>
            <a href="/dashboard/graphs" class="py-2">GRAPHS</a>
        </div>

        <div class="bg-custom-blue-medium w-full">
            <h1>some more area</h1>
        </div>
    </div>
@endsection
