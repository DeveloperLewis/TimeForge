@extends('layout')

@section('content')
    <div class="flex justify-center p-10">
        <form method="post" action="/user/register">
            @csrf
            <div class="mb-6">
                <label for="name">Name</label>
                <input type="text" class="text-black" name="name"
                       value="{{old('name')}}"/>

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email">Email</label>
                <input type="email" class="text-black" name="email"
                       value="{{old('email')}}"/>

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password">Password</label>
                <input type="password" class="text-black" name="password"
                />

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="repeat-password">Confirm Password</label>
                <input type="password" class="text-black" name="password_confirmation"/>
                @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="text-black rounded py-2 px-4 bg-white hover:bg-gray-200">Sign Up</button>
            </div>

            <div class="mt-8">
                <p>Already have an account?<a href="/user/login" class="text-laravel">Login</a></p>
            </div>
        </form>
    </div>
@endsection
