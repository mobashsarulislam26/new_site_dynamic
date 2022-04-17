<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $category = Category::all();
    return view('admin.showCategory', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.AddCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
            'name' => 'required',
            'slug' => 'required',
            ]);
            $form_data = array(
            'name'  =>  $request->name,
            'slug'  =>  $request->slug,
            );
            Category::create($form_data);

            // $input = $request->all();
            // Category::create($input);
            return  back()
                     ->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        // dd($category);
        return view('admin.editCategory',compact('category'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function Update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            ]);
            $Category = Category::find($id);
            $input = $request->all();
            $Category->update($input);
            return  redirect()->route('Category.index')
                                    ->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $category = Category::find($id);
            $category->delete();
            return back()->with('success','category deleted successfully');
        }catch(\Exception $e){
            return $e;
            return back()->with('error','Error deletion');
        }

    }



}
