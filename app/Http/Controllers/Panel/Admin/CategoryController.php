<?php

namespace App\Http\Controllers\Panel\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(8);

        return view("panel.admin.categories.index", [
            'categories' => $categories
        ]);
    }

    public function search(Request $request)
    {

        if ($request->name) {
            $categories = Category::where('name', 'like', '%' . $request->name . '%')
                ->paginate(8);
            return view("panel.admin.categories.index", [
                'categories' => $categories
            ]);
        } else {
            $categories = Post::paginate(8);
            return view("panel.admin.categories.index", [
                'categories' => $categories
            ]);
        }

    }

    public function create()
    {

        return view("panel.admin.categories.create");
    }


    public function store(CategoryRequest $request)
    {

        try {
            $category = Category::create($request->all());
            if ($category) {
                return back()->with([
                    'success' => 'Category created successfully'
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

        $category = Category::findOrFail($id);
        return view("panel.admin.categories.edit", [
            'category' => $category,

        ]);
    }


    public function update(CategoryRequest $request, $id)
    {

        try {

            $category = Category::findOrFail($id)->update($request->except(['_token', '_method']));
            if ($category) {
                return back()->with([
                    'success' => 'Category Updated successfully'
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
        Category::destroy($id);
        return back()->with([
            'success' => 'Category Deleted Successfully'
        ]);
    }
}
