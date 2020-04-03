
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
                                <li class="nav-item active">
                                    <a class="nav-link" data-type="page-transition" href="{{ asset('/resume') }}">Resume</a>
                                </li>
                                <li class="nav-item">
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

        <section class="iq-resume wrapper">
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
                                        <div class="main-title">
                                            {{-- <small>My Work Experience</small> --}}
                                            <h1 class="display-4 iq-tw-8 iq-font-purple">Resume</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="title iq-tw-8">Education</h3>
                                        <ul class="education">
                                            <li><span></span>
                                                <div>
                                                    <div class="lead iq-tw-6 iq-font-black">Bachelor Degree</div>
                                                    <div class="type iq-font-purple">National University</div>
                                                    <div class="info">I achived Bachelor Degree of Business Studies Department from National University (Govt. Titumir College).</div>
                                                </div> <span class="number"><span>2004</span> <span>2008</span></span>
                                            </li>
                                            <li><span></span>
                                                <div>
                                                    <div class="lead iq-tw-6 iq-font-black">Master Degree</div>
                                                    <div class="type iq-font-purple">National University</div>
                                                    <div class="info">I achived Master Degree of Business Studies Department from National University (Govt. Titumir College).</div>
                                                </div> <span class="number"><span>2008</span> <span>2009</span></span>
                                            </li>
                                            <li><span></span>
                                                <div>
                                                    <div class="lead iq-tw-6 iq-font-black">DCSA</div>
                                                    <div class="type iq-font-purple">Institute of Science and Technoknoly</div>
                                                    <div class="info">I started my study in 'Institute of Science and Technology in 2010 and Copleted my study in 2012 (Dimploma in Computer Science and Application). Trom this institute I have learnt C++ programming, HTML, CSS, Website Design and Website Development. It's an exordinary institution.</div>
                                                </div> <span class="number"><span>2010</span> <span>2012</span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="title iq-tw-8">Experience</h3>
                                        <ul class="education">
                                            <li><span></span>
                                                <div>
                                                    <div class="lead iq-tw-6 iq-font-black">Web Developer</div>
                                                    <div class="type iq-font-purple">InfotechIt Institution</div>
                                                    <div class="info">I joined InfoTechIt Institution in 2012. In this institution I have designed many Web Page. It was a Good Experienc in my life.</div>
                                                </div> <span class="number"><span>2012</span> <span>2013</span></span>
                                            </li>
                                            <li><span></span>
                                                <div>
                                                    <div class="lead iq-tw-6 iq-font-black">Senior Web Developer</div>
                                                    <div class="type iq-font-purple">InfotechIt Institution</div>
                                                    <div class="info">First I joined in this institution as Web Designer and Web Developer. Later I have promoted as Senior Web Developer.</div>
                                                </div> <span class="number"><span>2014</span> <span>2017</span></span>
                                            </li>
                                            <li><span></span>
                                                <div>
                                                    <div class="lead iq-tw-6 iq-font-black">Web Developing Trainer</div>
                                                    <div class="type iq-font-purple">D-Tech It inc.</div>
                                                    <div class="info">I joined D-Tech It inc. as a Web Developer in 2017. I trained many students who are established in Freelancin and Outsourching.</div>
                                                </div> <span class="number"><span>2017</span> <span>2018</span></span>
                                            </li>
                                            <li><span></span>
                                                <div>
                                                    <div class="lead iq-tw-6 iq-font-black">Web Developer and Trainer</div>
                                                    <div class="type iq-font-purple">It-Shikkha inc.</div>
                                                    <div class="info">I joined D-Tech It inc. as a Web Developer in 2018. I also Founding Member of this Institution. I care every thing about this institution.</div>
                                                </div> <span class="number"><span>2018</span> <span>2019</span></span>
                                            </li>
                                            <li><span></span>
                                                <div>
                                                    <div class="lead iq-tw-6 iq-font-black">Lecturer</div>
                                                    <div class="type iq-font-purple">MEH Arif College</div>
                                                    <div class="info">I joined MEH Arif College in 2011 as Lecturer. Till I am working with this institution.</div>
                                                </div> <span class="number"><span>2011</span> <span>2019</span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="interests-deta grey-bg iq-pall-40 iq-mtb-50">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="title iq-tw-8 iq-mt-0">My Interests</h3>
                                        <ul class="interests">
                                            <li>
                                                <i class="fa fa-code" aria-hidden="true"></i>
                                                <h6>Coding</h6>
                                            </li>
                                            <li>
                                                <i class="fa fa-leanpub" aria-hidden="true"></i>
                                                <h6>Learning</h6>
                                            </li>
                                            <li>
                                                <i class="fa fa-motorcycle" aria-hidden="true"></i>
                                                <h6>Motorcyle Driving</h6>
                                            </li>
                                            <li>
                                                <i class="fa fa-gamepad" aria-hidden="true"></i>
                                                <h6>Gaming</h6>
                                            </li>
                                            <li>
                                                <i class="fa fa-plane" aria-hidden="true"></i>
                                                <h6>Traveling</h6>
                                            </li>
                                            <li>
                                                <i class="fa fa-bicycle" aria-hidden="true"></i>
                                                <h6>Bicycling</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="skills iq-plr-40 iq-mt-80">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-md-6">
                                        <div class="skill-content">
                                            <h3 class="title iq-tw-8 iq-mt-0">My Language skills</h3>
                                            <p class="iq-mb-25">I am Bangldeshi. Bangla is my native language. For Foreign communication I use English language. I have great English communication skill. </p>
                                        </div>
                                        <div class="iq-progress-bar-linear">
                                            <p class="iq-progress-bar-text iq-font-black">English
                                                <span>90/100</span>
                                            </p>
                                            <div class="iq-progress-bar">
                                                <span data-percent="90"></span>
                                            </div>
                                        </div>
                                        <div class="iq-progress-bar-linear">
                                            <p class="iq-progress-bar-text iq-font-black">Bangla
                                                <span>99/100</span>
                                            </p>
                                            <div class="iq-progress-bar">
                                                <span data-percent="99"></span>
                                            </div>
                                        </div>

                                        <div class="iq-progress-bar-linear iq-font-black">
                                            <p class="iq-progress-bar-text">Arabic
                                                <span>67/100</span>
                                            </p>
                                            <div class="iq-progress-bar">
                                                <span data-percent="67"></span>
                                            </div>
                                        </div>
                                        <div class="iq-progress-bar-linear iq-font-black iq-mb-0">
                                            <p class="iq-progress-bar-text">Hindi
                                                <span>50/100</span>
                                            </p>
                                            <div class="iq-progress-bar">
                                                <span data-percent="50"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-md-6">
                                        <div class="skill-content">
                                            <h3 class="title iq-tw-8 iq-mt-0">My Technical skills</h3>
                                            <p class="iq-mb-25">I am professional Web Designer and Developer. My Design is 100% pixel perfection. In Web Desigb I use HTML, CSS, jQuery, Bootstrape etc. I am Expert in Advanced WordPress Development. </p>
                                        </div>
                                        <div class="iq-progress-bar-linear iq-font-black">
                                            <p class="iq-progress-bar-text">HTML
                                                <span>98/100</span>
                                            </p>
                                            <div class="iq-progress-bar">
                                                <span data-percent="98"></span>
                                            </div>
                                        </div>
                                        <div class="iq-progress-bar-linear iq-font-black">
                                            <p class="iq-progress-bar-text">Css
                                                <span>90/100</span>
                                            </p>
                                            <div class="iq-progress-bar">
                                                <span data-percent="90"></span>
                                            </div>
                                        </div>
                                        <div class="iq-progress-bar-linear iq-font-black">
                                            <p class="iq-progress-bar-text">Bootstrap
                                                <span>90/100</span>
                                            </p>
                                            <div class="iq-progress-bar">
                                                <span data-percent="90"></span>
                                            </div>
                                        </div>
                                        <div class="iq-progress-bar-linear iq-font-black iq-mb-0">
                                            <p class="iq-progress-bar-text">Javascript
                                                <span>85/100</span>
                                            </p>
                                            <div class="iq-progress-bar">
                                                <span data-percent="85"></span>
                                            </div>
                                        </div>
                                        <div class="iq-progress-bar-linear iq-font-black">
                                            <p class="iq-progress-bar-text">Php
                                                <span>70/100</span>
                                            </p>
                                            <div class="iq-progress-bar">
                                                <span data-percent="70"></span>
                                            </div>
                                        </div>
                                        <div class="iq-progress-bar-linear iq-font-black iq-mb-0">
                                            <p class="iq-progress-bar-text">WordPress
                                                <span>90/100</span>
                                            </p>
                                            <div class="iq-progress-bar">
                                                <span data-percent="90"></span>
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