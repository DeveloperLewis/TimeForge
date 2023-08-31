@extends('pages.layout')

@section('content')
    <div class="flex justify-center items-center h-screen bg-cover bg-no-repeat bg-fixed" style="background-image: url('{{asset('/images/background_01.webp')}}');">
        <div class="bg-custom-blue-light xl:w-1/4 py-5 sm:rounded-xl">
            <div class="flex justify-center md:p-2 md:p-5">
                <img src="{{asset('images/logo_150x150.webp')}}" alt="Website icon">
            </div>

            <div class="px-6">
                <p class="text-center text-4xl mb-1 font-semibold">Register your account</p>
                <p class="text-center text-sm">Already have an account?<a href="/user/login" class="text-blue-300"> Login here</a></p>
            </div>

            <div class="my-7 mx-10">
                <form method="post" action="/user/register">
                    @csrf

                    <div class="mb-3">
                        <p class="py-1 text-lg">Name</p>
                        <x-ui.forms.input type="text" name="name" value="{{old('name')}}"></x-ui.forms.input>

                        @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <p class="py-1 text-lg">Email Address</p>
                        <x-ui.forms.input type="email" name="email" value="{{old('email')}}"></x-ui.forms.input>

                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <p class="py-1 text-lg">Password</p>
                        <x-ui.forms.input name="password" type="password"></x-ui.forms.input>

                        @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <p class="py-1 text-lg">Confirm Password</p>
                        <x-ui.forms.input name="password_confirmation" type="password"></x-ui.forms.input>

                        @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <p class="mb-10 text-sm text-gray-400 text-center">By signing up, you agree to our <a href="/terms-and-conditions" class="text-blue-400">Terms of Use</a>,
                        <a href="/privacy-policy" class="text-blue-400">Privacy Policy</a> and <a href="/cookies-policy" class="text-blue-400">Cookies Policy</a></p>

                    <div class="flex justify-center">
                        <x-ui.forms.button-filled>Register</x-ui.forms.button-filled>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
