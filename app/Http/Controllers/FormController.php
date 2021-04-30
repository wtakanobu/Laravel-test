<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormSendRequest;

class FormController extends Controller
{
    public function form()
    {
        return view('form');
    }
    
    // public function send(Request $request)
    // {
    //     dd($request->all()); // 入力値を表示
    // }
    
    public function send(FormSendRequest $request)
    {
        
        dd($request->all()); // 入力値を表示
     }
    
}