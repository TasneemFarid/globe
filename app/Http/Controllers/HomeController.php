<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('backend.home');
    }

    function profile(){
        return view('backend.profile');
    }

    function category(){
        $categories = Category::all();
        return view('backend.category.category',[
            'categories'=>$categories,
        ]);
    }

    function article(){
        $categories = Category::all();
        $articles = Article::all();
        return view('backend.article.article',[
            'categories'=>$categories,
            'articles'=>$articles,
        ]);
    }

    function article_view(){
        $categories = Category::all();
        $articles = Article::all();
        return view('backend.article.article_view',[
            'categories'=>$categories,
            'articles'=>$articles,
        ]);
    }

    function article_edit_view(){
        return view('backend.article.article_edit_view');
    }
}