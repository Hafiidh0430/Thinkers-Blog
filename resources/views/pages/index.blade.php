@extends('layout')

@section('title', 'Home')

@section('content1')
    <div class="hero flex relative flex-col gap-8 h-full w-full rounded-3xl px-16 py-16 text-zinc-950 items-center">
        <div class="title-description text-center items-center flex flex-col gap-4">
            <a href="{{ route('pages.create') }}"
                class="title-hero flex items-center gap-3 py-3 rounded-full bg-slate-50 px-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-width="1.5"
                        d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561l-8.522 8.52c-.577.578-.866.867-1.114 1.185a6.556 6.556 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.094 3.281m17.6-10.162L11.4 18.16c-.577.577-.866.866-1.184 1.114a6.554 6.554 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876" />
                </svg>
                <h6 class="text-md">Tell your Tweets here!</h6>
            </a>

            <h1 class="title text-[3.5rem] font-bold leading-tight">Exploring the ever-evolving world of<br> <span
                    class="underline">Minds</span> with the latest Tweets.</h1>
            <p class="text-lg text-slate-600">UrTweets delves into the ever-changing landscape of human behavior,
                cognition,
                and emotion.<br>
                We explore the latest findings in psychology, neuroscience, and related fields to shed light on how our
                minds work.</p>
        </div>
        <form class="flex gap-4 w-[50vw]" action="{{ route('pages.index') }}" method="GET">
            <input
                class="outline-none bg-transparent focus:border-zinc-950 w-full border rounded-full border-slate-400 px-6 py-3"
                type="search" name="search" value="{{ $search }}" placeholder="Search...">
            <button class="text-white border bg-zinc-950 px-6 rounded-full" type="submit">Explore</button>
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
            <h4 class="title w-full px-12 font-bold text-left text-3xl title-content">
                What are our Tweets today?
            </h4>
        @endif
        <div class="mt-8 px-12 grid grid-cols-2 gap-8 items-start">
            @foreach ($posts as $post)
                <a href="{{ route('pages.post', ['id' => $post->id]) }}"
                    class="card flex h-full text-zinc-900 bg-zinc-50 flex-col rounded-xl gap-4 p-6">
                    <div class="header-card flex flex-row-reverse items-center justify-between">

                        <div class="like-btn flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m20.975 12.185l-.739-.128zm-.705 4.08l-.74-.128zM6.938 20.477l-.747.065zm-.812-9.393l.747-.064zm7.869-5.863l.74.122zm-.663 4.045l.74.121zm-6.634.411l-.49-.568zm1.439-1.24l.49.569zm2.381-3.653l-.726-.189zm.476-1.834l.726.188zm1.674-.886l-.23.714zm.145.047l.229-.714zM9.862 6.463l.662.353zm4.043-3.215l-.726.188zm-2.23-1.116l-.326-.675zM3.971 21.471l-.748.064zM3 10.234l.747-.064a.75.75 0 0 0-1.497.064zm17.236 1.823l-.705 4.08l1.478.256l.705-4.08zm-6.991 9.193H8.596v1.5h4.649zm-5.56-.837l-.812-9.393l-1.495.129l.813 9.393zm11.846-4.276c-.507 2.93-3.15 5.113-6.286 5.113v1.5c3.826 0 7.126-2.669 7.764-6.357zM13.255 5.1l-.663 4.045l1.48.242l.663-4.044zm-6.067 5.146l1.438-1.24l-.979-1.136L6.21 9.11zm4.056-5.274l.476-1.834l-1.452-.376l-.476 1.833zm1.194-2.194l.145.047l.459-1.428l-.145-.047zm-1.915 4.038a8.378 8.378 0 0 0 .721-1.844l-1.452-.377A6.878 6.878 0 0 1 9.2 6.11zm2.06-3.991a.885.885 0 0 1 .596.61l1.452-.376a2.385 2.385 0 0 0-1.589-1.662zm-.863.313a.515.515 0 0 1 .28-.33l-.651-1.351c-.532.256-.932.73-1.081 1.305zm.28-.33a.596.596 0 0 1 .438-.03l.459-1.428a2.096 2.096 0 0 0-1.548.107zm2.154 8.176h5.18v-1.5h-5.18zM4.719 21.406L3.747 10.17l-1.494.129l.971 11.236zm-.969.107V10.234h-1.5v11.279zm-.526.022a.263.263 0 0 1 .263-.285v1.5c.726 0 1.294-.622 1.232-1.344zM14.735 5.343a5.533 5.533 0 0 0-.104-2.284l-1.452.377a4.03 4.03 0 0 1 .076 1.664zM8.596 21.25a.916.916 0 0 1-.911-.837l-1.494.129a2.416 2.416 0 0 0 2.405 2.208zm.03-12.244c.68-.586 1.413-1.283 1.898-2.19L9.2 6.109c-.346.649-.897 1.196-1.553 1.76zm13.088 3.307a2.416 2.416 0 0 0-2.38-2.829v1.5c.567 0 1 .512.902 1.073zM3.487 21.25c.146 0 .263.118.263.263h-1.5c0 .682.553 1.237 1.237 1.237zm9.105-12.105a1.583 1.583 0 0 0 1.562 1.84v-1.5a.083.083 0 0 1-.082-.098zm-5.72 1.875a.918.918 0 0 1 .316-.774l-.98-1.137a2.418 2.418 0 0 0-.83 2.04z" />
                            </svg>
                            <p>12.4K</p>
                        </div>

                        <div class="creator flex gap-2 items-center">
                            <div class="pp w-10 h-10 rounded-full bg-slate-400"></div>
                            <p class="name font-bold text-[1rem]">@ {{ $post->user_id }}</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h4 class="title text-xl text-justify font-semibold">{{ $post->title }}</h4>
                        <p class="leading-6 text-lg text-justify">{{ Str::substr($post->description, 0, 150) }}</p>
                    </div>
                    <p class="date">{{ $post->create_at }}</p>
                </a>

                {{-- <a href="{{ route('home.update', ['id' => $post->id]) }}" class="bg-blue-600 px-8 py-2 text-white">Edit</a> --}}
            @endforeach
        </div>
</div @endsection
