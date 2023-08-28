<div>
    <div class="bg-cover bg-no-repeat bg-fixed" style="background-image: url('{{asset('/images/hero.png')}}');">

        <!--
            Navbar
        -->
        <x-navbar />

        <!--
            Hero text
        -->
        <div class="flex flex-col items-center text-center mt-20 md:mt-40 p-5 pb-20 xl:pb-40">
            <p class="text-8xl p-3">Time <span class="font-semibold">Forge</span></p>
            <p class="text-md">Forge your skills and develop your new positive habits.</p>

            <form action="/user/register" method="get">
                <button type="submit" class="mt-5 border-2 p-2 px-4 rounded-md hover:bg-white hover:text-black">Start Now</button>
            </form>
        </div>
    </div>
</div>
