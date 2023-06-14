<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @yield('title') | {{auth()->user()->name}} </title>
        <link rel="icon" href="{{asset('images/innotive.png')}}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('datatables/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script> --}}

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.themeroller.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>


        <!-- Scripts -->
        <script src="{{ asset('datatables/datatables.min.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <script src="{{ asset('js/share.js') }}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-purple-100">
            <div class="lg:hidden sm:block">
                @include('layouts.navigation')
            </div>

            {{-- <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header ?? '' }}
                </div>
            </header> --}}

            <!-- Page Content -->
            <div class="z-1 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:flex lg:justify-between">
            
                    <div class="hidden lg:block fixed top-0 left-0 lg: mt-2 px-20 pr-11">
                        @include('_sidebar-links')
                    </div>
            
                    <div class="lg:flex-1 border-l-2 border-r-2 border-purple-300 lg:mx-40 w-56">
                        <div class="bg-purple-100 sticky top-0 py-6 px-6 text-center text-xl text-bold shadow-md">
                            @yield('title')
                        </div>
                        <main class=" px-10 mt-2">
                            {{ $slot }}
                        </main>
                    </div>
            
                    <div class="hidden lg:block fixed top-0 right-0 lg:w-1/6 p-2 rounded-lg mt-2 mr-4">
                        @include('_friends-list')
                    </div>
            
                </div>
            </div>
            
            
        </div>
        <script src="https://unpkg.com/turbolinks"></script>
    </body>
</html>