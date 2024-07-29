<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VANDANA HOSPITALITY | Home</title>
    
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
    <link rel="stylesheet" href="{{ asset('Career/css/style-2.css') }}" type="text/css">
   
    <link rel="stylesheet" href="{{ asset('Career/css/imp.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Career/css/style_n.css') }}" type="text/css">
     <link rel="stylesheet" href="{{ asset('Career/css/owl.theme.default.min.css') }}" type="text/css">
     <link rel="stylesheet" href="{{ asset('Career/css/jquery-ui.css') }}" type="text/css">
     <link rel="stylesheet" href="{{ asset('Career/css/font-awesome.min_1.css') }}" type="text/css">
     <link rel="stylesheet" href="{{ asset('Career/css/ style-f.css') }}" type="text/css">
   
   <style>
.large-textarea {
    width: 100%;
    height: 200px;
}

    /* Container styling */
.nav-tabs {
    display: flex;
    flex-wrap: nowrap; /* Ensure that items stay in one row */
    overflow-x: auto; /* Enable horizontal scrolling if needed */
}

/* List item styling */
.nav-tabs li {
    flex: 0 0 auto; /* Prevent items from shrinking and ensure they fit in one row */
    margin-right: 15px; /* Adjust spacing between items as needed */
}

/* Link styling */
.nav-tabs a {
    display: block;
    text-decoration: none;
    color: inherit;
}

/* Image holder styling */
.img-holder {
    position: relative;
    overflow: hidden;
}

.img-holder img {
    width: 100%;
    height: auto;
    display: block;
}

/* Overlay styling */
.overlay-style-one {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Example background */
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.img-holder:hover .overlay-style-one {
    opacity: 1;
}

/* Title styling */
.nav-tabs h3 {
    text-align: center;
    margin-top: 5px;
    font-size: 16px;
}
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
   
}

.header.scrolled {
    background-color: white;
    color: black;
}

.header__menu ul li a {
    font-size: 15px;
    color: black;
    display: block;
    font-weight: 15px;
    padding: 0px 0;
    position: relative;
}
.header.scrolled .header__menu ul li a {
    color: black;
}

.header.scrolled .header__logo img {
    filter: invert(1);
}
.header__menu ul li .dropdown li {
   
    width: 205px;
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
color: #12c5c5; /* Border color on hover */
}

/* Hover effect for anchor tags */
ul.dropdown li:hover a {
    background-color: solid rgb(167,217,222); /* Background color on hover */
    color: #fff; /* Text color on hover */
}
 .image-container {
   display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh; /* Centers image vertically and horizontally */
        }

        .rounded-img {
            width: 300px; /* Adjust size as needed */
            height: 400px; /* Adjust size as needed */
            border: 15px solid rgb(167,217,222); /* Outer border color and width */
            border-radius: 50%; /* Fully rounded */
            padding: 1px; /* Space between image and border */
            box-sizing: border-box; /* Includes padding and border in element's total width and height */
        }

        .img-fluid {
            border-radius: 50%; /* Ensures the image itself is rounded */
            display: block; /* Removes extra space below the image */
            width: 100%; /* Makes image responsive */
            height: 65%; /* Maintains aspect ratio */
        }
        .header__menu ul li .dropdown li {
   
   width: 220px;
} 
/* Hover effect for list items */
ul.dropdown li:hover {
    border-color: #12c5c5; /* Border color on hover */
}

</style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo" style="text-align:center;">
            <a href="#"><img  class="img-fluid" src="{{asset('Career/img/logo/logo-1_3.png')}}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
            <span></span>
            <h4></h4>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

     <!-- Header Section Begin -->
    <header class="header" style="color:black; position: fixed;  height: 19%;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo" style="text-align: center;">
                        <a href="#"><img  style="width:85px;" class="img-fluid" src="{{asset('Career/img/logo/logo-1__3.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{ route('welcome') }}">Home</a></li>
                            <li><a href="{{ route('frontend.about') }}">About us</a></li>
                            
                            <li><a href="#">Services</a>
                                <ul class="dropdown" style="width:225px;">
                                    <li><a href="{{ route('frontend.hospital_housekeeping') }}">Hospital housekeeping</a></li>
									
                                    <li><a href="{{ route('frontend.patient-support-services') }}">Patient support services</a></li>
                                    <li><a href="{{ route('frontend.corporate-housekeeping') }}">Corporate housekeeping</a></li>
                                    <li><a href="{{ route('frontend.general-maintenance-services') }}">General maintenance  services </a></li>
                                    <li><a href="{{ route('frontend.guest-house-operation-scope') }}">Guest house operation scope</a></li>
                                    <li><a href="{{ route('frontend.spring-cleaning-on-saturdays') }}">Spring cleaning on saturdays
                                    </a></li>
                                    <li><a href="{{ route('frontend.services-offered') }}">Services-Offered
                                    </a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('frontend.careers') }}">Career </a></li>
                            <!-- <li><a href="Industry.html">Industry</a></li>!-->
                           <li>  <a href="{{ route('frontend.blog') }}">Gallery</a></li>
                            <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                <div class="header__widget">
                        <span> </span>
                        <h4> </h4>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{ asset('Career/img/slider/banner.jpg') }}">
                <div class="hero__text">
                    <h2>Vandana Hospitality Group</h2>
                    <a href="#" style ="background-color: #12c5c5;" class="primary-btn">Read more</a>
                  
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="{{ asset('Career/img/slider/banner_1.jpg') }}">
                <div class="hero__text">
                    <h2>Vandana Hospitality Group.</h2>
                    <a href="#" style ="background-color: #12c5c5;" class="primary-btn">Read more</a>
                   
                </div>
            </div>
        </div>
        <div class="slide-num" id="snh-1"></div>
        <div class="slider__progress"><span></span></div>
    </section>



    <!-- Hero Section End -->
    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
            <div class="col-lg-6 pb-5">
                    <div class="about__pic">
                        <div class="about__pic__inner">
                            <img src="{{ asset('Career/img/job/single-img-01.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                        <span style ="color: #12c5c5;">About</span>
                        <h2>Vandana hospitality </h2>
                        </div>
                        <div class="about__para__text">
                            <p>Vandana hospitality is a leading facilities management company headed by Mr. SANDEEP. P. KHARAT both of whom are qualified hospital management professional with several years of experience establishment in india. Over the last 20 years the group has been providing the highest quality of housekeeping, pantry management, guest house questions, facilities management, catering, general maintenance, corporate support services, hotel support services and healthcare support services to a wide range of industry from large corporate house to super deluxe five star hotels and multi specialty & super specialty hospitals.</p>
                           
                        </div>
                        <a href="{{ route('frontend.about') }}" class="primary-btn normal-btn">READ MORE »</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- About Section End -->

   
   
   

 







<section class="service-area pb-5">
<div class="container">
<div class="row pb-5">
<div class="col-lg-12">
            <div class="section-title">
                <span style ="color: #12c5c5;">Our Services</span>
                <h2>Find out below how our services can meet your organisation’s needs.</h2>
            </div>
        </div>
    </div>

        <div class="row">
           
            <div class="col-md-12">
                <div class="text-holder">
                    <!--Start tab box-->
                    <div class="tab-box">
                        <div class="tab-content">

                         <!--Start single tab pane-->
                         <div class="tab-pane" id="OFFICE">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Our Best Services</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3 style ="color: #12c5c5;">OFFICE SUPPORT SERVICES:</h3>
                                                <p>Our Office Support Team Is Trained To Look After, And Assist Our Day To Day Administrative Needs, Enabling Them To Remain Focused On Their Core Business.

Our Solutions Are Cost Effective and Customized To Our Client Requirement</p>
<p>Office support services are essential for the smooth and efficient operation of any hospital or healthcare facility. These services encompass a wide range of administrative and logistical functions that support medical staff, improve workflow, and enhance patient care.<p>

                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                            <img src="{{ asset('Career/img/job/S-10_big.jpg') }}" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>  
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane" id="opthalmology">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Our Best Services</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3 style ="color: #12c5c5;">PANTRY SERVICES</h3>
                                                <p>Provide Our Client Skilled And Well Trained Staff For Pantry Management. Our Staff Is Well Groomed, Having Presentable Personality And VANDANA HOSPITALITY Emphasizes In Maintaining High Standards Of Personal And Floor Hygiene.

Vandana Hospitality in Providing Pantry Staff That Is Well Trained In Handling Pantry Equipment Machinery and Enforces Strict Adherence to High Standard of Personal Hygiene Grooming..</p>
                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="{{ asset('Career/img/job/ss-1_big.jpg') }}" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>  
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane" id="laboratory">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Our Best Services</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3 style ="color: #12c5c5;">HELP DESK MANAGEMENT</h3>
                                                <p>One of the Crucial Areas in Any Business Premise Is The Help- Desk. We at Vandana Hospitality Understand, and Provide, Process Driven Tech –Savy Experienced Personnel for This Task.

Help – Desk Support Involves Identifying Any Service Related And Initiate Corrective Action Along With Event Log Tracking.</p>
                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="{{ asset('Career/img/job/OIP-2_big.jpg') }}" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>  
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane" id="cardiac">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Our Best Services</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3 style ="color: #12c5c5;">HOUSEKEEPING SERVICES</h3>
                                                <p>Our Housekeeping Services , Includes Thorough Cleaning Of The Premises Which Features Cleaning Of Workstations, Various Surfaces,

Washroom, Lobby And Common Areas Throughout The Day With Specialized Services Such As Vacuuming, Spotting , Stone Treatment, Waste Management, Cleaning Of Fire Exits Etc.</p>
                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="{{ asset('Career/img/job/H-1_big.jpg') }}" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>     
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane active" id="outpatient">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Our Best Services</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3 style ="color: #12c5c5;">HOSPITAL MANAGEMENT</h3>
                                                <p>Our Specially Trained Personal, Who Understand The Specific Requirements Of A Hospital Provide Round The Clock Services For Areas Like Patient Care, Housekeeping And Waste Management.</p>
                                               <p> Improved Efficiency: Streamlined operations and reduced administrative burden on medical staff.</p>
<p>Enhanced Patient Care: Higher standards of cleanliness, nutrition, and overall environment contribute to better patient outcomes.
                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="{{ asset('Career/img/job/sx-41.jpg') }}" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>     
                            </div>
                            <!--End single tab pane-->
                        </div>
                        <ul class="nav nav-tabs tab-menu">
                        <li class="">
                                <a href="#OFFICE" data-toggle="tab" aria-expanded="false">
                                    <div class="img-holder">
                                        <img  style="width:250px;"src="{{ asset('Career/img/job/S-10_small.jpg') }}" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h3 style ="color: #12c5c5;">OFFICE SUPPORT SERVICES:</h3>
                                                </h3>
                            </li>
                            <li class="">
                                <a href="#opthalmology" data-toggle="tab" aria-expanded="false">
                                    <div class="img-holder">
                                        <img  style="width:200px;"src="{{ asset('Career/img/job/ss-1_small.jpg') }}" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h3 style ="color: #12c5c5;">PANTRY SERVICES</h3>
                            </li>
                            <li class="">
                                <a href="#laboratory" data-toggle="tab" aria-expanded="false">
                                    <div class="img-holder">
                                        <img  style="width:200px; height:150px;"  src="{{ asset('Career/img/job/OIP-2_small.jpg') }}" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </a>
                                <h3 style ="color: #12c5c5;">HELP DESK MANAGEMENT</h3>
                            </li>
                            <li class="">
                                <a href="#cardiac" data-toggle="tab" aria-expanded="false">
                                    <div class="img-holder">
                                        <img  style="width:200px;"  src="{{ asset('Career/img/job/H-1_small.jpg') }}" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h3 style ="color: #12c5c5;">HOUSEKEEPING SERVICES</h3>
                            </li>
                            <li class="active">
                                <a href="#outpatient" data-toggle="tab" aria-expanded="true">
                                    <div class="img-holder">
                                        <img  style="width:200px;" src="{{ asset('Career/img/job/R_sml.jpg') }}" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h3 style ="color: #12c5c5;">HOSPITAL MANAGEMENT</h3>
                            </li>
                        </ul> 
                    </div>
                    <!--End tab box--> 
                </div>
            </div>
        </div>
    </div>
</section>


 <!-- Testimonial Section Begin -->
 <section class="testimonial spad set-bg "  data-setbg="{{ asset('Career/img/job/testimonial-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <br>
                        <span  style ="color: #12c5c5;">Testimonials</span>
                        <h2>What your clients say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial__carousel">
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-9 col-lg-10">
                                    <p>“1. Fast and accurate at solving mental math problems involving addition,
                                        subtraction, multiplication, division and percentages but without high-level
                                        skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-9 col-lg-10">
                                    <p>“2. Fast and accurate at solving mental math problems involving addition,
                                        subtraction, multiplication, division and percentages but without high-level
                                        skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-9 col-lg-10">
                                    <p>“3. Fast and accurate at solving mental math problems involving addition,
                                        subtraction, multiplication, division and percentages but without high-level
                                        skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-9 col-lg-10">
                                    <p>“4. Fast and accurate at solving mental math problems involving addition,
                                        subtraction, multiplication, division and percentages but without high-level
                                        skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-9">
                                    <p>“5. Fast and accurate at solving mental math problems involving addition,
                                        subtraction, multiplication, division and percentages but without high-level
                                        skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-7 col-sm-10 ">
                    <div class="testimonial__client">
                        <div class="testimonial__client__item add">
                          
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span  style ="color: #12c5c5;">CEO Woolley</span>
                            </div>
                        </div>
                        <div class="testimonial__client__item">
                           
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span  style ="color: #12c5c5;">CEO Woolley</span>
                            </div>
                        </div>
                        <div class="testimonial__client__item">
                           
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span  style ="color: #12c5c5;">CEO Woolley</span>
                            </div>
                        </div>
                        <div class="testimonial__client__item">
                          
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span  style ="color: #12c5c5;">CEO Woolley</span>
                            </div>
                        </div>
                        <div class="testimonial__client__item">
                          
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span  style ="color: #12c5c5;">CEO Woolley</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>

        </div>
    </section>



<!-- Call To Action Section End -->








    <section class="project pb-5 mb-5">
        <div class="container-fluid">
            <div class="container">
           
         
            <div class="col-lg-12">

<div class="counter__content">
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="counter__item">
            <div class="counter__item__number">
                <h2 style ="color: #12c5c5;" class="count">75</h2>
            </div>
            <div class="counter__item__text">
                <h5>Success </h5>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="counter__item">
            <div class="counter__item__number">
                <h2 style ="color: #12c5c5;" class="count">36</h2>
            </div>
            <div class="counter__item__text">
                <h5>Cities </h5>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="counter__item">
            <div class="counter__item__number">
                <h2 style ="color: #12c5c5;" class="count">20</h2>
            </div>
            <div class="counter__item__text">
                <h5>Expertise</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="counter__item">
            <div class="counter__item__number">
                <h2 style ="color: #12c5c5;" class="count">45</h2>
            </div>
            <div class="counter__item__text">
                <h5>Clientele<br /></h5>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>
</div>
</section>
<!-- Project Section Begin -->

<!---assingment---->
  

<!--  end Project Section Begin -->

<section class="callto spad set-bg pb-5" data-setbg="{{ asset('Career/img/slider/bg-1.jpg') }}">
    <div class="container pb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="callto__text">
				<span style="color: #12c5c5;">Vandana hospitality</span>
                    <h2 style="color: black;">
                        Vandana Hospitality is a leading facilities management company headed by Mr. SANDEEP. P. KHARAT.
                    </h2>
                    <a href="{{ route('frontend.legal') }}" class="primary-btn" style="background-color: #12c5c5;">See Details Vandana Hospitality</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->

<!----end ---->
  <!-- Footer Section Begin -->
    <footer class="footer text-white set-bg" data-setbg="{{ asset('Career/img/slider/s-8.jpg') }}">
        <div class="container">
           
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img class="img-fluid" src="{{ asset('Career/img/logo/logo-1__3.png') }}" alt=""></a>
                        </div>
                        <hr>
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
                        <h6>Get In Touch</h6>
                        <hr>
                         <p>Bhange Niwas, 1st Floor, Plot No. F/26/31, SEC -12 Kharghar, Navi Mumbai – 410 210 </p>
                        <p>Email: vandanahospitality@gmail.com</br>
                      MOB: +91 9821174810
                             </p>
                       
                    </div>
                </div>
            </div>
            <div class="">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="copyright__text">
                            <p>©Copyright  <script>
                                document.write(new Date().getFullYear()); 
                            </script>  . all rights reserved to vandana hospitality .
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                   <div style ="color:white;" class="copyright__widget">
                     
                        <p>Website Design by Technobizzar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
   jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            items: 3,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 8500,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 2
		              },
		              1170: {
		                items: 3
		              }
		            }
		        });
        	});
</script>
<!-- Footer Section End -->
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

<script>
    window.addEventListener('resize', function() {
    const dot = document.querySelector('.background-dot');
    if (window.innerWidth < 768) {
        dot.style.width = '100px'; /* Smaller size on small screens */
        dot.style.height = '100px'; /* Smaller size on small screens */
    } else {
        dot.style.width = '150px'; /* Original size */
        dot.style.height = '150px'; /* Original size */
    }
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