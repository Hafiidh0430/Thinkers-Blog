<x-layout>
    <div class="container_stories px-24 mt-8">
        <header class="stories_header flex justify-between">
            <h1 class="text-[3rem] font-semibold">Your stories.</h1>
            <div class="stories_actions flex items-center gap-3">
                <a class="px-4 py-2 text-sm font-medium bg-green-600 text-white rounded-full"
                    href="{{ route('pages.create') }}">Tell your story</a>
                <a class="px-4 py-2 text-sm font-medium border border-black rounded-full" href="">Import a
                    story</a>
            </div>
        </header>

        <ul class="text-sm flex mt-4 items-center font-medium text-center">
            <li class="me-2">
                <a href="#" aria-current="page"
                    class="inline-block px-4 py-2 text-slate-600 bg-slate-100 rounded-full">Drafts</a>
            </li>
            <li class="me-2">
                <a href="#" aria-current="page"
                    class="inline-block px-4 py-2 text-slate-600 rounded-full">Stories</a>
            </li>
            <li class="me-2">
                <a href="#"
                    class="inline-block px-4 py-2 text-slate-600 rounded-full">Thinks</a>
            </li>
        </ul>
    </div>
</x-layout>
