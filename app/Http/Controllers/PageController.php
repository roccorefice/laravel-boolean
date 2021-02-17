<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    /**
     * Show index page
     * @return view
     */
    public function index()
    {
        return view('welcome');
    }


    /**
     * Show about page
     * @return view
     */
    public function about()
    {
        return view('about');
    }


    /**
     * Show about page
     * @return view
     */
    public function blog()
    {
        Post::all();
        //dd($posts);
        return view('blog');
    }
}
