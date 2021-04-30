<?php

namespace App\Http\Controllers;

use App\Models\Yubin;
use Illuminate\Http\Request;

class YubinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('yubins');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $yubin = new Yubin;

        $postal7 = request('post');
        $results = $yubin->where('postal7', $postal7)->get();
        return view('results', ['postdata' => $results]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Yubin  $yubin
     * @return \Illuminate\Http\Response
     */
    public function show(Yubin $yubin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Yubin  $yubin
     * @return \Illuminate\Http\Response
     */
    public function edit(Yubin $yubin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Yubin  $yubin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yubin $yubin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Yubin  $yubin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yubin $yubin)
    {
        //
    }
}
