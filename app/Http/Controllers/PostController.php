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
        if ($search) {
            $post = Post::whereRaw("title LIKE? OR description LIKE?", ["%{$search}%", "%{$search}%"])->get();
        } else {
            $post = Post::get();
        }
        return view('pages.index', ['posts' => $post, 'search' => $search]);
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
            'created_at' => now(), // Atur tanggal secara manual
            'updated_at' => now()
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('assets/image'), $filename);
            $data['image'] = $filename;
        };

        $post = Post::insert($data);
        if ($post) {
            return redirect()->route('pages.index');
        }
    }
    public function update($id)
    {
        $post = Post::where('id_post', $id)->first();
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
            'created_at' => now(),
            'updated_at' => now()
        ];

        $old_image = Post::where('id_post', $id)->first()->image;
        $image_path = public_path('/assets/image/' . $old_image);

        if (File::exists($image_path)) {
            if ($request->hasFile('image')) {
                File::delete($image_path);
                $image = $request->file('image');
                $filename = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('assets/image'), $filename);
                $data['image'] = $filename;
            };
        }

        $update = Post::where('id_post', $id)->update($data);
        if ($update) {
            return redirect()->route('pages.stories');
        }
    }

    public function deleteStore($id)
    {
        $post = Post::where('id_post', $id)->delete();
        if ($post) return back();
    }

    public function post($id)
    {
        $post = Post::where('id_post', $id)->first();
        return view('pages.post', ['post' => $post]);
    }
}
