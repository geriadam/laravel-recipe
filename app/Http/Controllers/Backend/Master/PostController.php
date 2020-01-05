<?php

namespace App\Http\Controllers\Backend\Master;

use Auth;
use File;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Crudable;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    use Crudable;

    public function __construct()
    {
        
    }

    public function index()
    {
        $posts = Post::orderBy('title')->get();

        return view('backend.master.post.index', compact('posts'));
    }

    public function create()
    {
        return view('backend.master.post.create');
    }

    public function store(PostRequest $request)
    {
        // Check if do with file
        if ($request->has('file')) {
            $file_name = Post::upload($request->file('file'));
            $request->request->add(['image' => $file_name]);
        }

        $request->request->add(['user_id' => Auth::id()]);

        // Create Post
        $create_post = Post::create($request->all());


        $this->flashSuccessCreate();

        return redirect()->route('backend.master.post.index');
    }

    public function edit(Post $post)
    {
        return view('backend.master.post.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        // Check if do with file
        if ($request->has('file')) {

            // Delete Image First
            $post->deleteImage();

            // Then Upload
            $file_name = Post::upload($request->file('file'));
            $request->request->add(['image' => $file_name]);
        }

        $request->request->add(['user_id' => Auth::id()]);

        // Update Post
        $update_post = $post->update($request->all());

        $this->flashSuccessUpdate();

        return redirect()->route('backend.master.post.index');
    }

    public function destroy(Post $post)
    {
        $post->deleteImage();
        $post->delete();

        $this->flashSuccessDelete();

        return redirect()->route('backend.master.post.index');
    }
}
