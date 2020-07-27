<!DOCTYPE html>
<html lang="en">

<head>
    <title>Internship</title>
    <!-- Meta Tags -->

   
    <meta name="viewport" content="width=device-width, initial-scle=1">
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

    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/pignose.calender.css')}}" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="{{asset('admin/css/style4.css')}}">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="{{asset('admin/css/fontawesome-all.css')}}" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
 

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


    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="index.html">Attractive Internships</a>
                </h1>
                <span>M</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">
                        <i class="fas fa-th-large"></i>
                        About Internship
                    </a>
                </li>
                <li> 
                        

                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        Courses Available
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Web development</a>
                        </li>
                        <li>
                            <a href="#">Android development</a>
                        </li>
                        <li>
                            <a href="#">Embedded system</a>
                        </li>
                        <li>
                            <a href="#">Iot</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                   
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
                            <a href="500.html">500</a>
                        </li>
                        <li>
                            <a href="blank.html">Blank</a>
                        </li>
                    </ul>
                </li>
                <li>
                    
                </li>
                <li>
                    
                    
                </li>
                    
            
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->  
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    <form action="#" method="post" class="form-inline mx-auto search-form">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-bell"></i>
                                <span class="badge">4</span>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-1">
                                
                                
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-spinner"></i>
                            </a>
                            
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        
                                    </div>
                                    
                                
                        </li>
                    </ul>
                </div>
                    
                   
                        

                   
                    
        </nav>

        <!-- Page Content Holder -->
        
                    
                   
           
 <center>   
  
<div class="container">
  
  <div class="card" style="width:500px">
    <center>
    <div class="card-body">
      <h2 class="card-title"><b>Register here for internship</b></h2>
      <p class="card-text">
          <form method="post" action="/addqry2" style="width: 55%;">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <label>Name</label>
      <input type="text" name="nm" class="form-control"><br>
      <label>College name</label>
      <input type="text" name="cnm" class="form-control"><br>
      <label>Select your course</label>
     <input list="course" name="course" class="form-control">
  <datalist id="course">
    <option value="Web development">
    <option value="App development">
    <option value="Embedded system">
    <option value="Mobile application">
  </datalist>
  <br><br>
      <label>Email</label>
      <input type="email" name="em" class="form-control"><br>
      <label>Contact No.</label>
      <input type="number" name="cn" class="form-control"><br>
       
       
       <input type="submit" name="add" class="btn btn-info" value="Submit">
       </form>
</center>
      </p>
    </div>
  </div>


   </center>         
            
       


    <!-- Required common Js -->
    <script src="{{asset('admin/js/jquery-2.2.3.min.js')}}"></script>
    <!-- //Required common Js -->
    
    <!-- loading-gif Js -->
    <script src="{{asset('admin/js/modernizr.js')}}"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    
    
    
    
    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>