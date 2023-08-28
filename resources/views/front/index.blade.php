@extends('layout')

@section('content')
    <x-navbar-with-hero />
    <x-container>
        <!--
           Banner Separator
        --->
        <div class="text-center">
            <p class="text-6xl md:text-8xl pt-12">The Ultimate <span class="font-bold">Productivity</span> Game</p>
            <p class="text-xl  text-center p-4">An easy way to stay commited and on task. Push yourself further
                in a rewarding way</p>
        </div>

        <!--
            Info Panels
        --->
        <div class="mt-10 p-5">
            <div class="md:flex md:flex-col md:justify-center md:items-center">
                <div class="mt-10 sm:flex sm:justify-center md:w-3/5">
                    <img src="{{asset('/images/homepage_character_02.png')}}" height="375" width="375" class="rounded-lg">

                    <div class="2xl:ml-20 p-5">
                        <p class="text-2xl md:text-4xl pb-4 truncate">Customize Your Character</p>
                        <p>
                            Aenean at eros vitae nulla faucibus viverra in a ex.
                            Pellentesque sit amet leo elementum turpis dignissim egestas quis eu urna.
                            Proin ultrices dui imperdiet odio blandit, eget fringilla mauris tristique.
                            Nam feugiat sollicitudin nunc ut pharetra.
                            Pellentesque fermentum magna non sem tempor luctus. Sed tincidunt,
                            ipsum posuere condimentum pretium, nisi magna ornare ante, id vestibulum lectus justo eget ligula.
                        </p>
                    </div>
                </div>

                <div class="mt-10 flex flex-col sm:flex sm:flex-row md:justify-center md:w-3/5">
                    <div class="md:mr-20 p-5 md:text-right order-last md:order-first">
                        <p class="text-2xl md:text-4xl pb-4 truncate">Progress Your Character</p>
                        <p>
                            Aenean at eros vitae nulla faucibus viverra in a ex.
                            Pellentesque sit amet leo elementum turpis dignissim egestas quis eu urna.
                            Proin ultrices dui imperdiet odio blandit, eget fringilla mauris tristique.
                            Nam feugiat sollicitudin nunc ut pharetra.
                            Pellentesque fermentum magna non sem tempor luctus. Sed tincidunt,
                            ipsum posuere condimentum pretium, nisi magna ornare ante, id vestibulum lectus justo eget ligula.
                        </p>
                    </div>

                    <img src="{{asset('/images/homepage_character_01.png')}}" height="375" width="375" class="rounded-lg order-first md:order-last">
                </div>

                <div class="mt-10 sm:flex sm:justify-center md:w-3/5">
                    <img src="{{asset('/images/homepage_character_03.png')}}" height="375" width="375" class="rounded-lg">
                    <div class="md:ml-20 p-5">
                        <p class="text-2xl md:text-4xl pb-4 truncate">Become Your Character</p>
                        <p>
                            Aenean at eros vitae nulla faucibus viverra in a ex.
                            Pellentesque sit amet leo elementum turpis dignissim egestas quis eu urna.
                            Proin ultrices dui imperdiet odio blandit, eget fringilla mauris tristique.
                            Nam feugiat sollicitudin nunc ut pharetra.
                            Pellentesque fermentum magna non sem tempor luctus. Sed tincidunt,
                            ipsum posuere condimentum pretium, nisi magna ornare ante, id vestibulum lectus justo eget ligula.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-10 bg-custom-blue-light text-center mt-10">
            <!--
                Banner Separator
            --->
            <div>
                <p class="text-5xl">Virtual <span class="font-bold">Progression</span> Keep You Motivated</p>
            </div>

            <!--
                Info Icons
            --->
            <div class="md:flex md:justify-between mt-10 p-5">
                <div class="px-10 text-center mt-5">
                    <div class="flex justify-center p-2">
                        <img src="{{asset('/images/homepage_icon_04.webp')}}" height="175" width="175">
                    </div>
                    <p class="text-xl">A Second You</p>
                    <p class="text-gray-400 text-sm">
                        lorem ipsum dolor sit amet, consectetur adipiscing elit extra stuff and Vestibulum imperdiet enim nisi,
                        ac feugiat metus sollicitudin sit amet.
                    </p>
                </div>

                <div class="px-10 text-center mt-5">
                    <div class="flex justify-center p-2">
                        <img src="{{asset('/images/homepage_icon_02.webp')}}" height="175" width="175">
                    </div>
                    <p class="text-xl">Consistently Improve</p>
                    <p class="text-gray-400 text-sm">
                        lorem ipsum dolor sit amet, consectetur adipiscing elit extra stuff and Vestibulum imperdiet enim nisi,
                        ac feugiat metus sollicitudin sit amet.
                    </p>
                </div>

                <div class="px-10 text-center mt-5">
                    <div class="flex justify-center p-2">
                        <img src="{{asset('/images/homepage_icon_01.webp')}}" height="175" width="175">
                    </div>
                    <p class="text-xl">Addicting Accountability</p>
                    <p class="text-gray-400 text-sm">
                        lorem ipsum dolor sit amet, consectetur adipiscing elit extra stuff and Vestibulum imperdiet enim nisi,
                        ac feugiat metus sollicitudin sit amet.
                    </p>
                </div>

                <div class="px-10 text-center mt-5">
                    <div class="flex justify-center p-2">
                        <img src="{{asset('/images/homepage_icon_05.webp')}}" height="175" width="175">
                    </div>
                    <p class="text-xl">Built For Fun</p>
                    <p class="text-gray-400 text-sm">
                        lorem ipsum dolor sit amet, consectetur adipiscing elit extra stuff and Vestibulum imperdiet enim nisi,
                        ac feugiat metus sollicitudin sit amet.
                    </p>
                </div>
            </div>
        </div>

        <!--
            Footer
        -->
        <div class="mt-10 pb-10 flex flex-col justify-center items-center">
            <div class="flex justify-center items-center w-full md:w-3/5">
                <div class="2xl:ml-20 p-5 text-center">
                    <p class="text-4xl pb-4">Ready To Reach Your Goals?</p>
                    <p class="text-center p-2">
                        Aenean at eros vitae nulla faucibus viverra in a ex.
                        Pellentesque sit amet leo elementum turpis dignissim egestas quis eu urna.
                        Proin ultrices dui imperdiet odio blandit, eget fringilla mauris tristique.
                        Nam feugiat sollicitudin nunc ut pharetra.
                        Pellentesque fermentum magna non sem tempor luctus. Sed tincidunt,
                        ipsum posuere condimentum pretium, nisi magna ornare ante, id vestibulum lectus justo eget ligula.
                        Nam feugiat sollicitudin nunc ut pharetra.
                        Pellentesque fermentum magna non sem tempor luctus. Sed tincidunt,
                        ipsum posuere condimentum pretium, nisi magna ornare ante, id vestibulum lectus justo eget ligula.
                    </p>

                    <div class="mt-5 flex justify-center">
                        <a href="/user/register" class="p-2 border-2 rounded-md hover:text-gray-200">Start today for free</a>
                    </div>
                </div>

                <img src="{{asset('/images/homepage_horse.webp')}}" width="400" class="rounded-lg hidden min-[1700px]:flex">
            </div>
        </div>
    </x-container>

    <footer id="footer">
        <div class="text-center bg-custom-blue-light xl:mx-40 p-5">
            <p class="text-gray-500">© Copyright 2023 of Lewis Design</p>
        </div>
    </footer>
@endsection
