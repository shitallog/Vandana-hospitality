	<!DOcTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>VANDANA HOSPITALITY | Gallery</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!-- cSS Styles -->
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('Career/css/plugins-css.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Career/css/style_Nu.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Career/css/style-2.css') }}" type="text/css">

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
            background-color: #4cAF50;
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
   /* Background color */
}
.header__menu ul li .dropdown li {
   
   width: 250px;
}
/* Hover effect for list items */
ul.dropdown li:hover {
    border-color: #12c5c5; /* Border color on hover */
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
                <div class="col-lg-10">
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
                            <li><a href="{{ route('frontend.careers') }}">Career </a></li>
                            <!-- <li><a href="Industry.html">Industry</a></li>!-->
                            <li class="active"><a href="{{ route('frontend.blog') }}">Gallery</a></li>
                            <li><a href="{{ route('frontend.contact') }}">contact</a></li>
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
                    <h2>Gallery</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ route('welcome') }}">Home</a>
                        <span>Gallery</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->
]

	
	<!-- Team Section End -->
<!-- Team Section End -->
<!-- Project Section Begin -->
<section class="project pt-5">
    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>HOSPITALS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-1.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-1.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>HOSPITALS</span>
                            <h5>SHREE GURUJI RUGNALYA(NANDED)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-2.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-2.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>HOSPITALS</span>
                            <h5>KANDARPHALE HOSPITALS (AURANGABAD)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-3.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-3.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>HOSPITALS</span>
                            <h5>MGM HOSPITAL 550 BEDDED (AURANGABAD)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-5.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-5.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>HOSPITALS</span>
                            <h5>ENDOWORLD HOSPITAL 200 BEDDED (AURANGABAD)</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>PUNE HOSPITALS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project__slider owl-carousel pb-5">
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-ph-1.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-ph-1.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>PUNE HOSPITALS</span>
                            <h5>METRO HOSPITAL (PUNE)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-ph-2.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-ph-2.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>PUNE HOSPITALS</span>
                            <h5>BHARATI HOSPITAL (PUNE)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-ph-3.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-ph-3.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>PUNE HOSPITALS</span>
                            <h5>PLORIES HOSPITAL (KHARGHAR)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-ph-4.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-ph-4.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>PUNE HOSPITALS</span>
                            <h5>PRAcHIN HEALTH cARE (PANVEL)</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project__slider owl-carousel pb-5">
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-ph-5.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-ph-5.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>PUNE HOSPITALS</span>
                            <h5>DISHA HOSPITAL (cHEMBU)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-ph-6.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-ph-6.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>PUNE HOSPITALS</span>
                            <h5>MEDIcITY HOSPITAL (KHARGAR NAVI MUMBAI)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-ph-7.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-ph-7.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>PUNE HOSPITALS</span>
                            <h5>OM SAI HOSPITAL (KAMOTHE)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-ph-8.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-ph-8.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>PUNE HOSPITALS</span>
                            <h5>UPASANI HOSPITAL (MULUND)</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project__slider owl-carousel pb-5">
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-ph-9.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-ph-9.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>PUNE HOSPITALS</span>
                            <h5>LIFE LINE HOSPITAL (PANVEL NAVI MUMBAI)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-ph-10.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-ph-10.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>PUNE HOSPITALS</span>
                            <h5>SWARAJ HOSPITAL (VASHI NAVI MUMBAI)</h5>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-ph-12.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-ph-12.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>PUNE HOSPITALS</span>
                            <h5>NEW MINA HOSPITAL (MUMBRA)</h5>
                        </div>
                    </div>
                </div>
            </div>
       >
            </div>
        </div>
    </div>
</section>
<!-- Project Section End -->

	
	
		
	<!-- Team Section End -->
<!-- Project Section Begin -->
<section class="project">
    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>COLLEGES</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-c-1.jpg') }}" style="background-image: url('{{ asset('career/img/project/project-c-1.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>COLLEGES</span>
                            <h5>SHAH-ANCHOR-KUTCHHI-ENGINEERING COLLEGE (GOVANDI)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-c-2.jpg') }}" style="background-image: url('{{ asset('career/img/project/project-c-2.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>COLLEGES</span>
                            <h5>A.C. PATIL COLLEGE (KHARGHAR)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-c-4.jpg') }}" style="background-image: url('{{ asset('career/img/project/project-c-4.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>COLLEGES</span>
                            <h5>INDIRA INSTITUTE OF BUSINESS MANAGEMENT (SANPADA)</h5>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>COACHING CLASSES</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project__slider owl-carousel pb-5">
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-classes-1.jpg') }}" style="background-image: url('{{ asset('career/img/project/project-classes-1.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>COACHING CLASSES</span>
                            <h5>ALLEN COACHING CLASSES (KHARGHAR) </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-classes-2.jpg') }}" style="background-image: url('{{ asset('career/img/project/project-classes-2.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>COACHING CLASSES</span>
                            <h5>VIDYALANKAR CLASSES (DADAR)</h5>
                        </div>
                    </div>
                </div>
              
       
           

            </div>  
            </div>  
            </div>
</section>
	<section>
	 <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>HOTELS:</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project__slider owl-carousel pb-5">
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-h-1.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-h-1.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>HOTELS:</span>
                            <h5>YOGI HOTEL (SANDPADA MUMBAI)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-h-2.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-h-2.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>HOTELS:</span>
                            <h5>VISHNAV PUNJAB HOTEL (CHEMBUR)</h5>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-b-1.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-b-1.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>BEAUTY SALON & SPA</span>
                            <h5>TEXTURES SALON & SPA (KHARGHAR)</h5>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-b-2.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-b-2.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>BEAUTY SALON & SPA</span>
                            <h5>NATURE'S
                                    SALON & SPA
                                    (KHARGHAR)</h5>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-b-3.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-b-3.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>BEAUTY SALON & SPA</span>
                            <h5>LOUIS PHILIPPE SHOP (KHARGHAR)</h5>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/project-b-4.jpg') }}" style="background-image: url('{{ asset('Career/img/project/project-b-4.jpg') }}');">
                        <div class="project__slider__item__hover">
                            <span>BEAUTY SALON & SPA</span>
                            <h5>ALLEN SOLLY SHOP(KHARGHAR)</h5>
                        </div>
                    </div>
                </div>
              
            </div>
          </div>
        </div>
    </div>
</section>
<!-- Project Section End -->
	
	<!-- Project Section End -->
    <section class="project pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                       
                        <h2 style ="color:#12c5c5;">Extra Activity
                            </h2>
                    </div>
                </div>
            </div>
         <div class="row">
    <div class="project__slider owl-carousel">
        <div class="col-lg-3">
            <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/p-1.jpg') }}" style="background-image: url('{{ asset('career/img/project/p-1.jpg') }}');">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/img_g/c-8.jpg') }}" style="background-image: url('{{ asset('career/img/project/p-2.jpg') }}');">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/project/p-3.jpg') }}" style="background-image: url('{{ asset('career/img/project/p-3.jpg') }}');">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="project__slider__item set-bg" data-setbg="{{ asset('Career/img/img_g/c-10.jpg') }}" style="background-image: url('{{ asset('career/img/project/project-5.jpg') }}');">
            </div>
        </div>
    </div>
</div>

        </div>
</section>	
<section class="service-area pb-5">
<div class="container">
<div class="row pb-5">
<div class="single-sidebar wow fadeInUp animated" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;">
                        <div class="sec-title">
                            <h3 class="pull-left">TRAINING & DEVELOPMENT:</h3>
                         
                        </div>
                        <ul class="instagram">
                            <li>
                                <div class="img-holder">
                                    <img style="width: 180px;" src="{{ asset('Career/img/img_g/1_c.jpg') }}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img style="width: 180px;"  src="{{ asset('Career/img/img_g/2_c.jpg') }}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img style="width: 180px;"  src="{{ asset('Career/img/img_g/c_3.jpg') }}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img style="width: 180px;" src="{{ asset('Career/img/img_g/c_4.jpg') }}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="img-holder">
                                    <img style="width: 180px;"  src="{{ asset('Career/img/img_g/c_5.jpg') }}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="img-holder">
                                    <img style="width: 180px;"  src="{{ asset('Career/img/img_g/c-6.jpg') }}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> 
                        </ul>
                    </div>

                    </div>



    </div>
    
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
                        <h6>company</h6>
                        <hr>
                        <ul class="text-white">
                            <li style ="color:#ffffff;"  ><a href="{{ route('welcome') }}">Home</a></li>
                            <li style ="color:#ffffff;"><a href="{{ route('frontend.contact') }}">contact</a></li>
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
                            <p style ="color:#ffffff;">©copyrigh <script>
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