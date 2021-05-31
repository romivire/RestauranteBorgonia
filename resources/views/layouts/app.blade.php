<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('css/fontawesome-free-5.15.3-web/css-iconos/all.css') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

        <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
        @yield('cusstom-css')
    </head>
    <body>
        <div class="wrapper">
            <div>
                @include('layouts.navigation')

                <!-- Page Content -->
                <main class="px-3" style="width: 100%; text-align: center;">
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        {{ session()->get('error') }}
                    </div>
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        {{ session()->get('message') }}
                    </div>
                @endif
                    @yield('contenido')
                    
                </main>
            </div>
            <div class="push"></div>
        </div>

        <div class="footer width-full footer-edit">
            <div style="padding:0.4em 0em 0em 0em">
                <div class="row" style="width:100%">
                    <div class="col-lg-4 text-lg-left">
                        Copyright &copy; 2021
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/?lang=es"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    @yield('script')
    </body>
</html>
