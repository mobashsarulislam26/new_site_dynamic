<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\guard;
use Session;


class adminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function makeLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
                return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data= array(
            'username' => $request->username,
            'password' => $request->password,
        );

        if(Auth::guard('admin')->attempt($data))
        {

            echo "Login Successfully";

            // return redirect('/admin');
        }
        else
        {
            return back()->with('error','Invalid Username or Password');
        }

        // $admin = admin::where('username', $request->username)->where('password', $request->password)->get()->toArray();
        // if($admin){
        //     echo "Login Success";
        // }
        // else{
        //     echo "Login Failed";
        // }
    }
}
