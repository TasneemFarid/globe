<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        $categories = Category::all();
        $randoms = Article::whereRaw('id % 2 = 0')->take(1)->get();
        $randoms_last = Article::whereRaw('id % 2 = 1')->take(1)->get();
        $carosel_randoms = Article::all()->random(3);
        $weekly_items = Article::select("*")
                ->whereBetween('created_at', 
                        [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
                    )
                ->get();
        return view('frontend.index', [
            'categories'=>$categories,
            'randoms'=>$randoms,
            'carosel_randoms'=>$carosel_randoms,
            'randoms_last'=>$randoms_last,
            'weekly_items'=>$weekly_items,
        ]);
    }
}