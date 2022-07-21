<?php

namespace App\Http\Controllers\Panel\Blogger;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = auth()->user()->posts;

        return view("panel.blogger.posts.index", [
            'posts' => $posts
        ]);
    }

    public function search(Request $request)
    {

        if ($request->name) {
            $posts = auth()->user()->posts()->where('title', 'like', '%' . $request->name . '%')
                ->get();
            return view("panel.blogger.posts.index", [
                'posts' => $posts
            ]);
        } else {
            $posts = auth()->user()->posts;
            return view("panel.blogger.posts.index", [
                'posts' => $posts
            ]);
        }

    }

    public function create()
    {
        $categories = Category::all();
        return view("panel.blogger.posts.create", [
            'categories' => $categories,
        ]);
    }


    public function store(PostRequest $request)
    {

        try {

            $category = Category::findOrFail($request->category_id);
            if ($request->has("photo")) {
                $request['image'] = save_image($request->photo, "images/$category->name");
            }
            $post = auth()->user()->posts()->create($request->all());
            if ($post) {
                return back()->with([
                    'success' => 'post created successfully'
                ]);
            }
        } catch (\Exception $E) {

            return back()->with([
                'error' => 'Something Wrong please try again'
            ]);
        }


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::findOrFail($id);
        return view("panel.blogger.posts.edit", [
            'post' => $post,
            'categories' => $categories
        ]);
    }


    public function update(PostRequest $request, $id)
    {

        try {
            $category = Category::findOrFail($request->category_id);
            if ($request->has("photo")) {

                $request['image'] = save_image($request->photo, "images/$category->name");
            }

            $post = auth()->user()->posts()->findOrFail($id)->update($request->except(['_token', '_method', 'photo']));
            if ($post) {
                return back()->with([
                    'success' => 'post Updated successfully'
                ]);
            }
        } catch (\Exception $E) {

            return back()->with([
                'error' => 'Something Wrong please try again'
            ]);
        }
    }


    public function destroy($id)
    {
        Post::destroy($id);
        return back()->with([
            'success' => 'Post Deleted Successfully'
        ]);
    }
}
