
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
                                <li class="nav-item">
                                    <a class="nav-link" data-type="page-transition" href="{{ asset('/portfolio') }}">Portfolio</a>
                                </li>
                                <li class="nav-item active">
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

        <section class="iq-contact wrapper">
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
                                        <div class="main-title iq-mb-15">
                                            {{-- <small>My Contact</small> --}}
                                            <h1 class="display-4 iq-tw-8 iq-font-purple">Contact Me</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7289.143060488961!2d90.31699417359911!3d24.010902937846048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755dda343fb798b%3A0x8eb85c599592cb2b!2sKonabari!5e0!3m2!1sen!2sbd!4v1550505104631" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="title iq-tw-8 text-uppercase iq-mt-0">Get in Touch</h3>
                                                <ul class="contact-info">
                                                    <li><i class="ti-location-pin"></i>
                                                        <p>EsrarNagar Housing, Konabari, Gazipur-1702, Bangladesh.</p>
                                                    </li>
                                                    <li><i class="ti-marker-alt"></i>
                                                        <p><a href="mailto:abdussatter51@gmail.com">abdussatter51@gmail.com</a> </p>
                                                    </li>
                                                    <li><i class="ti-mobile"></i>
                                                        <p> +880 1912 34 35 30 </p>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="iq-get-in">
                                            <div id="formmessage">Success/Error Message Goes Here</div>
                                            <form class="form-horizontal" id="contactform" method="post" action="mailto:abdussatter51@gmail.com">
                                                <div class="contact-form row">
                                                    <div class="section-field col-md-4">
                                                        <input id="name" type="text" placeholder="Name*" name="name">
                                                    </div>
                                                    <div class="section-field col-md-4">
                                                        <input type="email" placeholder="Email*" name="email">
                                                    </div>
                                                    <div class="section-field col-md-4">
                                                        <input type="text" placeholder="Phone*" name="phone">
                                                    </div>
                                                    <div class="section-field textarea col-md-12">
                                                        <textarea class="input-message" placeholder="Comment*" rows="5" name="message"></textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="hidden" name="action" value="sendEmail" />
                                                        <button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-30">Send Message</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="{{ asset('/') }}images/ajax-loader.html" alt="#"></div>
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