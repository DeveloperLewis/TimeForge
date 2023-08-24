<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{asset('images/favicon.ico')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400;500;600;700;800&family=
        Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        lato: ['Lato'],
                    },
                    colors: {
                        'custom-blue-dark': '#0A0D12',
                        'custom-blue-medium': '#11161A',
                        'custom-blue-light': '#181E24',
                    }
                }
            }
        }
    </script>
    <title>TimeForge</title>
</head>

<body class="font-lato text-white bg-custom-blue-dark">
    <!--
        Hero Image with navbar
    -->
    <div class="bg-cover bg-no-repeat bg-fixed" style="background-image: url('{{asset('/images/hero.png')}}');">

        <!--
            Navbar
        -->
        <nav>
            <div class="flex justify-between p-6 md:mx-20 text-xl">
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
                        <a href="/user/login" class="ml-5 px-2 py-1 border rounded-md hover:bg-white hover:text-black text-center">Login</a>
                        <a href="/user/register" class="ml-5 px-2 py-1 border rounded-md hover:bg-white hover:text-black text-center">Register</a>
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


    <!--
        Injected Content
    -->
    <main>
        <div class="mt-10 xl:mx-40">
            <div class="rounded-t-lg bg-custom-blue-medium">
                @yield('content')
            </div>
        </div>
    </main>

    <footer>
        <div class="text-center bg-custom-blue-light xl:mx-40 p-5">
            <p class="text-gray-500">© Copyright 2023 of Lewis Design</p>
        </div>
    </footer>
</body>
</html>
