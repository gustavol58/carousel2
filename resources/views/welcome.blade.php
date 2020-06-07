<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script> --}}
    <title>Laravel vue Carousel</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body class="container-fluid">

   <div id="app">
      <div class="container">
         <div class="row justify-content-center">
              <div class="col-md-8">
                   <center><h2>Carousel only bootstrap</h2></center>

                   <div id="demo" class="carousel slide" data-ride="carousel">

                     <!-- Indicators -->
                     <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                     </ul>

                     <!-- The slideshow -->
                     <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('img/bibi.png') }}" alt="Los Angeles" style="width:100%;" >
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('img/sofi2014.png') }}" alt="Chicago" style="width:100%;" >
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('img/sofi2015.png') }}" alt="New York" style="width:100%;" >
                      </div>
                     </div>

                     <!-- Left and right controls -->
                     <a class="carousel-control-prev" href="#demo" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                     </a>
                     <a class="carousel-control-next" href="#demo" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                     </a>
                   </div>
               </div>
         </div>
      </div>
   </div>






<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
