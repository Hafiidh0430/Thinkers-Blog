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
        'action' => route('pages.create.addStore'),
        'method' => 'POST',
        'category' => [],
    ])
    <div class="container-blog h-dvh px-12 py-8 relative lg:px-16">
        <form enctype="multipart/form-data" method="{{ $method }}" action="{{ $action }}" class="wrapper">
            <header>
                <nav class="flex justify-between items-center">
                    <a href="{{ route('pages.index') }}" class="title text-3xl font-bold">Thinkers.</a>
                    <div class="nav_options flex items-center relative gap-4">
                        <div class="nav_user flex items-center gap-4 ">
                            <button
                                class="next_preview_btn cursor-pointer text-white text-sm font-medium bg-green-600 pt-[.4rem] pb-[.4rem] px-4 rounded-full">Publish</button>

                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                </svg>
                            </a>
                            <span
                                class="user_profile cursor-pointer h-[2.5rem] rounded-full w-[2.5rem] bg-neutral-900"></span>
                            <div
                                class="user_preferences hidden z-50 absolute text-sm right-0 shadow-lg border rounded-lg bg-white mt-12 top-0">
                                <div class="preferences_1 py-6 pl-6 pr-16 flex flex-col gap-4 ">
                                    <a href="{{ route('pages.profile.index') }}"
                                        class="user_profile cursor-pointer {{ request()->routeIs('pages.profile') ? 'text-slate-950' : 'text-slate-500' }}  hover:text-slate-950 flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1" stroke="currentColor" class="size-[1.5rem]">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>
                                        <p class="text-[.9rem]">Profile</p>
                                    </a>
                                    <div
                                        class="user_saved cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1" stroke="currentColor" class="size-[1.5rem]">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                        </svg>
                                        <p class="text-[.9rem]">Library</p>
                                    </div>
                                    <a href="{{ route('pages.stories') }}"
                                        class="user_stories {{ request()->routeIs('pages.stories') ? 'text-slate-950' : 'text-slate-500' }} cursor-pointer hover:text-slate-950 flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1" stroke="currentColor" class="size-[1.5rem]">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                        <p class="text-[.9rem]">Stories</p>
                                    </a>
                                </div>
                                <span class="block w-full h-[1px] bg-slate-200"></span>
                                <div class="preferences_2 py-6 pl-6 pr-16 flex flex-col gap-4 ">
                                    <div
                                        class="user_profile cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                        <p class="text-[.9rem]">Settings</p>
                                    </div>
                                    <div
                                        class="user_saved cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                        <p class="text-[.9rem]">Achievement</p>
                                    </div>
                                    <div
                                        class="user_saved cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                        <p class="text-[.9rem]">Help</p>
                                    </div>
                                </div>
                                <span class="block w-full h-[1px] bg-slate-200"></span>
                                <div class="preferences_3 py-6 pl-6 pr-16 flex flex-col gap-3 ">
                                    <div
                                        class="user_profile cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                        <a class="text-red-500 hover:text-red-600 text-[.9rem]"
                                            href="{{ route('logout') }}">Sign Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <div
                class="modal_preview_container hidden py-16 px-24 lg:py-20 lg:px-32 bg-white absolute h-full w-full left-[50%] top-[50%] -translate-x-1/2 -translate-y-1/2">
                <div
                    class="modal_preview_wrapper gap-16 relative max-md:flex-col flex max-md:left-0 max-md:top-0 max-md:translate-x-0 max-md:translate-y-0 left-[50%] top-[50%] -translate-x-1/2 -translate-y-1/2">
                    <div class="story_preview max-md:w-full w-[75%]">
                        <h1 class="title_preview text-lg font-semibold">Story Preview</h1>
                        <div class="preview_content mt-6">
                            <img class="w-full h-[16rem] bg-slate-300" src="" alt=""
                                class="img_preview">
                            <div class="details_preview flex flex-col gap-4 mt-6">
                                <h4 class="title_story_preview text-lg font-bold w-full break-words">How Pieter Levels
                                    Makes (At Least) $210K a Month From His Laptop — With Zero Employees</h4>
                                <p class="description_story_preview break-words text-[.95rem] text-justify w-full">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi.
                                </p>
                                <p class="note_preview text-sm text-slate-500">
                                    <b>Note:</b>
                                    Changes here will affect how your story appears in public places like Thinkers's
                                    homepage and in subscribers’ inboxes — not the contents of the story itself.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="story-option max-md:w-full flex gap-4 flex-col">
                        <h1 class="preview_name text-lg">Publishing to: <b>{{ auth()->user()->username }}</b></h1>
                        <div class="option_story flex relative flex-col gap-3">
                            <p class="description_story_preview break-words text-[.95rem] text-justify w-full">Add or
                                change topics (up to 5) so readers know what your story is about</p>
                            <input placeholder="Add a topic..." name="input_category"
                                class="input_category outline-none text-left border-slate-400 border h-12 px-4 rounded-lg"
                                type="text" autocomplete="off">
                            <div
                                class="categories_select hidden absolute px-5 py-4 top-28 shadow-slate-300 shadow-lg bg-white rounded-lg flex-col gap-2">
                                @forelse ($category as $categories)
                                    <p class="categories_value text-sm text-slate-400 cursor-pointer hover:text-black">
                                        {{ $categories?->category }}</p>
                                @empty
                                    <div>Empty category!</div>
                                @endforelse
                            </div>
                        </div>
                        <p class="note_preview text-sm text-slate-500"><a class="underline" href="">Learn
                                more</a> about what happens to your post when you publish.</p>
                        <div class="">
                            <button type="submit"
                                class="next_preview_btn cursor-pointer text-white text-sm font-medium bg-green-600 pt-[.4rem] pb-[.4rem] px-4 rounded-full">Publish
                                now</button>
                            <a href="{{route('pages.create')}}"
                                class="next_preview_btn cursor-pointer text-slate-600 text-sm font-medium  pt-[.4rem] pb-[.4rem] px-4 rounded-full">Save as draft</a>
                        </div>
                    </div>
                </div>
            </div>

            <span class="block w-full h-[.05rem] my-4 rounded-full bg-slate-200"></span>

            <main class="flex flex-col mt-6">
                {{ $slot }}
            </main>
        </form>
    </div>
    <script>
        const user_profile = document.querySelector('.user_profile');
        const user_preferences = document.querySelector('.user_preferences');
        const next_preview_btn = document.querySelector('.next_preview_btn');
        const modal_preview_container = document.querySelector('.modal_preview_container');
        const input_category = document.querySelector('.input_category');
        const categories_select = document.querySelector('.categories_select');
        const categories_value = categories_select.querySelectorAll('.categories_value');


        input_category.addEventListener('keyup', (event) => {
            const value = event.target.value;
            if (value.trim() == "") return;
            for (const i in [...categories_value]) {
                const category_values = categories_value[i].textContent;
                if (category_values.toLowerCase().includes(value.toLowerCase())) {
                    categories_value[i].style.display = "";
                } else {
                    categories_value[i].style.display = "none";
                }
            }
        });

        input_category.addEventListener("click", () => {
            categories_select.style.display = "flex"
        });

        window.addEventListener("click", (event) => {
            if (event.target !== input_category) {
                categories_select.style.display = "none"
            }
        })

        categories_value.forEach(element => {
            element.addEventListener("click", (event) => {
                const target = event.target.textContent;
                if (target) {
                    input_category.value = target;
                    categories_select.style.display = "none"
                }
            })
        });

        next_preview_btn.addEventListener('click', (event) => {
            event.preventDefault();
            modal_preview_container.classList.toggle('active')
        })

        user_profile.addEventListener('click', (event) => {
            event.preventDefault();
            user_preferences.classList.toggle('active')
        })
    </script>
</body>

</html>
