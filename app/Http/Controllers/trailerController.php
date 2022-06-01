<?php

namespace App\Http\Controllers;

use App\Models\trailer;
use Illuminate\Http\Request;

class trailerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trs = trailer::all();
        return view('admins.trtab',['trailers'=>$trs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.tradd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baza = new trailer;
        $baz = $request->validate([
            'v_name'=>'required',
            'v_link'=>'required',
            'v_time'=>'required'
        ]);
        if(!($request->v_image==''))
        {
            $test = $request->file('v_image')->getClientOriginalName();
            $request->v_image->move(public_path('img'),$test);
            $baza->v_image = 'img/' . $test;
        }else{
            $baza->v_image = $request->v_image;
        }
        $baza->v_name=$baz['v_name'];
        $baza->v_link=$baz['v_link'];
        $baza->v_time=$baz['v_time'];
        $baza->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(trailer $trailer)
    {
        return view('admins.trupd',['trs'=>$trailer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trailer $trailer)
    {
      
        $baz = $request->validate([
            'v_name'=>'required',
            'v_link'=>'required',
            'v_time'=>'required'
        ]);
        if(!($request->v_image==''))
        {
            $test = $request->file('v_image')->getClientOriginalName();
            $request->v_image->move(public_path('img'),$test);
            $trailer->v_image = 'img/' . $test;
        }else{
            $trailer->v_image = $request->image;
        }
        $trailer->v_name=$baz['v_name'];
        $trailer->v_link=$baz['v_link'];
        $trailer->v_time=$baz['v_time'];
        $trailer->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(trailer $trailer)
    {
        $trailer->delete();
        return back();
    }
}
