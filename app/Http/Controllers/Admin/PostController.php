<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use function GuzzleHttp\Promise\all;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        //$posts = Auth::user()->Post::all();
        $posts = Auth::user()->posts()->orderByDesc('id')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'sub_title' => 'nullable',
            'content' => 'nullable',
            'category_id' => 'nullable|exists:categories,id',
            //'tags' => 'exists:tags,id',
        ]);
        $validated['slug'] = Str::slug($validated['title']);
        $validated['user_id'] = Auth::id();
        $_post = Post::create($validated);
        if ($request->has('tags')) {
            $request->validate([
                'tags' => ['nullable', 'exists:tags,id']
            ]);
            $_post->tags()->attach($request->tags);
        }
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('admin.posts.show', compact('post',));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $categories = Category::all();
        $tags = Tag::all();
        /* condizione per limitare l'accesso ad altri utetnti */
        if (Auth::id() === $post->user_id) {

            return view('admin.posts.edit', compact('post', 'tags', 'categories'));
        } else {
            abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        if (Auth::id() === $post->iser_id) {
            $validated = $request->validate([
                //'title' => ['required', Rule::unique('posts')->ignore($post->id)],
                'title' => 'required',
                'image' => 'nullable',
                'sub_title' => 'nullable',
                'content' => 'nullable',
                'category_id' => 'nullable | exists:categories,id',
            ]);
            if ($request->has('tags')) {
                $request->validate([
                    'tags' => ['nullable', 'exists:tags,id']
                ]);
                $post->update($validated);
                $post->tags()->sync($request->tags);
            }
            return redirect()->route('admin.posts.index');
        } else {
            abort(403);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (Auth::id() === $post->user_id) {
            //
            $post->delete();
            return redirect()->route('admin.posts.index');
        } else {
            abort(403);
        }
    }
}