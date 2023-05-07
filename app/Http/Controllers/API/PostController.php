<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $post = Post::all();

        $posts = PostResource::make($post);

        return response()->json(['data'=>$posts,'error'=>''],200);
    }
}
