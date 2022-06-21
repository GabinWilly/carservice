@extends('layouts.app')

@section('content')

    <div class=" item-center mx-32 bg-black mt-24 py-6 px-16 rounded " style="z-index: -2;">
        <div class=" mx-auto  w-full h-5/6 p-2 flex flex-wrap  ">
            {{-- @foreach ($images as $image)
                    @if ($image->car_id == $car->id)
                        <div class="w-auto mx-auto ">
                            <img src="{{ asset('/photos/' . $image->photo) }}"
                                class="shadow-xl rounded w-96  container h-96 object-cover object-center mr-1" alt="">
                        </div>
                    @endif
                @endforeach --}}
<div class="container">
    
        {{-- <img src="{{ asset('/photos/' . $image->photo) }}"
            class="shadow-xl rounded w-96  container h-96 object-cover object-center mr-1" alt=""> --}}
<ul id="autoWidth" class="cs-hidden flex">
    @foreach ($images as $image)
    @if ($image->car_id == $car->id)
        <li class="item-a ">
        <!--slider-box-->
        <div class="box w-52 p-4">
            <p class="marvel">{{ $image->marque }}</p>
            <!--model-->

            <img src="{{ asset('photos/' . $image->photo) }}" class=" object-cover model rounded border-4 flex" style="z-index:0;">
            <!--details-->
            <div class="details">
                <!--logo-character-->
                <div class="text-white text-lg font-semibold">
                    {{ $image->name }}
                </div>
            </div>
        </div>
   
    </li>
    @endif

    @endforeach
</ul>
<script src="js/script.js" type="text/javascript"></script>

<script>
    // JavaScript Document
    $(document).ready(function() {
        $('#autoWidth').lightSlider({
            autoWidth: true,
            loop: true,
            onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            }
        });
    });
</script>

<script src="{{ asset('js/JQuery3.3.1.js') }}"></script>
<script src="{{ asset('js/lightslider.js') }}"></script>


</div>
           
            
        </div>
        <div class="">
            <div class="py-4">
                <h1 class="text-red-600 text-4xl text-center font-bold underline"> Informations for article </h1>
            </div>
        </div>
        <div class="flex text-white text-2xl mx-auto py-6">
            <div class="w-1/4 ">
                <span class="text-red-600 "> Nom:</span>
                {{ $car->name }}
            </div>
            <div class="w-1/4">
                <span class="text-red-600"> Marque:</span>
                {{ $car->marque }}
            </div>
            <div class="w-1/4">
                <span class="text-red-600">Prix actuel:</span>
                <span class="underline"> {{ $car->prix }}</span>
            </div>
            <div class="w-1/4">
                <span class="text-red-600"> nombre de km/h:</span>
                {{ $car->km }}
            </div>
        </div>
        <div class="w-full grid justify-item-end py-6">
            <button class="">
                <a href="#"
                    class="px-16 py-2 bg-green-600 border-2 rounded text-white text-xl font-semibold hover:bg-red-600 ">
                    Reserver
                </a>
            </button>
        </div>
    </div>
@endsection
