<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   
    <!--logos fontawesome-->
    <script src="https://kit.fontawesome.com/1ed0f14753.js" crossorigin="anonymous"></script>

  
</head>
<body>
    <div id="app" >

        <nav class="navbar navbar-expand-md  navbar-dark bg-dark shadow-sm">
            <div class="container my-3">
                <a class="navbar-brand " href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Tocoto')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto text-center ">
                            <li class="nav-item active mx-4">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                        <li class="nav-item dropdown mx-4">
                        
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Centros 
                            </a>
                            <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                <div class="container">
                                  <div class="row d-md-table-row text-center" style="width:60%">
                                    <div class="dropdown-item d-table-cell col-sm-12 col-md-4">
                                      <ul>                                                                       
                                        <li class="text-white">Zaragoza</li>
                                        <li><hr class="dropdown-divider text-white"></li>
                                        <li><a class="dropdown-item  text-white" href="<?php echo e(url('/center')); ?>">Zaragoza </a></li>
                                      </ul>
                                    </div>
                                    <div class=" dropdown-item d-table-cell col-sm-12 col-md-4">
                                      <ul>                                                                       
                                        <li>Madrid</li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="<?php echo e(url('/center')); ?>">Coslada </a></li>
                                      </ul>
                                    </div>
                                    <div class="dropdown-item d-table-cell col-sm-12 col-md-4">
                                      <ul>                                                                       
                                        <li>Valencia</li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="<?php echo e(url('/center')); ?>">Valencia</a></li>
                                      </ul>
                                    </div>
                                    <div class="dropdown-item d-table-cell col-sm-12 col-md-4">
                                      <ul>                                                                       
                                        <li>Barcelona</li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="<?php echo e(url('/center')); ?>">Barcelona</a></li>
                                        <li><a class="dropdown-item" href="<?php echo e(url('/center')); ?>">Otro</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                            </div>
                           
                        </li>
                        <li class="nav-item dropdown ">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Horarios y Actividades
                              </a>
                              <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                  <div class="container">
                                    <div class="row d-md-table-row text-center" style="width:60%">
                                      <div class="dropdown-item  d-table-cell col-sm-12 col-md-4">
                                        <ul class="">                                                                       
                                          <li class="text-white dropdown-item ">Zaragoza</li>
                                          <li><hr class="dropdown-divider text-white"></li>
                                          <li><a class="dropdown-item text-white" href="<?php echo e(url('/center')); ?>">Zaragoza </a></li>
                                        </ul>
                                      </div>
                                      <div class=" dropdown-item d-table-cell col-sm-12 col-md-4">
                                        <ul>                                                                       
                                          <li>Madrid</li>
                                          <li><hr class="dropdown-divider"></li>
                                          <li><a class="dropdown-item" href="<?php echo e(url('/center')); ?>">Coslada </a></li>
                                        </ul>
                                      </div>
                                      <div class="dropdown-item d-table-cell col-sm-12 col-md-4">
                                        <ul>                                                                       
                                          <li>Valencia</li>
                                          <li><hr class="dropdown-divider"></li>
                                          <li><a class="dropdown-item" href="<?php echo e(url('/center')); ?>">Valencia</a></li>
                                        </ul>
                                      </div>
                                      <div class="dropdown-item d-table-cell col-sm-12 col-md-4">
                                        <ul>                                                                       
                                          <li>Barcelona</li>
                                          <li><hr class="dropdown-divider"></li>
                                          <li><a class="dropdown-item" href="<?php echo e(url('/center')); ?>">Barcelona</a></li>
                                          <li><a class="dropdown-item" href="<?php echo e(url('/center')); ?>">Otro</a></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link " href="<?php echo e(url('/blog')); ?>" >Blog</a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mL-auto ">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-warning my-2 mx-2 my-sm-1" href="<?php echo e(route('login')); ?>">Acceso Tocoto</a>
                                </li>
                            <?php endif; ?>
                            
                            <?php if(Route::has('register')): ?>    
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-warning my-2 mx-2 my-sm-1" href="<?php echo e(route('register')); ?>">Prueba 1 día</a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="<?php echo e(url('/profile')); ?>" class="dropdown-item">Perfil</a>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>



    </div>

    <main class="py-0 ">
             <?php echo $__env->yieldContent('content'); ?>
        <div class="container-fluid  ">
           <!--cabecera -->
            <?php echo $__env->yieldContent('headf'); ?>
            <!--contenido para el inicio-->
            <?php echo $__env->yieldContent('headf2'); ?>
            <!--contenido con informacion del centro-->
            <?php echo $__env->yieldContent('headinfo'); ?>
            <div class="row headerf3 ">
            <!--precios -->
            <?php echo $__env->yieldContent('headf3'); ?>
            </div>
            <div class="row headerf4 ">
            
            <?php echo $__env->yieldContent('headef4'); ?>
            </div>     

          
        </div>
         
    </main>

    <!-- Footer py-3-->
<footer class="page-footer font-small  mt-auto indi">

<!-- Footer Links -->
<div class="container">

  <!-- Grid row-->
  <div class="row text-center d-flex justify-content-center pt-5 mb-3">

    <!-- Grid column -->
    <div class="col-md-2 mb-3">
      <h6 class="text-uppercase font-weight-bold">
        <a href="#!">About us</a>
      </h6>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 mb-3">
      <h6 class="text-uppercase font-weight-bold">
        <a href="#!">Products</a>
      </h6>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 mb-3">
      <h6 class="text-uppercase font-weight-bold">
        <a href="#!">Awards</a>
      </h6>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 mb-3">
      <h6 class="text-uppercase font-weight-bold">
        <a href="#!">Help</a>
      </h6>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 mb-3">
      <h6 class="text-uppercase font-weight-bold">
        <a href="#!">Contact</a>
      </h6>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row-->
  <hr class="rgba-white-light" style="margin: 0 15%;">


  <!-- Grid row-->
  <hr class="clearfix d-md-none rgba-white-light " style="margin: 10% 15% 5%;">

  <!-- Grid row social network-->
  <div class="row pb-3 pt-5">

    <!-- Grid column -->
    <div class="col-md-12 ">

      <div class="mb-5 d-flex justify-content-center ">

        <!-- Facebook -->
        <a class="fb-ic ">
          <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
          <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
        </a>
        <!-- Google +-->
        <a class="gplus-ic">
          <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
        </a>
        <!--Linkedin -->
        <a class="li-ic">
          <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic">
          <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
        </a>
        <!--Pinterest-->
        <a class="pin-ic">
          <i class="fab fa-pinterest fa-lg white-text"> </i>
        </a>

      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row-->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://desertys.com/"> desertys.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

<!--cdn bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH /home/ludiscover/laravel/tocotolog/tocotolog2/resources/views/layouts/app.blade.php ENDPATH**/ ?>