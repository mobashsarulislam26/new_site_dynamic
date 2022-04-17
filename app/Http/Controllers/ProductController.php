<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::with('category')
        ->get();
       return view('admin.showProduct', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.AddProduct', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'sale_price' => 'required',
            'stockStatus' => 'required',
            'category_id' => 'required',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


         $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'assets/img/product/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create($input);
        return  redirect()->route('Product.index')
                    ->with('success','Item created successfully');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $category = Category::all();
        $product = Product::find($id);
        return view('admin.editProduct', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           $request->validate([
                'name' => 'required',
                'short_description' => 'required',
                'description' => 'required',
                'sale_price' => 'required',
                'stockStatus' => 'required',
                'category_id' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);


           try{
                $product = Product::find($id);
                $input = $request->all();
                $product->update($input);
                return  redirect()->route('Product.index')
                ->with('success','Item updated successfully');
           }catch(\Exception $e){
                return $e;
                return back()->with('error','Error update');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $product = Product::find($id);
            $product->delete();
            return back()->with('success','Product deleted successfully');
        }catch(\Exception $e){
            return $e;
            return back()->with('error','Error deletion');
        }
    }
}


















// class ProductController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $product = Product::with('category')
//              ->get();
//             //  dd($product);
//         return view('admin.showProduct', compact('product'));


//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         $category = Category::all();
//         return view('admin.AddProduct', compact('category'));
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \App\Http\Requests\StoreProductRequest  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         // dd($request);

//         $request->validate([
//             'name' => 'required',
//             'short_description' => 'required',
//             'description' => 'required',
//             'sale_price' => 'required',
//             'stockStatus' => 'required',
//             'category_id' => 'required',
//              'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//         ]);

//         // $imageName = time().'.'.$request->image->extension();
//         // $request->image->move(public_path('assets/img/product'), $imageName);
//          $input = $request->all();

//         if ($image = $request->file('image')) {
//             $destinationPath = 'assets/img/product/';
//             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
//             $image->move($destinationPath, $profileImage);
//             $input['image'] = "$profileImage";
//         }

//         Product::create($input);

//         //  Product::create($request->all());


//         return  back()
//                      ->with('success','Item created successfully');
//     }





//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Product  $product
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Product $product)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Product  $product
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Product $product)
//     {

//         // return $product->id;
//         // return $product;
//         // try{
//       $category = Category::all();
//         // $products=Product::find($product);
//         // dd($products);
//         // return view('admin.editProduct', compact('product','category'));

//         return view('admin.editProduct', compact('product','category'));
//         // } catch(\Exception $e){
//         //     return $e;
//         //     return redirect()->back()->with('error', 'Something went wrong');
//         }



//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \App\Http\Requests\UpdateProductRequest  $request
//      * @param  \App\Models\Product  $product
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Product $product)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Product  $product
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Product $product)
//     {
//         //
//     }


