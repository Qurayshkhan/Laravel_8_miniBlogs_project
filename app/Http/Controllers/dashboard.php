<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
class dashboard extends Controller
{
    public function show_post(Request $request){
       // $posts=Post::all();
$userid=$request->user()->id;
$posts=Post::where('user_id',$userid)->get();
        return view('dashboard',['posts'=>$posts]);
    }
    public function home_post(){
        $posts=Post::all();
       // $posts=Post::simplepaginate(4);
        return view('welcome',['posts'=>$posts]);
    }
}
