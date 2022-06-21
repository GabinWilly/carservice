@extends('layouts.app')

@section('content')

    <div class="flex w-full">
        <div class="h-screen bg-blue-900 space-y-16 text-center text-xl text-white   w-1/4">
            <div class="text-2xl text-white mt-24 font-semibold">
                <h3>
                    <a href="{{ route('article.index') }}">les articles</a> </h3>
            </div>
            <div class="border-b border-t">
                <a href="{{ route('reserver') }}" class="  w-full">
                     réservées    
                </a> 
            </div>
            <div class=" w-full border-b border-t">
                <a href="{{ route('non_reserver') }}" class=" w-screen">
                     non-reserveés
                </a>
            </div>
            <div><a href=""  class=" w-full border-b border-t">
                nos articles pour vous.....    
            </a></div>
        </div>
        <div class="flex items-center bg-gray-300 h-screen w-3/4">
            <div class="text-white   mx-auto w-5/6 h-4/6 mt-24  rounded" id="app">
                @foreach ($reservations as $reservation)
                    <div class="my-2 border shadow-xl px-2 py-3 bg-gray-300 rounded">
                        <strong>{{ $reservation->name_user }} @if ($reservation->reservée)
                                <span class="p-1 bg-red-600 text-white font-semibold border-2 rounded"> reservé</span>
                            @endif </strong>

                    </div>
                @endforeach
                {{ $reservations->links() }}
            </div>
            
        </div>
        
    </div>
    
@endsection
