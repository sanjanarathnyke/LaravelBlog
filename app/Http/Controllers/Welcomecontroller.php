<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Welcomecontroller extends Controller
{
    public function index(){

        $posts = Post::all(); // this method (all method eka) works->posts table eke tyna hama value ekakma array ekkata gannawa

        return view('welcome',compact('posts')); // compact eken karanne kalin gatta variable eka view ekata pass karana eka
        
    }

    public function allposts(){

        $posts = DB::table('posts')->get();

        return view('posts.all-post',compact('posts'));
    }
}
