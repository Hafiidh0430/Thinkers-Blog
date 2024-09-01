<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

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
            'image' => 'nullable|file|image|mimes:jpg,jpeg,png,webp|max:8192',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $data = [
            'username' => auth()->user()->username,
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('assets/image'), $filename);
            $data['image'] = $filename;
        };

        $post = DB::table('post')->insert($data);
        if ($post) {
            return redirect()->route('pages.index');
        }
    }
    public function update($id)
    {
        $post = DB::table('post')->where('id', $id)->first();
        return view('pages.update', ['old' => $post]);
    }
    public function updateStore(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|file|image|mimes:jpg,jpeg,png,webp|max:8192',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $data = [
            'username' => auth()->user()->username,
            'title' => $request->title,
            'description' => $request->description,
        ];

        $old_image = DB::table('post')->where('id', $id)->first()->image;
        $image_path = public_path('/assets/image/'. $old_image);

        if (File::exists($image_path)) {
            File::delete($image_path);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('assets/image'), $filename);
                $data['image'] = $filename;
            };
        }

        $update = DB::table('post')->where('id', $id)->update($data);
        if ($update) {
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
