@extends('layout.index')

@section('container')
    <div class="content-area mt-0 flex">

        <div class="form-area w-full lg:w-6/12 mt-20 ">
            <div class="content-area p-3">
                <h1 class="font-semibold text-2xl">Create an New Account</h1>

                <form action="/register" method="post" class="mt-5">
                    @csrf
                    <input type="hidden" name="is_admin" value="0">
                    <div class="input-area mt-3">
                        <label for="name" class="font-semibold text-lg">Your Name</label>
                        <input type="text" name="name" id="name" class="w-full h-16 pl-3 font-semibold text-lg rounded-md mt-2" autofocus placeholder="John Doe" value="{{ old('name') }}">
                        @error('name')
                            <h1 class="mt-2 text-red-600">{{ $message }}</h1>
                        @enderror
                    </div>
                    <div class="input-area mt-3">
                        <label for="email" class="font-semibold text-lg">Your Email</label>
                        <input type="email" name="email" id="email" class="w-full h-16 pl-3 font-semibold text-lg rounded-md mt-2" autofocus placeholder="johndoe@gmail.com" value="{{ old('email') }}">
                        @error('email')
                            <h1 class="mt-2 text-red-600">{{ $message }}</h1>
                        @enderror
                    </div>
                    <div class="input-area mt-3">
                        <label for="password" class="font-semibold text-lg">Your Password</label>
                        <input type="password" name="password" id="password" class="w-full h-16 pl-3 font-semibold text-lg rounded-md mt-2" autofocus placeholder="*********" value="{{ old('password') }}">
                        @error('password')
                            <h1 class="mt-2 text-red-600">{{ $message }}</h1>
                        @enderror
                    </div>

                    <button type="submit" class="w-full py-3 font-semibold text-white text-lg rounded-md bg-blue-600 hover:bg-blue-300 mt-8">Register Now</button>
                    <h1 class="mt-2 font-normal">Aleady Have an Account ? <a href="/login" class="text-blue-600 underline">Login Now</a></h1>
                </form>
            </div>
        </div>
        <div class="image-area w-6/12 hidden lg:block">
            <div class="image-area flex justify-center bg-blue-600 h-dvh">
                <img src="/img/register.png" class="w-[30rem] self-center mt-10" alt="">
            </div>
        </div>
    </div>
@endsection