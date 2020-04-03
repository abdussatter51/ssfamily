
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
                                <li class="nav-item">
                                    <a class="nav-link" data-type="page-transition" href="{{ asset('/services') }}">Services</a>
                                </li>
                                <li class="nav-item active">
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

        <section class="iq-portfolio wrapper">
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
                            <div class="iq-plr-40">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-title iq-mb-20">
                                            {{-- <small>My Featured Work</small> --}}
                                            <h1 class="display-4 iq-tw-8 iq-font-purple">My Portfolio</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="isotope-filters">
                                            <button data-filter="" class="active"> View All</button>
                                            <button data-filter=".web-design"> Web Design</button>
                                            <button data-filter=".graphic-design">Graphic Design</button>
                                            <button data-filter=".website-templates">Website Templates </button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="isotope popup-gallery full-screen">
                                            <div class="grid-item web-design graphic-design clearfix">
                                                <div class="portfolio-item clearfix">
                                                    <img src="{{ asset('/') }}images/portfolio/01.jpg" alt="img04">
                                                    <div class="overlay">
                                                        <h4>MEH Arif College</h4>
                                                        <span>MEH Arif</span>
                                                        <div class="item-link">
                                                            <a class="popup-img" href="{{ asset('/') }}images/portfolio/01.jpg"><span class="ti-plus"></span></a>
                                                            <a href="#"><span class="ti-link"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-item web-design">
                                                <div class="portfolio-item">
                                                    <img src="{{ asset('/') }}images/portfolio/02.jpg" alt="img04">
                                                    <div class="overlay">
                                                        <h4>Landing Page</h4>
                                                        <span>Firrey Queen</span>
                                                        <div class="item-link">
                                                            <a class="popup-img" href="{{ asset('/') }}images/portfolio/02.jpg"><span class="ti-plus"></span></a>
                                                            <a href="#"><span class="ti-link"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-item website-templates">
                                                <div class="portfolio-item">
                                                    <img src="{{ asset('/') }}images/portfolio/03.jpg" alt="img04">
                                                    <div class="overlay">
                                                        <h4>Consultant Firm</h4>
                                                        <span>Martin Hey</span>
                                                        <div class="item-link">
                                                            <a class="popup-img" href="{{ asset('/') }}images/portfolio/03.jpg"><span class="ti-plus"></span></a>
                                                            <a href="#"><span class="ti-link"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-item graphic-design">
                                                <div class="portfolio-item">
                                                    <img src="{{ asset('/') }}images/portfolio/04.jpg" alt="img04">
                                                    <div class="overlay">
                                                        <h4>Hospital Web Site</h4>
                                                        <span>Project</span>
                                                        <div class="item-link">
                                                            <a class="popup-img" href="{{ asset('/') }}images/portfolio/04.jpg"><span class="ti-plus"></span></a>
                                                            <a href="#"><span class="ti-link"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-item web-design">
                                                <div class="portfolio-item">
                                                    <img src="{{ asset('/') }}images/portfolio/05.jpg" alt="img04">
                                                    <div class="overlay">
                                                        <h4>NewsPaper Web Template</h4>
                                                        <span>Portfolio Project</span>
                                                        <div class="item-link">
                                                            <a class="popup-img" href="{{ asset('/') }}images/portfolio/05.jpg"><span class="ti-plus"></span></a>
                                                            <a href="#"><span class="ti-link"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-item">
                                                <div class="portfolio-item">
                                                    <img src="{{ asset('/') }}images/portfolio/06.jpg" alt="img04">
                                                    <div class="overlay">
                                                        <h4>IT-SHIKKHA Website</h4>
                                                        <span>ZJAS</span>
                                                        <div class="item-link">
                                                            <a class="popup-img" href="{{ asset('/') }}images/portfolio/06.jpg"><span class="ti-plus"></span></a>
                                                            <a href="#"><span class="ti-link"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-item website-templates">
                                                <div class="portfolio-item">
                                                    <img src="{{ asset('/') }}images/portfolio/07.jpg" alt="img04">
                                                    <div class="overlay">
                                                        <h4>Personal Web Design</h4>
                                                        <span>Project of Portfolio</span>
                                                        <div class="item-link">
                                                            <a class="popup-img" href="{{ asset('/') }}images/portfolio/07.jpg"><span class="ti-plus"></span></a>
                                                            <a href="#"><span class="ti-link"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-item website-templates">
                                                <div class="portfolio-item">
                                                    <img src="{{ asset('/') }}images/portfolio/08.jpg" alt="img04">
                                                    <div class="overlay">
                                                        <h4>Science Blog</h4>
                                                        <span>Portfolio</span>
                                                        <div class="item-link">
                                                            <a class="popup-img" href="{{ asset('/') }}images/portfolio/08.jpg"><span class="ti-plus"></span></a>
                                                            <a href="#"><span class="ti-link"></span></a>
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