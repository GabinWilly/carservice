<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script  src="{{ asset('js/lightslider.js') }} " ></script>
    <script src="{{ asset('js/JQuery3.3.1.js') }}"></script>


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/lightslider.css') }}">
</head>

<body class="h-screen font-sans antialiased leading-none bg-black "
    style="background:  url('image/cover.jpg'); background-size:cover; background-position:center; background-repeat: no-repeat; ">
    <div id="app">
        <nav class="flex justify-between items-center flex-wrap p-6 fixed w-full top-0 bg-black  ">
            <div class=" flex items-center flex-shrink-0  mr-6">
                <div class=" no-underline text-gray-50 text-center">
                    <p class="text-4xl t font-bold pl-3 text-white animate-bounce "> Car service</p> 
                </div>
            </div>
            @auth
                {{-- hamburger --}}
                <div class="  block lg:hidden  ">
                    <button id="nav-toggle"
                        class="  flex items-center px-3  py-2 border rounded text-gray-600 border-gray-600 hover:border-blue-400">
                        <svg class="fill-current h-3 w-3 " viewBox=" 0 0 20 20 " xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0  6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
            @endauth


            <div class="w-full flex-grow lg:pt-0 lg:items-center  lg:w-auto hidden lg:block  rounded  lg:rounded-none font-semibold"
                id="nav-content">
                <header
                    class=" lg:flex justify-end flex-1 items-center text-center text-xl py-5 lg:py-0 space-y-2 lg:space-y-0 ">

                    @if (Route::currentRouteName() == 'bien')


                        @can('manage-users')
                            <div class="mr-6 lg:hover:bg-black ">
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">Dashboard</a>
                            </div>
                        @endcan

                    @elseif (Route::currentRouteName() == 'login')
                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('acceuil') }}"
                                class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded">Accueil</a>
                        </div>
                        @can('manage-users')
                            <div class="mr-6 lg:hover:bg-black ">
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">Dashboard</a>
                            </div>
                        @endcan
                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('register') }}"
                                class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">register</a>
                        </div>


                    @elseif (Route::currentRouteName() == 'register')

                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('acceuil') }}"
                                class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded">Accueil</a>
                        </div>
                        @can('manage-users')
                            <div class="mr-6 lg:hover:bg-black ">
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">Dashboard</a>
                            </div>
                        @endcan
                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('login') }}"
                                class="inline-block p-2 text-white no-underline w-full bg-red-600 px-6 rounded ">login</a>
                        </div>

                    @elseif (Route::currentRouteName() == 'admin.users.index')

                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('acceuil') }}"
                                class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded">Accueil</a>
                        </div>
                        @can('manage-users')
                            <div class="mr-6 lg:hover:bg-black ">
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">Dashboard</a>
                            </div>
                        @endcan

                    @elseif (Route::currentRouteName() == 'admin.create.create')
                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('acceuil') }}"
                                class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded">Accueil</a>
                        </div>
                        @can('manage-users')
                            <div class="mr-6 lg:hover:bg-black ">
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">Dashboard</a>
                            </div>
                        @endcan

                    @elseif (Route::currentRouteName() == 'admin.create.edit')

                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('acceuil') }}"
                                class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded">Accueil</a>
                        </div>
                        @can('manage-users')
                            <div class="mr-6 lg:hover:bg-black ">
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">Dashboard</a>
                            </div>
                        @endcan

                    @elseif (Route::currentRouteName() == 'annonce.index')

                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('acceuil') }}"
                                class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded">Accueil</a>
                        </div>

                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('reservation.index') }}"
                                class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded">Reservations</a>
                        </div>
                        @can('manage-users')
                            <div class="mr-6 lg:hover:bg-black ">
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">Dashboard</a>
                            </div>
                        @endcan


                    @elseif (Route::currentRouteName() == 'annonce.create')

                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('acceuil') }}"
                                class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded">Accueil</a>
                        </div>
                        @can('manage-users')
                            <div class="mr-6 lg:hover:bg-black ">
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">Dashboard</a>
                            </div>
                        @endcan

                    @elseif (Route::currentRouteName() == 'annonce.edit')

                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('acceuil') }}"
                                class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded">Accueil</a>
                        </div>
                        @can('manage-users')
                            <div class="mr-6 lg:hover:bg-black ">
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">Dashboard</a>
                            </div>
                        @endcan

                    @elseif (Route::currentRouteName() == 'acceuil')


                        @can('manage-users')
                            <div class="mr-6 lg:hover:bg-black ">
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">Dashboard</a>
                            </div>
                        @endcan

                    @elseif (Route::currentRouteName() == 'home')



                        {{-- <div class="mr-6 lg:hover:bg-black ">
                            <a href="#"
                                class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded">Reservations</a>
                        </div> --}}
                        @can('manage-users')
                            <div class="mr-6 lg:hover:bg-black ">
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">Dashboard</a>
                            </div>
                        @endcan
                    @elseif (Route::currentRouteName() == 'consultations')
                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('acceuil') }}"
                                class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded">Acceuil</a>
                        </div>

                        @can('manage-users')
                            <div class="mr-6 lg:hover:bg-black ">
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">Dashboard</a>
                            </div>
                        @endcan

                    @elseif (Route::currentRouteName() == 'reservation.index')
                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('acceuil') }}"
                                class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded">Accueil</a>
                        </div>
                        @can('manage-users')
                            <div class="mr-6 lg:hover:bg-black ">
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-block p-2 text-white no-underline w-full hover:bg-red-600 px-6 rounded ">Dashboard</a>
                            </div>
                        @endcan

                    @endif

                </header>
            </div>

            <section class="space-x-4 text-sm text-gray-300  sm:text-base">
                @guest
                    @if (route::currentRouteName() == 'bien')
                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('login') }}"
                                class="inline-block p-2 lg:px-6  text-white no-underline w-full hover:bg-red-600 font-semibold rounded bg-red-600">CONNEXION</a>
                        </div>

                    @elseif (Route::currentRouteName() == 'acceuil')
                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('login') }}"
                                class="inline-block p-2 lg:px-6  text-white no-underline w-full hover:bg-red-600 font-semibold rounded bg-red-600">CONNEXION</a>
                        </div>
                    @elseif(Route::currentRouteName() == 'detailpage')
                        <div class="mr-6 lg:hover:bg-black ">
                            <a href="{{ route('login') }}"
                                class="    inline-block p-2 lg:px-6  text-white no-underline w-full hover:bg-red-600 font-semibold rounded bg-red-600">CONNEXION</a>
                        </div>
                    @endif
                @else
                    @auth
                        <div class="lg:flex hidden space-x-2">

                            <span>
                                <img src=" {{ asset('storage/images/' . Auth::user()->avatar) }}"
                                    class="w-10 h-10 rounded-full object-cover object-center" alt="">
                            </span>
                            <div>
                                <div class="pr-4">
                                    <span class="   text-xl font-semibold text-purple-600">{{ Auth::user()->name }}</span>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('logout') }}" class="text-xl no-underline hover:underline"
                                    onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                            <span class="relative">
                                <div class="flex">
                                    <button class=" static block rounded-full overflow-hidden border-2" id="toggle">
                                        <img src="image/bell_24px.png" class=" p-1 object-cover object-center " alt="">
                                    </button>
                                    <div
                                        class="bg-red-600 rounded-full overflow-hidden w-5 h-5 text-center transform -translate-x-3 ">
                                        <span class="px-2  font-bold text-lg">
                                            @foreach (auth()->user()->unreadNotifications as $notification)
                                                {{ $notification->count() }}
                                            @endforeach
                                        </span>

                                    </div>

                                </div>

                                <div id="content"
                                    class="bg-white rounded shadow-lg absolute right-1 py-4  px-32  w-full hidden">
                                    @foreach (auth()->user()->unreadNotifications as $notification)
                                        <a href="#"
                                            class="  hover:text-white hover:border-4 bg-red-600 w-full hover:bg-gray-700 rounded mr-1 text-center overflow-hidden">
                                            {{ $notification->data['title'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </span>
                        </div>

            </div>

            </nav>
            {{-- javascript --}}
            <script>
                document.getElementById('nav-toggle').onclick = function() {
                    document.getElementById('nav-content').classList.toggle("hidden")
                }
                document.getElementById('toggle').onclick = function() {
                    document.getElementById('content').classList.toggle("hidden")
                }
            </script>
            </section>
            </nav>
            </div>

        @endguest

    @endguest
    </section>
    </nav>



    @yield('content')
    </div>


</body>

</html>
