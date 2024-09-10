<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoriesController extends Controller
{
    public function index()
    {
        $post = DB::table('post')->get();
        return view('pages.stories', ['post' => $post]);
    }
}
