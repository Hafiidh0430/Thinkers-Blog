@extends('layout')

@section('title', 'MyTweets')

<div class="w-full h-full bg-modal absolute bg-gray-400 opacity-15 z-10"></div>
@section('content1')
    <div class="{{ $tweets->count() == 0 ? 'mt-8' : 'mt-20  grid w-full grid-cols-2 gap-8' }} 
    px-12">
        @if ($tweets->count() == 0)
            <div class="empty-state flex gap-4 items-center flex-col justify-center">
                <img class="w-[24rem]" src="https://i.pinimg.com/564x/e5/55/87/e55587d66eb7b637fc19ff959a6b04ab.jpg"
                    alt="">
                <div class="messages text-center">
                    <h4 class="title-empty font-bold text-gray-950 text-xl">Ohhh noo, no tweets here!</h4>
                    <p class="text-md font-light text-gray-800">Create your tweets to see your mind by below button</p>
                </div>
                <a href="{{ route('pages.create') }}"
                    class="text-white text-center font-medium btn-submit-create bg-gray-950 py-3 w-full rounded-lg"
                    type="submit">Let's create!</a>

            </div>
        @else
            @foreach ($tweets as $tweet)
                <div class="card flex h-full bg-slate-50 flex-col rounded-xl gap-4 p-6">
                    <div class="creator-with-option-post flex items-center justify-between">
                        <div class="creator flex gap-2 items-center">
                            <div class="pp w-10 h-10 rounded-full bg-slate-400"></div>
                            <p class="name font-bold text-[1rem]">@ {{ $tweet->username }}</p>
                        </div>
                        <div class="option-post relative">
                            <svg class="option-svg-post" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M7 12a2 2 0 1 1-4 0a2 2 0 0 1 4 0m7 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0m7 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0" />
                            </svg>
                            <div class="options shadow-2xl shadow-gray-200 mt-2 absolute z-30 rounded-lg p-4 bg-white">
                                <a href="{{ route('pages.update', ['id' => $tweet->id]) }}"
                                    class="edit-button flex items-center rounded-md hover:bg-slate-200 px-4 py-2 gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-width="1.5"
                                            d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561l-8.522 8.52c-.577.578-.866.867-1.114 1.185a6.556 6.556 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.094 3.281m17.6-10.162L11.4 18.16c-.577.577-.866.866-1.184 1.114a6.554 6.554 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876" />
                                    </svg>
                                    <p>Edit</p>
                                </a>
                                <button id="{{ $tweet->id }}"
                                    class="delete-button text-red-600 hover:bg-red-200 flex items-center rounded-md px-4 py-2 gap-2"
                                    type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M5.117 7.752a.75.75 0 0 1 .798.698l.46 6.9c.09 1.347.154 2.285.294 2.99c.137.685.327 1.047.6 1.303c.274.256.648.422 1.34.512c.714.093 1.654.095 3.004.095h.774c1.35 0 2.29-.002 3.004-.095c.692-.09 1.066-.256 1.34-.512c.273-.256.463-.618.6-1.302c.14-.706.204-1.644.294-2.992l.46-6.899a.75.75 0 1 1 1.497.1l-.464 6.952c-.085 1.282-.154 2.319-.316 3.132c-.169.845-.455 1.551-1.047 2.104c-.591.554-1.315.793-2.17.904c-.822.108-1.86.108-3.145.108h-.88c-1.285 0-2.323 0-3.145-.108c-.855-.111-1.579-.35-2.17-.904c-.592-.553-.878-1.26-1.047-2.104c-.162-.814-.23-1.85-.316-3.132L4.418 8.55a.75.75 0 0 1 .699-.798m5.238-5.502h-.046c-.216 0-.405 0-.583.028a2.25 2.25 0 0 0-1.64 1.183c-.084.16-.143.339-.211.544l-.015.044l-.097.29a1.25 1.25 0 0 1-1.263.91h-3a.75.75 0 1 0 0 1.501h17.001a.75.75 0 0 0 0-1.5H17.41a1.25 1.25 0 0 1-1.173-.91l-.097-.291l-.014-.044c-.069-.205-.128-.384-.211-.544a2.25 2.25 0 0 0-1.641-1.183a3.733 3.733 0 0 0-.583-.028h-.046zm-1.21 2.685c-.04.109-.085.214-.137.315h5.984a2.764 2.764 0 0 1-.136-.314l-.04-.114l-.099-.3a3.114 3.114 0 0 0-.133-.368a.75.75 0 0 0-.547-.395a3.114 3.114 0 0 0-.392-.009h-3.29c-.288 0-.348.002-.392.01a.75.75 0 0 0-.547.394c-.02.04-.042.095-.133.369l-.1.3z"
                                            clip-rule="evenodd" />
                                    </svg>Delete</button>
                            </div>
                        </div>

                        <div
                            class="delete-modal z-20 text-center justify-center flex shadow-2xl shadow-gray-200 bg-white p-6 rounded-xl flex-col gap-4 items-center">

                            <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" viewBox="0 0 24 24">
                                <g fill="none">
                                    <path stroke="currentColor" stroke-width="1.5"
                                        d="M5.312 10.762C8.23 5.587 9.689 3 12 3c2.31 0 3.77 2.587 6.688 7.762l.364.644c2.425 4.3 3.638 6.45 2.542 8.022S17.786 21 12.364 21h-.728c-5.422 0-8.134 0-9.23-1.572s.117-3.722 2.542-8.022z" />
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M12 8v5" />
                                    <circle cx="12" cy="16" r="1" fill="currentColor" />
                                </g>
                            </svg>

                            <div class="text text-center">
                                <h3 class="text-xl font-bold">Delete Tweet</h3>
                                <p class="text-lg desc-modal">You're going to delete the <span
                                        class="font-bold">"{{ $tweet->title }}"</span></p>
                            </div>

                            <div class="btn-options flex gap-4 text-md font-semibold">
                                <button class="px-4 keep-modal rounded-lg bg-slate-100">No, Keep it.</button>
                                <form method="POST" action="{{ route('pages.deleteStore', ['id' => $tweet->id]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="px-4 py-2 bg-red-200 rounded-lg text-red-600">Yes,
                                        Delete!</button>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-col gap-2">
                        <h4 class="title text-xl text-justify font-semibold">{{ $tweet->title }}</h4>
                        <p class="leading-6 text-lg text-slate-600 text-justify">
                            {{ Str::substr($tweet->description, 0, 250) }}</p>
                    </div>
                    <p class="date">{{ $tweet->create_at }}</p>
                </div>
            @endforeach
        @endif
    </div>
    <script>
        const optionPost = document.querySelectorAll('.option-svg-post');
        const options = document.querySelector('.options');
        const deleteBtn = document.querySelectorAll('.delete-button');
        const deleteModal = document.querySelectorAll('.delete-modal');
        const keepModal = document.querySelector('.keep-modal');
        const bgModal = document.querySelector('.bg-modal');

        optionPost.forEach(element => {
            element.addEventListener('click', (event) => {
                event.preventDefault();
                element.classList.toggle('active');
            })
            window.addEventListener('click', (event) => {
                if (event.target !== options && event.target !== element) return element.classList.remove(
                    'active')
            })
        });

        deleteModal.forEach(modal => {
            modal.style.display = 'none'
        })
        bgModal.style.display = 'none'

        deleteBtn.forEach((btn, index) => {
            btn.addEventListener('click', (event) => {
                event.preventDefault();
                deleteModal[index].style.display = 'block'
                bgModal.style.display = 'block'
            })

            keepModal.addEventListener('click', () => {
                deleteModal[index].style.display = 'none'
                bgModal.style.display = 'none'
            })
        })
    </script>
@endsection
