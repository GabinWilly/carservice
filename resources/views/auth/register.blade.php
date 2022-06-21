@extends('layouts.app')

@section('content')
    <main class="sm:container  sm:mx-auto sm:max-w-lg sm:mt-10" style="font-family: serif;">
        <div class="flex">
            <div class="w-full">
                <section class="lg:flex w-full mx-auto ">



                    <form class="w-full lg:w-full lg:rounded-l-lg rounded bg-white mx-auto px-6 lg:px-20 my-10 lg:my-10"
                        method="POST" action="{{ route('register') }}" enctype="multipart/form-data">

                        @csrf

                        <div class="w-full grid items-center">
                            <div class="profil-pic-div overflow-hidden w-32 h-32 rounded-full shadow-lg bg-white mx-auto transform ">
                                <img id="photo" src="{{ asset('image/cover.jpg') }}" alt="Aucun" class="w-24 h-24 object-cover mt-4 ml-4 rounded-full" >
                                <input type="file" name="avatar" id="avatar" class="w-8 h-8 mx-auto bg-cover bg-no-repeat " style=" display : none" accept=".png, .jpg, .jpeg">
                                <label for="avatar" id="uploadBtn" class="w-48 h-16 mx-auto grid justify-items-center transform -translate-y-28 -translate-x-8 bg-black opacity-0 hover:opacity-70 cursor-pointer text-white font-semibold"><p class="mt-10">Profil</p></label>
                                </div>
                                <script src="{{ asset('js/script.js') }}"></script>
                        </div>
                        <h1 class="text-xl lg:text-3xl text-gray-700 py-6">
                            {{ __('Enregistrer une Entreprise') }}
                        </h1>
                        <hr class="lg:-mx-20 font-bold border-red-600">
                        <div class="py-8">
                            <div class="flex mb-4">
                                <span
                                    class="border pt-1 mb-4 text-red-500 border-red-500 rounded-full w-6 h-6 flex justify-center mr-3">1</span>
                                <span class="text-gray-700 font-bold ">Informations Personnelles</span>

                            </div>
                            <div class="lg:flex ">
                                <div class="w-full lg:w-1/2 px-1">


                                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                        {{ __('Nom') }}:
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
                                <div class="w-full lg:w-1/2 px-1">


                                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                        {{ __('Prenom') }}:
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
                            <div class="w-full lg:w-2/3 py-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                    {{ __('Adresse Email') }}:
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
                                <div class="w-full lg:w-1/2 px-1">
                                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                        {{ __('Mot de pass') }}:
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

                                <div class="w-full lg:w-1/2">
                                    <label for="password-confirm"
                                        class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                        {{ __('Confirmer le mot de pass') }}:
                                    </label>

                                    <input id="password-confirm" type="password" class="form-input w-full"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="lg:flex py-4">
                                <div class="w-full lg:w-1/2 px-1">
                                    <label for="state" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                        {{ __('Ville') }}:
                                    </label>

                                    <input id="state" type="text" class="form-input w-full " name="state"
                                        value="{{ old('state') }}" required autocomplete="name" autofocus>


                                </div>
                                <div class="w-full lg:w-1/2 ">
                                    <label for="adresse" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                        {{ __('Contact') }}:
                                    </label>

                                    <input id="contact" type="text" class="form-input w-full " name="contact"
                                        value="{{ old('contact') }}" required autocomplete="contact" autofocus>


                                </div>
                            </div>
                            <div class="py-8  px-8 lg:justify-end">
                                <button type="submit"
                                    class="w-full h-10  select-none font-bold whitespace-no-wrap  rounded-lg text-base leading-normal no-underline text-gray-100 bg-red-500 hover:bg-red-700 py-2">
                                    {{ __('Register') }}
                                </button>

                                <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                    {{ __('Avez-vous deja un  compte?') }}
                                    <a class="text-red-500 hover:text-red-700 no-underline hover:underline"
                                        href="{{ route('login') }}">
                                        {{ __('Connectez-vous') }}
                                    </a>
                                </p>
                            </div>
                        </div>


                    </form>

                </section>
            </div>
        </div>
    </main>
@endsection
