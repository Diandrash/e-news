<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ApiArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return response()->json($articles);
    }

    public function search(Request $request)
    {
        $keyword = $request['search'];
        $articles = Article::where('title', 'LIKE', "%$keyword%")->get();
        return response()->json($articles);

    }

    public function category(Request $request)
    {
        $categoryId = $request['category_id'];
        $articles = Article::where('category_id', $categoryId)->get();
        return response()->json($articles);

    }
    public function myindex(Request $request)
    {
        $userId = $request['user_id'];
        $articles = Article::where('author_id', $userId)->get();
        return response()->json($articles);
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $validatedData = $request->validate([
            'author_id' => 'required',
            'category_id' => 'required',
            'title' => 'required|min:3|max:300',
            'text' => 'required|min:3|max:3048',
            'image' => 'required|mimes:jpg,jpeg,png,heic,webp',
        ]);

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move('articleimages', $filename);

        $article = Article::create([
            'author_id' => $validatedData['author_id'],
            'category_id'=> $validatedData['category_id'],
            'title'=> $validatedData['title'],
            'text'=> $validatedData['text'],
            'image'=> $filename,
        ]);

        return response()->json($article);

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return response()->json($article);
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $validatedData = $request->validate([
            'author_id' => 'required',
            'category_id' => 'required',
            'title' => 'required|min:3|max:300',
            'text' => 'required|min:3|max:3048',
            'image' => 'mimes:jpg,jpeg,png,heic,webp',
        ]);

        $filename = $article->filename;

        if ($request->hasFile('image')) {   
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('articleimages', $filename);
        }

        $article->update([
            'author_id' => $validatedData['author_id'],
            'category_id'=> $validatedData['category_id'],
            'title'=> $validatedData['title'],
            'text'=> $validatedData['text'],
            'image'=> $filename,
        ]);

        return response()->json($article);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return response()->json('Article Deleted');

    }
}
