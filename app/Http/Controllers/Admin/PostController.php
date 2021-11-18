<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;

class PostController extends Controller
{

    protected $validationRules = [
        'title' => 'string|required|max:150',
        'content' => 'string|required',
        'category' => 'nullable|exists:categories,id'
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view("admin.posts.index", compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate($this->validationRules);

        $newPost = new Post();
        $newPost->fill($request->all());
        $newPost->slug = $this->getSlug($newPost->title);
        $newPost->save();
        return redirect()->route('admin.posts.show', $newPost['id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
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
        $request->validate($this->validationRules);

        if($post->title != $request->title) {
            $post->slug = $this->getSlug($request->title);
        }


        $post->fill($request->all());
        $post->save();
        return redirect()->route('admin.posts.index')->with('success', "Il post n. {$post['id']} è stato aggiornato");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', "Il post n. {$post->id} è stato eliminato");
    }

    protected function getSlug($title)
    {
        $slug = Str::of($title)->slug('-');

        $postExist = Post::where('slug', $slug)->first();
        
        $increment = 2;

        while($postExist){
            $slug = Str::of($title)->slug('-') . "-{$increment}";
            $postExist = Post::where('slug', $slug)->first();
            $increment++;
        }

        return $slug;
    }
}
