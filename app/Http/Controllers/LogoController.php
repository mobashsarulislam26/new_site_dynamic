<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\admin;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\StoreLogoRequest;
use App\Http\Requests\UpdateLogoRequest;
// use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = Logo::all();
        return view('admin.logo.showLogo', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'admin.logo.logo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLogoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'name' => 'required',
            'image_favicon' => 'required',

            //  'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


         $input = $request->all();

        if ($image = $request->file('image_favicon')) {
            $destinationPath = 'assets/img/logo/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image_favicon'] = "$profileImage";
        }

        logo::create($input);
        return  redirect()->route('Logo.index')
                    ->with('success','Item created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLogoRequest  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLogoRequest $request, Logo $logo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logo = Logo::find($id);
        $logo->delete();
        return redirect()->route('Logo.index')
                        ->with('success','Item deleted successfully');
    }

}
