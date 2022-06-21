@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
        <div class="flex">
            <div class="w-full">
                <section class="lg:flex w-full mx-auto my-8">



                    <form class="w-full lg:w-full lg:rounded-l-lg rounded bg-white mx-auto my-4 px-6 lg:px-20" method="POST"
                        action="{{ route('login') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="w-full grid items-center">
                            <a class="mx-auto" href="#">
                                <button
                                    class="w-14 h-14 transform -translate-y-4 lg:translate-y-1 rounded-full border-2 overflow-hidden block focus:border-gray-400 focus:outline-none border-black "></button>
                            </a>
                            <p class="text-center text-red-500">Votre profil</p>
                        </div>

                        <h1 class="text-xl lg:text-3xl text-gray-700 py-6">
                            {{ __('Connectez-vous a votre compte') }}
                        </h1>
                        <hr class="lg:-mx-20 font-bold border-red-600">
                        <div class="py-8">
                            <div class="flex mb-4">
                                <span
                                    class="border pt-1 mb-4 text-red-500 border-red-500 rounded-full w-6 h-6 flex justify-center mr-3">1</span>
                                <span class="text-gray-700 font-bold ">Informations Personnelles</span>

                            </div>
                            <div class="lg:flex ">
                                <div class="w-full lg:w-full px-1">


                                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                        {{ __('Name') }}:
                                    </label>

                                    <input id="name" type="text"
                                        class="form-input w-full   @error('name')  border-red-500 @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                            </div>
                            <div class="w-full lg:w-full py-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                    {{ __('E-Mail Address') }}:
                                </label>

                                <input id="email" type="email"
                                    class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <hr class="lg:-mx-20 font-bold border-red-600">
                            <div class="flex py-4">
                                <span
                                    class="border pt-1 mb-4 text-red-500 border-red-500 rounded-full w-6 h-6 flex justify-center mr-3">2</span>
                                <span class="text-gray-700 font-bold ">Adresses Personnelles</span>

                            </div>
                            <div class="lg:flex">
                                <div class="w-full lg:w-full px-1">
                                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                        {{ __('Password') }}:
                                    </label>

                                    <input id="password" type="password"
                                        class="form-input w-full @error('password') border-red-500 @enderror"
                                        name="password" required autocomplete="new-password">

                                    @error('password')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex items-center py-4">
                                <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                    <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <span class="ml-2">{{ __('Remember Me') }}</span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a class="text-sm  text-red-500 hover:text-red-700 whitespace-no-wrap no-underline hover:underline ml-auto"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="py-8  px-8 lg:justify-end">

                                <button type="submit"
                                    class="w-full h-10  select-none font-bold whitespace-no-wrap  rounded-lg text-base leading-normal no-underline text-gray-100 bg-red-500 hover:bg-red-700 py-2">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('register'))
                                    <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                        {{ __("vous n'avez pas de compte?") }}
                                        <a class="text-red-500 hover:text-red-700 no-underline hover:underline"
                                            href="{{ route('register') }}">
                                            {{ __('Enregistrez-vous') }}
                                        </a>
                                    </p>
                                @endif

                            </div>
                        </div>


                    </form>

                </section>
            </div>
        </div>
    </main>
@endsection
