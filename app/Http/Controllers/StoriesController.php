<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class StoriesController extends Controller
{
    public function index()
    {
        $post = Post::with(['author'])->get();
        return view('pages.stories.stories', ['posts' => $post]);
    }

    public function draftsStories() 
    {
        return view('pages.stories.stories-draft');
    }
    public function apiStories() 
    {
        return response()->json(Post::all());
    }
}
