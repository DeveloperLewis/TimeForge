@extends('layout')

@section('content')
    <x-navbar></x-navbar>

    <div class="flex h-screen border-t border-gray-600">
        <div class="bg-custom-blue-light text-lg md:text-4xl flex flex-col whitespace-nowrap pt-5">
            <a href="#" class="cursor-default pointer-events-none text-xs py-1 text-gray-300 font-black px-5 my-1 md:px-10">TIME TRACKING</a>
            <a href="/dashboard/activities" class="py-2 font-light p-5 md:px-10 bg-custom-blue-medium">ACTIVITIES</a>
            <a href="/dashboard/habits" class="py-2 font-light hover:bg-custom-blue-medium p-5 md:px-10 hover:bg-custom-blue-medium transition duration-250 ease-in">HABITS</a>
            <a href="#" class="cursor-default pointer-events-none text-xs py-1 text-gray-300 font-black mt-5 px-5 my-1 md:px-10">ANALYTICS</a>
            <a href="/dashboard/calendar" class="py-2 font-light hover:bg-custom-blue-medium p-5 md:px-10 hover:bg-custom-blue-medium transition duration-250 ease-in">CALENDAR</a>

            <a href="#" class="cursor-default pointer-events-none text-xs py-1 text-gray-300 font-black mt-5 px-5 my-1 md:px-10">EPOCHIUM</a>
            <a href="/dashboard/calendar" class="py-2 font-light hover:bg-custom-blue-medium p-5 md:px-10 hover:bg-custom-blue-medium transition duration-250 ease-in">CHARACTER</a>
            <a href="/dashboard/graphs" class="py-2 font-light hover:bg-custom-blue-medium p-5 md:px-10 hover:bg-custom-blue-medium transition duration-250 ease-in">SKILLS</a>
            <a href="/dashboard/graphs" class="py-2 font-light hover:bg-custom-blue-medium p-5 md:px-10 hover:bg-custom-blue-medium transition duration-250 ease-in">INVENTORY</a>
            <a href="/dashboard/graphs" class="py-2 font-light hover:bg-custom-blue-medium p-5 md:px-10 hover:bg-custom-blue-medium transition duration-250 ease-in">SHOP</a>

            <a href="#" class="cursor-default pointer-events-none text-xs py-1 text-gray-300 font-black mt-5 px-5 my-1 md:px-10">OTHER</a>
            <a href="/dashboard/graphs" class="py-2 font-light hover:bg-custom-blue-medium p-5 md:px-10 hover:bg-custom-blue-medium transition duration-250 ease-in">ACCOUNT</a>
            <a href="/dashboard/graphs" class="py-2 font-light hover:bg-custom-blue-medium p-5 md:px-10 hover:bg-custom-blue-medium transition duration-250 ease-in">SETTINGS</a>
        </div>

        <div class="bg-cover bg-no-repeat w-full" style="background-image: url('{{asset('/images/dashboard_background_01.webp')}}');">
            <form>
                @csrf
                <input type="text" name="activity" class="text-black">
                <input type="text" name="category" class="text-black">
                <button class="bg-white text-black">Add</button>
            </form>
        </div>
    </div>
@endsection
