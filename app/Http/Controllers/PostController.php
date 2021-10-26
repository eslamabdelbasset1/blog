<?php

namespace App\Http\Controllers;

use App\Http\Requests\storePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postCollection = Post::all();
        return view('posts.index', ['postCollection' => $postCollection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('posts.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( storePostRequest $request)
    {
//        $requestDB = request()->all();
//        $request->validate([
//            'title' => 'required|min:3|max:255',
//            'description' => 'required|min:3',
//            'post_creator' => ['required','exists:users,id'],
//        ],
//        [
//            'title.required' => 'Title name field is required.',
//        ]);
        post::create([
//           'title' => $request['title'],
//           'description' => $request['description'],
//            'user_id' => $request['post_creator'],
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->post_creator,
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($postId)
    {
        $posts = post::findOrFail($postId);
        return view('posts.show', [
            'posts'=> $posts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $cats = cat::findOrFail($post);
        return view('posts.edit', [
            'cats'=> $cats
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
     public function update(Post $post, Request $request)
     {

           $request->validate([
               'name' => 'required |string | max:100',
               'desc' => 'required |string'
           ]);
           post::findOrFail($post)->update([
               'name' => $request->name,
               'desc' => $request->desc,
           ]);
           return redirect(url('/posts'));
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $posts = post::findOrFail($post)->delete;
        return redirect(url('/posts'));
    }


}
