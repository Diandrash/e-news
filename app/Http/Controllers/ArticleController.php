<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $categories = Category::all();
        return view('articles.index', [
            'title' => 'Article Pages',
            'categories' => $categories,
            'articles' => $articles,
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request['search'];
        $articles = Article::where('title', 'LIKE', "%$keyword%")->get();
        $categories = Category::all();
        return view('articles.index', [
            'title' => $keyword . 'Search',
            'categories' => $categories,
            'articles' => $articles,
        ]);
    }

    public function category(Request $request)
    {
        $categoryId = $request['category'];
        $category = Category::find($categoryId);
        $articles = Article::where('category_id', $categoryId)->get();
        $categories = Category::all();
        return view('articles.index', [
            'title' => $category->name . 'Category',
            'categories' => $categories,
            'articles' => $articles,
        ]);
    }
    public function myindex()
    {
        $articles = Article::where('author_id', auth()->user()->id)->get();
        $categories = Category::all();
        return view('articles.myindex', [
            'title' => 'Article Pages',
            'categories' => $categories,
            'articles' => $articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles.create', [
            'title' => 'Create Article',
            'categories' => $categories,
        ]);
    }

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

        Article::create([
            'author_id' => $validatedData['author_id'],
            'category_id'=> $validatedData['category_id'],
            'title'=> $validatedData['title'],
            'text'=> $validatedData['text'],
            'image'=> $filename,
        ]);

        Alert::success('Success', 'Article Created');
        return redirect()->intended('/myarticles');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $categoryId = $article->category_id;
        $articles = Article::where('category_id', $categoryId)->whereNotIn('id', [$article->id])->get();
        return view('articles.show', [
            'title' => $article->title,
            'article' => $article,
            'articles' => $articles,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categoryId = $article->category_id;
        $category = Category::find($categoryId);
        $categories = Category::all();
        return view('articles.edit', [
            'title' => $article->title,
            'article' => $article,
            'categories' => $categories,
            'categoryId' => $categoryId,
        ]);
    }

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

        Alert::success('Success', 'Article Updated');
        return redirect()->intended('/myarticles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        Alert::success('Success', 'Article Deleted');
        return redirect()->intended('/myarticles');
    }
}
