<?php

namespace App\Http\Controllers;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::withTrashed()->paginate(5);
        foreach ($categories as $category) {
            $category->coca = Category::withTrashed()->where('id',$category->parent)->first();
        }
        if (Auth::check())
            return view('category.show', compact('categories'));
        else
            return redirect()->back()->with("error", "you are not a member,Please login Sir!");

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($parent = 0)
    {
        $categories = Category::all();
        return view('category.create', compact('categories', 'parent'));
    }

    public function insert(Request $request)
    {
        Category::create([
            "name" => $request->name,
            "parent" => $request->parent
        ]);
        return redirect('/category/create')->with("success", "Successfully Created");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        return view('category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->parent = $request->get('parent');
        $category->created_at = $category->created_at;
        $category->update();
        return redirect(action('CategoryController@edit', $id))->with('success', 'Success Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::withTrashed()->where('id',$id)->first();
        if ($category->deleted_at == null) {
            $category->deleted_at = carbon::now();
        } else {
            $category->deleted_at = null;
        }
        $category->update();
        return redirect('/category')->with('success', "Successfully updated!");
    }
}