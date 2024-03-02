@extends('layout.index')

@section('container')
    <section class="py-20 mx-10">
        <h1 class="font-semibold text-2xl mt-4">Create New Category</h1>

        <form action="/admin/categories/create" method="post">
            @csrf
            <div class="input-area mt-3">
                <label for="name" class="font-semibold text-lg">Category Name</label>
                <input type="text" name="name" id="name" class="w-full h-16 pl-3 font-semibold text-lg rounded-md mt-2" autofocus placeholder="Something News" value="{{ old('name') }}">
                @error('name')
                    <h1 class="mt-2 text-red-600">{{ $message }}</h1>
                @enderror
            </div>

            

            <button class="w-full bg-blue-600 hover:bg-blue-800 font-semibold text-white text-lg rounded-md mt-10 py-4">Create Category</button>
        </form>
    </section>
@endsection
