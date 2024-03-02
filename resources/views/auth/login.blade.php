@extends('layout.index')

@section('container')
    <div class="content-area mt-0 flex">
        <div class="image-area w-6/12 hidden lg:block">
            <div class="image-area flex justify-center bg-sky-600 h-dvh">
                <img src="/img/login.png" class="w-[30rem] self-center mt-10" alt="">
            </div>
        </div>
        <div class="form-area w-full lg:w-6/12 mt-20">
            <div class="content-area p-3">
                <h1 class="font-semibold text-2xl">Sign In Into Your Account</h1>

                <form action="/login" method="post" class="mt-8">
                    @csrf
                    <div class="input-area mt-5">
                        <label for="email" class="font-semibold text-xl">Your Email</label>
                        <input type="email" name="email" id="email" class="w-full h-16 pl-3 font-semibold text-lg rounded-md mt-2" autofocus placeholder="johndoe@gmail.com" value="{{ old('email') }}">
                        @error('email')
                            <h1 class="mt-2 text-red-600">{{ $message }}</h1>
                        @enderror
                    </div>
                    <div class="input-area mt-5">
                        <label for="password" class="font-semibold text-xl">Your Password</label>
                        <input type="password" name="password" id="password" class="w-full h-16 pl-3 font-semibold text-lg rounded-md mt-2" autofocus placeholder="*********" value="{{ old('password') }}">
                        @error('password')
                            <h1 class="mt-2 text-red-600">{{ $message }}</h1>
                        @enderror
                    </div>

                    <button type="submit" class="w-full py-3 font-semibold text-white text-lg rounded-md bg-blue-800 hover:bg-blue-300 mt-28">Login Now</button>
                    <h1 class="mt-2 font-normal">Not Have an Account ? <a href="/register" class="text-blue-600 underline">Register Now</a></h1>
                </form>
            </div>
        </div>
    </div>
@endsection