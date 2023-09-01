<div>
    <nav>
        <div class="flex justify-between p-5 md:mx-20 text-xl">
            <div>
                <a href="/" class="text-3xl">Time <span class="font-semibold">Forge</span></a>

                <div id="mobile-links" hidden>
                    <div class="flex flex-col text-center mt-3">
                        <a href="/" @if (Route::is('index')) {{ 'class=font-black' }}@endif>Home</a>
                        <a href="/features" @if (Route::is('features')) {{ 'class=font-black' }}@endif>Features</a>
                        <a href="/pricing" @if (Route::is('pricing')) {{ 'class=font-black' }}@endif>Pricing</a>
                        @auth
                            <a href="/dashboard" @if (Route::is('dashboard')) {{ 'class=font-black' }}@endif>Dashboard</a>

                            <form method="POST" action="/user/logout" class="inline">
                                @csrf
                                <x-ui.forms.button class="mt-2">Logout</x-ui.forms.button>
                            </form>

                        @else
                            <a href="/user/login">Login</a>
                            <a href="/user/register">Register</a>
                        @endauth
                    </div>
                </div>
            </div>

            <div>
                <i class="fa-solid fa-bars cursor-pointer" id="hamburger-menu" hidden></i>

                <div id="desktop-links">
                    <a href="/" class="ml-5 @if (Route::is('index')) {{ "font-black" }}@endif">Home</a>
                    <a href="/features" class="ml-5 @if (Route::is('features')) {{ "font-black" }}@endif">Features</a>
                    <a href="/pricing" class="ml-5 @if (Route::is('pricing')) {{ "font-black" }}@endif">Pricing</a>
                    @auth
                        <a href="/dashboard" class="ml-5 @if (Route::is('dashboard')) {{ "font-black" }}@endif">Dashboard</a>

                        <form method="POST" action="/user/logout" class="inline">
                            @csrf
                            <x-ui.forms.button class="ml-5">Logout</x-ui.forms.button>
                        </form>

                    @else
                        <x-ui.general.button href="/user/login" class="ml-5">Login</x-ui.general.button>
                        <x-ui.general.button href="/user/register" class="ml-5">Register</x-ui.general.button>
                    @endauth
                </div>
            </div>
        </div>

        <script defer>
            const hamburgerMenu = document.getElementById("hamburger-menu")
            const desktopLinks = document.getElementById('desktop-links')
            const mobileLinks = document.getElementById('mobile-links')
            checkBrowserWidthAndDisplayHamburgerMenu()

            window.addEventListener('resize', displayHamburgerMenu)
            hamburgerMenu.addEventListener('click', displayLinks)
            let hamburgerMenuOpened = false;

            function checkBrowserWidthAndDisplayHamburgerMenu()
            {
                let initialBrowserWidth = window.innerWidth

                if (initialBrowserWidth < 1024)
                {
                    hamburgerMenu.hidden = false
                    desktopLinks.hidden = true
                }
            }

            function displayHamburgerMenu()
            {
                let browserWidth = window.innerWidth
                const hamburgerMenu = document.getElementById("hamburger-menu")

                if (browserWidth < 1024)
                {
                    hamburgerMenu.hidden = false
                    desktopLinks.hidden = true
                    return;
                }

                hamburgerMenu.hidden = true
                desktopLinks.hidden = false
                mobileLinks.hidden = true
            }

            function displayLinks()
            {
                hamburgerMenuOpened = !hamburgerMenuOpened;
                mobileLinks.hidden = !hamburgerMenuOpened;
            }
        </script>
    </nav>
</div>
