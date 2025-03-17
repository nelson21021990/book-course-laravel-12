<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//:Response->para texto plano
    {
      $category = Category::find(1);
      dd($category->posts[0]->title);
      

        // return response()->json([
        //         'birthday' => 'date:Y-m-d',
        //         'joined_at' => 'datetime:Y-m-d H:00',
            

        //]);
         //dd( Post::find(1));
        // $post = Post::find(3)->delete();
       
        // dd($post);
        // $post->update([
        //     'category_id' => 1,
        //     'title' => 'test title new',
        //     'slug' => 'test slug new',
        //     'description' => 'test description new',
        //     'content' => 'test content new',
        //     'image' => 'test image new',
        //     'posted' => 'not',
        // ]);
        //     dd($post);
        //   Post::create([
        //       'category_id' => 1,
        //       'title' => 'test title',
        //       'slug' => 'test slug',
        //       'description' => 'test description',
        //       'content' => 'test content',
        //       'image' => 'test image',
        //       'posted' => 'not',
        //   ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
