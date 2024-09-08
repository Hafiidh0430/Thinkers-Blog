@props([
    'name' => 'search',
    'action' => 'pages.index'
])

<form action="{{ route($action) }}">
    <input name="{{$name}}"
        class="outline-none px-4 text-sm py-2 rounded-full border border-slate-200 bg-slate-100"
        type="text" placeholder="Search">
</form>