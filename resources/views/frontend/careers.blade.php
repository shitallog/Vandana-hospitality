
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VANDANA HOSPITALITY | Career</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{ asset('Career/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Career/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Career/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Career/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Career/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Career/css/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Career/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Career/css/testimunal.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Career/css/style_new.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Career/css/style_n.css') }}" type="text/css">

   
   <style>
.section-container {
    overflow: hidden; /* Hides overflow content */
    padding: 20px; /* Optional: Add padding for better appearance */
}

   /* General styling for the list items */
.footer__widget ul li {
    color: #ffffff; /* Initial text color */
    transition: color 0.3s ease, background-color 0.3s ease; /* Smooth transition */
}

/* Styling for the anchor tags */
.footer__widget ul li a {
    color: #ffffff; /* Initial text color */
    text-decoration: none; /* Remove underline */
    display: block; /* Ensure the entire list item is clickable */
    padding: 5px 0; /* Add some padding for better click area */
    transition: color 0.3s ease, background-color 0.3s ease; /* Smooth transition */
}

/* Hover effect for the list items */
.footer__widget ul li:hover a {
    color: #12c5c5; /* Text color on hover */
     /* Background color on hover */
}
       .testimonial-section {
           
            padding: 50px 20px;
        }
        .testimonial-heading {
            font-size: 2.5em;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }
        .testimonial-content {
            font-size: 1.2em;
            color: #555;
            font-style: italic;
        }
        .highlight {
            color: #12c5c5;";
            font-weight: bold;
        }
    .carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel-item {
	color: #999;
	font-size: 14px;
    text-align: center;
	overflow: hidden;
    min-height: 290px;
}
.carousel .item .img-box {
	width: 135px;
	height: 135px;
	margin: 0 auto;
	padding: 5px;
	border: 1px solid #ddd;
	border-radius: 50%;
}
.carousel .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {
	padding: 30px 0 10px;
}
.carousel .overview {	
	font-style: italic;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #db584e;
}
.carousel .carousel-control {
	width: 40px;
    height: 40px;
    margin-top: -20px;
    top: 50%;
	background: none;
}
.carousel-control i {
    font-size: 68px;
	line-height: 42px;
    position: absolute;
    display: inline-block;
	color: rgba(0, 0, 0, 0.8);
    text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
}
.carousel .carousel-indicators {
	bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 1px 3px;
	border-radius: 50%;
}
.carousel-indicators li {	
	background: #999;
	border-color: transparent;
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.carousel-indicators li.active {	
	background: #555;		
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
    /* Table styling */
        .table {
            width: 100%;
            border-collapse: collapse;
            font-size:15px;
        }

        /* Table header styling */
        .job-info-table {
            background-color: #f4f4f4;
        }

        /* Job image styling */
        .job-info-img {
            width: 400px; /* Adjust size as needed */
            height: 300px; /* Adjust size as needed */
            border-radius: 50%;
        }

        /* Job detail column styling */
        .job-info-detail {
            padding: 20px;
        }

        /* Job card styling */
        .job-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #fff;
            transition: all 0.3s ease;
        }

        /* Hover effect for job card */
        .job-card:hover {
            background-color: #f1f1f1;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        /* Button styling */
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
     .header {
    position: fixed;
    -webkit-box-shadow: 0px 1px 20px 0px rgba(0, 0, 0, 0.10);
    -moz-box-shadow: 0px 1px 20px 0px rgba(0, 0, 0, 0.10);
    -o-box-shadow: 0px 1px 20px 0px rgba(0, 0, 0, 0.10);
    -ms-box-shadow: 0px 1px 20px 0px rgba(0, 0, 0, 0.10);
    box-shadow: 0px 1px 20px 0px rgba(0, 0, 0, 0.10);
    z-index: 1000;
    width: 100%;
    height: 20%;
    top: 0;
    left: 0;
    z-index: 9;
    padding: 30px 0 0;
    background: transparent;
    transition: background-color 0.3s;
    color:white;
}

.header.scrolled {
    background-color: white;
    color: black;
}

.header.scrolled .header__menu ul li a {
    color: black;
}

.header.scrolled .header__logo img {
    filter: invert(1);
}

.header__menu ul li .dropdown li {
   
   width: 245px;
}


/* Button styles */
.btn {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 10px;
    background-color: #12c5c5;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0e9a9a;
}


/* Button styles */
.btn {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 10px;
    background-color: #12c5c5;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0e9a9a;
}

.breadcrumb-option {
    position: relative; /* Allows absolute positioning of the video */
    overflow: hidden; /* Ensures no overflow of video */
}

#background-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the video covers the entire area */
    z-index: -1; /* Puts the video behind other content */
}

.breadcrumb__text {
    position: relative; /* Ensures the text is on top of the video */
    z-index: 1; /* Keeps the text above the video */
    color: white; /* Optional: Sets text color for better readability */
}

.breadcrumb__text h2 {
   
   margin-top: 75px;
}

/* Style the list items */
ul.dropdown li {
    border: 2px solid transparent; /* Initial border color */
    transition: border-color 0.3s ease, background-color 0.3s ease; /* Smooth transition */
}

/* Style the anchor tags */
ul.dropdown li a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: #000; /* Text color */
  
}

/* Hover effect for list items */
ul.dropdown li:hover {
    border-color: #12c5c5; /* Border color on hover */
}


</style>


</head>
<body>
    <!-- Page Preloader -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="#"><img src="{{ asset('Career/img/logo.png') }}" alt="Logo"></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
          
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header" style="height:90px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo" style="text-align: center;">
                        <a href="#"><img class="img-fluid" src="{{ asset('Career/img/logo/logo-1__3.png') }}" alt="Logo" style="width:50px;"></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <nav class="header__menu mobile-menu">
                    <ul>
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li><a href="{{ route('frontend.about') }}">About us</a></li>
                            
                            <li><a href="#">services</a>
                                <ul class="dropdown" style="width:250px;">
                                    <li><a href="{{ route('frontend.hospital_housekeeping') }}">Hospital housekeeping</a></li>
									
                                    <li><a href="{{ route('frontend.patient-support-services') }}">patient support services</a></li>
                                    <li><a href="{{ route('frontend.corporate-housekeeping') }}">corporate housekeeping</a></li>
                                    <li><a href="{{ route('frontend.general-maintenance-services') }}">general maintenance  services </a></li>
                                    <li><a href="{{ route('frontend.guest-house-operation-scope') }}">guest house operation scope</a></li>
                                    <li><a href="{{ route('frontend.spring-cleaning-on-saturdays') }}">spring cleaning on saturdays
                                    </a></li>
                                    <li><a href="{{ route('frontend.services-offered') }}">Services-Offered
                                    </a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="{{ route('frontend.careers') }}">Career </a></li>
                            <!-- <li><a href="Industry.html">Industry</a></li>!-->
                           <li>  <a href="{{ route('frontend.blog') }}">Gallery</a></li>
                            <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <div class="header__widget">
                        <!-- Uncomment if you want to add contact info in the header
                        <span>Call us for any questions</span>
                        <h4>+90 82030277</h4>
                        -->
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->




<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-option spad set-bg" style="height:500px;" data-setbg="{{ asset('Career/img/slider/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Career</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ route('welcome') }}">Home</a>
                        <span>Career</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->


  <!-- Contact Section Begin -->
    <section class="contact spad">
        
        <div class="container">
            <h1 class="text-center">HOSPITALITY CAREER OPPORTUNITIES</h1>
    <p class="text-center">We are enthusiastic and committed to offering the best in hospitality management services throughout every segment of our business</p>
            <div class="row">

                <div class="col-lg-12 text-left job-post">
                    
                      <div class="job-info-container">
                    
                      <table class="table">
        @foreach($jobs as $job)
            <thead class="job-info-table pb-5">
                <tr>
                    <th scope="col">
                        <img src="{{ asset('Career/img/job/OIP-2.jpg') }}" alt="Job Image" class="">
                    </th>
                    <th scope="col" class="job-info-detail">
                        <div class="job-listings">
                            <div class="job-card">
                                <h3>{{ $job->title }}</h3>
                                <p><strong>Qualification:</strong> {{ $job->qualification }}</p>
                                <p><strong>Experience:</strong> {{ $job->experience }}</p>
                                <p><strong>Description:</strong> {{ $job->description }}</p>
                                <a href="mailto:support@technobizzar.com?subject=Application for {{ $job->title }}&body=Dear Hiring Team,%0D%0A%0D%0AI am interested in applying for the {{ $job->title }} position at Technobizzar. Please find my application attached.%0D%0A%0D%0AThank you.%0D%0A%0D%0ABest regards,%0D%0A[Your Name]" class="btn btn-primary">Apply</a>
                            </div>
                        </div>
                    </th>
                </tr>
            </thead>
        @endforeach
    </table>
         </div>             
</div>
            
                    
              
              
    
    
       
      
              
              
              
              
              
              
              
              
              
              
                </div>
                

                        </div>
                    
                </div>
       
      
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer text-white set-bg" data-setbg="{{ asset('Career/img/slider/s-8.jpg') }}">
        <div class="container">
           
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img class="img-fluid" src="{{ asset('Career/img/logo/logo-1__3.png') }}" alt=""></a>
                            <hr>
                        </div>
                       <p>Bhange Niwas, 1st Floor, Plot No. F/26/31, SEC -12 Kharghar, Navi Mumbai – 410 210 </p>
                        <p>Email:vandanahospitality@gmail.com</br>
                      MOB:+91 9821174810
                             </p>
                        <div class="footer__social text-white">
                            <a  href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Company</h6>
                        <hr>
                        <ul class="text-white">
                            <li style ="color:#ffffff;"  ><a href="{{ route('welcome') }}">Home</a></li>
                            <li style ="color:#ffffff;"><a href="{{ route('frontend.contact') }}">Contact</a></li>
                            <li style ="color:#ffffff;"><a href="{{ route('frontend.about') }}">About</a></li>
                            <li style ="color:#ffffff;"><a href="{{ route('frontend.blog') }}">Gallery</a></li>
                            <li style ="color:#ffffff;"><a href="{{ route('frontend.careers') }}">Career</a></li>
                        
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Services</h6>
                        <hr>
                        <ul class="text-white">
                            <li style ="color:#ffffff;"><a href="{{ route('frontend.patient-support-services') }}">Hospital housekeeping</a></li>
                            <li style ="color:#ffffff;"><a href="{{ route('frontend.corporate-housekeeping') }}">patient support services</a></li>
                            <li style ="color:#ffffff;"><a href="{{ route('frontend.general-maintenance-services') }}">corporate housekeeping</a></li>
                            <li style ="color:#ffffff;"><a href="{{ route('frontend.guest-house-operation-scope') }}">general maintenance  services</a></li>
                        
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__address">
                        <h6 style ="color:#ffffff;">Get In Touch</h6>
                        <hr> 
                       <p>Bhange Niwas, 1st Floor, Plot No. F/26/31, SEC -12 Kharghar, Navi Mumbai – 410 210 </p>
                        <p>Email:vandanahospitality@gmail.com</br>
                      MOB:+91 9821174810
                             </p>
                       
                    </div>
                </div>
            </div>
            <div class="">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="copyright__text">
                            <p style ="color:#ffffff;">©Copyright  <script>
                                document.write(new Date().getFullYear()); 
                            </script>  . all rights reserved to vandana hospitality .
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                   <div style ="color:white;" class="copyright__widget">
                     
                        <p style ="color:#ffffff;">Website Design by Technobizzar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    window.addEventListener('scroll', function() {
        var header = document.querySelector('.header');
        header.classList.toggle('scrolled', window.scrollY > 50);
    });
</script>
<!-- Js Plugins -->
<script src="{{ asset('Career/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('Career/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Career/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('Career/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('Career/js/slick.min.js') }}"></script>
<script src="{{ asset('Career/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('Career/js/script-new.js') }}"></script>
<script src="{{ asset('Career/js/main.js') }}"></script>
</body>
</html>