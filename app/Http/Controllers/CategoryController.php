<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories =Category::all() ;
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'name'=> 'required|min:4',
            'description'=> 'required|max:2000',
            'img'=> 'required|image'



        ]);
        //
        $category = Category::create([
            'name'=> $request->name,
            'img'=> $request->file('img')->store('public/image'),
            'description'=> $request->description,
        ]);

        return redirect()->back()->with('message',"Hai creato la categoria : $category->name");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        if($request->file('img')){
            $img =$request->file('img')->store('public/image');
        }
        else{
            $img =$category->img;
        }
        //
         $category->update([
            'name'=> $request->name,
            'img'=> $img,
            'description'=> $request->description,
         ]);
         return redirect()->back()->with('message','La categoria è stata modificata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();

        return redirect(route('category.index'))->with('message','La categoria è stata eliminata');
    }
}
