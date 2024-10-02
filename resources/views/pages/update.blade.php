<x-layout-post btn_text="Update" :category="$category" :action="route('pages.updateStore', ['id' => $old->id_post])" :method="'POST'">
    <div class="flex gap-4 flex-col px-24 mt-16">
        @csrf
        @method('PATCH')
        <input type="file" name="image" id="">
        <input
            class="px-4 font-semibold text-5xl {{ $errors->has('title') ? 'border-b-red-600' : ' border-b-slate-300' }} border-b outline-none py-2 bg-transparent"
            type="text" name="title" value="{{ $old->title }}" placeholder="Title">
        <textarea
            class="description_input px-4 py-2 min-h-[20rem] text-3xl {{ $errors->has('description') ? 'border-b-red-600' : ' border-b-slate-300' }} outline-none  bg-transparent border-b"
            name="description" placeholder="Tell your story">{{ $old->description }}</textarea>
    </div>
</x-layout-post>

