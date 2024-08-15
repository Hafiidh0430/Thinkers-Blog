@extends('layout')
@section('title', '')


@section('content1')
    <div class="mt-12 flex flex-col gap-6 items-center container-post">
        <h1 class="text-5xl text-center">{{ $post->title }}</h1>
        <p class="text-xl text-slate-600">{{ $post->description }}</p>
    </div>
@endsection
@section('content2')
    <div class="user-profile mt-12 flex gap-4 items-center">
        <h4 class="user font-semibold">Created by @ {{$post->username}}</h4>
        <p>|</p>
        <p class="date">Today, 9:30 PM</p>
    </div>
@endsection
