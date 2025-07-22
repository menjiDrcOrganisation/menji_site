<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\PostImage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.posts.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $posts = Post::with('images')->paginate(10);
        // $posts = Post::all();
        #dd(count(Admin::all()));
        return view('blog.index', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required',
        'images.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    if (count($request->file('images')) < 3) {
        return back()->withErrors(['images' => 'Veuillez ajouter au moins 3 images']);
    }

    $post = Post::create([
        'title' => $request->title,
        'content' => $request->content,
        'user_id' => auth()->id(),
        'slug' => Str::slug($request->title),
    ]);

    foreach ($request->file('images') as $image) {
        $path = $image->store('post_images', 'public');
        PostImage::create([
            'post_id' => $post->id,
            'image_path' => $path,
        ]);
    }

    return redirect()->route('posts.index')->with('success', 'Article publié avec sa galerie !');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
