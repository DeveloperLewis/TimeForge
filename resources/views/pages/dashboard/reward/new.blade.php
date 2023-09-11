@extends('pages.layout')

@section('content')
    <x-navbar></x-navbar>

    <div class="flex h-screen border-t border-gray-600">
        <x-partials.dashboard_navbar></x-partials.dashboard_navbar>

        <div class="bg-cover bg-no-repeat w-full" style="background-image: url('{{asset('/images/dashboard_background_01.webp')}}');">
            <div class="flex justify-center items-center h-screen bg-cover bg-no-repeat bg-fixed">
                <div class="bg-custom-blue-light xl:w-1/4 py-5 sm:rounded-xl">
                    <div class="flex justify-center md:p-2 md:p-5">
                        <img src="{{asset('images/logo_150x150.webp')}}" alt="Website icon">
                    </div>

                    <div class="px-6">
                        <p class="text-center text-4xl mb-1 font-semibold">Create New Reward</p>
                    </div>

                    <div class="sm:my-7 mx-10">
                        <form method="post" action="/reward/new">
                            @csrf

                            <div class="mb-3">
                                <p class="py-1 text-lg">Name</p>
                                <x-ui.forms.input type="text" name="name" value="{{old('name')}}"></x-ui.forms.input>

                                @error('name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <p class="py-1 text-lg">Cooldown (1 = 1 minute)</p>
                                <x-ui.forms.input type="text" name="cooldown" value="{{old('cooldown')}}"></x-ui.forms.input>

                                @error('cooldown')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <p class="py-1 text-lg">Cost</p>
                                <x-ui.forms.input type="text" name="cost" value="{{old('cost')}}"></x-ui.forms.input>

                                @error('cost')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>


                            <div class="flex justify-between mt-5">
                                <x-ui.general.button href="/dashboard/rewards" class="float-start bg-white text-black px-5 py-2">Back</x-ui.general.button>
                                <x-ui.forms.button-filled class="px-5 w-auto">Create</x-ui.forms.button-filled>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
