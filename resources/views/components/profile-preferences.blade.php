@props([
    'post' => [],
])

<x-layout>
    <div class="container_profile px-16 lg:px-24 max-md:max-sm:px-0 gap-8 max-md:grid-cols-1 grid grid-cols-[3fr,2fr]">
        <div class="profile_about pt-8 pr-8 max-md:border-none max-md:pr-0 border-r">
            <header class="profile_header flex justify-between">
                <div class="gap-6 flex items-center w-full">
                    <div class="w-[5.5rem] h-[5.5rem] rounded-full bg-black"></div>
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
            <div class="container_profile_about mt-6 pt-6 flex flex-col gap-5">
                <section class="connection-section flex items-center gap-2">
                    <p class="px-4 py-[.45rem] font-medium bg-slate-200 rounded-full text-sm">329 Stories</p>
                    <p class="px-4 py-[.45rem] font-medium bg-slate-200 rounded-full text-sm">12.489 Followers</p>
                    <p class="px-4 py-[.45rem] font-medium bg-slate-200 rounded-full text-sm">472 Following</p>
                </section>
                <section class="about-section flex flex-col gap-2">
                    <h1 class="text-xl font-semibold">About</h1>
                    <p class="text-justify font-light ">Lorem ipsum dolor sit amet. Ea neque rerum et facilis nulla ex
                        distinctio
                        soluta qui
                        voluptas nesciunt
                        est dolor unde et earum dolore. Qui impedit saepe non aperiam explicabo hic maiores esse et modi
                        rerum.
                        Sed amet voluptas qui culpa atque ab perferendis molestiae sed facere galisum aut provident
                        earum. Ea
                        inventore velit aut iste autem id.
                    </p>
                </section>
                <section class="information-section flex flex-col gap-2">
                    <h1 class="text-xl font-semibold">Contact Information</h1>
                    <div class="email-contact flex items-center gap-2">
                        <p class="font-medium">Email:</p>
                        <a class="font-light" href="">makeyouridea@agency.com</a>
                    </div>
                    <div class="website-contact flex items-center gap-2">
                        <p class="font-medium">Website:</p>
                        <a class="font-light" href="">makeyouridea.id</a>
                    </div>
                </section>
                <p class="text-sm font-medium text-slate-400">Joined since 2024.</p>
            </div>
        </div>
        <div class="container_profile_activity flex flex-col gap-4 max-md:gap-2 pt-8 max-md:pt-0">
            <section class="connection-section flex flex-col gap-2">
                <h1 class="text-xl font-semibold">Activities</h1>
            </section>
            <ul class="text-sm flex items-center gap-4 font-medium text-center">
                <li class="me-2">
                    <a href="{{route('pages.profile.index')}}"
                        class="inline-block py-2 hover:border-b-[.1rem] {{request()->routeIs('pages.profile.index') ? "border-b-[.1rem]" : ""}} border-black">Reposted</a>
                </li>
                <li class="me-2">
                    <a href="{{route('pages.profile.likes')}}" class="inline-block py-2 {{request()->routeIs('pages.profile.likes') ? "border-b-[.1rem]" : ""}} hover:border-b-[.1rem] border-black">Likes</a>
                </li>
                <li class="me-2">
                    <a href="{{route('pages.profile.comments')}}" class="inline-block py-2 {{request()->routeIs('pages.profile.comments') ? "border-b-[.1rem]" : ""}} hover:border-b-[.1rem] border-black">Comments</a>
                </li>
            </ul>
            @yield('preferences')
        </div>
    </div>
</x-layout>
