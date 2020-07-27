<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Dashboard</title>
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
                    <a href="index.html">NPS Limited</a>
                </h1>
                <span>M</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="employeeindex">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
                <li> 
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        Leave Application
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="/leave">Apply for leave</a>
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
                    <a href="detailsview">
                        <i class="far fa-envelope"></i>
                        View details
                        <span class="badge badge-secondary float-md-right bg-danger"></span>
                    </a>
                </li>
                <li>
                    
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forgot.html">Forgot password</a>
                        </li>
                    </ul>
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


                                    <div class="profile-r align-self-center">
                                        
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/a1logout">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                        <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                            <div class="s-l">
                                <h5>Projects</h5>
                            
                            </div>
                            <div class="s-r">
                                <h6>340
                                    <i class="far fa-edit"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                            <div class="s-l">
                                <h5>Clients</h5>
                                
                            </div>
                            <div class="s-r">
                                <h6>250
                                    <i class="far fa-smile"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                            <div class="s-l">
                                <h5>Tasks</h5>
                                
                            </div>
                            <div class="s-r">
                                <h6>232
                                    <i class="fas fa-tasks"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
                            <div class="s-l">
                                <h5>Employees</h5>
                                
                            </div>
                            <div class="s-r">
                                <h6>190
                                    <i class="fas fa-users"></i>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <!--// Stats -->
                    <!-- Pie-chart -->
                    <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Pie Chart</h4>
                        <div id="chartdiv"></div>
                    </div>
                    <!--// Pie-chart -->
                </div>
            </div>
            

            

            <!--// three-grids -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Calender -->
                    <div class="outer-w3-agile col-xl mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Multi range Calender</h4>
                        <div class="multi-select-calender"></div>
                        <div class="box"></div>
                    </div>
                    <!--// Calender -->
                    <!-- Profile -->
                    <div class="outer-w3-agile col-xl mt-3 mx-xl-3 p-xl-0 px-md-5">
                        <div class="header">
                            <div class="text">
                                <img src="images/profile.jpg" class="img-fluid rounded-circle" alt="Responsive image">
                                <h2>Matthew Scott</h2>
                                <a href="mailto:info@example.com">
                                    <p>@Lorem ipsum</p>
                                </a>
                            </div>
                        </div>
                        <div class="container-flud">
                            <div class="followers row">
                                <div class="f-left col">
                                    <a href="#">
                                        <i class="far fa-comments"></i>
                                    </a>
                                </div>
                                <div class="f-left col border-left border-right">
                                    <a href="#">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                                <div class="f-left col">
                                    <a href="#">
                                        <i class="far fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                       
                                    </li>
                                </ul>
                            </li>
                            <li class="menu">
                                <ul>
                                    <li class="button">
                                        <a href="#">
                                            <i class="fas fa-user"></i> Profile</a>
                                    </li>
                                    <li class="dropdown">
                                        <ul class="icon-navigation">
                                            <li>
                                                <a href="#">Change your pic</a>
                                            </li>
                                            <li>
                                                <a href="#">Change your username</a>
                                            </li>
                                            <li>
                                                <a href="#">About us</a>
                                            </li>
                                            <li>
                                                <a href="#">Contact me</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--// Profile -->
                  
                </div>
            </div>
            <!--// Three-grids -->
            <!-- Countdown -->
            <div class="outer-w3-agile mt-3 outer-w3-agile-bg">
                <h4 class="tittle-w3-agileits mb-4 text-white">Countdown Timer</h4>
                <div class="simply-countdown-custom" id="simply-countdown-custom"></div>
            </div>
            <!--// Countdown -->
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/">NPS Limited</a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


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

    
    
    
    <!-- Calender -->
    <script src="js/moment.min.js"></script>
    <script src="js/pignose.calender.js"></script>
    <script>
        //<![CDATA[
        $(function () {
            $('.calender').pignoseCalender({
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>
    </script>
    <!--// Calender -->

    <!-- profile-widget-dropdown js-->
    <script src="js/script.js"></script>
    <!--// profile-widget-dropdown js-->

    <!-- Count-down -->
    <script src="js/simplyCountdown.js"></script>
    <link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->

    <!-- pie-chart -->
    <script src='js/amcharts.js'></script>
    <script>
        var chart;
        var legend;

        var chartData = [{
                country: "Lithuania",
                value: 260
            },
            {
                country: "Ireland",
                value: 201
            },
            {
                country: "Germany",
                value: 65
            },
            {
                country: "Australia",
                value: 39
            },
            {
                country: "UK",
                value: 19
            },
            {
                country: "Latvia",
                value: 10
            }
        ];

        AmCharts.ready(function () {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "country";
            chart.valueField = "value";
            chart.outlineColor = "";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            // this makes the chart 3D
            chart.depth3D = 20;
            chart.angle = 30;

            // WRITE
            chart.write("chartdiv");
        });
    </script>
    <!--// pie-chart -->

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