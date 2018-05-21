<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;

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
     * @return \Illuminate\Http\Response
     */
    public function showPost()
    {
        $category = Category::all();
        return view('home', compact('category'));
    }

    public function create(Request $request)
    {
        $post = new Post();
        $post->title = $request -> title;
        $post->content = $request->content;
        $post->category_id = $request -> category;
        $post->save();
        echo "Success";
        return redirect()->back()->with('thongbao','Add successfully!');
        
       /* $category = new Category();
        $category->id = $request->category;*/
        
    }
}
