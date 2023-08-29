@extends('layout')

@section('content')
    <div class="flex justify-center items-center h-screen bg-cover bg-no-repeat bg-fixed" style="background-image: url('{{asset('/images/background_01.webp')}}');">
        <div class="bg-custom-blue-light xl:w-1/4 py-5 sm:rounded-xl">
            <div class="flex justify-center md:p-2 md:p-5">
                <img src="{{asset('images/logo_150x150.webp')}}" alt="Website icon">
            </div>

            <div class="px-6">
                <p class="text-center text-4xl mb-1 font-semibold">Login to your account</p>
                <p class="text-center text-sm">Don't have an account yet?<a href="/user/register" class="text-blue-300"> Register here</a></p>
            </div>

            <div class="sm:my-7 mx-10">
                <form method="post" action="/user/login">
                    @csrf

                    <div class="mb-3">
                        <p class="py-1 text-lg">Email Address</p>
                        <input type="email" name="email" class="text-black rounded w-full p-2 focus:outline-none focus:border-custom-blue-dark focus:ring" value="{{old('email')}}" required/>

                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-10">
                        <p class="py-1 text-lg">Password</p>
                        <input type="password" class="text-black rounded w-full p-2 focus:outline-none focus:border-custom-blue-dark focus:ring"  name="password" required/>

                        @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="text-black rounded py-2 w-1/2 bg-white hover:bg-gray-200">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
