<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\guard;
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
            return redirect('admin/dashboard');
        }else{
            return redirect()->back()->withError(['message'=>'Invalid Username or Password']);
        }

      }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin');
    }

}
