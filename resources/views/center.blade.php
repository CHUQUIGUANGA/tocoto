@extends('layouts.app')

@section('headf')
     <div class="row headerC ">
           
       
        <div class="col-md-12 "></div>
          <div class="col-md-12  d-flex justify-content-center">
            <h2 class="texthd text-center">DISFRUTA ENTRENANDO, DISFRUTA DE TU SALUD</h2>  
          </div>
          <div class="col-md-12 ">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-4 d-flex justify-content-center">
                     <div class="wrapper">
                        <a class="button" href="{{ route('register') }}">ALTA TOCOTO</a>
                    </div>

                    <!-- Filter: https://css-tricks.com/gooey-effect/ -->
                    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/sgv" version="1.1">
                        <defs>
                            <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                            </filter>
                        </defs>
                    </svg>                        
                </div>                
            </div>
          </div>
          <div class="col-12 ">
          
          </div>
     </div>
@endsection

@section('headinfo')
<div class="row d-flex justify-content-center infoC">
    <div class="col-sm-12 col-md-10 py-4" style="min-height: 80vh">
        <div class="row  d-flex justify-content-left">
            <div class="col-sm-10 col-md-6 my-4" style="min-height: 40vh;">
                <div class="row py-4 my-4">
                    <div class="col-md-8 text-center ">
                        <p>
                        TOCOTO  {{ 'ZARAGOZA'}} es un centro de entrenamiento que ofrece una combinación de
                        innovación y diseño para tu bienestar integral. Cuenta con más de {{ '300'}}  metros
                        de sala fitness equipada con lo último en tecnología deportiva, {{ '3'}}  amplias salas
                        de actividades dirigidas con más de 60 clases semanales e iluminación natural, una 
                        amplia y sofisticada sala de entrenamiento funciona
                        </p>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                    
            </div>
           

            <div class="col-sm-10 col-md-7  my-4" style="min-height: 40vh;">
                <div class="row  py-4 my-4 d-flex justify-content-right">
                    <div class="col-md-8 text-center">
                    <h4>Descubre el gimnasio más
                    completo en TOCOTO {{ 'ZARAGOZA'}}.</h4>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                   
            </div>
        </div>
    </div>
</div>
@endsection