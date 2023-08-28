@extends('layout')

@section('content')
    <div class="flex justify-center items-center py-10">
        <div class="bg-custom-blue-light md:w-1/3 py-5 rounded-xl">
            <div class="flex justify-center p-2 md:p-5">
                <img src="{{asset('images/logo_150x150.webp')}}" alt="Website icon">
            </div>

            <div class="px-3">
                <p class="text-center text-4xl mb-1 font-semibold">Register your account</p>
                <p class="text-center text-sm">Already have an account?<a href="/user/login" class="text-blue-300"> Login here</a></p>
            </div>

            <div class="my-7 mx-20">
                <form method="post" action="/user/register">
                    @csrf

                    <div class="mb-3">
                        <p class="py-1 text-lg">Name</p>
                        <input type="text" name="name" class="text-black rounded w-full p-2 focus:outline-none focus:border-custom-blue-dark focus:ring" value="{{old('name')}}" required/>

                        @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <p class="py-1 text-lg">Email Address</p>
                        <input type="email" name="email" class="text-black rounded w-full p-2 focus:outline-none focus:border-custom-blue-dark focus:ring" value="{{old('email')}}" required/>

                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <p class="py-1 text-lg">Password</p>
                        <input type="password" class="text-black rounded w-full p-2 focus:outline-none focus:border-custom-blue-dark focus:ring"  name="password" required/>

                        @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-10">
                        <p class="py-1 text-lg">Confirm Password</p>
                        <input type="password" class="text-black rounded w-full p-2 focus:outline-none focus:border-custom-blue-dark focus:ring"  name="password_confirmation" required/>

                        @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="text-black rounded py-2 w-1/2 bg-white hover:bg-gray-200">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
