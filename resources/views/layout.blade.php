<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UrTweets.')</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container-blog px-12 py-8 lg:px-32">
        <div class="wrapper">
            <header>
                <nav class="responsive-nav relative z-10 flex flex-col  max-sm:block md:hidden max-lg:hidden">
                    <div class="flex items-center justify-between">
                        <h4 class="title text-xl font-bold">UrTweets.</h4>
                        <div class="flex items-center gap-4">
                            @if (auth()->check())
                                <div class="user-profile flex gap-2 items-center">
                                    <div class="pp w-7 h-7 bg-slate-300 rounded-full"></div>
                                    <h4 class="user text-sm font-semibold">@ {{ auth()->user()->username }}</h4>
                                </div>
                            @endif
                            <div class="hamburger-menu relative flex flex-col gap-2">
                                <span class="w-6 h-[1px] bg-black"></span>
                                <span class="w-6 h-[1px] bg-black"></span>
                            </div>
                        </div>
                    </div>
                    <ul class="sub-nav-responsive hidden absolute p-4 bg-neutral-50 rounded-lg w-full flex-col items-center mt-4 gap-2 justify-center">
                        <li><a class="{{ request()->routeIs('pages.index') ? 'font-bold' : '' }} text-sm hover:font-bold"
                                href="{{ route('pages.index') }}">Home</a></li>
                        <li><a class="{{ request()->routeIs('pages.myInsights') ? 'font-bold' : '' }} text-sm hover:font-bold "
                                href="{{ route('pages.myInsights') }}">My Tweets</a></li>
                        @if (auth()->check())
                            <a href="{{ route('logout') }}"
                                class="px-3 py-[.3rem] w-full text-center text-sm rounded-lg bg-red-200 text-red-600">Sign
                                Out</a>
                        @else
                            <a href="{{ route('login') }}" class="px-3 w-full text-sm py-[.3rem] rounded-lg border border-black">Login</a>
                        @endif
                    </ul>

                </nav>

                <nav class="flex max-sm:hidden justify-between items-center">
                    <h4 class="title text-3xl font-bold">UrTweets.</h4>
                    <ul class="flex gap-8 ">
                        <li><a class="{{ request()->routeIs('pages.index') ? 'font-bold' : '' }} "
                                href="{{ route('pages.index') }}">Home</a></li>
                        <li><a class="{{ request()->routeIs('pages.myInsights') ? 'font-bold' : '' }} "
                                href="{{ route('pages.myInsights') }}">My Tweets</a></li>

                    </ul>
                    @if (auth()->check())
                        <div class="flex gap-8 items-center">
                            <div class="user-profile flex gap-4 items-center">
                                <div class="pp w-10 h-10 bg-slate-100 rounded-full"></div>
                                <h4 class="user font-semibold">@ {{ auth()->user()->username }}</h4>
                            </div>
                            <a href="{{ route('logout') }}" class="px-5 py-2 rounded-lg bg-red-200 text-red-600">Sign
                                Out</a>

                        </div>
                    @else
                        <a href="{{ route('login') }}" class="px-5 py-2 rounded-lg border border-black">Login</a>
                    @endif
                </nav>
            </header>

            <main class="flex flex-col items-center justify-center">
                @yield('content1')
            </main>
            <section>
                @yield('content2')
            </section>

            <footer>
                <!-- Footer content -->
            </footer>
        </div>
    </div>
    <script>
        const menu = document.querySelector(".hamburger-menu");
        const sub_nav = document.querySelector(".sub-nav-responsive");

        menu.addEventListener("click", (event) => {
            event.preventDefault();
            menu.classList.toggle("active");
            sub_nav.classList.toggle("active");
        })
    </script>
</body>

</html>
