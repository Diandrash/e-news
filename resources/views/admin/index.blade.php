@extends('layout.index')

@section('container')
    <section class="py-20 mx-10">
        <div class="header-area flex justify-between mt-5">
            <h1 class="font-semibold text-2xl self-center">Manage Articles</h1>
            <button class="px-10 py-2 font-semibold self-center rounded text-base bg-sky-600 hover:bg-blue-700 text-white" onclick="location.href='/admin/categories'">Manage Categories</button>
        </div>


        <div class="articles-area flex flex-wrap gap-3 mt-3">

            @foreach ($articles as $article)
                <div class="article-card w-56 bg-white hover:bg-slate-200 rounded-md shadow-md hover:shadow-2xl mt-5" >
                    <img src="{{ asset('/articleimages/' . $article->image) }}" alt="" class="w-56 h-48 object-cover rounded-t-md">
                    <div class="text-area mx-3 mt-2 pb-5">
                        <h1 class="article-title font-semibold text-lg text-black hover:text-blue-600 h-24">{{ $article->title }}</h1>
                        <h3 class="article-date font-semibold text-sm opacity-60 ">{{ date_format($article->created_at, 'd F Y') }}</h3>
                        <h3 class="article-author font-semibold text-sm opacity-60 ">{{ $article->author->name }}</h3>

                        <div class="action-area flex gap-2 mt-3">
                            <button class="p-2 bg-emerald-600 hover:bg-emerald-800 rounded-md" onclick="location.href='/articles/{{ $article->id }}/show'"><img src="/icons/eye.svg" class="w-6" alt=""></button>
                            <button class="p-2 bg-yellow-500 hover:bg-yellow-700 rounded-md" onclick="location.href='/myarticles/{{ $article->id }}/edit'"><img src="/icons/pencil.svg" class="w-6" alt=""></button>
                            <form action="/myarticles/{{ $article->id }}/delete" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="p-2 bg-red-600 hover:bg-red-800 rounded-md"><img src="/icons/trash.svg" class="w-5" alt="" onclick="confirm('Sure to Delete')"></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection