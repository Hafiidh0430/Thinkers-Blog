<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index () {
        $stories = Post::where('username', auth()->user()->username)->limit(2)->get();
        return view('pages.profile.activity-reposted')->with(['stories' => $stories]);
    }

    public function likesActivity() {
        return view('pages.profile.activity-likes');
    }
    public function commentsActivity() {
        return view('pages.profile.activity-comments');
    }
}
