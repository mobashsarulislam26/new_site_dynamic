<?php

namespace App\Http\Controllers;

use App\Models\ProductCover;
use Illuminate\Http\Request;
// use App\Http\Requests\UpdateProductCoverRequest;

class ProductCoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCover = ProductCover::all();
        return view('admin.productCover.showCover', compact('productCover'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productCover.addCover');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductCoverRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$request->validate([

            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


         $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'assets/img/cover/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        ProductCover::create($input);
        return  redirect()->route('cover.index')
                    ->with('success','Item created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCover  $productCover
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCover $productCover)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCover  $productCover
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCover $productCover)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductCoverRequest  $request
     * @param  \App\Models\ProductCover  $productCover
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCover $productCover)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCover  $productCover
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productCover = ProductCover::find($id);
        $productCover->delete();
        return redirect()->route('cover.index')
                        ->with('success','Item deleted successfully');
    }
}
