<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shaon Traders Ltd ||@yield('title')</title>
  <link rel="shortcut icon" href="frontend/assets/images/logo.jpeg" type="image/x-icon" sizes="16*16">
  <link rel="apple-touch-icon" href="frontend/assets/images/logo.jpeg">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- ----------style.css---------- -->
  <link rel="stylesheet" href="frontend/assets/style.css">
  <!-- --------font-awsome-------- -->
  <script src="https://kit.fontawesome.com/fceb99dda2.js" crossorigin="anonymous"></script>
  <!-- --------------------carusel-------------------- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
 </head>
 <body>
  <div id="loader"></div>
  <!-- ------------main-header-------- -->
  <header>
   <nav class="navbar navbar-expand-lg navbar-light header">
    <div class="container">
     <a class="navbar-brand" href="{{url('/')}}">
      <img class="logo" src="{{asset('frontend/assets/images/logo.png')}}" alt="" >
     </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
       <li class="nav-item">
        <a class="nav-link " aria-current="page" href="{{url('/')}}">HOME</a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="{{url('/about/')}}">ABOUT</a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="{{url('/services/')}}">SERIVCES</a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="{{url('/contact/')}}">CONTACT</a>
       </li>
       <li class="nav-item">
        <a class="nav-link login-btn text-white" href="#">LOGIN</a>
       </li>
      </ul>
      <div class="d-flex">
       <div>
        <a href="https://twitter.com/" target="_blank">
         <i class="fab fa-twitter"></i>
        </a>
       </div>
       <div class="mx-3">
        <a href="https://www.facebook.com/" target="_blank">
         <i class="fab fa-facebook-f"></i>
        </a>
       </div>
       <div class="me-3">
        <a href="https://www.linkedin.com/" target="_blank">
         <i class="fab fa-linkedin-in"></i>
        </a>
       </div>
       <div>
        <a href="https://www.instagram.com/" target="_blank">
         <i class="fab fa-instagram"></i>
        </a>
       </div>
      </div>
     </div>
    </div>
   </nav>
  </header>