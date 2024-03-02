@extends('layout.index')

@section('container')
    <section class="py-20 mx-4 lg:mx-10">
        <div class="header-area flex mt-5">
            <div class="category-area hidden lg:block">
                <form action="/articles/category" method="post">
                    @csrf
                    <select name="category" id="category" class="font-semibold text-lg pr-0 h-16 bg-transparent" onchange="this.form.submit()">
                        <option value="" selected hidden>Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" class="text-lg">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </form>
            </div>

            <div class="search-box relative mx-0 lg:mx-3">
                <img src="/icons/search.svg" class="w-7 mt-4 ml-4 absolute" alt="">
                <form action="/articles/search" method="post">
                @csrf
                <input type="text" name="search" class="h-16 text-lg md:text-xl w-[22rem] md:w-[45rem] lg:w-[63rem] pl-14 font-semibold rounded-md" placeholder="Search Article Here ...">
                </form>
            </div>
        </div>

        <div class="category-area block lg:hidden">
            <form action="/articles/category" method="post">
                @csrf
                <select name="category" id="category" class="font-semibold text-lg pr-0 h-16 bg-transparent" onchange="this.form.submit()">
                    <option value="" selected hidden>Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" class="text-lg">{{ $category->name }}</option>
                    @endforeach
                </select>
            </form>
        </div>

        <div class="articles-area flex flex-wrap gap-3 mt-3">
            @foreach ($articles as $article)
                <div class="article-card w-[10.5rem] md:w-[10.6rem] lg:w-56 bg-white hover:bg-slate-200 rounded-md shadow-md hover:shadow-2xl mt-5" onclick="location.href='/articles/{{ $article->id }}/show'">
                    <img src="{{ asset('/articleimages/' . $article->image) }}" alt="" class="w-[10.5rem] md:w-[10.6rem] lg:w-56 h-48 md:h-36 lg:h-48 object-cover rounded-t-md">
                    <div class="text-area mx-3 mt-2 pb-5">
                        <h1 class="article-title font-semibold text-base lg:text-lg text-black hover:text-blue-600 h-24">{{ $article->title }}</h1>
                        <h3 class="article-date font-semibold text-sm opacity-60 ">{{ date_format($article->created_at, 'd F Y') }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection