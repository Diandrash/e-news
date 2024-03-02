@extends('layout.index')

@section('container')
    <section class="py-20 ml-10 lg:ml-10">
        <div class="content-area flex">
            <div class="main-area w-full md:w-9/12 mt-5  pr-10">
                <h3 class="font-semibold text-lg opacity-60">{{ $article->category->name }}</h3>

                <h1 class="font-semibold text-2xl lg:text-4xl w-[20rem] md:w-[30rem] lg:w-[60rem]">{{ $article->title }}</h1>
                <h3 class="font-semibold text-sm mt-2">Author : <span class="">{{ $article->author->name }}</span></h3>
                <h3 class="font-semibold text-sm">Created at <span class="">{{ date_format($article->created_at, 'd F Y') }}</span></h3>
                <div class="image-article mb-3 mt-2">
                    <img src="{{ asset('/articleimages/' . $article->image) }}" alt="" class="w-[28rem]">
                </div>

                <div class="text-area">
                    <p class="text-justify">{{ $article->text }}</p>
                </div>
            </div>
            <div class="related-area w-3/12 bg-white mt-5 py-3 px-5 rounded-md hidden md:block">
                <h1 class="font-semibold text-base">Related Article</h1>

                @foreach ($articles as $news)
                
                    <div class="article-card mt-3" onclick="location.href='/articles/{{ $news->id }}/show'">
                        <img src="{{ asset('/articleimages/' . $news->image) }}" alt="" class="w-72 h-42">
                        <h1 class="font-semibold text-sm lg:text-lg mt-1 text-black hover:text-blue-600">{{ $news->title }}</h1>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection