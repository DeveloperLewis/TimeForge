@extends('pages.layout')

@section('content')
    <x-navbar></x-navbar>

    <div class="flex h-screen border-t border-gray-600">
        <x-partials.dashboard_navbar></x-partials.dashboard_navbar>

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
