<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Image;
use Hash;

class UserController extends Controller
{
    function update_name(Request $request){
        User::find(Auth::user()->id)->update([
            'name'=>$request->name,
        ]);
        return back()->with('name_success', 'Name Updated!');
    }
    
    function update_image(Request $request){
        $request->validate([
            'image'=>'required|file|max:512|mimes:jpg,jpeg,bmp,png,gif,webp',
        ]);
        
        $upload = $request->image;
        $extension = $upload->getClientOriginalExtension();
        $file_name = Auth::id().'.'.$extension;

        if(Auth::user()->image == NULL){
            Image::make($upload)->resize(300,300)->save(public_path('uploads/users/'.$file_name));
            User::find(Auth::user()->id)->update([
                'image'=>$file_name,
            ]);
            return back()->with('image_success', 'Image Updated!');
        }
        else{
            unlink(public_path('uploads/users/'.Auth::user()->image));
            Image::make($upload)->resize(300,300)->save(public_path('uploads/users/'.$file_name));
            User::find(Auth::user()->id)->update([
                'image'=>$file_name,
            ]);
            return back()->with('image_success', 'Image Updated!');
        }
        
        
    }

    function update_password(Request $request){
        $request->validate([
            'old_password'=>'required',
            'password'=>['required', Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
            ->symbols()
            ->uncompromised(),'confirmed'],
            'password_confirmation'=>'required',
        ]);
        
        if(Hash::check($request->old_password, Auth::user()->password)){
            User::find(Auth::id())->update([
                'password'=> bcrypt($request->password),
            ]);
            return back()->with('pass_success', 'Password Changed Successfully!!');
        }
        else{
            return back()->with('wrong_pass','Old Pass is Wrong!!');
        }
    }
}