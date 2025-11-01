<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
// 18.1 then again also checked that is we are getting the value or not but  we are getting the empty [] because there is no data is created.
        $post = Post::select(['id','title', 'body'])->get();
        return response()->json($post);
        // 18. checking in thunder client that the request is working or not on pasting the link 'http://127.0.0.1:8000/api/posts'

        // return response()->json('success');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           //18.2 creating data to the db we use the store function and using thunder client we will it is working or not.

           $post = Post::create([
            'title'=> $request->title,
            'body'=> $request->body,
           ]);

           return response()->json([
            'id'=>$post->id,
            'title'=>$post->title,
            'body'=> $post->body           ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //18.3 get a specific data by id we will use show api
        $post = Post::find($id);
        return response()->json($post);
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
        //18.4 update a single value
        $post = Post::find($id);
        $post->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //18.5 delete a data and rest flow 19. is in frontend
        $post=Post::destroy($id);
        return response()->json(['Post deleted successfully']);
    }

}
