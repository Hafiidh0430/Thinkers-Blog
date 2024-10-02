<x-stories-preferences>
    @section('stories_content')
        <div class="container_stories_published mt-8">
            @forelse ($posts as $blog)
                <div class="blog_card flex flex-col gap-4">
                    <div class="user_card flex items-center gap-[.6rem]">
                        <div class="user_profile h-[1.8rem] rounded-full w-[1.8rem] bg-neutral-600"></div>
                        <h5 class="user_username inline-flex gap-3 items-center">{{ $blog->author->username }} <a
                                class="bg-slate-100 font-medium text-slate-700 rounded-full text-sm px-4 pt-[.3rem] pb-[.34rem]"
                                href="">Follow</a></h5>
                    </div>
                    <div class="blog_content grid grid-rows-[2fr,1fr]">
                        <a href="{{ route('pages.post', ['id' => $blog->id_post]) }}"
                            class="detail_blog w-full grid grid-cols-[3fr,1fr] gap-8">
                            <div class="flex flex-col gap-2">
                                <h3 class="blog_title text-2xl font-extrabold">{{ $blog->title }}</h3>
                                <p class="blog_description text-[1rem] text-gray-500">
                                    {{ Str::limit($blog->description, 120) }}
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
                                        class="options_blog_container hidden absolute text-sm right-0 shadow-lg rounded-lg bg-neutral-50 mt-10 top-0">
                                        <div class="options_blog_preferences w-max py-4 pl-4 pr-8 flex flex-col gap-3 ">
                                            <a href="{{route('pages.update', ['id' => $blog->id_post])}}"
                                                class="edit_story cursor-pointer hover:text-slate-950 text-slate-500 inline-flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-[1.2rem]">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                                <p>Edit story</p>
                                            </a>
                                            <form action="{{ route('pages.deleteStore', ['id' => $blog->id_post]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="delete_story cursor-pointer group text-red-500 group-hover:text-red-600 inline-flex items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-[1.2rem] text-red-500 group-hover:text-red-600 ">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                                    </svg>
                                                    Delete story
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
</x-stories-preferences>
