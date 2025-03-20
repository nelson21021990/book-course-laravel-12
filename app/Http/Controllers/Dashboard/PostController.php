<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use BaconQrCode\Renderer\Path\Path;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//:Response->para texto plano
    {
        session()->flush();//borra la session
        //session(['key' => 'value']); //crea el mensaje de session durante un tiempo
        $posts = Post::paginate(3);
        //dd($posts);
        return view('dashboard.post.index',compact('posts'));
        
        //return 'Index';
    //   $category = Category::find(1);
    //   dd($category->posts[0]->title);
      

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
        $categories = Category::pluck('id','title');
        $post = new Post();
        
        return view('dashboard/post/create',compact('categories','post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PutRequest $request)
    {
        Post::create($request->validated()); // creacion del post simplificada
        
        return to_route('post.index')->with('status','Category create');

       
        //dd($request->all()['title']);
        //dd($request->all());
        // $request->validate([
        //     'title'=> 'required|min:5|max:500',
        //     'slug'=> 'required|min:5|max:500',
        //     'content'=> 'required|min:7',
        //     'category_id'=> 'required|integer',
        //     'description'=> 'required|min:7',
        //     'posted'=> 'required',
        // ]);
        // echo 'not';

      
        //    Post::create([ //crea el post manual
        //        'category_id' => $request->all()['category_id'],
        //        'title' => $request->all()['title'],
        //        'slug' => $request->all()['slug'],
        //        'description' => $request->all()['description'],
        //        'content' => $request->all()['content'],
        //        //'image' => $request->all()['image'],
        //        'postejhfhfd' => $request->all()['posted'],
        //    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show',['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id','title');
        return view('dashboard.post.edit',compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    { 
        $data = $request->validated();
        //dd($request->image);

        //imagen
        if (isset($data['image'])) {
            $data['image'] = $filename = time().'.'.$data['image']->extension();
            $request->image->move(public_path('uploads/posts'),$filename);
        }
  
        //imagen
        $post->update($data);

        return to_route('post.index')->with('status','Category update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index')->with('status','Category delete');
    }
}
