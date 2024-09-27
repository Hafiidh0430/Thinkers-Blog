<x-profile-preferences>
    @section('preferences')
        <div class="container_stories_profile pt-4 blog_section flex flex-col gap-6">
            @forelse ($stories as $blog)
                <div class="blog_card flex flex-col gap-4">
                    <div class="user_card flex items-center justify-between ">
                        <div class="flex items-center gap-[.6rem]">
                            <div class="user_profile h-[1.4rem] rounded-full w-[1.4rem] bg-neutral-600"></div>
                            <h5 class="user_username text-sm inline-flex gap-3 items-center">{{ $blog->author->username }}
                                <a class="bg-slate-100 font-medium text-slate-700 rounded-full text-[.8rem] px-3 pt-[.3rem] pb-[.2rem]"
                                    href="">Follow</a>
                            </h5>
                        </div>

                        <div class="repost_story gap-2 flex items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-[1.1rem]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
                            </svg>
                            <p class="text-[.8rem]">Reposted by you</p>
                        </div>
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
                                        class="options_blog_container hidden absolute text-sm right-0 shadow-lg border rounded-lg bg-white mt-8 top-0">
                                        <div class="options_blog_preferences w-max py-4 pl-4 pr-8 flex flex-col gap-2">
                                            <a href="{{ route('pages.update', ['id' => $blog->id_post]) }}"
                                                class="mute_author cursor-pointer hover:text-slate-950 text-slate-500 flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="size-[1.1rem]">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
                                            </svg>
                                                <p class="text-sm">Unrepost</p>
                                            </a>
                                            <form class="report_story group cursor-pointer flex items-center gap-2"
                                                method="POST"
                                                action="{{ route('pages.deleteStore', ['id' => $blog->id_post]) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="flex items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-[1.1rem] text-red-500 group-hover:text-red-600 ">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                                    </svg>
                                                    <p class="text-red-500 text-sm group-hover:text-red-600">Report stories
                                                    </p>
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
    <script>
        const options_blog = document.querySelectorAll(".options_blog");
        const options_blog_container = document.querySelectorAll(".options_blog_container");

        options_blog.forEach((option, index) => {
            option.addEventListener('click', () => {
                options_blog_container[index].classList.toggle('active');
            })
        });
    </script>
    @endsection
</x-profile-preferences>
