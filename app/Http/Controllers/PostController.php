<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class PostController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::orderBy('id','desc')->paginate(6);
        return view('all',compact('posts'));
//        return view('posts')->with('posts',post::all());
//        if (Auth::attempt($request->only('email','password'))){
//
//        }
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request,post $post)
    {
        $request->validate([
           'post_title' => 'required',
           'pdf' => 'required|file:pdf',
           'image' => 'required|image',
           'desc' => 'nullable'
        ],[]);

        $data =$request->except('_token');
        if ($request->hasFile('pdf') and $request->hasFile('image') ){
            $data['pdf'] = Storage::disk('public')->put('pdf',$request->file('pdf'));
            $data['image'] = Storage::disk('public')->put('image',$request->file('image'));
        }
//        if (){
//
//
//        }
        post::query()->create($data);
        session()->flash('success','posted');
        return redirect()->back();

//        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
    public function GetAllPost()
    {
        $posts =DB::table('posts')->get();
        return view('site.home.index',compact('posts'));
    }
}
