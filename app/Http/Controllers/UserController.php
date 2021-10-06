<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function register(Request $request){
        $validateData=$request->validate([
            'email'=>'required|email:filter',
            'password'=>'required|min:12|max:24',
            'image'=>'image'
        ]);
        $inputs= $request->except('_token');
        $inputs['password'] = Hash::make($inputs['password']);
        if ($request->hasFile('image')){
            $inputs['image'] = Storage::disk('public')->put('files',$request->file('image'));
        }
        User::query()->create($inputs);
        if (Auth::attempt($request->only('email','password'))){
            return view('site.auth.signin');

        }
    }
    public function signin(Request $request){
        if (Auth::attempt($request->only('email','password'))){
            return redirect()->route('home');

        }else{
            return redirect()->back();
        }
    }
    public function logout(){
        \auth()->logout();
        return redirect()->route('signin');
    }
    public function edit(User $user){
        return view('site.user.edit',compact('user'));
    }
    public function update(Request $request,User $user){
        $validateData=$request->validate([
            'email'=>'required|email:filter',
            'password'=>'required|min:12|max:24',
            'image'=>'image'
        ]);
        $input = $request->except('_token','_method');
//        if ($request->get('password') != 'same'){
//            $input['password'] = Hash::make($input['password']);
//        }
        if ($request->hasFile('image')){
            $input['image'] =Storage::disk('public')->put('files',$request->file('image'));

        }
        $user->update($input);
        return redirect()->route('home');
    }
    public function GetAllPost()
    {
        $posts =DB::table('posts')->get();
        return view('site.user.index',compact('posts'));
    }
}

?>
