<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class ArticleController extends Controller
{
    function article_add(Request $request){
        
        $request->validate([
            'image'=>'required|file|max:512|mimes:jpg,jpeg,bmp,png,gif,webp',
        ]);
        
        $upload = $request->image;
        $extension = $upload->getClientOriginalExtension();
        $file_name = 'article'.'-'.rand(11111,1111111).'.'.$extension;

        Image::make($upload)->resize(214,126)->save(public_path('uploads/articles/'.$file_name));
        
        Article::insert([
            'category_id'=>$request->category_id, 
            'headline'=>$request->headline, 
            'description'=>$request->description, 
            'image'=>$file_name, 
            'added_by'=>Auth::user()->id, 
            'created_at'=>Carbon::now(), 
        ]);
        return back()->with('article_success', 'Article Added!');
    }

    function article_delete($id){
        Article::find($id)->delete();
        return back()->with('article_delete', 'Article Deleted!');
    }
}