<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//:Response->para texto plano
    {
        $categories = Category::paginate(3);
       
        return view('dashboard.category.index',compact('categories'));
     
    }

    public function create()
    {
        $category = new Category();
        
        return view('dashboard/category/create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Category::create($request->validated()); // creacion del post simplificada

        return to_route('category.index');

    }

    
    public function show(Category $category)
    {
        return view('dashboard.category.show',['category' => $category]);
    }


    public function edit(Category $category)
    {
        return view('dashboard.category.edit',compact('category'));
    }

    public function update(PutRequest $request, Category $category)
    { 
    

        $category->update($request->validated());

        return to_route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('category.index');
    }
}
