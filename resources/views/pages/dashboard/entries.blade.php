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

                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <div class="mt-8">
                        @unless(count($entries) == 0)
                            @foreach($entries as $entry)
                                <div class="flex items-center mt-2 justify-between" >
                                    <div class="flex items-center">
                                        <p class="font-bold text-lg pr-4">{{$entry->name}}</p>
                                        @if(isset($entry->category))
                                            <p class="pr-4">{{$entry->category}}</p>

                                        @else
                                            <p class="text-blue-300 text-sm text-center mx-2 md:mx-3 cursor-pointer">Add Category</p>
                                        @endif
                                    </div>

                                    <div class="flex items-center text-lg border-l pl-2">
                                        <p class="pr-4" id="timer_{{$entry->entry_id}}">{{date("H:i:s", (floor($entry->time_performed / 1000)))}}</p>
                                        <x-ui.general.button class="w-12 cursor-pointer" id="button_{{$entry->entry_id}}" type="button" onclick="start_stop_timer({{$entry->entry_id}})"><i class="fa-regular fa-circle-play"></i></x-ui.general.button>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="py-1 text-2xl font-bold my-2 text-center mt-5">NO ENTRIES FOUND, TRY CREATING SOME!</p>
                        @endunless
                    </div>

                    <div class="mt-5">
                        {{$entries->links('pagination::tailwind')}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let current_button = null
        let current_timer = null
        let current_elapsed_time = null
        let current_start_time = null
        let current_hrs = null
        let current_mins = null
        let current_secs = null
        let current_interval = null

        let active_entry = document.getElementById("active_entry")

        //Warn user about leaving while tracking is active
        window.onbeforeunload = function() {
            if (current_elapsed_time != null)
            {
                return "Leaving";
            }
        };

        function start_stop_timer(id)
        {
            let timer = document.getElementById('timer_' + id)
            let button = document.getElementById('button_' + id)

            //Timer Started
            if (current_timer == null)
            {
                current_timer = timer
                current_button = button
                switch_icon("stop")
                current_elapsed_time = convert_to_ms(current_timer.innerText)
                current_start_time = Date.now() - current_elapsed_time

                current_interval = setInterval(update_time, 500)
            }

            //Timer Switched
            else if (current_timer !== timer)
            {
                clearInterval(current_interval)
                save_time(id)
                switch_icon("start")
                reset_variables()

                start_stop_timer(id)
            }

            //Timer Stopped
            else {
                switch_icon("start")
                clearInterval(current_interval)
                save_time(id)
                reset_variables()
            }
        }

        function save_time(id)
        {
            fetch('/entry/' + id + '/edit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    "X-CSRF-TOKEN": document.head.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    time_performed: current_elapsed_time,
                }),
            })
        }

        function reset_variables()
        {
            current_timer = null
            current_button = null
            current_elapsed_time = null;
            current_start_time = null;
            current_hrs = null;
            current_mins = null;
            current_secs = null;
        }

        function update_time()
        {
            current_elapsed_time = Date.now() - current_start_time

            //Displaying time
            current_secs = Math.floor((current_elapsed_time / 1000) % 60)
            current_mins = Math.floor((current_elapsed_time / (1000 * 60)) % 60)
            current_hrs = Math.floor((current_elapsed_time / (1000 * 60 * 60)))

            current_secs = pad(current_secs)
            current_mins = pad(current_mins)
            current_hrs = pad(current_hrs)

            current_timer.textContent = `${current_hrs}:${current_mins}:${current_secs}`

            function pad(unit)
            {
                return(("0") + unit).length > 2 ? unit : "0" + unit
            }
        }

        function convert_to_ms(time)
        {
            let array = time.split(":");
            let seconds = (parseInt(array[0], 10) * 60 * 60) + (parseInt(array[1], 10) * 60) + parseInt(array[2], 10)
            return seconds * 1000
        }

        function switch_icon(mode)
        {
            const startIconHtml = '<i class="fa-regular fa-circle-play"></i>'
            const stopIconHtml = '<i class="fa-solid fa-stop"></i>'

            switch (mode)
            {
                case "start":
                    current_button.innerHTML = startIconHtml;
                    break

                case "stop":
                    current_button.innerHTML = stopIconHtml;
                    break
            }
        }
    </script>
@endsection
