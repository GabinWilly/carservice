@extends('layouts.app')

@section('content')


    <div class="mt-44 text-center mb-11">
        <p class=" text-6xl font-semibold  text-red-600 ">
            nos propositions pour <br> vous aidez....
        </p>
    </div>
    <div class="flex  px-16 pt-36 space-x-6 w-full pb-6 ">

        <div class="lg:w-1/3 w-full bg-white rounded shadow-2xl">
            <div class="">
                <a href="" class="h-full">
                    <img src="{{ asset('image/r4x.jpg') }}" class="object-cover object-center rounded-t" alt=""> 
                </a>
            </div>
            <div class=" py-2 px-6">
                <div class="text-xl font-bold text-center">bodge charge</div>
                <div class="text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. I
                        nventore distinctio quo fugit, animi quisquam minus assumenda tempora ullam </p>
                </div>
                <div class="flex  p-2 w-full lg:space-x-2 space-x-3 ">
                        <div class=" flex w-1/3">
                        <div class=" pt-1 ">
                            <img src="{{ asset('image/big_data_50px.png') }}" class="object-cover object-center w-8 h-8 " alt="">
                        </div>
                        <div class=" py-2">1500ml</div>
                    </div>
                    <div class="flex w-1/3">
                        <div class=" pt-1 ">
                            <img src="{{ asset('image/big_data_50px.png') }}" class="object-cover object-center w-8 h-8  " alt="">
                        </div>
                        <div class=" py-2">1500ml</div>
                    </div>
    
                    <div class="flex w-1/3">
                        <div class=" pt-2 ">
                            <img src="{{ asset('image/calendar_50px.png') }}" class="object-cover object-center w-8 h-8 " alt="">
                        </div>
                        <div class=" py-2">1500ml</div>
                    </div>
                </div>
                <div class="w-full">
                    <button class="text-center rounded px-4 py-3 bg-red-600 font-bold text-white w-full text-xl hover:bg-blue-600 hover:text-white"><a href=""  class="">  Reserver</a></button>
                </div>
            </div>
        </div>


        <div class="lg:w-1/3 w-full bg-white rounded shadow-2xl">
            <div>
                <a href="">
                    <img src="{{ asset('image/cover.jpg') }}" class="object-cover object-center rounded-t" alt=""> 
                </a>
            </div>
            <div class=" py-2 px-6">
                <div class="text-xl font-bold text-center">bodge charge</div>
                <div class="text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. I
                        nventore distinctio quo fugit, animi quisquam minus assumenda tempora ullam </p>
                </div>
                <div class="flex  p-2 w-full lg:space-x-2 space-x-3 ">
                        <div class=" flex w-1/3">
                        <div class=" pt-1 ">
                            <img src="{{ asset('image/big_data_50px.png') }}" class="object-cover object-center w-8 h-8 " alt="">
                        </div>
                        <div class=" py-2">1500ml</div>
                    </div>
                    <div class="flex w-1/3">
                        <div class=" pt-1 ">
                            <img src="{{ asset('image/big_data_50px.png') }}" class="object-cover object-center w-8 h-8  " alt="">
                        </div>
                        <div class=" py-2">1500ml</div>
                    </div>
    
                    <div class="flex w-1/3">
                        <div class=" pt-2 ">
                            <img src="{{ asset('image/calendar_50px.png') }}" class="object-cover object-center w-8 h-8 " alt="">
                        </div>
                        <div class=" py-2">1500ml</div>
                    </div>
                </div>
                <div class="w-full">
                    <button class="text-center rounded px-4 py-3 bg-red-600 font-bold text-white w-full text-xl hover:bg-blue-600 hover:text-white"><a href=""  class="">  Reserver</a></button>
                </div>
            </div>
        </div>


        <div class="lg:w-1/3 w-full bg-white rounded shadow-2xl">
            <div>
                <a href="">
                    <img src="{{ asset('image/cover.jpg') }}" class="object-cover object-center rounded-t" alt=""> 
                </a>
            </div>
            <div class=" py-2 px-6">
                <div class="text-xl font-bold text-center">bodge charge</div>
                <div class="text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. I
                        nventore distinctio quo fugit, animi quisquam minus assumenda tempora ullam </p>
                </div>
                <div class="flex  p-2 w-full lg:space-x-2 space-x-3 ">
                        <div class=" flex w-1/3">
                        <div class=" pt-1 ">
                            <img src="{{ asset('image/big_data_50px.png') }}" class="object-cover object-center w-8 h-8 " alt="">
                        </div>
                        <div class=" py-2">1500ml</div>
                    </div>
                    <div class="flex w-1/3">
                        <div class=" pt-1 ">
                            <img src="{{ asset('image/big_data_50px.png') }}" class="object-cover object-center w-8 h-8  " alt="">
                        </div>
                        <div class=" py-2">1500ml</div>
                    </div>
    
                    <div class="flex w-1/3">
                        <div class=" pt-2 ">
                            <img src="{{ asset('image/calendar_50px.png') }}" class="object-cover object-center w-8 h-8 " alt="">
                        </div>
                        <div class=" py-2">1500ml</div>
                    </div>
                </div>
                <div class="w-full">
                    <button class="text-center rounded px-4 py-3 bg-red-600 font-bold text-white w-full text-xl hover:bg-blue-600 hover:text-white"><a href=""  class="">  Reserver</a></button>
                </div>
            </div>
        </div>

    </div>
@endsection