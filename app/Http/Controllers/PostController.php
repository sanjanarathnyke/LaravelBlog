<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        //+++++++++++++other way+++++

        // $user = Auth::user();

        // Post::create([
        //     'user_id' => $user->id,
        //     'title' => $validatedData['title'],
        //     'description' => $validatedData['description'],
        //     'name' => $user->name,
        //     'email' => $user->email
        // ]);
        

        Post::create([
            'user_id' => Auth::id(),
            'title' => $validatedData['title'],
            'description' => $validatedData['description']
        ]);

        return back();

    }

    public function show($postId){

        $post = Post::findorfail($postId);

        return view('posts.show',compact('post'));

    }

    public function edit($postId){

        $post = Post::findorfail($postId);
        return view('posts.edit',compact('post'));  

    }

    public function update($postId,Request $request){

        // dd($request->all()); //meken pass wenne array ekak widihata meke tynne csrf token eka hidden value ekak widihata
        Post::findorfail($postId)->update($request->all());

        return redirect(route('posts.all'));

    }

    public function delete($postId){

        Post::findorfail($postId)->delete();
        return redirect(route('posts.all'));

    }
 
}
