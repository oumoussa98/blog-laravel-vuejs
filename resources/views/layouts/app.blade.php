<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/all.css')}}" rel="stylesheet">



</head>
<body>
    <div id="app">

        @include('partials.menu')

        <main class="py-4"></main>

         
             <div class="container-fluid py-4">
               <div class="row">
                 <div class="col-md-12 text-center">  
                     @include('partials.flash')
                 </div>
               </div>
             </div>
      


        <main class="py-4">
            @yield('content')
        </main>
       
        <main class="py-4">
            @yield('components')
    </main>



        @include('partials.footer')

        
    </div>





</body>
</html>
