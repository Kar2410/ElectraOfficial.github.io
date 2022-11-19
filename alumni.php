<?php include('path.php'); 
include(ROOT_PATH . "/app/controllers/topics.php");


?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Alumni</title>
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/about.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="assets/css/about.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/alumni.css" />

<!-- browser tab icon -->
<link rel="shortcut icon" type="home/image/ico" href="home/images/elelogo.png" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b0f1c3ae66.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>


    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            /* background-image: linear-gradient(315deg, #ffffff 0%, #afb2b3 74%); */
        }

        /* updated */
        #card-section {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            /* background: linear-gradient(to right, #000428, #004e92); */
            /* background-image: linear-gradient(315deg, #ffffff 0%, #afb2b3 74%); */
            min-height: 100vh;
        }

        .card-container {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin: 40px 0;
        }

        .card-container .card {
            position: relative;
            width: 300px;
            height: 400px;
            background: rgba(255, 255, 255, 0.05);
            margin: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .card-container .card .content {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            opacity: 0.6;
            transition: 0.5s;
        }

        .card-container .card:hover .content {
            opacity: 1;
            transform: translateY(-20px);
        }

        .card-container .card .content .imgBx {
            position: relative;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            border: 10px solid rgba(0, 0, 0, 0.25);
        }

        .card-container .card .content .imgBx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-container .card .content .contentBx h3 {
            /* color: #fff; */
            color: #5c5b5b;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 500;
            font-size: 18px;
            text-align: center;
            margin: 20px 0 10px;
            line-height: 1.1em;
        }

        .card-container .card .content .contentBx h3 span {
            font-size: 12px;
            font-weight: 300;
            text-transform: initial;
        }

        .card-container .card .sci {
            position: absolute;
            display: flex;
            bottom: 50px;
            padding-left: 0 !important;
        }

        .card-container .card .sci li {
            list-style: none;
            margin: 0 25px;
            transform: translateY(40px);
            transition: 0.5s;
            opacity: 0;
        }

        .card-container .card .sci li a {
            /* color: #fff; */
            color: #5c5b5b;
            font-size: 24px;
        }

        .card-container .card:hover .sci li {
            transform: translateY(0);
            opacity: 1;
        }

        .batch span:hover{
            color:grey;
        }
        
        .card-container .card .sci li:nth-child(2) {
            transition-delay: 0.1s;
        }

        .card-container .card .sci li:nth-child(3) {
            transition-delay: 0.2s;
        }


        /* for mobile screen no hover effect */
        @media screen and (max-width:768px) {
            .card-container .card .sci li {
                transform: translateY(0);
                opacity: 1;
            }

            .card-container .card .content {
                opacity: 1;
                transform: translateY(-20px);
            }
        }
    </style>
</head>


<body>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

    <div class="container">
        <section>
            <div class="tabs tabs-style-linebox">
                <nav>
                    <ul>
                        <li class="batch"><a href="#section-linebox-1" ><span>2017-2021</span></a></li>
                        <li class="batch"><a href="#section-linebox-2" ><span>2016-2020</span></a></li>
                        <li class="batch"><a href="#section-linebox-3" ><span>2015-2019</span></a></li>
                        <li class="batch"><a href="#section-linebox-4" ><span>2014-2018</span></a></li>
                    </ul>
                </nav>
                <div class="content-wrap">
                    <section id="section-linebox-1">
                        <div id='card-section'>
                            <div class="card-container">
                                <div class="card">
                                    <div class="content">
                                        <div class="imgBx">
                                            <img src="assets/images/alumni/pr2020.jpg" />
                                        </div>
                                        <div class="contentBx">
                                            <h3>Bolisetti Dheeraj<br /><span>President</span></h3>
                                        </div>
                                    </div>
                                    <ul class="sci">
                                        <li>
                                            <a href="https://www.facebook.com/bolisetti.dheeraj.7"><i
                                                    class="fab fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/bolisetti-dheeraj"><i
                                                    class="fab fa-linkedin"></i> </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <div class="content">
                                        <div class="imgBx">
                                            <img src="assets/images/alumni/gs2020.jpg" />
                                        </div>
                                        <div class="contentBx">
                                            <h3>Tanmay Sardar<br /><span>General Secretary</span></h3>
                                        </div>
                                    </div>
                                    <ul class="sci">
                                        <li>
                                            <a href="https://www.facebook.com/tanmay.sardar.7355"><i
                                                    class="fab fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/tanmay-s-14206213a"><i
                                                    class="fab fa-linkedin"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="section-linebox-2">
                        <div id='card-section'>
                            <div class="card-container">
                                <div class="card">
                                    <div class="content">
                                        <div class="imgBx">
                                            <img src="assets/images/alumni/pr2019.jpeg" />
                                        </div>
                                        <div class="contentBx">
                                            <h3>Binit Roy<br /><span>President</span></h3>
                                        </div>
                                    </div>
                                    <ul class="sci">
                                        <li>
                                            <a href="https://www.facebook.com/binit.roy.338"><i
                                                    class="fab fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/binit-roy-b4154b160/"><i
                                                    class="fab fa-linkedin"></i> </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <div class="content">
                                        <div class="imgBx">
                                            <img src="assets/images/alumni/gs2019.jpeg" />
                                        </div>
                                        <div class="contentBx">
                                            <h3>Swapnil Jadon<br /><span>General Secretary</span></h3>
                                        </div>
                                    </div>
                                    <ul class="sci">
                                        <li>
                                            <a href="https://www.facebook.com/swapnil.jadon.5"><i
                                                    class="fab fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/swapnil-jadon/"><i
                                                    class="fab fa-linkedin"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="section-linebox-3">
                        <div id='card-section'>
                            <div class="card-container">
                                <div class="card">
                                    <div class="content">
                                        <div class="imgBx">
                                            <img src="assets/images/alumni/pr2018.jpeg" />
                                        </div>
                                        <div class="contentBx">
                                            <h3>Anish Paul<br /><span>President</span></h3>
                                        </div>
                                    </div>
                                    <ul class="sci">
                                        <li>
                                            <a href="https://www.linkedin.com/in/anishpaul95/"><i
                                                    class="fab fa-linkedin"></i> </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <div class="content">
                                        <div class="imgBx">
                                            <img src="assets/images/alumni/gs2018.jpeg" />
                                        </div>
                                        <div class="contentBx">
                                            <h3>Ashim Kr. Goswami<br /><span>General Secretary</span></h3>
                                        </div>
                                    </div>
                                    <ul class="sci">
                                        <li>
                                            <a href="https://www.facebook.com/ashim.goswami.581"><i
                                                    class="fab fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/ashim-goswami-bb25a2110/"><i
                                                    class="fab fa-linkedin"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="section-linebox-4">
                        <div id='card-section'>
                            <div class="card-container">
                                <div class="card">
                                    <div class="content">
                                        <div class="imgBx">
                                            <img src="assets/images/alumni/pr2017.jpeg" />
                                        </div>
                                        <div class="contentBx">
                                            <h3>Aditya Singh Rajput<br /><span>President</span></h3>
                                        </div>
                                    </div>
                                    <ul class="sci">
                                        <li>
                                            <a href="https://www.facebook.com/aditya.raj.3990418"><i
                                                    class="fab fa-facebook"></i> </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <div class="content">
                                        <div class="imgBx">
                                            <img src="assets/images/alumni/gs2017.jpg" />
                                        </div>
                                        <div class="contentBx">
                                            <h3>V.K. Sonkar<br /><span>General Secretary</span></h3>
                                        </div>
                                    </div>
                                    <ul class="sci">
                                        <li>
                                            <a href="https://www.facebook.com/vinaykumar.sonkar.98"><i
                                                    class="fab fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/vk-sonkar-0b335a163"><i
                                                    class="fab fa-linkedin"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div><!-- /content -->
            </div><!-- /tabs -->
        </section>
    </div><!-- /container -->

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/cbpFWTabs.js"></script>
    <script src="assets/js/modernizr.custom.js"></script>

    

    <script>
        (function () {

            [].slice.call(document.querySelectorAll('.tabs')).forEach(function (el) {
                new CBPFWTabs(el);
            });

        })();
    </script>

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
</body>
