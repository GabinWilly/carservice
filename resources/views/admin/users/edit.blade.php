@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10 ">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="px-3 py-4 mb-4 text-sm text-green-700 bg-green-100 border border-t-8 border-green-600 rounded" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm lg:shadow-lg">

            <header class="px-6 py-5 font-semibold text-gray-700 bg-gray-200 sm:py-6 sm:px-8 sm:rounded-t-md">
               modifier <strong>{{ $user->name }}</strong>
            </header>
        </section>
        <div class="px-6 py-6">
            <form action="{{ route('admin.users.update', $user) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="flex flex-wrap my-6 space-x-20">
                    <label for="text" class="block mb-2 ml-2 text-sm font-bold text-gray-700 sm:mb-4">
                        {{ __('nom') }}:
                    </label>

                    <input id="name" type="text"
                        class="form-input w-96 @error('name') border-red-500 @enderror" name="name"
                        value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus>

                    @error('name')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="flex flex-wrap space-x-4">
                    <label for="email" class="mt-2 text-sm font-bold text-gray-700 bpt-lock sm:mb-4">
                        {{ __('E-Mail Address') }}:
                    </label>

                    <input id="email" type="email"
                        class="form-input w-96 @error('email') border-red-500 @enderror" name="email"
                        value="{{ old('email') ?? $user->email }}" required autocomplete="email" autofocus>

                    @error('email')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                @foreach ($roles as $role)
                <div class="my-2">
                    <input class="checked:bg-pink-600 checked:border-transparent" type="checkbox" name="roles[]" id="{{ $role->id }}" value="{{ $role->id }}" @if ($user->roles->pluck('id')->contains($role->id))
                    checked
                    @endif>
                    <label for="{{ $role->id }}">{{ $role->name }}</label>
                </div>
                @endforeach
                <button type="submit" class="p-2 my-2 font-bold text-white bg-blue-600 rounded">Modifier les informations</button>
            </form>
        </div>
    </div>
</main>
@endsection
