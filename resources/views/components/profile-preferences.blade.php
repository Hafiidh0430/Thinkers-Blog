@props([
    'post' => []
])

<x-layout>
    <div
        class="container_profile px-16 lg:px-24 max-md:max-sm:px-0 gap-4  max-md:grid-cols-1 grid grid-cols-[3fr,.1fr,1.5fr]">
        <div class="pt-8 pr-6">
            <header class="profile_header flex justify-between">
                <div class="gap-6 flex items-center w-full">
                    <div class="w-[4.5rem] h-[4.5rem] rounded-full bg-black"></div>
                    <div class="data_profile">
                        <h1 class="text-[2rem] font-bold">{{ auth()->user()->username }}</h1>
                        <p class="text-lg">Product Designer</p>
                        <p class="text-md text-slate-400">Bekasi City, West Java, Indonesia</p>
                    </div>
                </div>
                <div class="profile_actions relative flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                        stroke="currentColor" class="option-profile cursor-pointer size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                    <div
                        class="options_profile_container hidden absolute text-sm right-0 shadow-lg border rounded-lg bg-white mt-16 top-0">
                        <div class="options_profile_preferences w-max py-4 pl-4 pr-8 flex flex-col gap-3 ">
                            <div
                                class="mute_author cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-[1.2rem]">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                                </svg>
                                <a href="">Copy link profile</a>
                            </div>
                            <div
                                class="mute_author cursor-pointer text-green-600 hover:text-green-700 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-[1.2rem]">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <a href="">Edit profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <ul class="text-sm flex mt-6 items-center gap-4 font-medium text-center">
                <li class="me-2">
                    <a href="{{ route('pages.profile.about') }}"
                        class="inline-block py-2 {{ request()->routeIs('pages.profile.about') ? 'border-b-[.1rem]' : '' }}  hover:border-b-[.1rem] border-black">Details</a>
                </li>
                <li class="me-2">
                    <a href="{{ route('pages.profile') }}"
                        class="inline-block py-2 {{ request()->routeIs('pages.profile') ? 'border-b-[.1rem]' : '' }} hover:border-b-[.1rem] border-black">Your
                        Post</a>
                </li>
            </ul>
            @yield('preferences')
        </div>
        <span class="max-md:hidden h-full w-[1px] bg-slate-200 block"></span>
        <div class="container_profile_activity flex flex-col gap-4 pt-8">
            <section class="connection-section flex flex-col gap-2">
                <h1 class="text-xl font-semibold">Activities</h1>
            </section>
            <ul class="text-sm flex items-center gap-4 font-medium text-center">
                <li class="me-2">
                    <a href=""
                        class="inline-block py-2 hover:border-b-[.1rem] border-b-[.1rem] border-black">Reposted</a>
                </li>
                <li class="me-2">
                    <a href="" class="inline-block py-2 hover:border-b-[.1rem] border-black">Likes</a>
                </li>
                <li class="me-2">
                    <a href="" class="inline-block py-2 hover:border-b-[.1rem] border-black">Comments</a>
                </li>
            </ul>
            <div class="container_stories_profile pt-4 blog_section flex flex-col gap-6">
                @forelse ($post as $blog)
                    <div class="blog_card flex flex-col gap-4">
                        <div class="user_card flex items-center gap-[.6rem]">
                            <div class="user_profile h-[1.4rem] rounded-full w-[1.4rem] bg-neutral-600"></div>
                            <h5 class="user_username text-sm inline-flex gap-3 items-center">{{ $blog->username }} <a
                                    class="bg-slate-100 font-medium text-slate-700 rounded-full text-[.8rem] px-3 pt-[.3rem] pb-[.2rem]"
                                    href="">Follow</a></h5>
                        </div>
                        <div class="blog_content grid grid-rows-[2fr,1fr]">
                            <a href="{{ route('pages.post', ['id' => $blog->id_post]) }}"
                                class="detail_blog w-full grid grid-cols-[3fr,1fr] gap-8">
                                <div class="flex flex-col gap-2">
                                    <h3 class="blog_title text-xl font-extrabold">{{ $blog->title }}</h3>
                                    <p class="blog_description text-sm text-gray-500">
                                        {{ Str::limit($blog->description, 70) }}
                                    </p>
                                </div>
                                <img class="aspect-[16/11] block w-full h-full rounded-lg bg-center object-cover bg-slate-200 shadow-xl shadow-slate-100"
                                    src="{{ asset('assets/image/' . $blog->image) }}">
                            </a>
                            <div class="option_blog flex items-center justify-between">
                                <div class="information_blog flex items-center gap-6">
                                    <p class="date text-[.8rem]">{{ $blog->created_at }}</p>
                                    <p class="blog_like inline-flex text-[.8rem] items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                                        </svg>
                                        432
                                    </p>
                                    <p class="blog_comment inline-flex text-[.8rem] items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-[1.1rem] h-[1.1rem]">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                                        </svg>
                                        104
                                    </p>
                                </div>
                                <div class="settings_blog flex items-center gap-6">
                                    <div class="options_blog d-none relative cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.2" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                        </svg>
                                        <div
                                            class="options_blog_container hidden absolute text-sm right-0 shadow-lg border rounded-lg bg-white mt-12 top-0">
                                            <div
                                                class="options_blog_preferences w-max py-4 pl-4 pr-8 flex flex-col gap-3 ">
                                                <a href="{{ route('pages.update', ['id' => $blog->id_post]) }}"
                                                    class="mute_author cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-[1.2rem]">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9.143 17.082a24.248 24.248 0 0 0 3.844.148m-3.844-.148a23.856 23.856 0 0 1-5.455-1.31 8.964 8.964 0 0 0 2.3-5.542m3.155 6.852a3 3 0 0 0 5.667 1.97m1.965-2.277L21 21m-4.225-4.225a23.81 23.81 0 0 0 3.536-1.003A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6.53 6.53m10.245 10.245L6.53 6.53M3 3l3.53 3.53" />
                                                    </svg>
                                                    <p>Unrepost</p>
                                                </a>
                                                <form class="report_story group cursor-pointer flex items-center gap-2"
                                                    method="POST"
                                                    action="{{ route('pages.deleteStore', ['id' => $blog->id_post]) }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor"
                                                            class="size-[1.2rem] text-red-500 group-hover:text-red-600 ">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                                        </svg>
                                                        <p class="text-red-500 group-hover:text-red-600">Report stories</p>
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1>Empty Blog!</h1>
                @endforelse
            </div>
        </div>
    </div>

    <script>
        const option_profile = document.querySelector('.option-profile ');
        const options_profile_container = document.querySelector('.options_profile_container ');

        option_profile.addEventListener("click", (event) => {
            event.preventDefault();
            options_profile_container.classList.toggle('active');
        })
    </script>
</x-layout>
