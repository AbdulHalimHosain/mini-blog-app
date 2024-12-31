<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::paginate(5); 
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
        ]);

        BlogPost::create($request->only(['title', 'content']));

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function edit($id)
    {
        $post = BlogPost::findOrFail($id); 
        return view('posts.form', compact('post')); 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
        ]);

        $post = BlogPost::findOrFail($id); 
        $post->update($request->only(['title', 'content']));

        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id); 
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
