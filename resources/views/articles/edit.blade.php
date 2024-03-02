@extends('layout.index')

@section('container')
    <section class="py-20 mx-10">
        <h1 class="font-semibold text-2xl mt-4">Edit Article</h1>

        <form action="/myarticles/{{ $article->id }}/edit" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="hidden" name="author_id" value="{{ auth()->user()->id }}">
            <div class="input-area mt-3">
                <label for="title" class="font-semibold text-lg">Article Title</label>
                <input type="text" name="title" id="title" class="w-full h-16 pl-3 font-semibold text-lg rounded-md mt-2" value="{{ $article->title }}" value="{{ old('title') }}">
                @error('title')
                    <h1 class="mt-2 text-red-600">{{ $message }}</h1>
                @enderror
            </div>

            <div class="input-area mt-3">
                <label for="title" class="font-semibold text-lg">Article Category</label>
                <select name="category_id" id="category_id" class="font-semibold text-lg w-full h-16 bg-white pl-3 mt-2">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" class="text-lg" @if ($category->id == $categoryId)
                            selected
                        @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <h1 class="mt-2 text-red-600">{{ $message }}</h1>
                @enderror
            </div>

            <div class="input-area mt-3">
                <label for="title" class="font-semibold text-lg">Article Text</label>
               <textarea name="text" id="text" cols="30" rows="10" class="font-semibold text-base p-3 w-full mt-2" value="Article Text Here">{{ old('text', $article->text) }}</textarea>
                @error('text')
                    <h1 class="mt-2 text-red-600">{{ $message }}</h1>
                @enderror
            </div>

            <div class="input-area mt-3">
                <label for="title" class="font-semibold text-lg">Article Image</label>
                    <img src="{{ '/articleimages/' . $article->image }}" alt="" class="w-[15rem] mb-3 mt-1">
                <label for="title" class="font-semibold text-lg">Update Image</label>
                <input type="file" name="image" class="w-full text-xl mt-2 bg-white" id="">
                @error('image')
                    <h1 class="mt-2 text-red-600">{{ $message }}</h1>
                @enderror
            </div>

            <button class="w-full bg-blue-600 hover:bg-blue-800 font-semibold text-white text-lg rounded-md mt-10 py-4">Update Article</button>
        </form>
    </section>
@endsection
