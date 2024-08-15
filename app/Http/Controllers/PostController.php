<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $time = Carbon::now();
        if ($search) {
            $post = DB::table('post')->whereRaw("title LIKE? OR description LIKE?", ["%{$search}%", "%{$search}%"])->get();
        } else {
            $post = DB::table('post')->get();
        }

        return view('pages.index', ['posts' => $post, 'search' => $search, 'time' => $time]);
    }
    public function add()
    {
        return view('pages.create');
    }

    public function addStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'username' => auth()->user()->username,
        ];

        $post = DB::table('post')->insert($data);
        if ($post) {
            return redirect()->route('pages.index');
        }
    }


    // $request->validate([
    //     'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    //     'title' => 'required|string|max:255',
    //     'description' => 'required|string',
    // ]);

    // $validatedData = $request->validated();

    // $image = $request->file('image');
    // $imageName = time(). '.'. $image->getClientOriginalExtension();
    // $image->move(public_path('images'), $imageName);

    // $validatedData['image'] = $imageName;

    // $post = DB::table('post')->insert([
    //     'image' => $validatedData['image'],
    //     'title' => $validatedData['title'],
    //     'description' => $validatedData['description'],
    // ]);

    // if ($post) {
    //     return redirect()->route('pages.index');
    // }
    public function update($id)
    {
        $post = DB::table('post')->where('id', $id)->first();
        return view('pages.update', ['old' => $post]);
    }
    public function updateStore(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
        ];

        $post = DB::table('post')->where('id', $id)->update($data);
        $noUpdate = DB::table('post')->where('id', $id)->first();
        if ($post || $noUpdate) {
            return redirect()->route('pages.myInsights');
        }
    }

    public function deleteStore($id)
    {
        $post = DB::table('post')->where('id', $id)->delete();
        if ($post) {
            return back();
        }
    }

    public function post($id)
    {
        $post = DB::table('post')->where('id', $id)->first();
        return view('pages.post', ['post' => $post]);
    }

    public function insights()
    {
        $tweets = DB::table('post')->get();
        return view('pages.myInsights', ['tweets' => $tweets]);
    }
}
