<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="PBA icon" type="image/png" href="{{asset('assets/site-images/logo.jpg')}}" />
  <title>PBA Éditions</title>

  <link rel="stylesheet" href="{{ asset('assets/ceco-assets/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts1/bootstrap.min.css+font-awesome.min.css+elegant-icons.css+flaticon.css+magnific-popup.css+nice-select.css+owl.carousel.min.css+slicknav.min.css+style.css.pagespeed.cc.4-qmNPvoIv.css" type="text/css" />
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->



  <!--Rev Slider Start-->
  <script src="{{ mix('js/app.js') }} " type="text/javascript" defer></script>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">


  
  
</head>
<body id="app">
  <div class="offcanvas-menu-overlay"></div>
  <div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
      <a href="/"><img src="assets/site-images/logo.jpg" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <!--<div class="header__option__num">+229 61-21-81-99</div>-->
    <a class="header__option__num" href="tel:61218199"> +229 96-68-21-29 </a>
  </div>
  <header class="header header_shop">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <div class="header__logo">
            <a href="/"><img style="height: 65px;" src="assets/site-images/logo.jpg" alt=""></a>
          </div>
        </div>
        <div class="col-lg-10">
          <div class="header__options__nav">
            <nav class="header__menu mobile-menu fixed">
              <ul>
                <li class=""><a href="/">Home</a></li>

                <li class="  "><a href="/about">About</a></li>
                <li class=" "><a href="/products">Products</a></li>
                <li class=" "><a href="/aids">Aids</a></li>
                <li class=" "><a href="/contacts">Contact</a></li>
                <li class="  "><a href="#">A Propos </a>
                  <ul class="dropdown ">
                    <li><router-link to="/about/vision">Notre Vision</router-link></li>
                    <li><router-link to="/about">Notre histoire</router-link></li>
                    <li><router-link to="/about/what-we-do">Ce que nous faisons</router-link></li>
                    <li><router-link to="/about/team">Notre équipe</router-link></li>
                    <li><router-link to="/partners">Nos Partenaires</router-link></li>
                  </ul>
                </li>

              </ul>
            </nav>
            <a class="header__option__num" href="tel:96682129"> +229 96-68-21-29 </a>
          </div>
        </div>
      </div>
      <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
  </header>

  <!-- <router-view/> -->

  <div>


  </div>


  

  <!-- Vendor JS Files -->
  <script src="{{asset('new-assets/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('new-assets/assets/js/main.js')}}"></script>





  
  <script src="{{asset('js1/jquery3.js')}}"></script>
  <!-- <script src="{{asset('js1/bootstraper.js')}}"></script> -->
  <!-- <script>
    eval(mod_pagespeed_DmQD$5IEgw);
  </script>
  <script>
    eval(mod_pagespeed_TlOTJt5GO4);
  </script>
  <script>
    eval(mod_pagespeed_6mbaYNizub);
  </script> -->
  <script src="{{asset('js1/jquery.js')}}"></script>
  <script>
    eval(mod_pagespeed_XKHMUluuWT);
  </script>
  <!-- <script>
    eval(mod_pagespeed_G0bx_F$Ho$);
  </script> -->
  <script src="{{asset('js1/main.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>









</html>