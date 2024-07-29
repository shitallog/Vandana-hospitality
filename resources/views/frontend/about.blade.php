<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VANDANA HOSPITALITY | About</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('Career/css/style-2.css') }}" type="text/css">

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
    <link rel="stylesheet" href="{{ asset('Career/css/imp.css') }}" type="text/css">

   
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

.header__menu ul li .dropdown li {
   
    width: 250px;
}
/* Style the dropdown menu */
ul.dropdown {
    list-style: none;
    padding: 0;
    margin: 0;
}

/* Style the list items */
ul.dropdown li {
    border: 2px solid transparent; /* Initial border color */
    transition: border-color 0.3s ease, background-color 0.3s ease; /* Smooth transition */
}

/* Style the anchor tags */
ul.dropdown li a {
    display: block;
   
    text-decoration: none;
    color: #000; /* Text color */
   /* background-color: #f9f9f9; /* Background color */
}

/* Hover effect for list items */
ul.dropdown li:hover {
    border-color: #12c5c5; /* Border color on hover */
}

/* Hover effect for anchor tags */
ul.dropdown li:hover a {
    background-color: solid rgb(167,217,222); /* Background color on hover */
    color: #fff; /* Text color on hover */
}

/* Job listings styles */
.job-listings {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 20px;
}

/* Job card styles */
.job-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: calc(90% - 80px);
    box-sizing: border-box;
    transition: transform 0.3s ease;
}

.job-card:hover {
    transform: translateY(-10px);
}

.job-card h3 {
    font-size: 24px;
    color: #12c5c5;
    margin-bottom: 10px;
}

.job-card p {
    font-size: 16px;
    color: #333;
    margin: 5px 0;
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
.breadcrumb__text h2 {
   
    margin-top: 75px;
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
            <a href="#"><img src="{{ asset('Career/img/logo/logo-1__3.png') }}" alt="Logo"></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
          
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header" style="position: fixed; ; height: 19%;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo" style="text-align: center;">
                        <a href="#"><img  style="width:75px;" class="img-fluid" src="{{asset('Career/img/logo/logo-1__3.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li class="active"><a href="{{ route('frontend.about') }}">About us</a></li>
                            
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
                            <li><a href="{{ route('frontend.careers') }}">Career </a></li>
                            <!-- <li><a href="Industry.html">Industry</a></li>
                             <li><a href="blog.html">Blogs</a></li> -->
                             <li>  <a href="{{ route('frontend.blog') }}">Gallery</a></li>
                            <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                        </ul>
                    </nav>
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
                    <h2>About</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ route('welcome') }}">Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Breadcrumb Section End -->

  <!-- Assignments Section Begin -->
  
  
 <!-- About Section Begin -->
 <section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="section-title">
                        <span style ="color:#12c5c5;">About</span>
                        <h2>hospital management
                            professional</h2>
                    </div>
                    <div class="about__para__text">
                        <p>The group's corporate office in Mumbai is located at Kharghar and the HRD headquarters at Navi Mumbai. The organization is managed by a tram of qualified management professional with over a years of combined with hotel and establishments in India.</p>
                        <p>Our current assignments include the following services provided at corporate premises ranging from entire office building and complexes to medium small offices located In Aurangabad, Mumbai, Navi Mumbai, Pune, Kolhapur, Nasik, Sangli.</p>
                    </div>
                    <a href="contact.html" class="primary-btn normal-btn">Contact Us »</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__pic">
                    <div class="">
                        <img src="{{ asset('Career/img/job/home-faq-img.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Project Section Begin -->
  <!-- Testimonial Section End -->
  <section class="facilities-appointment-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="facilities-content-box">
                    <div class="sec-title">
                        <h1>Our Facilities</h1>
                        <span class="border"></span>
                    </div>
                    <!--Start facilities carousel-->
                    <div class="facilities-carousel owl-carousel owl-theme owl-loaded">
                       
                        <!------Start single facilities item------->
                        
                        <!-------End single facilities item------>
                        
                        <!------Start single facilities item------->
                        
                        <!-------End single facilities item------>
                        
                     
                        
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2400px, 0px, 0px); transition: all 0.7s ease 0s; width: 4800px;"><div class="owl-item cloned" style="width: 770px; margin-right: 30px;"><div class="single-facilities-item">
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <img src="{{ asset('Career/img/services/services-1.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>General Maintenance</h3>
                                            <p>How all this mistaken idea denoucing pleasure and praisings pain was born complete account expound.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <img src="{{ asset('Career/img/services/services-1.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Horticulture & Landscaping</h3>
                                            <p>The Dietitian plans the diet based on the therapeutic needs of the patient, Local specialties, Continental.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <img src="{{ asset('Career/img/services/services-1.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>External Cleansing of Glass Façade</h3>
                                            <p>Special nurse services can be arranged through Nursing , master of human happiness.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <img src="{{ asset('Career/img/services/services-1.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>General Maintenance</h3>
                                            <p>There is a temple of Goddess Krishna mariamman in the hospital premises, a Namaz room &amp; Prayer cell</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 770px; margin-right: 30px;"><div class="single-facilities-item">
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <img src="{{ asset('Career/img/services/services-1.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Horticulture & Landscaping</h3>
                                            <p>How all this mistaken idea denoucing pleasure and praisings pain was born complete account expound.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <img src="{{ asset('Career/img/services/services-1.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>External Cleansing of Glass Façade</h3>
                                            <p>The Dietitian plans the diet based on the therapeutic needs of the patient, Local specialties, Continental.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <img src="{{ asset('Career/img/services/services-1.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Horticulture & Landscaping</h3>
                                            <p>Special nurse services can be arranged through Nursing , master of human happiness.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <img src="{{ asset('Career/img/services/services-1.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>General Maintenance</h3>
                                            <p>There is a temple of Goddess Krishna mariamman in the hospital premises, a Namaz room &amp; Prayer cell</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div></div><div class="owl-item" style="width: 770px; margin-right: 30px;"><div class="single-facilities-item">
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <img src="{{ asset('Career/img/services/services-1.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Horticulture & Landscaping</h3>
                                            <p>How all this mistaken idea denoucing pleasure and praisings pain was born complete account expound.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>External Cleansing of Glass Façade</h3>
                                            <p>The Dietitian plans the diet based on the therapeutic needs of the patient, Local specialties, Continental.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Shampooing of Carpet & Upholstery</h3>
                                            <p>Special nurse services can be arranged through Nursing , master of human happiness.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Plashing & Maintenance Of Hard Floors</h3>
                                            <p>There is a temple of Goddess Krishna mariamman in the hospital premises, a Namaz room &amp; Prayer cell</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div></div><div class="owl-item active" style="width: 770px; margin-right: 30px;"><div class="single-facilities-item">
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Security Services</h3>
                                            <p>1. Manned Guarding:</strong> Our professional security guards are trained to provide round-the-clock protection for your premises. </p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Kitchen Stewarding</h3>
                                            <p>The Dietitian plans the diet based on the therapeutic needs of the patient, Local specialties, Continental.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Special Nurses</h3>
                                            <p>1. Critical Care Nursing:</strong> Our critical care nurses are trained to provide advanced care for patients with life-threatening conditions.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Gartering </h3>
                                            <p> Chair Covering and Skirting:</strong> We provide chair covering and skirting services to enhance the overall appearance of your dining area. </p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 770px; margin-right: 30px;"><div class="single-facilities-item">
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Kitchen Stewarding</h3>
                                            <p>1. Dishwashing and Sanitation:</strong> Our team ensures that all dishes, utensils, and kitchen equipment are meticulously cleaned and sanitized. We use state-of-the-art dishwashing machines and eco-friendly cleaning products to maintain hygiene and comply with health and safety regulations.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Horticultrure7 Landscaping </h3>
                                            <p>The Dietitian plans the diet based on the therapeutic needs of the patient, Local specialties, Continental.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Shampooing Of Carpet& Upholstery</h3>
                                            <p>Special nurse services can be arranged through Nursing , master of human happiness.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>General Maintenance</h3>
                                            <p>There is a temple of Goddess Krishna mariamman in the hospital premises, a Namaz room &amp; Prayer cell</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 770px; margin-right: 30px;"><div class="single-facilities-item">
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Shampooing Of Carpet& Upholstery </h3>
                                            <p>How all this mistaken idea denoucing pleasure and praisings pain was born complete account expound.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Plashing & Maintenance Of Hard Floors</h3>
                                            <p>The Dietitian plans the diet based on the therapeutic needs of the patient, Local specialties, Continental.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>General Maintenance</h3>
                                            <p>Special nurse services can be arranged through Nursing , master of human happiness.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-church"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Horticultrure7 Landscaping </h3>
                                            <p>There is a temple of Goddess Krishna mariamman in the hospital premises, a Namaz room &amp; Prayer cell</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><span class="fa fa-angle-left"></span></div><div class="owl-next" style=""><span class="fa fa-angle-right"></span></div></div><div class="owl-dots" style="display: none;"></div></div></div>
                    <!--End facilities carousel-->    
                </div>
            </div>
            <div class="col-md-4">
               <br><br>
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>General Maintenance</h3>
                                            <p>1.General maintenance in hospitals is essential for ensuring the safety,  efficiency of all facilities and equipment. This includes regular upkeep, and prompt repairs to prevent disruptions in healthcare delivery. </p>
                                        </div>
                                    </div>

                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                <svg fill="none" height="30" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="23 3 12 14 9 11"></polyline>
                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>External Cleansing Of Glass Façade</h3>
                                            <p>1. The external cleansing of a hospital's glass façade is essential for maintaining a clean, professional appearance and ensuring maximum natural light penetration. 
                                        </p>
                                        </div>
                                    </div>
                             
            </div>
        </div>
    </div>    
</section>




<!-- Team Section Begin -->
<section class="team spad pb-5">
    <section id="service" class="section-padding bg-gray">
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <span style="color:#12c5c5;">On the Job</span>
                        <h2>Routine Workshop</h2>
                    </div>
                </div>
            </div>
            <div class="service-tab">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="tabsJustified" class="nav nav-tabs text-center">
                            <li class="nav-item " style="width: 500px;">
                                <a href="#" data-target="#one" data-toggle="tab" class="nav-link active" aria-expanded="true">
                                    <span style="color:red;">On the Job Training</span>
                                    <h6>Routine Workshop</h6>
                                </a>
                            </li>
                            <li class="nav-item" style="width: 500px;">
                                <a href="#" data-target="#two" data-toggle="tab" class="nav-link" aria-expanded="false">
                                    <span style="color:red;">On the Job</span>
                                    <h6>Routine Workshop</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="tabsJustifiedContent" class="tab-content active">
                            <div id="one" class="tab-pane animated fadeInRight active" aria-expanded="true">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                        <h5>Routine Workshop</h5>
                                        <img class="img-fluid" src="{{ asset('Career/img/job/job-3.jpg') }}" alt="Routine Workshop Image">
                                        <div class="service-tab-list">
                                            <h5>Hospital Cleaning Service</h5>
                                            <img class="img-fluid" src="{{ asset('Career/img/job/hospital-housekeeping-services_1.jpg') }}" alt="Hospital Cleaning Service Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="single-doctor single-doctor-warp">
                                            <img class="img-fluid" src="{{ asset('Career/img/job/service-1.jpg') }}" alt="Doctor Image">
                                            <div class="single-doctor-info">
                                                <h4>Vandana Hospitality</h4>
                                                <span>Sandeep Pandurang Kharat</span>
                                            </div>
                                            <img class="img-fluid" src="{{ asset('Career/img/job/job-5.jpg') }}" alt="About Vandana Hospitality Image">
                                            <div class="single-doctor-mask">
                                                <div class="single-doctor-mask-inner">
                                                    <h5>About Vandana Hospitality</h5>
                                                    <p>Vandana Hospitality is a leading facilities management company headed by Mr. Sandeep P. Kharat, both of whom are qualified hospital management professionals with several years of experience in India.</p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="two" class="tab-pane animated fadeInRight">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                        <h5>Routine Workshop</h5>
                                        <img class="img-fluid" src="{{ asset('Career/img/job/OPI-4.jpg') }}" alt="Routine Workshop Image">
                                        <div class="service-tab-list">
                                            <h5>Hospital Cleaning Service</h5>
                                            <img class="img-fluid" src="{{ asset('Career/img/job/ss-1_big.jpg') }}" alt="Hospital Cleaning Service Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="single-doctor single-doctor-warp">
                                            <img class="img-fluid" src="{{ asset('Career/img/job/service-1.jpg') }}" alt="Doctor Image">
                                            <div class="single-doctor-info">
                                                <h4>Vandana Hospitality</h4>
                                                <span>Sandeep Pandurang Kharat</span>
                                            </div>
                                            <img class="img-fluid" src="{{ asset('Career/img/job/S-10_big.jpg') }}" alt="About Vandana Hospitality Image">
                                            <div class="single-doctor-mask">
                                                <div class="single-doctor-mask-inner">
                                                    <h5>About Vandana Hospitality</h5>
                                                    <p>Vandana Hospitality is a leading facilities management company headed by Mr. Sandeep P. Kharat, both of whom are qualified hospital management professionals with several years of experience in India.</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

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
                            <li style ="color:#ffffff;"><a href="{{ route('frontend.blog') }}">Sector</a></li>
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
const tabsBtns = Array.from(document.querySelectorAll("[data-tab-id]"));
const tabs = Array.from(document.querySelectorAll("[data-tab]"));

let selectedTab = tabsBtns[0].dataset.tabId;

const hideTabs = () => {
  tabs
    .filter((tab) => tab.dataset.tab !== selectedTab)
    .forEach((tab) => {
      tab.classList.add("tabs__tab--hide");
    });

  tabsBtns
    .filter((tab) => tab.dataset.tabId !== selectedTab)
    .forEach((tab) => {
      tab.classList.add("tabs__tab-btn--not-selected");
    });
};
hideTabs();

const handleSelectTab = (e) => {
  selectedTab = e.target.dataset.tabId;

  tabs.forEach((tab) => {
    tab.classList.remove("tabs__tab--hide");
  });

  tabsBtns.forEach((tab) => {
    tab.classList.remove("tabs__tab-btn--not-selected");
  });

  hideTabs();
};

tabsBtns.forEach((btn) => {
  btn.addEventListener("click", handleSelectTab);
});



</script>
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