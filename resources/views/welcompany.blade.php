<<!DOCTYPE html>
<html>
<head>
    <title>COMPANY</title>

    <link rel="stylesheet" type="text/css" href="{{asset('frontside/css/bootstrap.css') }}">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 90%;
  }
  </style>
   
</head>


<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
  
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#"><img src="logo.png" alt="Logo" style="width:40px;"> LIMITED</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{url('/')}}">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/about')}}">ABOUT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/services')}}">SERVICES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/contact')}}">CONTACT US</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/cemployee')}}">EMPLOYEE LOGIN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/intern')}}">INTERNSHIP</a>
    </li>
  </ul>
</nav>



<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="sixth.jpg">
      <div class="carousel-caption">
        <center>
        <h1 style="color:black;"><b>WELCOME TO POSSIBLE</b></h1>
        <p style="color:black;"><font size="5"><b>Discover how you embrace innovation to drive new value for your organization. Explore new insights. See tangible outcomes.</font></b></p></center><br><br><br><br><br><br><br><br>
      </div>   
    </div>

    <div class="carousel-item">
      <img src="first.jpg">
      <div class="carousel-caption">
        <h1 style="color:black;"><b>EXPERTISE IN ACTION</b></h1>
        <p style="color:black;"><font size="5"><b>New isn’t on its way. We’re applying it now. See how we bring the new to life with our clients in every industry, in every country, each and every day.</font></b></p><br><br><br><br><br><br><br>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="third.jpg">
      <div class="carousel-caption">
        <h1 style="color:black;"><b>GREAT PARTNERSHIP LEADS TO GREAT OUTCOMES</b></h1>
        <p style="color:black;"><font size="5"><b>NPS Services is partnering with the world’s leading companies to reinvent their business through technology.</font></b></p><br><br><br><br><br><br><br>
      </div>   
    </div>

  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


</body>
</html>