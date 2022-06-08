<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = video::paginate(10); 
        return view('admins.table',['videos'=>$news]);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = video::all(); 
        return view('admins.in1',['new'=>$news]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin2 = new video;

        $test = $request->file('video_image')->getClientOriginalName();
        $request->video_image->move(public_path('img'),$test);
        $admin2->video_image = 'img/' . $test;

        $admin2->video_name=$request->video_name;
        $admin2->cat=$request->cat;
        $admin2->kuzatuv=0;
        $admin2->desc=$request->desc;
        $admin2->new=$request->new;
        $admin2->video=$request->videos;
        if($request->serial='')
        {
            $admin2->serial='non';    
        }else
        {
            $admin2->serial=$request->serial;    
        }
        $admin2->save();
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
    public function edit(video $id)
    {
        return view('admins.update',['video'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, video $admin2)
    {


        if ($request->video_image==''){
            $admin2->video=$request->video_image2;
        }else{

            $test = $request->file('video_image')->getClientOriginalName();
            $request->video_image->move(public_path('img'),$test);
            $admin2->video_image = 'img/' . $test;
        }
        $admin2->video_name=$request->video_name;
        $admin2->cat=$request->cat;
        $admin2->desc=$request->desc;
        $admin2->new=$request->new;
        $admin2->video=$request->videos;    
        if($request->serial=='')
        {
            $admin2->serial='non';    
        }else
        {
            $admin2->serial=$request->serial;    
        }
        $admin2->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(video $video)
    {
        $video->delete();
        return back();
    }
    public function ajaxtable(Request $request)
    {
        $baza = DB::select("select * from videos where video_name like '%{$request->search}%' ");
        return response()->json(['dbsers'=>$baza]);
    }
}
