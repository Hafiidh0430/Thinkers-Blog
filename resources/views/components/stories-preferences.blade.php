<x-layout>
    <div class="container_stories px-16 h-dvh grid max-md:grid-cols-1 grid-cols-[3fr,2fr] lg:px-24 max-md:max-sm:px-0">
        <div class="stories flex flex-col border-r pr-8">
            <div class="header flex items-center justify-between pt-8">
                <h1 class="text-[3rem] font-semibold">Your stories.</h1>
                <div class="stories_actions flex items-center gap-3">
                    <a class="px-4 py-2 text-sm font-medium bg-green-600 text-white rounded-full"
                        href="{{ route('pages.create') }}">Tell your story</a>
                    <a class="px-4 py-2 text-sm font-medium border border-black rounded-full" href="">Make a
                        tweet</a>
                </div>
            </div>
            <div class="stories_filter flex mt-6 items-center justify-between">
                <ul class="text-sm font-medium flex items-center text-center">
                    <li class="me-2">
                        <a href="{{ route('pages.stories') }}" aria-current="page"
                            class="inline-block px-4 py-2 {{ request()->routeIs('pages.stories') ? 'bg-slate-100' : '' }} text-slate-600 rounded-full">Published</a>
                    </li>
                    <li class="me-2">
                        <a href="{{ route('pages.stories.drafts') }}" aria-current="page"
                            class="inline-block px-4 py-2 {{ request()->routeIs('pages.stories.drafts') ? 'bg-slate-100' : '' }} text-slate-600 rounded-full">Drafts</a>
                    </li>
                </ul>
                <form class="max-w-sm flex items-center gap-3">
                    <label for="countries" class="block font-semibold text-sm text-gray-900 dark:text-white">Type:</label>
                    <select id="countries"
                        class=" border border-gray-300 text-gray-900 text-sm rounded-lg p-2 outline-none focus:border-blue-600">
                        <option selected>All types</option>
                        <option value="US">Stories</option>
                        <option value="CA">Tweets</option>
                    </select>
                </form>
            </div>
            @yield('stories_content')
        </div>
    </div>
</x-layout>
