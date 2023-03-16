<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function category_add(Request $request){
        Category::insert([
           'category_name'=>$request->category_name,
           'created_at'=>Carbon::now(),
        ]);
        return back()->with('category_success', 'Category added successfully!');
    }

    function category_delete($id){
        Category::find($id)->delete();
        return back()->with('category_delete', 'Category deleted successfully!');
    }
}