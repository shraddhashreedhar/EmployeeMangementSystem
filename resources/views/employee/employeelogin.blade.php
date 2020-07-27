s
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee login</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="{{asset('admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body background="fifth.jpg">

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

    <div class="bg-page py-6">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Employee Login</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form action="/employeelogin" method="post">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email" required="" name="em">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" required="" name="pw">
                    </div>
                    
                    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Login</button>
                </form>
                
            </div>

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> NPS Limited </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src="{{asset('admin/js/bootstrap.js')}}"></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>