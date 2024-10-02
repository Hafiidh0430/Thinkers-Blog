<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            // $postSearch = PostCategory::query()->whereHas('post', function ($query) use ($search) {
            //     $query->whereRaw("title LIKE? OR description LIKE?", ["%{$search}%", "%{$search}%"]);
            // })->get();
            // dd($postSearch);
            $post = Post::with('author')->whereRaw("title LIKE? OR description LIKE?", ["%{$search}%", "%{$search}%"])->get();
        } else {
            $post = Post::with('author')->get();
        }

        return view('pages.index', ['posts' => $post, 'search_value' => $search]);
    }

    public function add()
    {
        $category = Category::all();
        return view('pages.create')->with(['category' => $category]);
    }

    public function addStore(Request $request)
    {
        $request->validate([
            'image' => 'nullable|file|image|mimes:jpg,jpeg,png,webp|max:8192',
            'title' => 'required|string',
            'description' => 'required|string',
            'input_category' => 'required|string'
        ]);

        $data = [
            'user_id' => auth()->user()->id_user,
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('assets/image'), $filename);
            $data['image'] = $filename;
        };

        $post = Post::create($data);
        $category_id = Category::whereIn('category', [$request->input_category])->pluck('id_category');
        $post->categories()->sync($category_id);
        if ($post) {
            return redirect()->route('pages.index');
        }
    }
    public function update($id)
    {
        $post = Post::query()->findOrFail($id);
        $category = Category::all();
        return view('pages.update', ['old' => $post, 'category' => $category]);
    }
    public function updateStore(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|file|image|mimes:jpg,jpeg,png,webp|max:8192',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $data = [
            'user_id' => auth()->user()->id_user,
            'title' => $request->title,
            'description' => $request->description,
        ];

        $old_image = Post::findOrFail($id)->image;
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


        $category_id = Category::whereIn('category', [$request->input_category])->pluck('id_category');
        PostCategory::query()->findOrFail($id)->update(['category_id' => $category_id]);
        Post::query()->findOrFail($id)->update($data);

        return redirect()->route('pages.stories');
    }

    public function deleteStore($id)
    {
        $post = Post::where('id_post', $id)->delete();
        if ($post) return back();
    }

    public function post($id)
    {
        $post = Post::with(['author'])->where('id_post', $id)->first();
        return view('pages.post', ['post' => $post]);
    }
}
