<?php

namespace App\Http\Controllers;

use App\Models\follower;
use App\Models\reklama;
use App\Models\trailer;
use App\Models\video;
use Illuminate\Http\Request;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $top = video::all();
        $rek = reklama::all();
        $trs = trailer::orderByDesc('created_at')->limit(3)->get();
          
                // $count = follower::where('follow','=')->count();
                // dd($count);
            
        return view('index',['tops'=>$top,'rek'=>$rek,'trs'=>$trs]);
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
    public function live( video $id)
    {
        $id->kuzatuv = $id->kuzatuv+1;
        $id->update();
        return view('live',['live'=>$id]);
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
    public function show(video $video)
    {
        $baza = video::all();
        $rek = reklama::all();
        $count = follower::where('follow','=',$video->id)->count();
        return view('list',['list'=>$video,'lists'=>$baza,'count'=>$count, 'reks'=>$rek]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
