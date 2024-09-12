<x-layout :search_value="'{{ $search }}'">
    <section class="container_content_index flex pt-6 flex-col gap-10">
        <div class="category w-full max-sm:flex-col max-sm:items-start max-sm:gap-6 flex justify-between items-center">
            <div class="blog_category_index flex items-baseline w-full gap-6 text-sm">
                <a class="text-xl pb-4" href="">+</a>
                <a class="hover:border-b-[.1rem] pb-4 border-b-[.1rem] border-black" href="">For you</a>
                <a class="hover:border-b-[.1rem] pb-4 border-black" href="">Following</a>
                <a class="hover:border-b-[.1rem] pb-4 border-black" href="">Technology</a>
                <a class="hover:border-b-[.1rem] pb-4 border-black" href="">Productivity</a>
                <a class="hover:border-b-[.1rem] pb-4 border-black" href="">Family</a>
            </div>

            <ul class="text-sm max-md:flex hidden font-medium text-center">
                <li class="me-2">
                    <a href="#" aria-current="page"
                        class="inline-block px-4 py-2 text-slate-600 bg-slate-100 rounded-full">Articles</a>
                </li>
                <li class="me-2">
                    <a href="#"
                        class="inline-block px-4 py-2 text-slate-600 bg-slate-100 rounded-full">Thinkers</a>
                </li>
            </ul>

        </div>
        <div class="grid max-md:grid-cols-1 grid-cols-[3fr,1.5fr] gap-16">
            <div class="blog_section pt-flex flex-col">
                @forelse ($posts->filter(fn($blog) => $blog->image != null) as $blog)
                    <div class="blog_card flex flex-col {{ $blog->id_post == 1 ? 'pt-0' : 'pt-6' }} gap-4">
                        <div class="user_card flex items-center gap-[.6rem]">
                            <div class="user_profile h-[1.8rem] rounded-full w-[1.8rem] bg-neutral-600"></div>
                            <h5 class="user_username inline-flex gap-3 items-center">{{ $blog->username }} <a
                                    class="bg-slate-100 font-medium text-slate-700 rounded-full text-sm px-4 pt-[.3rem] pb-[.34rem]"
                                    href="">Follow</a></h5>
                        </div>
                        <div class="blog_content grid grid-rows-[2fr,1fr]">
                            <a href="{{ route('pages.post', ['id' => $blog->id_post]) }}"
                                class="detail_blog w-full grid grid-cols-[3fr,1fr] gap-8">
                                <div class="flex flex-col gap-2">
                                    <h3 class="blog_title text-2xl font-extrabold">{{ $blog->title }}</h3>
                                    <p class="blog_description text-[1rem] text-gray-500">
                                        {{ Str::limit($blog->description, 100) }}
                                    </p>
                                </div>
                                <img class="aspect-[16/11] block w-full h-full rounded-lg bg-center object-cover bg-slate-200 shadow-xl shadow-slate-100"
                                    src="{{ asset('assets/image/' . $blog->image) }}">
                            </a>
                            <div class="option_blog flex items-center justify-between">
                                <div class="information_blog flex items-center gap-6">
                                    <p class="date text-[.8rem]">{{ $blog->create_at }}</p>
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
                                    <div class="hide_blog">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.2" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </div>
                                    <div class="save_blog">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.2" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                        </svg>
                                    </div>
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
                                                <div
                                                    class="mute_author cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-[1.2rem]">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9.143 17.082a24.248 24.248 0 0 0 3.844.148m-3.844-.148a23.856 23.856 0 0 1-5.455-1.31 8.964 8.964 0 0 0 2.3-5.542m3.155 6.852a3 3 0 0 0 5.667 1.97m1.965-2.277L21 21m-4.225-4.225a23.81 23.81 0 0 0 3.536-1.003A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6.53 6.53m10.245 10.245L6.53 6.53M3 3l3.53 3.53" />
                                                    </svg>
                                                    <a href="">Mute author</a>
                                                </div>
                                                <div class="report_story group cursor-pointer flex items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-[1.2rem] text-red-500 group-hover:text-red-600 ">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                                    </svg>
                                                    <a class="text-red-500 group-hover:text-red-600"
                                                        href="">Report
                                                        story</a>
                                                </div>
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
            <div class="blog_section flex flex-col gap-8">
                <h5 class="font-semibold">People are thinking</h5>
                @forelse ($posts->filter(fn($blog) => $blog->image == null) as $blog)
                    <a href="{{ route('pages.post', ['id' => $blog->id_post]) }}" class="blog_left">
                        <div class="blog_card flex flex-col gap-3">
                            <div class="user_card flex items-center gap-[.6rem]">
                                <div class="user_profile h-[1.6rem] rounded-full w-[1.6rem] bg-neutral-600"></div>
                                <h5 class="user_username text-sm">{{ $blog->username }}</h5>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="blog_title text-xl font-extrabold">{{ $blog->title }}</h3>
                            </div>
                        </div>
                    </a>
                @empty
                    <h1>Empty Thinker!</h1>
                @endforelse
            </div>
        </div>
    </section>
    <script>
        const options_blog = document.querySelectorAll(".options_blog");
        const options_blog_container = document.querySelectorAll(".options_blog_container");

        options_blog.forEach((option, index) => {
            option.addEventListener('click', () => {
                options_blog_container[index].classList.toggle('active');
            })
        });
    </script>
</x-layout>
