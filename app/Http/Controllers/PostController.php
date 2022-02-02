<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        $users = auth()->user()->following()->pluck('profiles.user_id');

        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(6);

        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(){
       $data = request()->validate([
           'caption' => 'required',
           'image' => ['required', 'image'],
       ]);

       $imagePath = request('image')->store('uploads', 'public');

       $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
       $image ->save();

       auth()->user()->posts()->create([
           'caption' => $data['caption'],
           'image' => $imagePath,
       ]);

       return redirect('/profile/' . auth()->user()->username);
    }

    public function show(\App\Models\Post $post) {
        return view('posts.show', compact('post'));
    }

    public function deletePost(\App\Models\Post $post) {
        $post = Post::find($post);
        $post->destroy();

        return redirect('/profile/' . auth()->user()->username)->with(compact('post'));
    }
}