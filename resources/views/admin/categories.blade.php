@extends('layout.index')

@section('container')
    <section class="py-20 mx-10">
        <div class="header-area flex justify-between mt-3">
            <h1 class="font-semibold text-2xl self-center">Manage Categories</h1>
            <button class="px-10 py-2 font-semibold self-center rounded text-base bg-sky-600 hover:bg-blue-700 text-white" onclick="location.href='/admin/categories'">Manage Categories</button>
        </div>

        <div class="category-cards flex flex-wrap gap-5 mt-8">
            <form action="/admin/categories/create" method="get">
                <button type="submit" class="card-category w-48 py-3 rounded-md text-center shadow md font-semibold text-lg bg-white hover:bg-slate-300 text-blue-600 border-2 border-blue-600 border-dashed ">Create Category</button>
            </form>
            @foreach ($categories as $category)
                <div class="card-category w-48 py-3 rounded-md text-center shadow-md font-semibold text-lg bg-blue-600 cursor-pointer hover:bg-blue-800 text-white" onclick="location.href='/admin/categories/{{ $category->id }}/edit'">{{ $category->name }}</div>
            @endforeach
        </div>
    </section>
@endsection