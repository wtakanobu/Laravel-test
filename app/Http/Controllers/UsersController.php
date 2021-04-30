<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $user = User::all();
       return view('user.index')->with('user', $user);
    }
    
    public function show($id)
    {
       $user = User::find($id);
       return view('users.show')->with('user', $user);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}
