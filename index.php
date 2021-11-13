<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

// posts
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
// post ends
// announcemnts start

$announcements = array();
$announcementsTitle = 'Recent Announcements';

if (isset($_GET['t_id'])) {
    $announcements = getPostsByTopicId($_GET['t_id']);
    $announcementsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
    $announcementsTitle = "You searched for '" . $_POST['search-term'] . "'";
    $announcements = searchAnnouncements($_POST['search-term']);
} else {
    $announcements = getPublishedAnnouncements();
}

// announcements ends

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
    <style>
        .electric-loader {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            width: 80%;
            width: 80vw;
            height: auto;
            max-width: 600px;
        }

        .electric-loader path {
            fill: none;
            stroke: #A5F2E7;
            stroke-width: 0.6;
            stroke-dasharray: 300;
            stroke-dashoffset: -300;
            animation: stroke-anim 2s steps(40) infinite, stroke-color 0.6s steps(10) alternate infinite;
        }

        @keyframes stroke-anim {
            to {
                stroke-dashoffset: 0;
            }
        }

        @keyframes stroke-color {
            to {
                stroke: #49BEB7;
            }
        }

        .landing-logo {
            position: relative;

            width: 600px;
            height: 600px;

            background-image: url(elelogo.png);
            background-position: center;
            background-size: cover;
            margin-top: -50px;
            margin-left: -60px
        }
    </style>
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

                        <li><a href="#announcement">Announcements</a></li>

                        <li><a href="#blog">Blog</a></li>
                        <li><a href="Electra_Nits/index.html">Electra NITS</a></li>
                        <li><a href="#team">Team</a></li>

                        <li><a href="alumni.php">Alumni</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <!-- <li><a href="register.php">Sign Up</a></li> -->
                        <!-- login user/admin -->

                        <?php if (isset($_SESSION['id'])) : ?>
                        <li>
                            <a href="#">
                                <i class="ti-user"></i>
                                <?php echo $_SESSION['username']; ?>
                                <i class="ti-angle-down"></i>

                            </a>
                            <ul id="dropdown">
                                <?php if ($_SESSION['admin']) : ?>


                                <li><a href="<?php echo BASE_URL . '/admin/dashboard' ?>">Dashboard</a></li>
                                <?php endif; ?>

                                <li><a href="<?php echo BASE_URL . '/resource' ?>">Resources</a></li>
                                <li><a href="<?php echo BASE_URL . '/logout' ?>" class="logout">Logout</a></li>

                            </ul>
                        </li>
                        <?php else : ?>
                        <!-- <li><a href="<?php echo BASE_URL . '/register' ?>">Sign Up</a></li> -->
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in </p>
                                <div class="space-50"></div>
                                <a href="https://www.youtube.com/watch?v=Jolt8lGTQvQ"
                                    class="btn btn-icon video-popup"><span class="ti-control-play"></span>Watch
                                    Video</a>

                            </div>
                            <div class="item">
                                <h1>Electra Society <br />Idea:</h1>
                                <div class="space-10"></div>
                                <p> It requires a small idea to start for something big. Electra Society is open for any
                                    productive idea from its fellow members and it implements every feasible idea in the
                                    events and activities that it conducts. </p>
                                <div class="space-50"></div>
                                <a href="https://www.youtube.com/watch?v=Jolt8lGTQvQ"
                                    class="btn btn-icon video-popup"><span class="ti-control-play"></span>Watch
                                    Video</a>
                            </div>
                            <div class="item">
                                <h1>Electra Society<br />Concept:</h1>
                                <div class="space-10"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in </p>
                                <div class="space-50"></div>
                                <a href="https://www.youtube.com/watch?v=VTvhq276WRo"
                                    class="btn btn-icon video-popup"><span class="ti-control-play"></span>Watch
                                    Video</a>
                            </div>
                            <div class="item">
                                <h1>Electra Society <br />Teamwork: </h1>
                                <div class="space-10"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in </p>
                                <div class="space-50"></div>
                                <a href="https://www.youtube.com/watch?v=VTvhq276WRo"
                                    class="btn btn-icon video-popup"><span class="ti-control-play"></span>Watch
                                    Video</a>
                            </div>
                            <div class="item">
                                <h1>Electra Society <br />Development: </h1>
                                <div class="space-10"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in </p>
                                <div class="space-50"></div>
                                <a href="https://www.youtube.com/watch?v=Jolt8lGTQvQ"
                                    class="btn btn-icon video-popup"><span class="ti-control-play"></span>Watch
                                    Video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs hidden-sm col-md-4">


                    <div class="item">
                        <!-- <img src="home/images/logo/circlelogo.png" style="max-width: 600px; height:600px;margin-left:-60px;margin-top:-50px" alt=""> -->
                        <div class='landing-logo' style="position:relative">
                            <!-- <img src="elelogo.png" style="max-width: 600px; height:600px;margin-left:-60px;margin-top:-50px" alt="" srcset=""> -->
                            <svg class="electric-loader" style="max-width: 600px; height:650px;margin-top:-60px;margin-left:-5px"
                                viewBox="0 0 100 100">
                                <defs>
                                    <filter id="goo">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="4" result="blur" />
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 17 -2.15" result="goo" />
                                        <feComposite in="SourceGraphic" in2="goo" operator="over" />
                                    </filter>
                                </defs>
                                <g filter="url(#goo)"></g>
                            </svg>
                        </div>
                    </div>

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
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt
                        ut labore Lorem ipsum madolor sit amet.</p>
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
    <!--  key-Feature-Section-->
    <section class="fix">

        <div class="container" id="feature">
            <div class="space-70"></div>
            <div class="row wow fadeInUp">
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                    <h3 class="text-uppercase">Keywords of Electra Society</h3>
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt
                        ut labore Lorem ipsum madolor sit amet.</p>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididugnt ut labore</p>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididugnt ut labore</p>
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

                    <img src="home/images/logo/bluelogo.png" alt="">
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididugnt ut labore</p>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididugnt ut labore</p>
                            </div>
                        </div>
                    </a>
                    <div class="space-30"></div>

                </div>
            </div>
        </div>
    </section>


    <!-- announcements section begins -->

    <section id="announcement">
        <div class="space-40"></div>
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                    <h3 class="text-uppercase"> ANNOUNCEMENTS</h3>
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt
                        ut labore Lorem ipsum madolor sit amet.</p>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">

                <?php
                $i = 0;
                foreach ($announcements as $post) :
                    if ($i++ > 2) break;

                ?>


                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="panel text-center single-blog">
                        <!-- <img src="home/images/blog/blog2.jpg" class="img-full" alt=""> -->

                        <!-- <img src="home/images/logo/bluelogo.png" alt="" class="img-full"> -->


                        <div class="padding-20">
                            <ul class="list-unstyled list-inline">
                                <li> <i class="ti-user">
                                        <?php echo $post['username']; ?>
                                    </i></li>
                                <i class="ti-calendar">
                                    <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                                </i>
                                <li><span class="ti-calendar"></span> </li>
                            </ul>
                            <div class="space-10"></div>
                            <a href="blog-details-right-sidebar.html">
                                <h3><a href="single.php?id=<?php echo $post['id']; ?>">
                                        <?php echo $post['title']; ?>
                                    </a></h3>
                            </a>
                            <div class="space-15"></div>
                            <p>
                                <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                            </p>
                            <div class="space-20"></div>
                            <a href="announce_single.php?id=<?php echo $post['id']; ?>" class="btn btn-link">Read
                                more</a>
                            <div class="space-20"></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
            <div class="row">
                <div class="space-60"></div>
                <div class="col-xs-12 text-center">
                    <a href="announcement.php" class="btn btn-link active">View All</a>
                </div>
                <div class="space-60"></div>
            </div>
        </div>
    </section>

    <!-- announcements section ends -->


    <!--Blog-Section-->
    <section id="blog">
        <div class="space-40"></div>
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                    <h3 class="text-uppercase"> BLOG</h3>
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt
                        ut labore Lorem ipsum madolor sit amet.</p>
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
                                <li> <i class="ti-user">
                                        <?php echo $post['username']; ?>
                                    </i></li>
                                <i class="ti-calendar">
                                    <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                                </i>
                                <li><span class="ti-calendar"></span> </li>
                            </ul>
                            <div class="space-10"></div>
                            <a href="blog-details-right-sidebar.html">
                                <h3><a href="single.php?id=<?php echo $post['id']; ?>">
                                        <?php echo $post['title']; ?>
                                    </a></h3>
                            </a>
                            <div class="space-15"></div>
                            <p>
                                <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                            </p>
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
    <!-- blog ends -->



    <!--Team-Section-->
    <section class="gray-bg" id="team">
        <div class="space-40"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                    <h3 class="text-uppercase">Our Team</h3>
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt
                        ut labore Lorem ipsum madolor sit amet.</p>
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

    <!-- faq section begin -->

    <section class="fix" id="faq">
        <div class="space-80"></div>
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                    <h3 class="text-uppercase">Frequently asked questions</h3>
                    <p>Feel free to contact us for any query !</p>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="col-xs-12 col-md-6 wow fadeInUp">
                    <div class="space-60"></div>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse1">Q: Brief about Department of Electrical Engineering, National
                                        Institute of Technology, Silchar.</a></h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">The Department of Electrical Engineering of NIT, Silchar is one
                                    of the finest and well equipped Electrical departments of the north-east region. It
                                    boasts of having a highly qualified faculty with an unparalled level of expertise in
                                    their field. Under the able Headship of Dr. B. K. Roy and a strong faculty team, the
                                    Department offers an 8 Semester B.Tech. Programme in Electrical Engineering, a four
                                    Semester M.Tech. Programme in Power Energy Systems Engineering
                                    and also a well integrated Ph.D. programme. The department offers core courses in
                                    Power Systems, Control Systems, Electrical Machines, Instrumentation, Switchgear and
                                    Industrial Protection, Microprocessors and Microcontrollers
                                    etc. Apart from these, the final year students can choose from a wide array of
                                    electives in the form of Computer Aided Power Systems, Flexible AC Transmission etc.
                                    In coordination with the highly stimulating lectures and quality
                                    enhancing tutorials in these courses, various practical courses are also held in the
                                    state-of-the-art Lab facilities of the department like Machine Lab, Measurement Lab,
                                    Circuit Theory Lab and Microprocessor Lab, to name a few.
                                    The Department of Electrical Engineering is dynamic and vibrant in true sense.
                                    Various research and development activities taken up by the department put the
                                    students on busy schedules enabling them to blend to the modern industrial
                                    requirements. The course structure is constantly restructured to meet the ever
                                    changing requirements of the volatile industrial market, keeping the essence of the
                                    core Electrical Engineering intact. The pure expertise and dedication
                                    of the faculty members along with infrastructural facilities coupled with the
                                    perseverance of the students have catapulted the branch to the top league. Placement
                                    offers to the students have always shown an ever increasing trend
                                    and promise to be the best in future with the incoming boom of Power sector. The
                                    department also has its own society, the 'Electra' comprising of the faculty members
                                    and the 300 strong student members. It caters to all the academic
                                    and co-curricular persona of the branch. Cultural events for the members are never
                                    scarce along with quizzes, aptitude tests, presentations and industrial tours which
                                    are organised to bring the best out of a today's Electrical
                                    Engineer.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse2">Q: Brief about the academics of Electrical Engineering
                                        Department .</a></h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse in">
                                <div class="panel-body">: The Electrical Engineering Department was established in 1977
                                    along with the establishment of Institute. It has been one of the best departments
                                    in terms of infrastructural facilities and faculties. It has got many well equipped
                                    labs with modern equipment ranging from the highly equipped Machine Lab to the
                                    latest PCs in the Computer Labs. It also has a well equipped CAD laboratory.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse3">Q: What Are the projects undertaken by Electrical
                                        Engineering<br>Department ? </a></h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">: The Electrical Engineering Department is actively involved in
                                    undertaking many projects both at the student and at the faculty level. Some of the
                                    projects that have been undertaken by the Department are as follows: <br> 1. Digital
                                    Signal Processing and Application in Power Electronics Apparatus<br> 2. Fault
                                    Detection and Diagnosis in dynamical systems<br> 3. Solid State Control of D.C.
                                    Drive using Microprocessor based firing.<br> 4. Generation of Fuzzy rules
                                    to enhance PS stability.<br> 5. Fabrication of Three Converter Bridge circuit for
                                    Speed Control of D.C. Drives.<br> 6. Industrial Automation<br> 7. Artificial Neural
                                    Network based Automatic Generation Control of two area Reheat
                                    Thermal System.<br> 8. Security constrained Economic Load Dispatch with value point
                                    loading using Genetic Algorithm.<br> 9. Analysis of Automatic Generation Control of
                                    a two Hydro-Thermal system in Dispute Mode.<br> 10. Design
                                    and Development of a Fuzzy Controller for a Servomotor.<br>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse4">Q: What are the Courses involved ?</a></h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body"><b>Core</b><br> 1. Circuit Theory<br> 2. Electrical Engineering
                                    Materials<br> 3. Linear Electronic Circuits<br> 4. Measurement & Measuring
                                    Instruments<br> 5. Electromagnetic Fields<br> 6. Control System<br> 7. Power
                                    System<br> 8. Electrical
                                    Machines<br> 9. Digital Electronic Circuits<br> 10. Microprocessor Systems and
                                    Applications<br> 11. Industrial Electronics<br> 12. Industrial Instrumentation<br>
                                    13. Switchgear and Protection<br> 14. Principles of Communication<br> 15. Electric
                                    Drives<br> 16. Renewable Energy Source and Management<br> 17. Signal Processing and
                                    Applications<br> 18. Computer Applications in Electrical Engineering<br>


                                    <b>Electives</b><br> 1. High Voltage Engineering<br> 2. Higher Control System<br> 3.
                                    Digital Computer Organisation<br> 4. Computer Application in Power System<br> 5.
                                    Hydro Electric Engineering<br> 6. Electric Power Utilisation and
                                    Traction<br> 7. E.H.V., A.C. and D.C. Transmission<br> 8. Industrial Management<br>
                                    9. Control System Components and System Design<br> 10. Fault Detection and
                                    Diagnostic<br> 11. Electrodynamics and Advanced Field Theory.<br>
                                </div>
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

    <!-- faq ends   -->

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
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTS_KEDfHXYBslFTI_qPJIybDP3eceE-A&amp;sensor=false"></script>
    <script src="home/js/maps.js"></script>

    <script>
        console.clear();

        var svgns = "http://www.w3.org/2000/svg";
        var twoPI = Math.PI * 2;

        function ElectricLine(radius = 48, startOffset = 0) {

            var path = document.createElementNS(svgns, 'path');

            var coords = [];
            var centerX = 50;
            var centerY = 50;

            for (var i = 0; i <= twoPI + 0.1; i += 0.1) {
                coords.push(
                    centerX + (Math.sin(i + startOffset) * radius),
                    centerY + (Math.cos(i + startOffset) * radius)
                );
            }

            // Slightly randomize the points
            function updateElectricLine() {
                path.setAttribute(
                    'd',
                    coords.map((point, i) => {
                        return (
                            i == 0 ? 'M' :
                                i % 2 == 0 ? 'L' :
                                    ','
                        )
                            + Math.round((point + Math.random() * 3) * 100) / 100
                    }).join(''));
            }

            path.style.animationDelay = '0s, ' + (-Math.random()) + 's';
            //path.style.animationDuration = (1.5 + Math.random()) + 's, ' + 0.2 + ( Math.random() * 0.4 ) + 's';

            updateElectricLine();

            // Have to get it in the dom for `getTotalLength` to work
            var tempSVG = document.createElementNS(svgns, 'svg');
            tempSVG.appendChild(path);
            document.body.appendChild(tempSVG);

            // Get the line length
            var length = path.getTotalLength();
            document.body.removeChild(tempSVG);

            // Set an accurate strokeDasharray & offset for the animation
            path.style.strokeDasharray = length / 2; //( length * 0.48 ) + ' ' + ( length * 0.52 );
            path.style.strokeDashoffset = -length;

            return {
                el: path,
                update: updateElectricLine
            }
        }


        var lines = [
            new ElectricLine(35, Math.PI * 0.0),
            new ElectricLine(34.5, Math.PI * 1.0),
            new ElectricLine(34, Math.PI * 0.25),
            new ElectricLine(33.5, Math.PI * 1.25),
            new ElectricLine(33, Math.PI * 0.5),
            new ElectricLine(32.5, Math.PI * 1.5)
        ];

        var svg = document.querySelector('.electric-loader g');
        lines.forEach(line => { svg.appendChild(line.el); });

        var t = 0;
        function update() {
            requestAnimationFrame(update);
            if (t % 7 == 0) {
                lines.forEach(line => { line.update(); })
            }
            t++;
        }

        update();
    </script>
</body>


<!-- Mirrored from quomodosoft.com/html/appro/demo/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Nov 2021 12:42:25 GMT -->

</html>