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
    <link rel="shortcut icon" type="home/image/ico" href="home/images/elelogo.png" />

    <!-- footer css -->
    <link rel="stylesheet" href="assets/css/footer.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


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
                                    <i class="fa fa-user"></i>
                                    <?php echo $_SESSION['username']; ?>
                                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                                </a>
                                <ul>
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
                                <p>Forming a society of its own under each and every department is an age old tradition in NITS. Hence, Electrical Engineering department too, named as ELECTRA SOCIETY which mainly serves as a link between the teachers and the students. It serves various other purposes for the betterment of the students.</p>
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
                                <p>The objective of the society is the overall development of its students. Be it technical or non-technical, it aims at making its students efficient and capable enough to face any problem in the real world.</p>
                                <div class="space-50"></div>
                                <a href="https://www.youtube.com/watch?v=VTvhq276WRo" class="btn btn-icon video-popup"><span class="ti-control-play"></span>Watch Video</a>
                            </div>
                            <div class="item">
                                <h1>Electra Society <br />Teamwork: </h1>
                                <div class="space-10"></div>
                                <p>Team efforts make the impossible possible. It is the backbone of Electra Society. Every member contributes in the best possible way to achieve the predefined set of goals.</p>
                                <div class="space-50"></div>
                                <a href="https://www.youtube.com/watch?v=VTvhq276WRo" class="btn btn-icon video-popup"><span class="ti-control-play"></span>Watch Video</a>
                            </div>
                            <div class="item">
                                <h1>Electra Society <br />Development: </h1>
                                <div class="space-10"></div>
                                <p>A good leadership and a sense of responsibility is very important for the smooth running of a team. Under the proper guidance of the able seniors, the juniors here are guided towards a better future. </p>
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
                    <p>
                        Forming a society of its own under each and every department is an age old tradition in NITS. Hence,Electrical Engineering department too, named as ELECTRA SOCIETY which mainly serves as a link between the teachers and the students. It serves various other purposes for the betterment of the students.

                    </p>
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
                    <p>The keywords of the Electra Society are as follows:</p>
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
                                <p>It requires a small idea to start for something
                                    big. Electra Society is open for any productive idea from its fellow members and it implements
                                    every feasible idea in the events and activities
                                    that it conducts.</p>
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
                                <p>The objective of the society is the overall
                                    development of its students. Be it technical or non-technical, it aims at making its students
                                    efficient and capable enough to face any problem
                                    in the real world.</p>
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
                                <p>Team efforts make the impossible possible. It
                                    is the backbone of Electra Society. Every member contributes in the best possible way to achieve
                                    the predefined set of goals.</p>
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
                                <p>A good leadership and a sense of
                                    responsibility is very important for the smooth running of a team. Under the proper guidance of
                                    the able seniors, the juniors here are guided towards
                                    a better future.</p>
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
                    <p>Recent announcements are shown below. Click on 'View All' to go to Announcements page</p>
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
                                <a href="announce_single.php?id=<?php echo $post['id']; ?>" class="btn btn-link">Read more</a>
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
                    <p>Recent blogs are shown below. Click on 'View All' to go to Blogs page</p>
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
    <!-- blog ends -->



    <!--Team-Section-->
    <section class="gray-bg" id="team">
        <div class="space-40"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                    <h3 class="text-uppercase">Our Team</h3>
                    <p>The Electra Society Team consists of the following members:</p>
                </div>
            </div>
            <div class="space-60"></div>

            <h3 class="text-uppercase">SENIOR MEMBERS</h3>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/bullbul_bhaiya.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">BULBUL HUSSAIN</h5>
                            <p>President</p>
                            <div class="social-menu" target>
                                <hr>
                                <a target="_blank"  href="https://www.facebook.com/profile.php?id=100009279933916"><span class="ti-facebook"></span></a>
                                <a target="_blank"  href="https://www.linkedin.com/in/bulbul-hussain-2799871a9/"><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/gaurav_bhaiya.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">GAURAV SINGH</h5>
                            <p>General Secretary</p>
                            <div class="social-menu">
                                <hr>
                                <a target="_blank"  href=" https://www.facebook.com/profile.php?id=100003308682971"><span class="ti-facebook"></span></a>
                                <a target="_blank"  href="https://www.linkedin.com/in/gaurav-singh-5824881b4/ "><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/Prastuti.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">PRASTUTI MAJUMDAR</h5>
                            <p>Vice President(General)</p>
                            <div class="social-menu">
                                <hr>
                                <a target="_blank"  href=" https://www.facebook.com/prastuti.mazumdar.3"><span class="ti-facebook"></span></a>
                                <a target="_blank"  href="https://www.linkedin.com/in/prastuti-mazumdar-2943b41b5/ "><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/arko.png" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">ARKADEEP KASHYAP</h5>
                            <p>Vice President(Technical)</p>
                            <div class="social-menu">
                                <hr>
                                <a target="_blank"  href="https://www.facebook.com/arko.kashyap"><span class="ti-facebook"></span></a>
                                <!-- <a href="#"><span class="ti-github"></span></a> -->
                                <a target="_blank"  href="https://www.linkedin.com/in/arkadeep-kashyap-8a186b1a7/"><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-team relative panel fix">
                            <img src="assets/images/about/Priyanki.jpg" alt="">
                            <div class="team_details text-center">
                                <h5 class="text-uppercase">PRIYANKI PRIYAM BORGOHAIN</h5>
                                <p>Assistant General Secretary</p>
                                <div class="social-menu">
                                    <hr>
                                    <a target="_blank"  href=" https://www.facebook.com/pihu.gohain.58"><span class="ti-facebook"></span></a>
                                    <a target="_blank"  href=" https://www.linkedin.com/in/priyanki-priyam-borgohain-ab11311b0/"><span class="ti-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-team relative panel fix">
                            <img src="assets/images/about/kartik.jpg" alt="">
                            <div class="team_details text-center">
                                <h5 class="text-uppercase">KARTIK VERMA</h5>
                                <p>Senior Technical Member</p>
                                <div class="social-menu">
                                    <hr>
                                    <a target="_blank"  href="https://www.facebook.com/kartik.verma.5492"><span class="ti-facebook"></span></a>
                                    <a target="_blank"  href="https://github.com/Kar2410"><span class="ti-github"></span></a>
                                    <a target="_blank"  href="https://www.linkedin.com/in/kartik07/"><span class="ti-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-team relative panel fix">
                            <img src="assets/images/about/Nihal.jpeg" alt="">
                            <div class="team_details text-center">
                                <h5 class="text-uppercase">NIHAL DWIVEDI</h5>
                                <p>Senior Technical Member</p>
                                <div class="social-menu">
                                    <hr>
                                    <a target="_blank"  href="https://www.facebook.com/nihal.dwivedi.7549"><span class="ti-facebook"></span></a>
                                    <a target="_blank"  href="https://www.linkedin.com/in/nihal-dwivedi-6623281a0/"><span class="ti-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="single-team relative panel fix">
                            <img src="assets/images/about/Sonali.jpg" alt="">
                            <div class="team_details text-center">
                                <h5 class="text-uppercase">SONALI KANU</h5>
                                <p>Senior Executive Member</p>
                                <div class="social-menu">
                                    <hr>
                                    <a target="_blank"  href="https://www.facebook.com/sonalikanu.999"><span class="ti-facebook"></span></a>
                                    <a target="_blank"  href="https://www.linkedin.com/in/sonali-kanu-0060a71ab/"><span class="ti-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="single-team relative panel fix">
                                <img src="assets/images/about/Sarmistha.jpg" alt="">
                                <div class="team_details text-center">
                                    <h5 class="text-uppercase">SARMISTHA BORA</h5>
                                    <p>Literary Representative</p>
                                    <div class="social-menu">
                                        <hr>
                                        <a target="_blank"  href="https://www.facebook.com/sarmistha.bora1"><span class="ti-facebook"></span></a>
                                        <a target="_blank"  href="https://www.linkedin.com/in/sarmistha-bora/"><span class="ti-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="space-80"></div>
                <!-- <div class="space-60"></div> -->
                <h3 class="text-uppercase">JUNIOR MEMBERS</h3>
                <section class="gray-bg" id="team">


                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="single-team relative panel fix">
                                <img src="assets/images/about/biju.jpg" alt="">
                                <div class="team_details text-center">
                                    <h5 class="text-uppercase">BIJU BORAH</h5>
                                    <p>Technical Member(Web-D)</p>
                                    <div class="social-menu">
                                        <hr>
                                        <a target="_blank"  href="https://www.linkedin.com/in/biju-borah-1bb78620a/"><span class="ti-facebook"></span></a>
                                        <a target="_blank"  href="https://github.com/biju-borah"><span class="ti-github"></span></a>
                                        <a target="_blank"  href="https://www.linkedin.com/in/biju-borah-1bb78620a/"><span class="ti-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="single-team relative panel fix">
                                <img src="assets/images/about/debasish.jpg" alt="">
                                <div class="team_details text-center">
                                    <h5 class="text-uppercase">DEBASISH KONWAR</h5>
                                    <p>Technical Member(Web-D)</p>
                                    <div class="social-menu">
                                        <hr>
                                        <a target="_blank"  href="https://www.facebook.com/debasish.konwar.25"><span class="ti-facebook"></span></a>
                                        <a target="_blank"  href="https://github.com/debasish-konwar"><span class="ti-github"></span></a>
                                        <a target="_blank"  href="https://www.linkedin.com/in/debasishkonwar/"><span class="ti-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="single-team relative panel fix">
                                <img src="assets/images/about/ritesh.jpeg" alt="">
                                <div class="team_details text-center">
                                    <h5 class="text-uppercase">RITESH KUMAR</h5>
                                    <p>Technical Member(Web-D)</p>
                                    <div class="social-menu">
                                        <hr>
                                        <a target="_blank"  href="https://www.facebook.com/people/Ritesh-Kumar/100006925869901/"><span class="ti-facebook"></span></a>
                                        <a target="_blank"  href="https://github.com/Ritesh565"><span class="ti-github"></span></a>
                                        <a target="_blank"  href="https://www.linkedin.com/in/ritesh-kumar-435b08216"><span class="ti-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="single-team relative panel fix">
                                <img src="assets/images/about/tanmay.jpg" alt="">
                                <div class="team_details text-center">
                                    <h5 class="text-uppercase">TANMAY TRIPATHY</h5>
                                    <p>Technical Member(Graphics)</p>
                                    <div class="social-menu">
                                        <hr>
                                        <a target="_blank"  href="https://www.facebook.com/profile.php?id=100009726932773"><span class="ti-facebook"></span></a>
                                        <!-- <a href="#"><span class="ti-github"></span></a> -->
                                        <a target="_blank"  href="https://www.linkedin.com/in/tanmay-tripathy"><span class="ti-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="single-team relative panel fix">
                                <img src="assets/images/about/reetom.jpg" alt="">
                                <div class="team_details text-center">
                                    <h5 class="text-uppercase">REETOM RANA DUTTA</h5>
                                    <p>Technical Member(Graphics)</p>
                                    <div class="social-menu">
                                        <hr>
                                        <a target="_blank"  href="https://www.facebook.com/reetom.ranadutta"><span class="ti-facebook"></span></a>
                                        <!-- <a href="#"><span class="ti-github"></span></a> -->
                                        <a target="_blank"  href="https://www.linkedin.com/in/reetom-rana-dutta-34156220a"><span class="ti-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="single-team relative panel fix">
                                <img src="assets/images/about/rohan.jpg" alt="">
                                <div class="team_details text-center">
                                    <h5 class="text-uppercase">ROHAN DEB</h5>
                                    <p>Technical Member(Graphics)</p>
                                    <div class="social-menu">
                                        <hr>
                                        <a target="_blank"  href="https://www.facebook.com/rohan.deb.908579"><span class="ti-facebook"></span></a>
                                        <a target="_blank"  href="https://github.com/RohanDeb1"><span class="ti-github"></span></a>
                                        <a target="_blank"  href="https://www.linkedin.com/in/rohan-deb-444ab8204"><span class="ti-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="single-team relative panel fix">
                                <img src="assets/images/about/juman.jpg" alt="">
                                <div class="team_details text-center">
                                    <h5 class="text-uppercase">JUMAN JIN DEKA</h5>
                                    <p>Technical Member(Graphics)</p>
                                    <div class="social-menu">
                                        <hr>
                                        <a target="_blank"  href="https://www.facebook.com/juman.sos"><span class="ti-facebook"></span></a>
                                        <!-- <a href="#"><span class="ti-github"></span></a> -->
                                        <a target="_blank"  href="https://www.linkedin.com/in/juman-jin-deka-4a3188202/"><span class="ti-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="single-team relative panel fix">
                                <img src="assets/images/about/prakritish.jpg" alt="">
                                <div class="team_details text-center">
                                    <h5 class="text-uppercase">PROKRITISH NISSAN BORA</h5>
                                    <p>Technical Member(Graphics)</p>
                                    <div class="social-menu">
                                        <hr>
                                        <a target="_blank"  href="https://www.facebook.com/prakritish.nissan"><span class="ti-facebook"></span></a>
                                        <!-- <a href="#"><span class="ti-github"></span></a> -->
                                        <a target="_blank"  href="https://www.linkedin.com/in/prakritish-nissan-249428220/"><span class="ti-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/arpit.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">ARPIT JAISWAL</h5>
                            <p>Technical Member(Graphics)</p>
                            <div class="social-menu">
                                <hr>
                                <a target="_blank"  href="https://www.facebook.com/arpit.jaiswal.965/"><span class="ti-facebook"></span></a>
                                <!-- <a href="#"><span class="ti-github"></span></a> -->
                                <a target="_blank"  href="https://www.linkedin.com/in/arpit-jaiswal-7166b0201/"><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/miraj.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">MIRAJ DEKA</h5>
                            <p>Executive Member</p>
                            <div class="social-menu">
                                <hr>
                                <a target="_blank"  href="https://www.facebook.com/miraz.deka"><span class="ti-facebook"></span></a>
                                <!-- <a href="#"><span class="ti-github"></span></a> -->
                                <a target="_blank"  href="https://www.linkedin.com/in/miraj-deka-32a78720a"><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/ajay.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">GUDLA AJAY BABU</h5>
                            <p>Executive Member</p>
                            <div class="social-menu">
                                <hr>
                                <a target="_blank"  href="https://www.facebook.com/ajay.dhoni.904"><span class="ti-facebook"></span></a>
                                <!-- <a href="#"><span class="ti-github"></span></a> -->
                                <a target="_blank"  href="https://www.linkedin.com/in/ajay-gudla-31545b20a"><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/kavya.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">KAVYA SHARMA</h5>
                            <p>Executive Member</p>
                            <div class="social-menu">
                                <hr>
                                <a target="_blank"  href="https://www.facebook.com/profile.php?id=100008131120392"><span class="ti-facebook"></span></a>
                                <!-- <a href="#"><span class="ti-github"></span></a> -->
                                <a target="_blank"  href="https://www.linkedin.com/in/kavya-sharma-b143651ba"><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/gillian.jpeg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">GILLIAN ANTHONY</h5>
                            <p>Executive Member</p>
                            <div class="social-menu">
                                <hr>
                                <a target="_blank"  href="https://www.facebook.com/gillian.anthony.18"><span class="ti-facebook"></span></a>
                                <!-- <a href="#"><span class="ti-github"></span></a> -->
                                <a target="_blank"  href="https://www.linkedin.com/in/gillian-anthony-40b1a521a"><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/suman.jpeg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">SUMAN GOSWAMI</h5>
                            <p>Executive Member</p>
                            <div class="social-menu">
                                <hr>
                                <a target="_blank"  href="https://www.facebook.com/profile.php?id=100058459812857"><span class="ti-facebook"></span></a>
                                <!-- <a href="#"><span class="ti-github"></span></a> -->
                                <a target="_blank"  href="https://www.linkedin.com/in/suman-goswami-aabb93218/"><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/debalina.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">DEBALINA BORAH</h5>
                            <p>Executive Member</p>
                            <div class="social-menu">
                                <hr>
                                <a target="_blank"  href="https://www.facebook.com/debalina.borah.9"><span class="ti-facebook"></span></a>
                                <!-- <a href="#"><span class="ti-github"></span></a> -->
                                <a target="_blank"  href="https://www.linkedin.com/mwlite/in/s-t-4599aa21a"><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/soumya.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">SOUMYA SONI</h5>
                            <p>Executive Member</p>
                            <div class="social-menu">
                                <hr>
                                <a target="_blank"  href="https://www.facebook.com/profile.php?id=100056034555533"><span class="ti-facebook"></span></a>
                                <!-- <a href="#"><span class="ti-github"></span></a> -->
                                <a target="_blank"  href="https://www.linkedin.com/in/soumya-soni-7a060719b"><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/shriyal.jpeg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">SHRIYAL TANDON</h5>
                            <p>Executive Member</p>
                            <div class="social-menu">
                                <hr>
                                <a target="_blank"  href="https://m.facebook.com/shriyal.tandon.1"><span class="ti-facebook"></span></a>
                                <!-- <a href="#"><span class="ti-github"></span></a> -->
                                <a target="_blank"  href="https://www.linkedin.com/mwlite/in/s-t-4599aa21a"><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-team relative panel fix">
                        <img src="assets/images/about/reisha.jpg" alt="">
                        <div class="team_details text-center">
                            <h5 class="text-uppercase">REISHA AHMED</h5>
                            <p>Executive Member</p>
                            <div class="social-menu">
                                <hr>
                                <a target="_blank"  href="https://www.facebook.com/reisha.ahmed.7"><span class="ti-facebook"></span></a>
                                <!-- <a href="#"><span class="ti-github"></span></a> -->
                                <a target="_blank"  href="https://www.linkedin.com/in/reisa-ahmed-238a0b19a"><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="space-80"></div>



        <div class="space-80"></div>
    </section>
    <!--Team-Section/-->







    <!-- new -->
    <!-- end -->
    <!-- faq section begin -->

    <section class="fix" id="faq">
        <div class="space-80"></div>
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                    <h3 class="text-uppercase">Frequently asked questions</h3>
                    <p>Following are some Frequently Asked Questions by students:</p>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="col-xs-12 col-md-6 wow fadeInUp">
                    <div class="space-60"></div>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Q: Brief about Department of Electrical Engineering, National Institute of Technology, Silchar. </a></h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse ">
                                <div class="panel-body">The Department of Electrical Engineering of NIT, Silchar is one of the finest and well equipped Electrical departments of the north-east region. It boasts of having a highly qualified faculty with an unparalled level of expertise in
                                    their field. Under the able Headship of Dr. B. K. Roy and a strong faculty team, the Department offers an 8 Semester B.Tech. Programme in Electrical Engineering, a four Semester M.Tech. Programme in Power Energy Systems Engineering
                                    and also a well integrated Ph.D. programme. The department offers core courses in Power Systems, Control Systems, Electrical Machines, Instrumentation, Switchgear and Industrial Protection, Microprocessors and Microcontrollers
                                    etc. Apart from these, the final year students can choose from a wide array of electives in the form of Computer Aided Power Systems, Flexible AC Transmission etc. In coordination with the highly stimulating lectures and quality
                                    enhancing tutorials in these courses, various practical courses are also held in the state-of-the-art Lab facilities of the department like Machine Lab, Measurement Lab, Circuit Theory Lab and Microprocessor Lab, to name a few.
                                    The Department of Electrical Engineering is dynamic and vibrant in true sense. Various research and development activities taken up by the department put the students on busy schedules enabling them to blend to the modern industrial
                                    requirements. The course structure is constantly restructured to meet the ever changing requirements of the volatile industrial market, keeping the essence of the core Electrical Engineering intact. The pure expertise and dedication
                                    of the faculty members along with infrastructural facilities coupled with the perseverance of the students have catapulted the branch to the top league. Placement offers to the students have always shown an ever increasing trend
                                    and promise to be the best in future with the incoming boom of Power sector. The department also has its own society, the 'Electra' comprising of the faculty members and the 300 strong student members. It caters to all the academic
                                    and co-curricular persona of the branch. Cultural events for the members are never scarce along with quizzes, aptitude tests, presentations and industrial tours which are organised to bring the best out of a today's Electrical
                                    Engineer.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Q: What are the Programme Educational Objectives (PEOs) of the Department of Electrical Engineering ? </a></h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">Programme Educational Objectives (B.Tech):<br> The Electrical Engineering Department in conjunction with its constituents has established the following Program Educational Objectives. The Electrical Engineering Program will graduate
                                    Electrical Engineering students who :<br> 1. will be productive in the professional practice of engineering and related fields, will be able to identify, formulate, create, analyze, design, develop, optimize, and implement electrical
                                    systems.<br> 2. will contribute to industry and/or government organizations by applying the skills and knowledge acquired during the program period.<br> 3. shall be prepared for the successful pursuit of graduate studies and shall
                                    have the ability to engage in lifelong learning in electrical engineering and related fields and will understand the challenges of a dynamically and globalized changing world adapting their skills through continuous learning and
                                    self improvement.<br> 4. will be provided with solid foundation in mathematical and engineering fundamentals required to solve engineering problems and also to pursue research within the appropriate technological, global, societal,
                                    ethical and organizational context.<br> 5. will be able to inculcate a sense of ethics, professionalism and effective communication skills amongst graduates.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Q: Brief about the academics of Electrical Engineering Department.</a></h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">The Electrical Engineering Department was established in 1977 along with the establishment of Institute. It has been one of the best departments in terms of infrastructural facilities and faculties. It has got many well equipped
                                    labs with modern equipment ranging from the highly equipped Machine Lab to the latest PCs in the Computer Labs. It also has a well equipped CAD laboratory..</div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Q: What are the Courses involved ?</a></h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body"><b>Core</b><br> 1. Circuit Theory<br> 2. Electrical Engineering Materials<br> 3. Linear Electronic Circuits<br> 4. Measurement & Measuring Instruments<br> 5. Electromagnetic Fields<br> 6. Control System<br> 7. Power System<br> 8. Electrical
                                    Machines<br> 9. Digital Electronic Circuits<br> 10. Microprocessor Systems and Applications<br> 11. Industrial Electronics<br> 12. Industrial Instrumentation<br> 13. Switchgear and Protection<br> 14. Principles of Communication<br> 15. Electric Drives<br> 16. Renewable Energy Source and Management<br> 17. Signal Processing and Applications<br> 18. Computer Applications in Electrical Engineering<br>


                                    <b>Electives</b><br> 1. High Voltage Engineering<br> 2. Higher Control System<br> 3. Digital Computer Organisation<br> 4. Computer Application in Power System<br> 5. Hydro Electric Engineering<br> 6. Electric Power Utilisation and
                                    Traction<br> 7. E.H.V., A.C. and D.C. Transmission<br> 8. Industrial Management<br> 9. Control System Components and System Design<br> 10. Fault Detection and Diagnostic<br> 11. Electrodynamics and Advanced Field Theory.<br>
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
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="home/js/main.js"></script>
    <!--Maps JS-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTS_KEDfHXYBslFTI_qPJIybDP3eceE-A&amp;sensor=false"></script>
    <script src="home/js/maps.js"></script>
</body>


<!-- Mirrored from quomodosoft.com/html/appro/demo/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Nov 2021 12:42:25 GMT -->

</html>