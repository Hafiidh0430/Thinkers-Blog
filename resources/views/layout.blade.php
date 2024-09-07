<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Thinkers')</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container-blog px-12 py-8 lg:px-24">
        <div class="wrapper">
            <header>
                {{-- <nav class="responsive-nav relative z-10 flex flex-col  max-sm:block md:hidden max-lg:hidden">
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
                </nav> --}}

                <nav class="flex max-sm:hidden justify-between items-center">
                    <h4 class="title text-3xl font-bold">Thinkers.</h4>
                    <div class="nav_options flex items-center gap-4">
                        <form action="{{route('pages.index')}}">
                            <input name="search"
                                class="outline-none px-4 text-sm py-2 rounded-full border border-slate-200 bg-slate-100"
                                type="text" placeholder="Search">
                        </form>
                        <div class="nav_user flex items-center gap-4">
                            <a href="{{ route('pages.create') }}"
                                class="type_blog inline-flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                                </svg>
                                Create</a>
                            <span class="user_profile h-[2.5rem] rounded-full w-[2.5rem] bg-neutral-900"></span>
                        </div>
                    </div>
                    {{-- @if (auth()->check())
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
                    @endif --}}
                </nav>
            </header>
            <span class="block w-full h-[.05rem] my-4 rounded-full bg-slate-300"></span>

            <main class="flex flex-col mt-6">
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
</body>

</html>
