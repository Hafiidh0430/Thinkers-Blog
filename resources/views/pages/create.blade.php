<x-layout-post :action="route('pages.create.addStore')" :method="'POST'">
    <div class="flex gap-4 flex-col max-md:px-12 px-24 mt-8">
        @csrf
        <input type="file" name="image" id="">
        <input
            class="px-4 font-semibold text-5xl {{ $errors->has('title') ? 'border-b-red-600' : ' border-b-slate-300' }} border-b outline-none py-2 bg-transparent"
            type="text" name="title" value="{{ old('title') }}" placeholder="Title">
        @error('title')
            <div class="error flex items-center text-red-600  gap-2">
                <p class="px-[.55rem] rounded-full border border-red-600 font-bold">!</p>
                <p class="text-md font-medium">{{$message}}</p>
            </div>
        @enderror
        <textarea
            class="px-4 py-2 text-3xl {{ $errors->has('description') ? 'border-b-red-600' : ' border-b-slate-300' }} outline-none  bg-transparent border-b"
            name="description" placeholder="Tell tour story">{{ old('description') }}</textarea>
        @error('description')
            <div class="error flex items-center text-red-600 gap-2">
                <p class="px-[.55rem] rounded-full border border-red-600 font-bold">!</p>
                <p class="text-md font-medium">{{$message}}</p>
            </div>
        @enderror
    </div>
</x-layout-post>