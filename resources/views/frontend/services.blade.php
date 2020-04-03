
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Profyl - Personal Vcard Resume HTML Template" />
    <meta name="author" content="iqonicthemes.in" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>A.Satter - Personal Website</title>

    <link rel="shortcut icon" href="{{ asset('/') }}images/favicon.ico" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;Raleway:400,500,600,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/magnific-popup/magnific-popup.css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/owl-carousel/owl.carousel.css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/style.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/responsive.css">

    <link rel="stylesheet" href="#" data-style="styles">
    <link rel="stylesheet" href="{{ asset('/') }}css/style-customizer.css" />

    <link rel="stylesheet" href="{{ asset('/') }}css/custom.css" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110149418-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-110149418-1');
    </script>
</head>

<body>

    <div id="loading" class="purple-bg">
        <div id="loading-center">
            <div data-loader="spinner"></div>
        </div>
    </div>

    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar fixed-top navbar-expand-lg navbar-light white-bg">
                    <div class="col-md-3 purple-bg">
                        <a class="navbar-brand" href="index.html"><img src="{{ asset('/') }}images/logo.png" class="img-fluid" alt="logo"></a>
                    </div>
                    <div class="col-md-9">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" data-type="page-transition" href="{{ asset('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-type="page-transition" href="{{ asset('/about') }}">About me</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-type="page-transition" href="{{ asset('/resume') }}">Resume</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" data-type="page-transition" href="{{ asset('/services') }}">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-type="page-transition" href="{{ asset('/portfolio') }}">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-type="page-transition" href="{{ asset('/contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="main-container">

        <section class="iq-services wrapper">
            <div class="container-fluid h-100">
                <div class="row row-eq-height h-100">
                    <div class="col-md-3 purple-bg">
                        <div class="iq-objects">

                            <div id="particles-js"></div>
                            <span class="iq-objects-01">
<img class="img-fluid" src="{{ asset('/') }}images/01.png" alt="drive">
</span>
                        </div>
                    </div>
                    <div class="col-md-9 main-content align-self-center">
                        <div id="boxscroll" class="inner-box">
                            <div class="resume-deta iq-plr-40">
                                <div class="row white-bg">
                                    <div class="col-md-12">
                                        <div class="main-title iq-mb-20">
                                            {{-- <small>What I Can Do Better</small> --}}
                                            <h1 class="display-4 iq-tw-8 iq-font-purple">Services</h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-md-3">
                                        <div class="service-block text-left">
                                            <img src="{{ asset('/') }}images/service/01.png" class="img-fluid" alt="#">
                                            <h6 class="iq-tw-6 iq-mt-15 iq-mb-10">Creative Idea</h6>
                                            <p>I always try to Generate new idea. Which is better for my clients.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-md-3">
                                        <div class="service-block text-left re-mt30">
                                            <img src="{{ asset('/') }}images/service/05.png" class="img-fluid" alt="#">
                                            <h6 class="iq-tw-6 iq-mt-15 iq-mb-10">PSD Design</h6>
                                            <p>I design PSD for Website, Tablets, Mobile Device etc.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-md-3">
                                        <div class="service-block text-left re-mt30">
                                            <img src="{{ asset('/') }}images/service/03.png" class="img-fluid" alt="#">
                                            <h6 class="iq-tw-6 iq-mt-15 iq-mb-10">Web Design</h6>
                                            <p>I am expert in Eye Catching Website Design. I design unique website. </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-md-3 iq-mt-30">
                                        <div class="service-block text-left">
                                            <img src="{{ asset('/') }}images/service/02.png" class="img-fluid" alt="#">
                                            <h6 class="iq-tw-6 iq-mt-15 iq-mb-10">Amazing Web Templates</h6>
                                            <p>I create Amazing Web Template. I developed Website and add functionality.
                                        </div>
                                    </div>
                                </div>
                                <div class="customers grey-bg iq-pall-40 iq-mtb-50">
                                    <div class="row iq-ptb-30">
                                        <div class="col-md-12">
                                            <h3 class="title iq-tw-8 iq-mt-0">Loved By My Customers</h3>
                                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                                                <div class="item">
                                                    <div class="iq-client white-bg">
                                                        <div class="client-img">
                                                            <img alt="#" class="img-fluid" src="{{ asset('/') }}images/testimonial/01.jpg">
                                                        </div>
                                                        <div class="client-info">
                                                            <div class="client-name iq-mb-10">
                                                                <h6 class="iq-tw-6">Firrey Queen</h6>
                                                                <span class="sub-title iq-tw-6"> Media Advisor, Hi-Tech</span>
                                                            </div>
                                                            <p>He is excelent Web Designer. I will hire future again.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="iq-client white-bg">
                                                        <div class="client-img">
                                                            <img alt="#" class="img-fluid" src="{{ asset('/') }}images/testimonial/02.jpg">
                                                        </div>
                                                        <div class="client-info">
                                                            <div class="client-name iq-mb-10">
                                                                <h6 class="iq-tw-6">Rio Raj</h6>
                                                                <span class="sub-title iq-tw-6">CEO, Club Media</span>
                                                            </div>
                                                            <p>He is an Good Developer. He developed my Complex web template easily. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="iq-client white-bg">
                                                        <div class="client-img">
                                                            <img alt="#" class="img-fluid" src="{{ asset('/') }}images/testimonial/03.jpg">
                                                        </div>
                                                        <div class="client-info">
                                                            <div class="client-name iq-mb-10">
                                                                <h6 class="iq-tw-6">Rohit Roy</h6>
                                                                <span class="sub-title iq-tw-6">Managing Director</span>
                                                            </div>
                                                            <p>I love him. He is Awesome in Creating Web Template. I suggest him for my company always.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clients iq-pall-40 iq-mt-40">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-md-12">
                                            <h3 class="title iq-tw-8 iq-mt-0">My Clients</h3>
                                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="5" data-items-laptop="5" data-items-tab="4" data-items-mobile="3" data-items-mobile-sm="1" data-margin="30">
                                                <div class="item"> <img class="img-responsive center-block" src="{{ asset('/') }}images/clients/01.png" alt="#"></div>
                                                <div class="item"> <img class="img-responsive center-block" src="{{ asset('/') }}images/clients/02.png" alt="#"></div>
                                                <div class="item"> <img class="img-responsive center-block" src="{{ asset('/') }}images/clients/03.png" alt="#"></div>
                                                <div class="item"> <img class="img-responsive center-block" src="{{ asset('/') }}images/clients/04.png" alt="#"></div>
                                                <div class="item"> <img class="img-responsive center-block" src="{{ asset('/') }}images/clients/05.png" alt="#"></div>
                                                <div class="item"> <img class="img-responsive center-block" src="{{ asset('/') }}images/clients/06.png" alt="#"></div>
                                                <div class="item"> <img class="img-responsive center-block" src="{{ asset('/') }}images/clients/07.png" alt="#"></div>
                                                <div class="item"> <img class="img-responsive center-block" src="{{ asset('/') }}images/clients/01.png" alt="#"></div>
                                                <div class="item"> <img class="img-responsive center-block" src="{{ asset('/') }}images/clients/02.png" alt="#"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="customers-tab grey-bg iq-pall-40 iq-mtb-60">
<div class="row">
<div class="col-md-12">
<h3 class="title iq-tw-8 iq-mt-0">My Special</h3>
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true"><i class="ti-star"></i>Creative Idea</a>
</li>
<li class="nav-item">
<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"><i class="ti-ruler-pencil"></i>PSD Design</a>
</li>
<li class="nav-item">
<a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about"> <i class="ti-layout"></i>Web Design</a>
</li>
<li class="nav-item">
<a class="nav-link" id="tabs-tab" data-toggle="tab" href="#tabs" role="tab" aria-controls="tabs"><i class="ti-headphone-alt"></i>24/7 Support</a>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<div class="row">
<div class="col-lg-3">
<img src="{{ asset('/') }}images/blog/01.jpg" class="img-fluid" alt="#">
</div>
<div class="col-lg-9">
<h4 class="iq-tw-8 text-uppercase iq-mtb-15">My Special</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
</div>
</div>
</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<div class="row">
<div class="col-lg-9">
<h4 class="iq-tw-8 text-uppercase iq-mtb-15">My Special</h4>
 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
</div>
<div class="col-lg-3">
<img src="{{ asset('/') }}images/blog/01.jpg" class="img-fluid" alt="#">
</div>
</div>
</div>
<div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
<div class="row">
<div class="col-lg-3">
<img src="{{ asset('/') }}images/blog/01.jpg" class="img-fluid" alt="#">
</div>
<div class="col-lg-9">
<h4 class="iq-tw-8 text-uppercase iq-mtb-15">My Special</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
</div>
</div>
</div>
<div class="tab-pane fade" id="tabs" role="tabpanel" aria-labelledby="tabs-tab">
<div class="row">
<div class="col-lg-9">
<h4 class="iq-tw-8 text-uppercase iq-mtb-15">My Special</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
</div>
<div class="col-lg-3">
<img src="{{ asset('/') }}images/blog/01.jpg" class="img-fluid" alt="#">
</div>
</div>
</div>
 </div>
</div>
</div>
</div>

<div class="iq-counter-box iq-pall-20">
<div class="row">
<div class="col-md-3 text-center">
<div class="counter"> <i class="ti-folder iq-font-purple" aria-hidden="true"></i> <span class="timer iq-tw-6 iq-font-black" data-to="1540" data-speed="10000">1540</span>
<label>Project</label>
</div>
</div>
<div class="col-md-3 text-center">
<div class="counter re-mt30"> <i class="ti-medall iq-font-purple" aria-hidden="true"></i> <span class="timer iq-tw-6 iq-font-black" data-to="2530" data-speed="10000">2530</span>
<label>Awards</label>
</div>
</div>
<div class="col-md-3 text-center">
<div class="counter re-mt30"> <i class="ti-face-smile iq-font-purple" aria-hidden="true"></i> <span class="timer iq-tw-6 iq-font-black" data-to="8120" data-speed="10000">8120</span>
<label>Happy Clients</label>
</div>
</div>
<div class="col-md-3 text-center">
<div class="counter re-mt30"> <i class="ti-cup iq-font-purple" aria-hidden="true"></i> <span class="timer iq-tw-6 iq-font-black" data-to="1620" data-speed="10000">1620</span>
<label>Total Rates</label>
</div>
</div>-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    </section>

    </div>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 purple-bg">
                    <div class="footer-copyright text-white">Copyright @ <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a class="text-white" href="#">Abdus Satter.</a></div>
                </div>
                <div class="col-md-9">
                    <ul class="follow-us pull-right">
                        <li>Follow Me :</li>
                        <li><a href="http://www.facebook.com/abdussatter111"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.twitter.com/abdussatter51"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="http://linkedin.com/abdussatter51"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset('/') }}js/jquery-min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}js/popper.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{ asset('/') }}js/jquery.appear.js"></script>

    <script type="text/javascript" src="{{ asset('/') }}js/owl-carousel/owl.carousel.min.js"></script>

    <script type="text/javascript" src="{{ asset('/') }}js/jquery.typer.js"></script>

    <script type="text/javascript" src="{{ asset('/') }}js/isotope.pkgd.min.js"></script>

    <script type="text/javascript" src="{{ asset('/') }}js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script type="text/javascript" src="{{ asset('/') }}js/jquery.nicescroll.min.js"></script>

    <script type="text/javascript" src="{{ asset('/') }}js/retina.min.js"></script>

    <script type="text/javascript" src="{{ asset('/') }}js/particles/particles.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}js/particles/app.js"></script>

    <script type="text/javascript" src="{{ asset('/') }}js/style-customizer.js"></script>

    <script type="text/javascript" src="{{ asset('/') }}js/custom.js"></script>
</body>

</html>