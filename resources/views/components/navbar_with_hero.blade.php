<div>
    <div class="bg-cover bg-no-repeat bg-fixed" style="background-image: url('{{asset('/images/hero.png')}}');">

        <!--
            Navbar
        -->
        <x-navbar></x-navbar>

        <!--
            Hero text
        -->
        <div class="flex flex-col items-center text-center mt-20 md:mt-40 p-5 pb-20 xl:pb-40">
            <p class="text-8xl p-3">Time <span class="font-semibold">Forge</span></p>
            <p class="text-md">Forge your skills and develop your new positive habits.</p>

            <form action="/user/register" method="get">
                <x-ui.forms.button class="border-2 px-4 py-2 mt-5">Start Now</x-ui.forms.button>
            </form>
        </div>
    </div>
</div>
