<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    @props([
        'action' => route('pages.addStore'),
        'method' => 'POST',
        'btn_text' => 'Publish',
    ])
    <div class="container-blog px-12 py-8 lg:px-24">
        <form enctype="multipart/form-data" method="{{ $method }}" action="{{ $action }}" class="wrapper">
            <header>
                <nav class="flex max-md:hidden justify-between items-center">
                    <a href="{{ route('pages.index') }}" class="title text-3xl font-bold">Thinkers.</a>
                    <div class="nav_options flex items-center relative gap-4">
                        <div class="nav_user flex items-center gap-4 ">
                            @if (Auth::check())
                                <button
                                    class="text-white text-sm font-medium btn-submit-create bg-green-600 pt-[.4rem] pb-[.4rem] px-4 rounded-full"
                                    type="submit">{{ $btn_text }}</button>
                                <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                    </svg>
                                </a>
                                <span
                                    class="user_profile cursor-pointer h-[2.5rem] rounded-full w-[2.5rem] bg-neutral-900"></span>
                                <div
                                    class="user_preferences hidden absolute text-sm right-0 shadow-lg border rounded-lg bg-white mt-12 top-0">
                                    <div class="preferences_1 py-6 pl-6 pr-16 flex flex-col gap-3 ">
                                        <div
                                            class="user_profile cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1" stroke="currentColor" class="size-[1.2rem]">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                            </svg>
                                            <p>Profile</p>
                                        </div>
                                        <div
                                            class="user_saved cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1" stroke="currentColor" class="size-[1.2rem]">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                            </svg>
                                            <p>Library</p>
                                        </div>
                                        <a href="{{route('pages.stories')}}"
                                            class="user_stories cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1" stroke="currentColor" class="size-[1.2rem]">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                            <p>Stories</p>
                                        </a>
                                    </div>
                                    <span class="block w-full h-[1px] bg-slate-300"></span>
                                    <div class="preferences_2 py-6 pl-6 pr-16 flex flex-col gap-3 ">
                                        <div
                                            class="user_profile cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                            <p>Settings</p>
                                        </div>
                                        <div
                                            class="user_saved cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                            <p>Achievement</p>
                                        </div>
                                        <div
                                            class="user_saved cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                            <p>Help</p>
                                        </div>
                                    </div>
                                    <span class="block w-full h-[1px] bg-slate-300"></span>
                                    <div class="preferences_3 py-6 pl-6 pr-16 flex flex-col gap-3 ">
                                        <div
                                            class="user_profile cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                            <a class="text-red-600" href="{{ route('logout') }}">Sign Out</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <a class="font-medium underline" href="{{ route('login') }}">Sign In</a>
                            @endif
                        </div>
                    </div>
                </nav>
            </header>
            <span class="block w-full h-[.05rem] my-4 rounded-full bg-slate-300"></span>

            <main class="flex flex-col mt-6">
                {{ $slot }}
            </main>
        </form>
    </div>
    <script>
        const user_profile = document.querySelector('.user_profile');
        const user_preferences = document.querySelector('.user_preferences');
        user_profile.addEventListener('click', (event) => {
            event.preventDefault();
            user_preferences.classList.toggle('active')
        })
    </script>
</body>

</html>
