
@extends('layouts.app')


@section('headf')
     <div class="row headerf ">
           
       
        <div class="col-md-12 "></div>
          <div class="col-md-12  d-flex justify-content-center">
            <h2 class="texthd">DISFRUTA ENTRENANDO, DISFRUTA DE TU SALUD</h2>  
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
                <div class="col-sm-12 col-md-4  d-flex justify-content-center">
                         <div class="wrapper">
                            <a class="button" href="{{ route('login') }}">INGRESAR TOCOTO</a>
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

@section('headf2')
    <div class="row headerf2  d-flex justify-content-cente">
         <div class="col-12 hdf1 d-flex justify-content-center align-items-center">
            <p class="">ENTRENA DESDE CASA O CON NOSOTROS </p>
         </div>
         <div class="col-md-12 hdf2  d-flex justify-content-center ">
            <div class="row d-flex justify-content-center" >
                <div class="col-md-6  mt-4 d-flex justify-content-center ">
                    <ul class="infoh" >
                        <li class="">
                            <div class="row d-flex justify-content-start py-3 ">   
                                <div class="col-sm-12 col-md-4 d-flex py-2  justify-content-center ">
                                    
                                    <i class="fab fa-accessible-icon  svg-inline--fa fa-accessible-icon fa-w-5 fa-4x"></i>
                                   
                                </div>
                                <div class="col-sm-12 col-md-8 py-2 ">
                                    <p>Facilidad de acceso y equipos adaptables a cada usuario </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row d-flex justify-content-start py-3 ">   
                                <div class="col-sm-12 col-md-4 d-flex py-2  justify-content-center ">
                                    
                                    <i class="fab fa-accessible-icon  svg-inline--fa fa-accessible-icon fa-w-5 fa-4x"></i>
                                   
                                </div>
                                <div class="col-sm-12 col-md-8 py-2 ">
                                    <p>Facilidad de acceso y equipos adaptables a cada usuario </p>
                                </div>
                            </div>

                        </li>
                        <li>
                            <div class="row d-flex justify-content-start py-3 ">   
                                <div class="col-sm-12 col-md-4 d-flex py-2  justify-content-center ">
                                    
                                    <i class="fab fa-accessible-icon  svg-inline--fa fa-accessible-icon fa-w-5 fa-4x"></i>
                                   
                                </div>
                                <div class="col-sm-12 col-md-8 py-2 ">
                                    <p>Facilidad de acceso y equipos adaptables a cada usuario </p>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
                <div class="col-md-6  mt-4 d-flex justify-content-center ">
                    <ul class="infoh" >
                        <li class="">
                            <div class="row d-flex justify-content-start py-3 ">   
                                <div class="col-sm-12 col-md-4 d-flex py-2  justify-content-center ">
                                    
                                    <i class="fab fa-accessible-icon  svg-inline--fa fa-accessible-icon fa-w-5 fa-4x"></i>
                                   
                                </div>
                                <div class="col-sm-12 col-md-8 py-2 ">
                                    <p>Facilidad de acceso y equipos adaptables a cada usuario </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row d-flex justify-content-start py-3 ">   
                                <div class="col-sm-12 col-md-4 d-flex py-2  justify-content-center ">
                                    
                                    <i class="fab fa-accessible-icon  svg-inline--fa fa-accessible-icon fa-w-5 fa-4x"></i>
                                   
                                </div>
                                <div class="col-sm-12 col-md-8 py-2 ">
                                    <p>Facilidad de acceso y equipos adaptables a cada usuario </p>
                                </div>
                            </div>

                        </li>
                        <li>
                            <div class="row d-flex justify-content-start py-3 ">   
                                <div class="col-sm-12 col-md-4 d-flex py-2  justify-content-center ">
                                    
                                    <i class="fab fa-accessible-icon  svg-inline--fa fa-accessible-icon fa-w-5 fa-4x"></i>
                                   
                                </div>
                                <div class="col-sm-12 col-md-8 py-2 ">
                                    <p>Facilidad de acceso y equipos adaptables a cada usuario </p>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>

            </div>
         </div>

         <div class="col-12 hdf4 d-flex justify-content-center align-items-center">
            <h3>NUESTROS ENTRENAMIENTOS</h3>
         </div>

         <div class="col-md-12 align-items-center hdf3 my-3 d-flex justify-content-center ">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-6 pt-3">            
                    <div class="row row-cols-2 row-cols-md-4 g-2 g-md-3">
                        <div class="col">
                            <div class="row  row-cols-xs-1 row-cols-sm-1 row-cols-md-1 align-items-center">
                                <div class="col text-center">
                                    <img src="{{asset('images/corre.gif')}}" alt="">
                                </div>
                                <div class="col text-center">
                                    <h2>CORRER</h2>
                                </div>
                            </div>                   
                        </div>
                        <div class="col">
                            <div class="row row-cols-xs-1 row-cols-sm-1 row-cols-md-1  align-items-center ">
                                <div class="col text-center">
                                    <img src="{{asset('images/abdomen.gif')}}" alt="">
                                </div>
                                <div class="col text-center">
                                    <h2>ABDOMEN</h2>
                                </div>
                            </div>                   
                        </div>
                        <div class="col">
                            <div class="row row-cols-xs-1 row-cols-sm-1 row-cols-md-1  align-items-center ">
                                <div class="col text-center">
                                    <img src="{{asset('images/baile.gif')}}" alt="">
                                </div>
                                <div class="col text-center">
                                    <h2>BAILE</h2>
                                </div>
                            </div>                   
                        </div>
                        <div class="col">
                            <div class="row row-cols-xs-1 row-cols-sm-1 row-cols-md-1   d-flex justify-content-center  align-items-center">
                                <div class="col text-center">
                                    <img src="{{asset('images/remo.gif')}}" alt="">
                                </div>
                                <div class="col text-center">
                                    <h2>HIIT</h2>
                                </div>
                            </div>                   
                        </div>                            
                    </div>
                </div>    
                <div class="w-100"></div>
                <div class="col-md-6 pt-3">            
                    <div class="row row-cols-2 row-cols-md-4  g-2 g-md-3 ">
                        <div class="col">
                            <div class="row  row-cols-xs-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1 align-items-center">
                                <div class="col text-center">
                                    <img src="{{asset('images/ciclo.gif')}}" alt="">
                                </div>
                                <div class="col text-center">
                                    <h2>CICLISMO</h2>
                                </div>
                            </div>                   
                        </div>
                        <div class="col">
                            <div class="row row-cols-xs-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1 ">
                                <div class="col text-center">
                                    <img src="{{asset('images/estirar.gif')}}" alt="">
                                </div>
                                <div class="col text-center">
                                    <h2>ESTIRAMIENTO</h2>
                                </div>
                            </div>                   
                        </div>
                        <div class="col">
                            <div class="row row-cols-xs-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1 ">
                                <div class="col text-center">
                                    <img src="{{asset('images/fuerza.gif')}}" alt="">
                                </div>
                                <div class="col text-center">
                                    <h2>FUERZA</h2>
                                </div>
                            </div>                   
                        </div>
                        <div class="col">
                            <div class="row  row-cols-xs-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1 d-flex justify-content-center">
                                <div class="col text-center">
                                    <img src="{{asset('images/equilibrio.gif')}}" alt="">
                                </div>
                                <div class="col text-center">
                                    <h2>EQUILIBRIO</h2>
                                </div>
                            </div>                   
                        </div>           
                    </div>                
                </div>
            </div>
         </div>

    </div>
@endsection

@section('headf3')
<div class="container">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">ELIGE TU PLAN</h1>
  </div>

  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 shadow-sm">
      <div class="card-header bg-success">
        <h4 class="my-0 fw-normal ">GRATIS</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ día</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Acceso al centro TOCOTO más cercano y sus actividades online</li>
          <li>Alta en el espacio de usuario durante dos días</li>
          <li>No requiere de pago</li>
        </ul>
        <button type="button" class="w-100 btn btn-lg btn-outline-success">Empezar ahora</button>
      </div>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 fw-normal">MENSUAL</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">9,99 € <small class="text-muted">/ mes</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Acceso a TOCOTO ilimintado y todas sus actividades online</li>
          <li>Alta en el espacio de usuarios</li>
          <li>Todas tus actividadades a todas horas y donde quieras</li>
          <li>Facturación mensual</li>
        </ul>
        <button type="button" class="w-100 btn btn-lg btn-outline-warning text-dark">Empezar</button>
      </div>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 fw-normal">TRIMESTRAL</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">24,99 €<small class="text-muted">/ trimerstre</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
            <li>Acceso a TOCOTO ilimintado y todas sus actividades online</li>
          <li>Alta en el espacio de usuarios</li>
          <li>Todas tus actividadades a todas horas y donde quieras</li>
          <li>Facturación trimestral</li>
        </ul>
        <button type="button" class="w-100 btn btn-lg btn-outline-primary ">Empezar</button>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection

@section('headef4')
<div id="myCarousel" class="carousel slide py-4" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption ">
            <h1>¿ Dónde puedo ver las clases ?</h1>
            <ul>
                <li>Desde el odenador, tablet o mobil
                    <ol>
                        <li>En la web de TOCOTO, apartado de actidades</li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ol>
                </li>
                <li></li>
            </ul>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>


@endsection