@extends('layout.index')

@section('container')
    <section class="py-20 mx-4 lg:mx-10">
        <h1 class="font-semibold text-2xl mt-5">Manage My Articles</h1>
        <div class="articles-area flex flex-wrap gap-3 mt-3">

            <div class="create-article-card w-[10.5rem] md:w-[10.6rem] lg:w-56 bg-white hover:bg-slate-200 rounded-md shadow-md hover:shadow-2xl mt-5 border-2 border-dashed border-blue-800 h-[24rem] md:h-[21rem] lg:h-[24.5rem]" onclick="location.href='/myarticles/create'">
                <div class="content-area flex flex-col justify-center h-full">
                    <img src="/icons/plus.svg"  class="self-center w-16" alt="">    
                    <h1 class="font-semibold text-lg self-center mt-5">Create Article</h1>
                </div>        
            </div>
            @foreach ($articles as $article)
                <div class="article-card w-[10.5rem] md:w-[10.6rem] lg:w-56 bg-white hover:bg-slate-200 rounded-md shadow-md hover:shadow-2xl mt-5" >
                    <img src="{{ asset('/articleimages/' . $article->image) }}" alt="" class="w-[10.5rem] md:w-[10.6rem] lg:w-56 h-36 lg:h-48 object-cover rounded-t-md">
                    <div class="text-area mx-3 mt-2 pb-5">
                        <h1 class="article-title font-semibold text-base lg:text-lg text-black hover:text-blue-600 h-24">{{ $article->title }}</h1>
                        <h3 class="article-date font-semibold text-sm opacity-60 ">{{ date_format($article->created_at, 'd F Y') }}</h3>

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