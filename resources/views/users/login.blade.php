@extends('layout')

@section('content')
    <div class="flex justify-center items-center p-10">
        <form method="post" action="/user/login">
            @csrf

            <div class="mb-6">
                <label for="email">Email</label>
                <input type="email" name="email" class="text-black" value="{{old('email')}}"/>

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password">Password</label>
                <input type="password" class="text-black"  name="password"
                />

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="text-black rounded py-2 px-4 bg-white hover:bg-gray-200">Login</button>
            </div>

            <div class="mt-8">
                <p>Don't have an account yet?<a href="/user/register" class="text-laravel">Register here</a></p>
            </div>
        </form>
    </div>
@endsection
