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
    <div class="container-blog px-8 py-6 lg:px-32 lg:py-8">
        <div class="wrapper">
            <header>
                <nav class="flex justify-between items-center">
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
                            <h4 class="user font-semibold">@ {{auth()->user()->username}}</h4>
                        </div>
                        <a href="{{ route('logout') }}" class="px-5 py-2 rounded-lg bg-red-200 text-red-600">Sign Out</a>

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


    <!-- Include any JavaScript files -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
