<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    private $categories;

    public function __construct()
    {
        $this->categories = parent::all_categories();
    }

    function index()
    {
        $posts = Post::paginate(8);


        return view("welcome", [
            'posts' => $posts,
            'categories' => $this->categories
        ]);
    }

    function filter(Request $request)
    {
        $posts = Category::where("id", "$request->category")->first()->posts()->paginate(8);

        return view("welcome", [
            'posts' => $posts,
            'categories' => $this->categories
        ]);
    }

    function search(Request $request)
    {

        if ($request->title) {
            $posts = Post::where("title", "like", "%" . $request->title . "%")->paginate(8);

            return view("welcome", [
                'posts' => $posts,
                'categories' =>  $this->categories
            ]);
        } else {
            $posts = Post::paginate(8);
            return view("welcome", [
                'posts' => $posts,
                'categories' =>  $this->categories
            ]);
        }
    }
}
