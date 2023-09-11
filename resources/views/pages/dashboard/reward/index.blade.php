@extends('pages.layout')

@section('content')
    <x-navbar></x-navbar>

    <div class="flex h-screen border-t border-gray-600">
        <x-partials.dashboard_navbar></x-partials.dashboard_navbar>

        <div class="bg-cover bg-no-repeat w-full" style="background-image: url('{{asset('/images/dashboard_background_01.webp')}}');">
            <div class="flex justify-center">
                <div class="p-10 md:w-3/4 lg:w-2/4 w-full bg-custom-blue-light mt-5 sm:rounded-lg flex justify-between">
                    <p class="text-lg">Rewards Shop</p>

                    <x-ui.general.button href="/reward/new" class="bg-white text-black">Create new</x-ui.general.button>
                </div>
            </div>

            <div class="flex justify-between mt-5 mx-4">
                @unless(count($rewards) == 0)
                    @foreach($rewards as $reward)
                        <div class="p-5 rounded-lg bg-custom-blue-light w-64">
                            <p class="font-semibold text-lg text-center">{{$reward->name}}</p>
                            <hr>
                            <p class="text-center font-bold text-xl mt-3">£{{$reward->cost}}</p>
                            <x-ui.general.button class="px-3 py-2 mt-2 bg-white text-black cursor-pointer float-left">Buy</x-ui.general.button>
                            <x-ui.general.button class="px-3 py-2 mt-2 bg-red-500 border-red-500  cursor-pointer float-right" href="/reward/{{$reward->id}}/edit">Edit</x-ui.general.button>
                        </div>
                    @endforeach
                @else
                    <p>No rewards found, try creating some!</p>
                @endunless
            </div>
        </div>
    </div>
@endsection
