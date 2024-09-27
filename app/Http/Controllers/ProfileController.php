<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index () {
        $stories = Post::with('author')->where('user_id', auth()->user()->id_user)->limit(2)->get();
        return view('pages.profile.activity-reposted')->with(['stories' => $stories]);
    }

    public function likesActivity() {
        return view('pages.profile.activity-likes');
    }
    public function commentsActivity() {
        return view('pages.profile.activity-comments');
    }
}
