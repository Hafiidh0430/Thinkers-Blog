<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index () {
        $stories = Post::where('username', auth()->user()->username)->get();
        return view('pages.profile.profile-post')->with(['stories' => $stories]);
    }
    public function about () {
        $stories = Post::where('username', auth()->user()->username)->get();
        return view('pages.profile.profile-about')->with(['stories' => $stories]);
    }
}
