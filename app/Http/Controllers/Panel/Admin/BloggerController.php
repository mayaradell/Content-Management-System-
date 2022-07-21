<?php

namespace App\Http\Controllers\Panel\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BloggerRequest;
use App\Http\Requests\PostRequest;
use App\Models\User;
use Illuminate\Http\Request;

class BloggerController extends Controller
{
    public function index()
    {
        $bloggers = User::paginate(8);

        return view("panel.admin.bloggers.index", [
            'bloggers' => $bloggers
        ]);
    }

    public function search(Request $request)
    {

        if ($request->name) {
            $bloggers = User::where('name', 'like', '%' . $request->name . '%')
                ->paginate(8);
            return view("panel.admin.bloggers.index", [
                'bloggers' => $bloggers
            ]);
        } else {
            $bloggers = User::paginate(8);
            return view("panel.admin.bloggers.index", [
                'bloggers' => $bloggers
            ]);
        }

    }

    public function create()
    {

        return view("panel.admin.bloggers.create");
    }


    public function store(BloggerRequest $request)
    {

        try {

            $blogger = User::create($request->all());
            if ($blogger) {
                return back()->with([
                    'success' => 'Blogger created successfully'
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

        $blogger = User::findOrFail($id);
        return view("panel.admin.bloggers.edit", [
            'blogger' => $blogger,

        ]);
    }


    public function update(Request $request, $id)
    {
        try {
            $blogger = User::FindOrFail($id)->update($request->all());

            if ($blogger) {
                return back()->with([
                    'success' => 'Blogger Updated successfully'
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
        User::destroy($id);
        return back()->with([
            'success' => 'User Deleted Successfully'
        ]);
    }
}
