<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
    * Logout the authenticated user.
    */
   public function logout()
   {
        \Illuminate\Support\Facades\Auth::logout();

       return redirect('/');
   }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postlist = Post::all();
        $cont = Post::all()->count();
        $postOne = Post::where('id',$cont)->first();
        return view
        
        ('post',[
            'postlist' => $postlist,
            'postOne' => $postOne
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('newPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([
            'title'=> $request->title,
            'post'=> $request->post
        ]);

        return redirect('post'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /*
     * Show the form for editing the specified resource.
     * @param
     * @return     
     * 
     */
    public function edit($id)
    {

        $post=Post::findOrFail($id);
        return view('editPost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request
     * @param Post
     * @return  Response
     * 
     */
    public function update(Request $request, $id)
    {
        $datosPost = request()->except(['_token','_method']);
        Post::where('id','=',$id)->update($datosPost);

        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
