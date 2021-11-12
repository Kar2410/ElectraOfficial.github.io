<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
    $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
} else {
    $posts = getPublishedPosts();
}

?>



<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from quomodosoft.com/html/appro/demo/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Nov 2021 12:41:30 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Electra Society</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind -->
    <!--    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->


    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="home/images/apple-touch-icon.png">
    <link rel="shortcut icon" type="home/image/ico" href="home/images/favicon.ico" />

    <!-- footer css -->
    <link rel="stylesheet" href="assets/css/footer.css">


    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="home/css/themify-icons.css">
    <link rel="stylesheet" href="home/css/animate.css">
    <link rel="stylesheet" href="home/css/magnific-popup.css">

    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="home/css/space.css">
    <link rel="stylesheet" href="home/css/theme.css">
    <link rel="stylesheet" href="home/css/overright.css">
    <link rel="stylesheet" href="home/css/normalize.css">
    <link rel="stylesheet" href="home/style.css">
    <link rel="stylesheet" href="home/css/responsive.css">
    <script src="home/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body data-spy="scroll" data-target="#mainmenu" data-offset="50">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="preloade">
        <span><i class="ti-mobile"></i></span>
    </div>

    <!--Header-Area-->
    <header class="blue-bg relative fix" id="home">
        <div class="section-bg overlay-bg dewo ripple"></div>
        <div class="particles-js" id="particles-js"></div>
        <!--Mainmenu-->
        <nav class="navbar navbar-default mainmenu-area navbar-fixed-top" data-spy="affix" data-offset-top="60">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" class="navbar-toggle" data-target="#mainmenu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">
                        <!-- <img src="images/logo/2mobile.png" alt=""> -->
                        <h2 class="text-white logo-text">Electra Society</h2>
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                    <ul class="nav navbar-nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#work">About</a></li>
                        <li><a href="#team">Team</a></li>

                        <li><a href="announcement.php">Announcements</a></li>

                        <li><a href="#blog">Blog</a></li>
                        <li><a href="Electra_Nits/index.html">Electra NITS</a></li>
                         
                        <li><a href="alumni.php">Alumni</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <!-- <li><a href="register.php">Sign Up</a></li> -->
                        <!-- login user/admin -->
                        <?php if (isset($_SESSION['id'])) : ?>
                            <li>
                                <a href="#">
                                    <i class="fa fa-user"></i>
                                    <?php echo $_SESSION['username']; ?>
                                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                                </a>
                                <ul>

                            </li>
                        <?php else : ?>

                            <li><a href="<?php echo BASE_URL . '/login' ?>">Login</a></li>

                        <?php endif; ?>
                      
                         

                    </ul>
                </div>
            </div>
        </nav>
        <!--Mainmenu/-->
        <div class="space-100"></div>
        <div class="space-20 hidden-xs"></div>
        <!--Header-Text-->
        <div class="container text-white">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="space-100"></div>
                    <div class="home_screen_slide_main">
                        <div class="home_text_slide">
                            <div class="item">
                                <h1 style="font-size: 70px;">Electra Society <br /></h1>
                                <div class="space-10"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
                                <div class="space-50"></div>
                                <a href="https://www.youtube.com/watch?v=Jolt8lGTQvQ" class="btn btn-icon video-popup"><span class="ti-control-play"></span>Watch Video</a>

                            </div>
                            <div class="item">
                                <h1>Electra Society <br />Idea:</h1>
                                <div class="space-10"></div>
                                <p> It requires a small idea to start for something big. Electra Society is open for any productive idea from its fellow members and it implements every feasible idea in the events and activities that it conducts. </p>
                                <div class="space-50"></div>
                                <a href="https://www.youtube.com/watch?v=Jolt8lGTQvQ" class="btn btn-icon video-popup"><span class="ti-control-play"></span>Watch Video</a>
                            </div>
                            <div class="item">
                                <h1>Electra Society<br />Concept:</h1>
                                <div class="space-10"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
                                <div class="space-50"></div>
                                <a href="https://www.youtube.com/watch?v=VTvhq276WRo" class="btn btn-icon video-popup"><span class="ti-control-play"></span>Watch Video</a>
                            </div>
                            <div class="item">
                                <h1>Electra Society <br />Teamwork: </h1>
                                <div class="space-10"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
                                <div class="space-50"></div>
                                <a href="https://www.youtube.com/watch?v=VTvhq276WRo" class="btn btn-icon video-popup"><span class="ti-control-play"></span>Watch Video</a>
                            </div>
                            <div class="item">
                                <h1>Electra Society <br />Development: </h1>
                                <div class="space-10"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
                                <div class="space-50"></div>
                                <a href="https://www.youtube.com/watch?v=Jolt8lGTQvQ" class="btn btn-icon video-popup"><span class="ti-control-play"></span>Watch Video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs hidden-sm col-md-4">


                    <div class="item"><img src="home/images/logo/circlelogo.png" style="max-width: 600px; height:600px;margin-left:-60px;margin-top:-50px" alt=""></div>



                    <div class="home_screen_nav">
                        <span class="ti-angle-left testi_prev"></span>
                        <span class="ti-angle-right testi_next"></span>
                    </div>
                </div>
            </div>
            <div class="space-80"></div>
        </div>
        <!--Header-Text/-->
    </header>
    <!--Header-Area/-->

    <!--Work-Section-->
    <section class="gray-bg" id="work">
        <div class="space-80"></div>
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                    <h3 class="text-uppercase">About Us</h3>
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet.</p>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="hover-shadow">
                        <div class="space-60">
                            <img src="home/images/Heads/client1.png" alt="" style="height: 70px; ">
                        </div>
                        <div class="space-20"></div>
                        <h5 class="text-uppercase">Head of the Department</h5>
                        <p>Dr. Jyoti Prakash Mishra</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="hover-shadow">
                        <div class="space-60">
                            <img src="home/images/Heads/client1.png" alt="" style="height: 70px; ">

                        </div>
                        <div class="space-20"></div>
                        <h5 class="text-uppercase">Faculty Advisor</h5>
                        <p>Dr. Prasanta Roy</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 text-center wow fadeInUp" data-wow-delay="0.6s">
                    <div class="hover-shadow">
                        <div class="space-60">
                            <img src="home/images/Heads/client1.png" alt="" style="height: 70px; ">

                        </div>
                        <div class="space-20"></div>
                        <h5 class="text-uppercase">President</h5>
                        <p>Bulbul Hussain</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 text-center wow fadeInUp" data-wow-delay="0.8s">
                    <div class="hover-shadow">
                        <div class="space-60">
                            <img src="home/images/Heads/client1.png" alt="" style="height: 70px; ">

                        </div>
                        <div class="space-20"></div>
                        <h5 class="text-uppercase">General Secretary</h5>
                        <p>Gaurav Singh</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Work-Section/-->
    <!--Feature-Section-->
    <section class="fix">

        <div class="container" id="feature">
            <div class="space-70"></div>
            <div class="row wow fadeInUp">
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                    <h3 class="text-uppercase">Keywords of Electra Society</h3>
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet.</p>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row feature-area">
                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft">
                    <div class="space-30"></div>
                    <a href="#feature1" data-toggle="tab">
                        <div class="media single-feature">
                            <div class="media-body text-right">
                                <h5>Idea</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                            </div>
                            <div class="media-right">
                                <div class="border-icon">
                                    <span class="ti-light-bulb"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="space-30"></div>
                    <a href="#feature2" data-toggle="tab">
                        <div class="media single-feature">
                            <div class="media-body text-right">
                                <h5>Concept</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                            </div>
                            <div class="media-right">
                                <div class="border-icon">
                                    <span class="ti-book"></span>
                                </div>
                            </div>
                        </div>
                    </a>


                    <div class="space-30"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-4 text-center fix wow fadeIn">
                    <!-- <div class="down-offset relative "> -->
                    <!-- <img src="images/mobile21.png" alt=""> -->

                    <img src="home/images/logo/2mobile.png" alt="" style="margin-top: -30px;">
                    <!-- </div> -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInRight">
                    <div class="space-30"></div>
                    <a href="#feature4" data-toggle="tab">
                        <div class="media single-feature">
                            <div class="media-left">
                                <div class="border-icon">
                                    <span class="ti-eye"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Teamwork</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                            </div>
                        </div>
                    </a>
                    <div class="space-30"></div>
                    <a href="#feature5" data-toggle="tab">
                        <div class="media single-feature">
                            <div class="media-left">
                                <div class="border-icon">
                                    <span class="ti-stats-up"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Development</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididugnt ut labore</p>
                            </div>
                        </div>
                    </a>
                    <div class="space-30"></div>

                </div>
            </div>
        </div>
    </section>

    <!--Team-Section-->
    <section class="gray-bg" id="team">
        <div class="space-40"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                    <h3 class="text-uppercase">Our Team</h3>
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet.</p>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-team relative panel fix">
                        <img src="home/images/team/team1.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">JEMY SEDONCE</h5>
                            <p>Co. Founder</p>
                            <div class="social-menu">
                                <hr>
                                <a href="#"><span class="ti-facebook"></span></a>
                                <a href="#"><span class="ti-twitter-alt"></span></a>
                                <a href="#"><span class="ti-linkedin"></span></a>
                                <a href="#"><span class="ti-pinterest-alt"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-team relative panel fix">
                        <img src="home/images/team/team2.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">Deborah Brown</h5>
                            <p>UX Designer</p>
                            <div class="social-menu">
                                <hr>
                                <a href="#"><span class="ti-facebook"></span></a>
                                <a href="#"><span class="ti-twitter-alt"></span></a>
                                <a href="#"><span class="ti-linkedin"></span></a>
                                <a href="#"><span class="ti-pinterest-alt"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="single-team relative panel fix">
                        <img src="home/images/team/team3.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">Harry Banks</h5>
                            <p>Founder</p>
                            <div class="social-menu">
                                <hr>
                                <a href="#"><span class="ti-facebook"></span></a>
                                <a href="#"><span class="ti-twitter-alt"></span></a>
                                <a href="#"><span class="ti-linkedin"></span></a>
                                <a href="#"><span class="ti-pinterest-alt"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="single-team relative panel fix">
                        <img src="home/images/team/team4.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">Victoria Clark</h5>
                            <p>Creative Director</p>
                            <div class="social-menu">
                                <hr>
                                <a href="#"><span class="ti-facebook"></span></a>
                                <a href="#"><span class="ti-twitter-alt"></span></a>
                                <a href="#"><span class="ti-linkedin"></span></a>
                                <a href="#"><span class="ti-pinterest-alt"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-team relative panel fix">
                        <img src="home/images/team/team1.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">JEMY SEDONCE</h5>
                            <p>Co. Founder</p>
                            <div class="social-menu">
                                <hr>
                                <a href="#"><span class="ti-facebook"></span></a>
                                <a href="#"><span class="ti-twitter-alt"></span></a>
                                <a href="#"><span class="ti-linkedin"></span></a>
                                <a href="#"><span class="ti-pinterest-alt"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-team relative panel fix">
                        <img src="home/images/team/team2.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">Deborah Brown</h5>
                            <p>UX Designer</p>
                            <div class="social-menu">
                                <hr>
                                <a href="#"><span class="ti-facebook"></span></a>
                                <a href="#"><span class="ti-twitter-alt"></span></a>
                                <a href="#"><span class="ti-linkedin"></span></a>
                                <a href="#"><span class="ti-pinterest-alt"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="single-team relative panel fix">
                        <img src="home/images/team/team3.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">Harry Banks</h5>
                            <p>Founder</p>
                            <div class="social-menu">
                                <hr>
                                <a href="#"><span class="ti-facebook"></span></a>
                                <a href="#"><span class="ti-twitter-alt"></span></a>
                                <a href="#"><span class="ti-linkedin"></span></a>
                                <a href="#"><span class="ti-pinterest-alt"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="single-team relative panel fix">
                        <img src="home/images/team/team4.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">Victoria Clark</h5>
                            <p>Creative Director</p>
                            <div class="social-menu">
                                <hr>
                                <a href="#"><span class="ti-facebook"></span></a>
                                <a href="#"><span class="ti-twitter-alt"></span></a>
                                <a href="#"><span class="ti-linkedin"></span></a>
                                <a href="#"><span class="ti-pinterest-alt"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-80"></div>
    </section>
    <!--Team-Section/-->
    <!--Client-Section-->

    <!--Client-Section-->
    <!--Price-section-->

    <!--Price-section/-->
    <!--Question-section-->
    <section class="fix" id="faq">
        <div class="space-80"></div>
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                    <h3 class="text-uppercase">Frequently asked questions</h3>
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet.</p>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="col-xs-12 col-md-6 wow fadeInUp">
                    <div class="space-60"></div>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Sedeiusmod tempor inccsetetur aliquatraiy? </a></h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Tempor inccsetetur aliquatraiy?</a></h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Lorem ipsum dolor amet, consectetur adipisicing ?</a></h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Lorem ipsum dolor amet, consectetur adipisicing ?</a></h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs hidden-sm col-md-5 col-md-offset-1 wow fadeInRight ">
                    <img src="home/images/faq.png" alt="">
                </div>
            </div>
        </div>
        <div class="space-40"></div>
    </section>
    <!--Question-section/-->
    <!--Download-Section-->

    <!--Download-Section/-->
    <!--Blog-Section-->
    <section id="blog">
        <div class="space-40"></div>
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                    <h3 class="text-uppercase"> BLOG</h3>
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet.</p>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                
                <?php
                $i = 0;
                foreach ($posts as $post) :
                    if ($i++ > 2) break;
                
                ?>


                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="panel text-center single-blog">
                        <!-- <img src="home/images/blog/blog2.jpg" class="img-full" alt=""> -->
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="img-full">

                        <div class="padding-20">
                            <ul class="list-unstyled list-inline">
                                <li> <i class="ti-user"> <?php echo $post['username']; ?></i></li>
                                <i class="ti-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                                <li><span class="ti-calendar"></span> </li>
                            </ul>
                            <div class="space-10"></div>
                            <a href="blog-details-right-sidebar.html">
                                <h3><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
                            </a>
                            <div class="space-15"></div>
                            <p> <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?></p>
                            <div class="space-20"></div>
                            <a href="single.php?id=<?php echo $post['id']; ?>" class="btn btn-link">Read more</a>
                            <div class="space-20"></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
            <div class="row">
                <div class="space-60"></div>
                <div class="col-xs-12 text-center">
                    <a href="blog.php" class="btn btn-link active">View All</a>
                </div>
                <div class="space-60"></div>
            </div>
        </div>
    </section>


    <!--Footer-area-->

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


    <!--Vendor JS-->
    <script src="home/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="home/js/vendor/bootstrap.min.js"></script>
    <!--Plugin JS-->
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/scrollUp.min.js"></script>
    <script src="home/js/magnific-popup.min.js"></script>
    <script src="home/js/ripples-min.js"></script>
    <script src="home/js/contact-form.js"></script>
    <script src="home/js/spectragram.min.js"></script>
    <script src="home/js/particles.min.js"></script>
    <script src="home/js/particles-app.js"></script>
    <script src="home/js/ajaxchimp.js"></script>
    <script src="home/js/wow.min.js"></script>
    <script src="home/js/plugins.js"></script>
    <!--Active JS-->
    <script src="home/js/main.js"></script>
    <!--Maps JS-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTS_KEDfHXYBslFTI_qPJIybDP3eceE-A&amp;sensor=false"></script>
    <script src="home/js/maps.js"></script>
</body>


<!-- Mirrored from quomodosoft.com/html/appro/demo/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Nov 2021 12:42:25 GMT -->

</html>