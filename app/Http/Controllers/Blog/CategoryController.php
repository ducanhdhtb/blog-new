<?php

namespace App\Http\Controllers\Blog;
use App\Category;
use App\Post;

use App\Http\Controllers\Controller as FrontendController;
use Illuminate\Http\Request;

class CategoryController extends FrontendController
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
    #Show category
    public function listAction()
    {
        $category = Category::all();
        return view('blog.category.list', compact('category'));
    }
    #Return view new.blade.php
    public function newAction()
    {
        $category = Category::all();
        return view('blog.category.new', compact('category'));

    }
    #Take data from new.blade.php
    public function newActionPost(Request $request)
    {
        #
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('flash','Add Successfully');
    }
    public function viewAction()
    {

    }
    #return view edit action with id to update
    public function editAction(Request $request, $id)
    {
            $category = Category::find($id);
           return view('blog.category.edit', compact('category'));
    }
    #Take data from edit form
    public function editActionPost(Request $request,$id )
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('flash1','update Successfully');

    }
    #
    public function deleteAction($id)
    {
            $category = Category::find($id);
            $category->delete();
            return redirect()->back()->with('flash','Delete successfully');
    }
    #
    public function saveAction()
    {

    }
    
    
}
