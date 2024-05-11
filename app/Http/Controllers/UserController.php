<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function usersignup()
    {
        return view('usersignup');
    }





    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'numeric|required|digits:10',
            'role' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->role = $request->input('role');
        if ($request->input('role') == 'employee') {
            $user->status = 1;
        }
        $user->password = Hash::make($request->input('password'));

        if ($user->save()) {
            return back()->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }




    public function userlogin()
    {
        return view('userlogin');
    }




    public function loginUser (Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);
  
    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->status == 0) {
            return back()->withErrors([
                'is_approved' => 'User not approved.',
            ]);
        }
        
        $role = $user->role;
        if ($role === 'admin') {
            return redirect()->intended('admindashboard');
        } elseif ($role === 'employer') {
            return redirect()->intended('employerdashboard');
        } elseif ($role === 'employee') {
            return redirect()->intended('employeedashboard');
        }
        
        return redirect()->intended('index');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
}
}
