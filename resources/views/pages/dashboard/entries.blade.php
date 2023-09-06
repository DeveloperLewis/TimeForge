@extends('pages.layout')

@section('content')
    <x-navbar></x-navbar>

    <div class="flex h-screen border-t border-gray-600">
        <x-partials.dashboard_navbar></x-partials.dashboard_navbar>

        <div class="bg-cover bg-no-repeat w-full" style="background-image: url('{{asset('/images/dashboard_background_01.webp')}}');">
            <div class="flex justify-center">
                <div class="p-10 md:w-3/4 lg:w-2/4 w-full bg-custom-blue-light mt-5 sm:rounded-lg">
                    <p class="py-1 text-2xl font-bold my-2">NEW ENTRY</p>
                    <form method="post" action="/entry/add">
                        @csrf
                        <div class="flex">
                            <x-ui.forms.input type="text" name="name" placeholder="Working on..."></x-ui.forms.input>
                            <p class="text-blue-300 text-sm text-center mx-2 md:mx-3">Category<i class="fa-solid fa-chevron-down ml-2 fa-lg"></i></p>
                            <x-ui.forms.button-filled class="w-16"><i class="fa-regular fa-clock"></i></x-ui.forms.button-filled>
                        </div>
                    </form>

                    <div class="mt-8">
                        @unless(count($entries) == 0)
                            @foreach($entries as $entry)
                                <div class="flex items-center mt-2 justify-between">
                                    <div class="flex items-center">
                                        <p class="font-bold text-lg pr-4">{{$entry->name}}</p>
                                        @if(isset($entry->category))
                                            <p class="pr-4">{{$entry->category}}</p>

                                        @else
                                            <p class="text-blue-300 text-sm text-center mx-2 md:mx-3 cursor-pointer">Add Category</p>
                                        @endif
                                    </div>

                                    <div class="flex items-center text-lg border-l pl-2">
                                        <p class="pr-4">{{date("H:i:s", $entry->time_performed)}}</p>
                                        <x-ui.general.button class="w-12 cursor-pointer"><i class="fa-regular fa-circle-play"></i></x-ui.general.button>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="py-1 text-2xl font-bold my-2 text-center mt-5">NO ENTRIES FOUND, TRY CREATING SOME!</p>
                        @endunless
                    </div>

                    {{$entries->links()}}
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
@endsection
