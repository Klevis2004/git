<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Block;

class PostsController extends Controller
{

    public function index()
    {
        $posts = 'klevisi';
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePost $request)
    {
        $validated = $request->validated();
        $post = BlogPost::create($validated);

        return redirect()->route('posts.show', ['post' => $post->id]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('posts.show', ['posts' => BlogPost::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('posts.edit', ['post' => BlogPost::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = BlogPost::findorFail($id);
        $validated = $request->validated();
        $post->fill($validated);
        $post->save();
        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
