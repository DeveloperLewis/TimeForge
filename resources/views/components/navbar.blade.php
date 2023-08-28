<div>
    <nav>
        <div class="flex justify-between p-5 md:mx-20 text-xl">
            <div>
                <a href="/" class="text-3xl">Time <span class="font-semibold">Forge</span></a>

                <div id="mobile-links" hidden>
                    <div class="flex flex-col text-center">

                        <a href="/">Home</a>
                        <a href="/features">Features</a>
                        <a href="/pricing">Pricing</a>
                        <a href="/user/login">Login</a>
                        <a href="/user/register">Register</a>
                    </div>
                </div>
            </div>

            <div>
                <i class="fa-solid fa-bars cursor-pointer" id="hamburger-menu" hidden></i>

                <div id="desktop-links">
                    <a href="/" class="ml-5">Home</a>
                    <a href="/features" class="ml-5">Features</a>
                    <a href="/pricing" class="ml-5">Pricing</a>
                    @auth
                        <form method="POST" action="/user/logout" class="inline">
                            @csrf
                            <button type="submit" class="ml-5 px-2 py-1 border rounded-md hover:bg-white hover:text-black text-center">Logout</button>
                        </form>

                    @else
                        <a href="/user/login" class="ml-5 px-2 py-1 border rounded-md hover:bg-white hover:text-black text-center">Login</a>
                        <a href="/user/register" class="ml-5 px-2 py-1 border rounded-md hover:bg-white hover:text-black text-center">Register</a>
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
