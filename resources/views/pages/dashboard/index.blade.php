@extends('pages.layout')

@section('content')
    <x-navbar></x-navbar>

    <div class="flex h-screen border-t border-gray-600">
        <div class="bg-custom-blue-light text-lg md:text-4xl flex flex-col whitespace-nowrap pt-5">
            <a href="#" class="cursor-default pointer-events-none text-xs py-1 text-gray-300 font-black px-5 my-1 md:px-10">TIME TRACKING</a>
            <x-ui.general.dashboard-link href="/dashboard/activities">ACTIVITIES</x-ui.general.dashboard-link>
            <x-ui.general.dashboard-link href="/dashboard/habits">HABITS</x-ui.general.dashboard-link>

            <a href="#" class="cursor-default pointer-events-none text-xs text-gray-300 font-black mt-5 px-5 my-1 md:px-10">ANALYTICS</a>
            <x-ui.general.dashboard-link href="/dashboard/calendar">CALENDAR</x-ui.general.dashboard-link>

            <a href="#" class="cursor-default pointer-events-none text-xs text-gray-300 font-black mt-5 px-5 my-1 md:px-10">EPOCHIUM</a>
            <x-ui.general.dashboard-link href="/dashboard/character">CHARACTER</x-ui.general.dashboard-link>
            <x-ui.general.dashboard-link href="/dashboard/skills">SKILLS</x-ui.general.dashboard-link>
            <x-ui.general.dashboard-link href="/dashboard/inventory">INVENTORY</x-ui.general.dashboard-link>
            <x-ui.general.dashboard-link href="/dashboard/shop">SHOP</x-ui.general.dashboard-link>

            <a href="#" class="cursor-default pointer-events-none text-xs text-gray-300 font-black mt-5 px-5 my-1 md:px-10">OTHER</a>
            <x-ui.general.dashboard-link href="/dashboard/account">ACCOUNT</x-ui.general.dashboard-link>
            <x-ui.general.dashboard-link href="/dashboard/settings">SETTINGS</x-ui.general.dashboard-link>
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
