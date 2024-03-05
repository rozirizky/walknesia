<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index (){
        $user = User::latest()->paginate(5);
        return view('admin.user',compact('user'));
    }
    public function login(){
      return view('login.index');
    }
    public function register(){
      return view('login.registrasi');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $this->validate($request,[
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function store(Request $request)
    {
       $validatedata =  $this->validate($request, [
           
            'name'     => 'required|max:100',
            'email'   => 'required|email|max:100',
            'password'   => 'required|min:6',
          

        ]);

$validatedata['password'] = Hash::make($validatedata['password']);
        //create post
        User::create([
            'name' => $request->name,
            'email'   => $request->email,
            'password'   => $request->password,
        ]);

        //redirect to index
        return redirect('/');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
  }