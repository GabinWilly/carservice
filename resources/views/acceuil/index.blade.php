@extends('layouts.app')

@section('content')
    <main>
        <div class="px-16 lg:flex flex-wrap py-44 ">
            <div class="space-y-2 lg:w-1/2 ">
                <div class="font-semibold text-2xl text-white">
                    <h1 class="text-center xl:text-left"> WELCOME TO <br>
                        <strong class="text-6xl" style="font-family: cursive;">CAR SERVICE</strong>
                    </h1>
                </div>
                <div class="text-white text-center lg:text-xl xl:text-left" style="font-family: cursive;">
                    Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit.
                    Nesciunt,s
                </div>
                <div class="">
                    <button class=" border px-5 py-2 bg-red-700 rounded text-white font-semibold text-xl w-full  lg:w-52">
                        <a href="">{{ __('Explore more') }}</a>
                    </button>
                </div>
                <div class="pt-16">
                    <div class="px-2">
                        <h2 class="text-2xl text-white font-semibolt">
                            <span class="text-red-600 font-semibold">X</span> Entreprises en collaborations
                        </h2>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 ">
                <div class=" lg:mx-44 p-6 border rounded lg:my-16 my-6 bg-red-600 lg:bg-gray-600">
                    <div class="text-2xl font-bold">
                        <h2>FIND YOUR DESIRE <br> CAR AND ...</h2>
                    </div>
                    <form action="" method="POST" class="space-y-4 ">
                        @csrf
                        @method('POST')
                        <div>
                            <select name="" id="" class="w-full bg-white border py-2 px-4 rounded ">
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                            </select>
                        </div>
                        <div>
                            <select name="" id="" class="w-full bg-white border py-2 px-4 rounded ">
                                <option aria-placeholder="" value="toyota">renault</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                            </select>
                        </div>
                        <div>
                            <select name="" id="" class="w-full bg-white border py-2 px-4 rounded ">
                                <option aria-placeholder="" value="toyota">nissan</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                                <option aria-placeholder="" value="toyota">toyota</option>
                            </select>
                        </div>
                        <div class="mx-1">
                            <p>prico rangs</p>
                        </div>
                        <div class="flex ">
                            <div class="w-1/2 ">
                                <div class="mx-2">
                                    <select name="" id="" class="w-full rounded  border py-2 px-4">
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="mx-2 ">
                                    <select name="" id="" class="w-full rounded border py-2 px-4">
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                        <option aria-placeholder="" value="toyota">toyota</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="text-center bg-red-600 rounded w-full border p-2 font-bold text-xl text-white">
                                <a href="">SEARCH</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div>
            <div class=" lg:flex lg:px-16 lg:py-16 px-2 py-7  border-black h-screen "
                style="background: url('image/nissan-Z-Proto.jpg'); background-size:cover; background-position:center;">
                <div class="lg:w-1/2 space-y-3 w-full">
                    <div>
                        <h1 class="text-red-800 font-bold lg:text-4xl text-2xl text-center lg:text-left "> ABOUT US</h1>
                    </div>
                    <div>
                        <p class="text-center lg:text-left text-white text-lg px-7">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Sapiente est aliquid similique beatae distinctio cum eum cupiditate ipsa praesentium
                            voluptatibus consectetur,
                            nobis nam iusto.
                        </p>
                    </div>
                    <div class="lg:px-7">
                        <button class="text-xl font-bold text-white rounded px-4 py-3 bg-red-600 border w-full lg:w-52 ">
                            <a href="">{{ __('company profile') }}</a>
                        </button>
                    </div>
                </div>
                <div class="lg:w-1/2 px-5 w-full py-8 ">
                    <div class="flex space-x-3">
                        <div class="w-1/2 flex">
                            <div>
                                <img src="{{ asset('image/car_80px.png') }}" class="object-center object-cover " alt="">
                            </div>
                            <div class="lg:p-3 px-2  ">
                                <div class="font-bold lg:font-extrabold  text-xl lg:text-4xl text-white"> 400 </div>
                                <div class="font-semibold">vehicules stocks</div>
                            </div>
                        </div>
                        <div class="w-1/2 flex">
                            <div>
                                <img src="image/car_80px.png" alt="">
                            </div>
                            <div class="lg:p-3 px-2  ">
                                <div class="font-bold lg:font-extrabold  text-xl lg:text-4xl  text-white">400</div>
                                <div class="font-semibold">vehicules stocks</div>
                            </div>
                        </div>

                    </div>
                    <div class="flex">
                        <div class="w-1/2 flex">
                            <div>
                                <img src="{{ asset('image/car_80px.png') }}" alt="">
                            </div>
                            <div class="lg:p-3 px-2  ">
                                <div class="font-bold lg:font-extrabold  text-xl lg:text-4xl text-white">400</div>
                                <div class="font-semibold">vehicules stocks</div>
                            </div>
                        </div>
                        <div class="w-1/2 flex">
                            <div>
                                <img src="image/car_80px.png" alt="">
                            </div>
                            <div class="lg:p-3 px-2  ">
                                <div class="font-bold lg:font-extrabold  text-xl lg:text-4xl  text-white">400</div>
                                <div class="font-semibold">vehicules stocks</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class=" lg:p-6 w-full h-full bg-red-600"
            style="background: url(image/maxresdefault.jpg); background-size:cover; background-position:center;">
            <div class="lg:flex px-6 lg:px-16 py-6 ">
                <div class="lg:w-2/3 w-full text-white">
                    <div>
                        <h1 class="lg:text-3xl font-bold text-center  lg:text-left text-5xl py-6">Featured vehicules</h1>
                    </div>
                    <div>
                        <p class="text-center lg:text-left">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Quibusdam velit fuga dignissimos officia sed? Omnis,
                            magnam voluptatum harum consequuntur debitis tempore. Esse,
                            architecto. Nesciunt facere nemo saepe totam sunt provident.
                        </p>
                    </div>
                </div>
                <div class=" flex lg:w-1/3 p-4   lg:justify-end items-center  ">
                    <button><a href="{{ route('consultations') }}"
                            class="border font-semibold w-full px-4 py-2 bg-black text-white text-center">new
                            car</a></button>
                    <button><a href="{{ route('formulaire_car') }}"
                            class="border font-semibold px-4 w-full py-2 text-center bg-white">user car</a></button>
                </div>
            </div>
            <div class="lg:flex lg:space-x-16 md:space-y-6 space-y-3 lg:space-y-0 lg:py-8  px-6 lg:px-16 py-11 md:px-32 ">


                <div class="container">
                    <!--slider------------------->
                    <ul id="autoWidth" class="cs-hidden flex">

                        @foreach ($imgs as $img)
                        <a href="{{ route('affiche',$img->id) }}">
                            <li class="item-a ">
                                <!--slider-box-->
                                <div class="box w-52 p-4">
                                    <p class="marvel">{{ $img->marque }}</p>
                                    <!--model-->

                                    <img src="{{ asset('photos/' . $img->photo) }}"
                                        class=" object-cover model rounded border-4 flex">

                                    <!--details-->
                                    <div class="details">
                                        <!--logo-character-->
                                        <div class="text-white text-lg font-semibold">
                                            {{ $img->name }}
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </a>
                        @endforeach
                        @can('manage-users')
                        <li class="item-a flex">
                            <div class="box w-52 p-4">
                                <div class=" items-center space-y-11">
                                    <p class="text-center text-white text-3xl font-semibold w-full py-20">
                                        Ajoutez une <br> voiture
                                    </p>
                                    <a href="{{ route('formulaire_car') }}">
                                        <img src="{{ asset('image/plus_math_26px.png') }}"
                                            class="h-32 w-32 object-cover border rounded-full ml-4 hover:bg-red-600 bg-green-600  object-center"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                
                </li>
                        @endcan
                </ul>
            </div>


            <script src="js/script.js" type="text/javascript"></script>

        </div>
        </div>

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

        <div class="lg:flex lg:px-36 lg:py-12"
            style="background: url('image/cover.jpg'); background-size:cover; background-position:center;">
            <div class="lg:w-1/2 w-full">
                <div class="py-7 text-center ">
                    <h1 class="text-white font-extrabold text-4xl lg:text-left text-center ">
                        What our <br> client says
                    </h1>
                </div>
                <div>
                    <p class="text-center lg:text-left text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Vitae animi sint assumenda.
                        Ipsum quae nobis deleniti pariatur saepe repellendus perspiciatis molestiae doloribus
                        qui tenetur eaque rerum soluta, nostrum doloremque magni.</p>
                </div>
            </div>
            <div class="lg:w-1/2 lg:px-13 lg:flex py-6 mx-6 lg:mx-0 ">
                <div class="lg:w-2/3 my-16 p-4 bg-white bg-no-repeat rounded lg:rounded-l">
                    <div>
                        <h1 class="text-red-600 text-3xl font-bold">Jonathan Doe</h1>
                    </div>
                    <div class=" w-full">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Facilis voluptatum magnam voluptates blanditiis ducimus repellat temporibus sapiente saepe</p>
                    </div>
                </div>
                <div class="w-1/3 my-16 bg-red-600">

                </div>
            </div>
        </div>

        <div class="bg-white ">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-red-600 p-4"> We deal in this brands</h1>
            </div>
            <div class="flex">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <div class="border-t bg-black text-white lg:py-6 ">
            <div class="text-center p-4 text-red-600 font-bold text-3xl ">
                <h1> what we offer</h1>
            </div>
            <div class="lg:flex lg:px-52 lg:space-x-6 text-center py-5 space-y-6 lg:space-y-0 px-2">
                <div class="lg:w-1/3 lg:flex px-2">
                    <div>
                        <img src="" alt="">
                    </div>
                    <div>
                        <div class="text-center items-center">
                            <h2 class="font-bold text-2xl "> pre-sale preparation</h2>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur adipisci quia veritatis
                                voluptatibus
                                quidem explicabo debitis modi minus quos qui excepturi, ut voluptatum autem consectetur quam
                                molestiae
                                soluta maxime corrupti!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 flex px-2">
                    <div>
                        <img src="" alt="">
                    </div>
                    <div>
                        <div>
                            <h2 class=" font-bold text-2xl"> Bank financing</h2>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Consequatur adipisci quia veritatis voluptatibus quidem explicabo debitis modi minus quos
                                qui excepturi,
                                ut voluptatum autem consectetur quam molestiae soluta maxime corrupti!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 flex px-2 ">
                    <div>
                        <img src="" alt="">
                    </div>
                    <div>
                        <div>
                            <h2 class="text-2xl font-bold "> Trade of services</h2>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Consequatur adipisci quia veritatis voluptatibus quidem explicabo debitis modi minus quos
                                qui excepturi,
                                ut voluptatum autem consectetur quam molestiae soluta maxime corrupti!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="lg:flex lg:py-12 lg:pl-6">
                <div class="lg:w-1/3 ">
                    <h1 class="text-center text-4xl lg:text-6xl font-bold text-red-600 py-11">Car service</h1>
                </div>
                <div class="lg:flex lg:w-2/3  bg-red-600 lg:p-6 p-2">
                    <div class="lg:w-1/2 text-white">
                        <div class="text-center">
                            <p class="text-3xl font-bold"> Subscrite <br>
                                Our Newsletter
                            </p>
                        </div>
                        <div>
                            <p class="p-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci beatae odit
                                libero id omnis ullam
                                nam a ad sed et magni voluptates, recusandae placeat dolore autem non voluptatibus
                                doloremque ducimus!</p>
                        </div>
                    </div>
                    <div class="p-12  flex">
                        <div>
                            <input type="email" placeholder="Enter your email"
                                class="border p-4 rounded-l object-cover object-center">
                        </div>
                        <div class="p-4 bg-black w-15 h-15 rounded-r"><img src="image/telegram.png" alt=""></div>
                    </div>
                </div>
            </div>


            {{-- footer --}}
            <footer class=" lg:px-32 lg:flex px-6 bg-black p-12 text-cool-gray-50 text-center space-y-3">
                <div class=" lg:w-1/3 px-6 ">
                    <div class="">
                        <h1 class=" text-2xl font-bold text-red-600"> Location</h1>
                        <div class="flex text-center lg:pl-20">
                            <div class="text-red-600 text-center"> Email:
                                <span class="text-white">info@carservice.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" lg:w-1/3 px-6">
                    <div>
                        <h1 class=" text-xl font-bold text-red-600"> Quiks link</h1>
                    </div>
                    <div class="  text-xl font-semibold lg:py-6 py-2">
                        <div class="flex space-x-4">
                            <ul>Home</ul>
                            <ul>Profile</ul>
                        </div>
                        <div class="flex space-x-4 text-center">
                            <ul>Vehicules</ul>
                            <ul>clients</ul>
                        </div class="flex">
                        <ul class="text-left">Contact Us</ul>
                    </div>
                </div>
                <div class=" lg:w-1/3 px-2">
                    <div>
                        <h1 class=" text-xl font-bold text-red-600"> SHOWROOM TIMING</h1>
                    </div>
                    <div class=" font-semibold  ">
                        sat-Thur: 09:00 AM - 02:00 PM
                        <span class="flex py-2 px-28">
                            Follow us :
                            <img src="image/facebook1.png" alt="">
                            <img src="image/twitter.png" alt="">
                            <img src="image/youtube.png" alt="">
                        </span>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    {{-- <div class="flex flex-col">
@if (Route::has('login'))
<div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
    @auth
        <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
    @else
        <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
        @endif
    @endauth
</div>
@endif

<div class="min-h-screen flex items-center justify-center">
<div class="flex flex-col justify-around h-full">
    <div>
        <h1 class="mb-6 text-gray-600 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl">
            {{ config('app.name', 'Laravel') }}
        </h1>
        <ul class="flex flex-col space-y-2 sm:flex-row sm:flex-wrap sm:space-x-8 sm:space-y-0">
            <li>
                <a href="https://laravel.com/docs" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Documentation">Documentation</a>
            </li>
            <li>
                <a href="https://laracasts.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Laracasts">Laracasts</a>
            </li>
            <li>
                <a href="https://laravel-news.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="News">News</a>
            </li>
            <li>
                <a href="https://nova.laravel.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Nova">Nova</a>
            </li>
            <li>
                <a href="https://forge.laravel.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Forge">Forge</a>
            </li>
            <li>
                <a href="https://vapor.laravel.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Vapor">Vapor</a>
            </li>
            <li>
                <a href="https://github.com/laravel/laravel" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="GitHub">GitHub</a>
            </li>
            <li>
                <a href="https://tailwindcss.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Tailwind Css">Tailwind CSS</a>
            </li>
        </ul>
    </div>
</div>
</div>
</div> --}}
@endsection
