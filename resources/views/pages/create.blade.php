@extends('layout')
@section('title', 'Create Post')


@section('content1')
    <form class="flex gap-4 flex-col max-sm:w-full w-[50%] mt-16" method="POST" action="{{ route('pages.addStore') }}">
        @csrf
        <h4 class="font-bold max-sm:text-xl text-center text-2xl">Create your Tweet.</h4>
        <input
            class="px-4 max-sm:px-4 max-sm:text-sm max-sm:py-2 max-sm:text {{ $errors->has('title') ? 'border-red-600' : ' border-slate-300' }} py-2 bg-transparent rounded-lg outline-none border"
            type="text" name="title" value="{{ old('title') }}" placeholder="title">
        @error('title')
            <div class="error flex items-center text-red-600  gap-2">
                <p class="px-[9px] rounded-full border border-red-600 font-bold">!</p>
                <p class="text-md font-medium">Title is required!</p>
            </div>
        @enderror
        <textarea
            class="px-4 py-2 max-sm:text-sm max-sm:px-4 max-sm:py-2 resize-none {{ $errors->has('description') ? 'border-red-600' : ' border-slate-300' }} h-[30vh] bg-transparent rounded-lg outline-none border"
            type="text" name="description" placeholder="description">{{ old('description') }}</textarea>
        @error('description')
            <div class="error flex items-center text-red-600  gap-2">
                <p class="px-[9px] rounded-full border border-red-600 font-bold">!</p>
                <p class="text-md font-medium">Description is required!</p>
            </div>
        @enderror
        <div class="buttons flex flex-col gap-2">
            <button class="text-white font-medium max-sm:text-sm max-sm:py-2 btn-submit-create bg-gray-950 py-3 rounded-lg" type="submit">Create
                tweet</button>
            <a href="{{ route('pages.index') }}"
                class="btn-submit-create font-medium border max-sm:text-sm max-sm:py-2 text-gray-950 text-center border-gray-950 py-3 rounded-lg"
                type="submit">No, Cancel</a>
        </div>
    </form>
    <script>
        const createBtn = document.querySelector('.btn-submit-create');
        createBtn.addEventListener('submit', (event) => {
            event.preventDefault();
            createBtn.innerHTML = "Creating post..."
            createBtn.disabled = true;
            setTimeout(() => {
                createBtn.disabled = false;
                createBtn.innerHTML = "Create post"
            }, 2000);
        })
    </script>
@endsection
