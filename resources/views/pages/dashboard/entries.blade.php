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
            <form method="post" action="/entry/add">
                @csrf

                <div class="flex justify-center">
                    <div class="p-5 md:w-3/4 lg:w-2/4 w-full">
                        <p class="py-1 text-2xl font-bold my-2">NEW ENTRY</p>
                        <div class="flex">
                            <x-ui.forms.input type="text" name="name" placeholder="Working on..."></x-ui.forms.input>
                            <p class="text-blue-300 text-sm text-center mx-2 md:mx-3">Category<i class="fa-solid fa-chevron-down ml-2 fa-lg"></i></p>
                            <x-ui.forms.button-filled class="w-1/4"><i class="fa-regular fa-clock"></i></x-ui.forms.button-filled>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
