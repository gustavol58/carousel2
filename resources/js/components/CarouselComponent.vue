<template>
   <div class="container">
      <div class="row justify-content-center">
           <div class="col-md-8">
                <center><h2>Bibi y Sofi</h2></center>

                <div id="demo" class="carousel slide" data-ride="carousel"  data-pause="hover" data-interval="4000">

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                   <li data-target="#demo" data-slide-to="0" class="active"></li>
                   <li data-target="#demo" data-slide-to="1"></li>
                   <li data-target="#demo" data-slide-to="2"></li>
                   <li data-target="#demo" data-slide-to="3"></li>
                   <li data-target="#demo" data-slide-to="4"></li>
                   <li data-target="#demo" data-slide-to="5"></li>
                   <li data-target="#demo" data-slide-to="6"></li>
                   <li data-target="#demo" data-slide-to="7"></li>
                   <li data-target="#demo" data-slide-to="8"></li>
                   <li data-target="#demo" data-slide-to="9"></li>
                   <li data-target="#demo" data-slide-to="10"></li>
                  </ul>

                  <!-- The slideshow -->
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="/img/bibi.png" alt="Bibi" style="width:100%;" >
                     </div>
                     <div class="carousel-item">
                        <img src="/img/sofi2011.png" alt="Sofi 2011" style="width:100%;" >
                     </div>
                     <div class="carousel-item">
                        <img src="/img/sofi2012.png" alt="Sofi 2012" style="width:100%;" >
                     </div>
                     <div class="carousel-item">
                        <img src="/img/sofi2013.png" alt="Sofi 2013" style="width:100%;" >
                     </div>
                     <div class="carousel-item">
                        <img src="/img/sofi2014.png" alt="Sofi 2014" style="width:100%;" >
                        <div class="carousel-caption">
                          <h3>Leyenda</h3>
                          <p>Podemos agregar texto a algun slide</p>
                          <a href="https://www.w3schools.com">Incluyendo un hipervínculo...</a>                          
                        </div>
                     </div>
                     <div class="carousel-item">
                        <img src="/img/sofi2015.png" alt="Sofi 2015" style="width:100%;" >
                     </div>
                     <div class="carousel-item">
                        <img src="/img/sofi2016.png" alt="Sofi 2016" style="width:100%;" >
                     </div>
                     <div class="carousel-item">
                        <img src="/img/sofi2017.png" alt="Sofi 2017" style="width:100%;" >
                     </div>
                     <div class="carousel-item">
                        <img src="/img/sofi2018.png" alt="Sofi 2018" style="width:100%;" >
                     </div>
                     <div class="carousel-item">
                        <img src="/img/sofi2019.png" alt="Sofi 2019" style="width:100%;" >
                     </div>
                     <div class="carousel-item">
                        <img src="/img/sofi2020.png" alt="Sofi 2020" style="width:100%;" >
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
</template>

<script>
   export default {

   }
</script>

<style media="screen">
   /* Make the image fully responsive */
   .carousel-inner img {
     width: 100%;
     height: 100%;
   }
</style>
