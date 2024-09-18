<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class StoriesController extends Controller
{
    public function index()
    {
        $post = DB::table('post')->get();
        return view('pages.stories', ['post' => $post]);
    }

    public function draftsStories() 
    {
        return view('pages.stories.stories-draft');
    }
}
