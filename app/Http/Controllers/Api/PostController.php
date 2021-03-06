<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        /*  $posts = Post::all();
        return response()->json(['response' => $posts]); */

        /* $posts = Post::with(['tags'])->paginate();
        return $posts; */

        return PostResource::collection(Post::with(['category', 'tags'])->paginate());
    }
}