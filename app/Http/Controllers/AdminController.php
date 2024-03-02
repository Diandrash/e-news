<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view("admin.index", [
            'title' => 'Admin Page',
            'articles' => $articles,
        ]);
    }
    public function indexCategories()
    {
        $categories = Category::all();
        return view("admin.categories", [
            'title' => 'Manage Category',
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.create", [
            'title' => 'Create New Category',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:100'
        ]);

        Category::create($validatedData);
        Alert::success('Success', 'Category Added');
        return redirect()->intended('/admin/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("admin.edit", [
            'title' => 'Edit' . $category->name ,
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:100'
        ]);

        $category->update($validatedData);

        Alert::success('Success', 'Category Updated');
        return redirect()->intended('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        Alert::success('Success', 'Category Deleted');
        return redirect()->intended('/admin/categories');
    }
}
