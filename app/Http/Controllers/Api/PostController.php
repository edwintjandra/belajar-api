<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Log;


class PostController extends Controller
{
    //
    public function index(){
        $posts=Post::all();
        return response()->json($posts);
    }

    public function store(Request $request){
        $post=Post::create($request->all());
        Log::info("successfully send post data");
        return response()->json(['code'=>'success']);
    }
}
