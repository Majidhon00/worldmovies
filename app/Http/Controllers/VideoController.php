<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\follower;
use App\Models\reklama;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $baza = new comment;
        $baza->create($request->all());
        return back()->with('success','Yozildi');
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
    public function ajaxdata(Request $request)
    {
        if($request->test==' '){
          
            return redirect()->route('index.index');
        }else{
            $data = DB::select("SELECT * from videos where video_name like '%".$request->test."%' and serial='non'" );
            return response()->json(['data'=>$data]);
        }
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
