@extends('layout')
@section('title', 'Update Post')


@section('content1')
    <form class="flex gap-4 flex-col w-[35%] mt-10" method="POST"
        action="{{ route('pages.updateStore', ['id' => $old->id]) }}">
        @method('PATCH')
        @csrf
        <h4 class="font-bold text-2xl">Update your tweet.</h4>
        <input value="{{ $old->title }}" class="px-6 py-2 bg-transparent rounded-lg outline-none border {{ $errors->has('title') ? 'border-red-600' : ' border-slate-300' }}"
            type="text" name="title" placeholder="title">
        @error('title')
            <div class="error flex items-center text-red-600  gap-2">
                <p class="px-[9px] rounded-full border border-red-600 font-bold">!</p>
                <p class="text-md font-medium">Update title can't be empty!</p>
            </div>
        @enderror
        <textarea class="px-6 py-2 resize-none h-[30vh] bg-transparent rounded-lg outline-none border {{ $errors->has('description') ? 'border-red-600' : ' border-slate-300' }}"
            type="text" name="description" placeholder="description">{{ $old->description }}</textarea>
        @error('description')
            <div class="error flex items-center text-red-600  gap-2">
                <p class="px-[9px] rounded-full border border-red-600 font-bold">!</p>
                <p class="text-md font-medium">Update description can't be empty</p>
            </div>
        @enderror
        <div class="buttons flex flex-col gap-2">
            <button class="text-white font-medium btn-submit-create bg-gray-950 py-3 rounded-lg" type="submit">Update
                tweet</button>
            <a href="{{ route('pages.myInsights') }}"
                class="btn-submit-create font-medium border text-gray-950 text-center border-gray-950 py-3 rounded-lg"
                type="submit">No, Cancel</a>
        </div>
    </form>
    <script>
        const updateBtn = document.querySelector('.btn-submit-update');
        updateBtn.addEventListener('submit', (event) => {
            event.preventDefault();
            updateBtn.innerHTML = "Updating post..."
            updateBtn.disabled = true;
            setTimeout(() => {
                updateBtn.disabled = false;
                updateBtn.innerHTML = "Update post"
            }, 2000);
        })
    </script>
@endsection
