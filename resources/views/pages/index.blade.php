@extends('layout')

@section('title', 'Home')

@section('content1')
    <div class="hero flex relative flex-col max-sm:gap-4 md:gap-6 lg:gap-8 h-full w-full rounded-3xl lg:px-16 max-sm:py-10 py-14 text-zinc-950 items-center">
        <div class="title-description text-center items-center flex flex-col max-sm:gap-2 gap-4">
            <a href="{{ route('pages.create') }}"
                class="title-hero flex max-sm:text-[12px] max-sm:px-4 max-sm:py-[.6rem] items-center max-sm:gap-2 gap-3 py-3 rounded-full bg-slate-50 px-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-width="1.5"
                        d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561l-8.522 8.52c-.577.578-.866.867-1.114 1.185a6.556 6.556 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.094 3.281m17.6-10.162L11.4 18.16c-.577.577-.866.866-1.184 1.114a6.554 6.554 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876" />
                </svg>
                <h6 class="text-md">Tell your tweets here!</h6>
            </a>

            <h1 class="title max-sm:text-3xl text-[3.5rem] font-bold leading-tight">Exploring the ever-evolving world of <span
                    class="underline">Minds</span> with the latest Tweets.</h1>
            <p class="text-lg max-sm:text-sm max-sm:text-justify text-slate-600">UrTweets delves into the ever-changing landscape of human behavior,
                cognition,
                and emotion.
                We explore the latest findings in psychology, neuroscience, and related fields to shed light on how our
                minds work.</p>
        </div>
        <form class="flex max-sm:flex-col max-sm:w-full max-sm:gap-2 gap-4 w-[50vw]" action="{{ route('pages.index') }}" method="GET">
            <input
                class="outline-none bg-transparent focus:border-zinc-950 w-full border rounded-full max-sm:text-sm border-slate-400 max-sm:px-4 max-sm:py-2 px-6 py-3"
                type="search" name="search" value="{{ $search }}" placeholder="Search...">
            <button class="text-white max-sm:text-sm border py-3 bg-zinc-950 px-6 max-sm:py-2 rounded-full" type="submit">Explore</button>
        </form>

    </div>

@endsection

@section('content2')
    <div class="rounded-3xl text-zinc-900">

        @if ($search)
            @if ($posts->count() == 1)
                <h4 class="title w-full px-12 font-bold text-left text-3xl title-content">
                    {{ $posts->count() }} Tweet of "{{ $search }}"
                </h4>
            @else
                <h4 class="title w-full px-12 font-bold text-left text-3xl title-content">
                    {{ $posts->count() }} Tweets of "{{ $search }}"
                </h4>
            @endif
        @else
            <h4 class="title w-full px-12 max-sm:px-0 max-sm:text-xl font-bold text-left text-3xl title-content">
                What are our Tweets today?
            </h4>
        @endif
        <div class="mt-8 px-12 max-sm:px-0 grid max-sm:grid-cols-1 grid-cols-2 gap-8 items-start">
            @foreach ($posts as $post)
                <a href="{{ route('pages.post', ['id' => $post->id]) }}"
                    class="card flex h-full hover:shadow-2xl hover:shadow-slate-200 text-zinc-900 border flex-col rounded-xl gap-4 p-6">
                    <div class="header-card flex flex-row-reverse items-center justify-between">
                        <img class="rounded-lg" src="{{ asset('assets/image/' . $post->image) }}" />
                    </div>
                    <div class="flex flex-col">
                        <h4 class="title text-xl max-sm:text-[1rem] text-justify font-semibold">{{ $post->title }}</h4>
                        <p class="leading-6 max-sm:text-sm text-lg text-justify">{{ Str::substr($post->description, 0, 150) }}</p>
                    </div>
                    <p class="date max-sm:text-sm">{{ $post->create_at }}</p>
                </a>

                {{-- <a href="{{ route('home.update', ['id' => $post->id]) }}" class="bg-blue-600 px-8 py-2 text-white">Edit</a> --}}
            @endforeach
        </div>
</div @endsection
