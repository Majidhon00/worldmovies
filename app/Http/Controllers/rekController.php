<?php

namespace App\Http\Controllers;

use App\Models\reklama;
use Illuminate\Http\Request;

class rekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reks = reklama::all();
        return view('admins.rektab',['rek'=>$reks]);
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
        //
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
    public function edit(reklama $rek)
    {
        return view('admins.reklama',['rek'=>$rek]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reklama $rek)
    {
        if(!($request->src1==''))
        {
            $test = $request->file('src1')->getClientOriginalName();
            $request->src1->move(public_path('img'),$test);
            $rek->src1 = 'img/' . $test;
        }else{
            $rek->src1 = $request->src11;
        }
        if(!($request->src2==''))
        {
            $test = $request->file('src2')->getClientOriginalName();
            $request->src2->move(public_path('img'),$test);
            $rek->src2 = 'img/' . $test;
        }else{
            $rek->src2 = $request->src12;
        }
        $rek->href=$request->href;
        $rek->save();
        return back();  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
