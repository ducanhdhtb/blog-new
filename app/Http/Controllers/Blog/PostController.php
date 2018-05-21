<?php

namespace App\Http\Controllers\Blog;
use App\Category;
use App\Post as Post;
use App\Http\Controllers\Controller as FrontendController;
use Illuminate\Http\Request;

class PostController extends FrontendController
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function listAction(Request $request)
	{
		$post = Post::all();
		return view('blog.post.list',compact('post'));
	}

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function newAction()
	{
        $post = new Post;
        $categories = Category::all();
		return view('blog.post.edit',compact('post','categories'));
	}

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function editAction($id)
	{
	    if (!$id) {

        }

        $post = Post::find($id);
	    if (!$post) {
            return redirect()->route('postNew');
        }

        $categories = Category::all();
        return view('blog.post.edit',compact('post','categories'));
	}

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
	public function saveAction(Request $request)
	{
        $id = $request->id;
        $post = ($id) ? Post::find($id)
                        : new Post();
        $post->title = $request->title;
        $post->status = $request->status;
        $post->summary = $request->summary;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->save();

        return  redirect()->route('postEdit', ['id' => $post->id]);
	}

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
	public function deleteAction($id)
	{
        Post::find($id)->delete();
		return redirect()->route('postList');
	}

	public function viewAction($id)
    {
        $post = Post::find($id);
        return view('blog.post.view',compact('post'));
    }

}

?>