<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VANDANA HOSPITALITY | Patient support services</title>
    
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
ul.HOSPITAL {
    list-style-type: none;
    padding: 0;
}

ul.HOSPITAL li {
    background-color: #e9e9e9;
    margin: 10px 0;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

ul.HOSPITAL li:hover {
    background-color: #d3d3d3;
}

ul.HOSPITAL li::before {
    content: "✔";
    color: #4caf50;
    margin-right: 10px;
    font-weight: bold;
}
 table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        @media screen and (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }
            th, td {
                box-sizing: border-box;
                width: 100%;
                border: none;
            }
            th {
                background-color: transparent;
                color: #333;
                padding: 10px;
            }
            td {
                background-color: #f9f9f9;
                margin-bottom: 10px;
            }
            tr {
                margin-bottom: 15px;
            }
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

.header.scrolled .header__menu ul li a {
    color: black;
}

.header.scrolled .header__logo img {
    filter: invert(1);
} 
.header__menu ul li .dropdown {
   
   max-width: 200px;
  
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
.header__menu ul li .dropdown {
   
   max-width: 240px;
  
}   
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
 
.header__menu ul li .dropdown li {
   
   width: 239px;
}
	</style>
</head>
<body>
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo" style="text-align:center;">
            <a href="#"><img  class="img-fluid" src="{{asset('Career/img/logo/logo-1_3.png')}}" alt=""></a>
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
                <div class="col-lg-8">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li><a href="{{ route('frontend.about') }}">About us</a></li>
                            
                            <li><a href="#">services</a>
                                <ul class="dropdown" style="width:250px;">
                                    <li><a href="{{ route('frontend.hospital_housekeeping') }}">Hospital housekeeping</a></li>
									
                                    <li class="active"><a href="{{ route('frontend.patient-support-services') }}">patient support services</a></li>
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
                             <li>  <a href="{{ route('frontend.blog') }}">Gallary</a></li>
                            <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                   
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
                    <h2>patient support services</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ route('welcome') }}">Home</a>
                        <span>patient support services</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->	
	

	   
<!-- Breadcrumb Section Begin -->
<!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog__item__list">
                        <div class="blog__item">
                          
                            <h2>Cleaning Services</h2>
                            <img src="{{ asset('Career/img/job/clinig_2.jpg') }}" " alt="">
                            <div class="blog__item__text">
                                <p>As you might expect of a company that began as a high-end interiors contractor, we pay strict
                        attention.</p>
                        <ul class="HOSPITAL">
    <li>Transferring the Patients From Ambulance To Ambulance to Wheelchair or On Stretcher and Taking Them in the Hospital.</li>
    <li>Shifting Of Patient Internally As Required.</li>
    <li>During Critical Condition Fast Shifting Of Patient Of Patient From OPD To Emergency Department.</li>
    <li>Transferring Various Mobile Medical Instruments & Equipment for Patient’s Benefit under Supervision of Medical Personnel.</li>
    <li>Transferring Various Other Hospital Consumables & Accessories Form One Department To Another Department Of The Hospital.</li>
   
</ul>
                                <a href="#">Read more</a>
                            </div>
                        </div>
                      
                      
                    
                    </div>
                   
                </div>
                 <div class="col-lg-6">
                  <div class="blog__item">
                          
                           
                            <img src="{{ asset('Career/img/job/job-2.jpg') }}" " alt="">
                            <div class="blog__item__text">
                                <ul class="HOSPITAL">
   
    <li>Transferring Various Types of Collected Samples of Blood, Urine, Stool and Biopsy from IPD, ICU and OT the Diagnostic Departments of the Hospital.</li>
    <li>Transferring the Various Diagnostic Reports from Pathology, Radiology, Radiology and Other Diagnostic Departments of The Hospital To The IPD And Other Designated Area.</li>
    <li>Transferring the Dead Body from IPD to Mortuary and From Mortuary to the Ambulance.</li>
     <li>Transferring Various Sterile Material & Instruments from CSSD & TSSU to OT, MOT, ICU, Cath Lab, Endoscopy, Casualty & Other Departments of the Hospital.</li>
    <li>Transferring Various Files and Administrative Records as Quidde by the Department.</li>
   
</ul>
                                <a href="#">Read more</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
<!-- Breadcrumb Section End -->  

	
	
    <!-- Services Section End -->
 <div class="container">
<H1>CLIENT LIST</H1>
    <table>
        <thead>
            <tr>
                <th>Hospital</th>
                <th>Location</th>
                <th>Assignment</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>MGM Hospital</td>
                <td>Aurangabad</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Hedgewar Hospital</td>
                <td>Aurangabad</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Endoworld Hospital</td>
                <td>Aurangabad</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Metro Hospital</td>
                <td>Pune</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Om Sai Hospital</td>
                <td>Kamothe, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Poaris Hospital</td>
                <td>Kharghar, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Upasani Hospital</td>
                <td>Mulund</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Life Line Hospital</td>
                <td>Panvel, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Ek Omkar Multispecialty Hospital</td>
                <td>Kharghar, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Om Navjeevan Hospital</td>
                <td>Kharghar, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Prachin Healthcare</td>
                <td>Panvel, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Hindustan Life Care (Govt Of India)</td>
                <td>Kharghar</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Disha Hospital</td>
                <td>Chembur</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Diksha Multispecialty Hospital</td>
                <td>Ghatkopar</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Swaraj Hospital</td>
                <td>Vashi, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Sai Snehdeep Hospital</td>
                <td>Kopar Khairane</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Nanddeep Hospital</td>
                <td>Airoli</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Millenium Hospital</td>
                <td>Sanpada, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Harish Hospital</td>
                <td>Nerul, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Niramay Hospital</td>
                <td>Kharghar, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
			 <tr>
                <td>Medicity Hospital</td>
                <td>Kharghar, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Panecia Hospital</td>
                <td>Panvel, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Shree Chembur Jain Medical Relief Centre</td>
                <td>Chembur</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Balaji Healthcare Center</td>
                <td>Kopar Khairane</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Suyash Hospital</td>
                <td>Seawood, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Apex Multispeciality Hospital</td>
                <td>Taloja, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Anjali Maternity Home</td>
                <td>Kharghar</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
            <tr>
                <td>Galaxy Multispeciality Hospital</td>
                <td>Kalamboli, Navi Mumbai</td>
                <td>Housekeeping / Patient Care</td>
            </tr>
        </tbody>
    </table>

 </div>

		
	
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
                            <li style ="color:#ffffff;"><a href="{{ route('frontend.blog') }}">Gallary</a></li>
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