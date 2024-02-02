<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }  
    
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);

        Post::create([
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'title' => $request->title,
            'content' => $request->content, 

        ]);
    
        return redirect('post/create')->with('status', 'Post Created!');
    }

    public function edit(int $id)
    {
        $posts = Post::findOrFail($id);
        return view('post.edit', compact('posts'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);

        Post::findOrFail($id)->update([
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'title' => $request->title,
            'content' => $request->content, 
        ]);
    
        return redirect()->back()->with('status', 'Post Updated!');
    }

    public function destroy(int $id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();

        return redirect()->back()->with('status', 'Post Deleted.');
    }
}
