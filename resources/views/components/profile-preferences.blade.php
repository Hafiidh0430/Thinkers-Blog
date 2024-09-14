<x-layout>
    <div class="container_profile pt-8 px-24 gap-4 ">
        <header class="profile_header flex justify-between">
            <div class="profile inline-flex items-center gap-6">

            </div>
            <div class="gap-6 flex items-center w-full">
                <div class="w-[4.5rem] h-[4.5rem] rounded-full bg-black"></div>
                <div class="data_profile">
                    <h1 class="text-[2.5rem] font-semibold">Muhammad Hafiidh</h1>
                    <p class="text-lg font text-slate-400">Product Designer</p>
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
                <a href="#" aria-current="page" class="inline-block py-2 border-b-[.1rem] border-black">Your
                    Post</a>
            </li>
            <li class="me-2">
                <a href="#" aria-current="page"
                    class="inline-block py-2 hover:border-b-[.1rem] border-black">About</a>
            </li>
        </ul>
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
