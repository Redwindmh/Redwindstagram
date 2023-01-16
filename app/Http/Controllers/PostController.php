<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');

        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(6);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('posts', 's3');

        // $image = Image::make(public_path("/storage/{$imagePath}"))->fit(1200, 1200);
        $image = Image::make(url($imagePath))->fit(1200, 1200);
        // $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->username);
    }


    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'caption'   => 'required',
    //         'image'     => 'required|image|mimes:jpeg,jpg,png,'
    //     ]);
    //     $file = $request->file('image');
    //     $filename = uniqid() . substr(time(), 0, 6) . "." . $file->getClientOriginalExtension();
    //     if (!Storage::disk('s3')->exists('posts')) {
    //         Storage::disk('s3')->makeDirectory('posts');
    //     }
    //     Image::make($file)->resize(1200, 1200)->save('storage/posts/' . $filename);
    //     $data['image'] = $filename;
    //     auth()->user()->posts()->create($data);
    //     return redirect('/profile/' . auth()->user()->id);
    // }





    public function show(\App\Models\Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function deletePost(\App\Models\Post $post)
    {
        $post = Post::find($post);
        $post->destroy();

        return redirect('/profile/' . auth()->user()->username)->with(compact('post'));
    }
}