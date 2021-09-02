<?php include('path.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="utf-8">
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/style.css">

   <link rel="stylesheet" type="text/css" href="assets/css/about.min.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;400;900&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/b0f1c3ae66.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	

    <style>
        /* body {
            font-family: 'Prompt', sans-serif;
        } */
        
        h1 {
            position: relative;
            padding: 0;
            margin: 0;
            font-family: "Raleway", sans-serif;
            font-weight: 300;
            font-size: 40px;
            color: #080808;
        }
        
        .twelve h1 {
            font-size: 26px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            width: 160px;
            text-align: center;
            margin: auto;
            white-space: nowrap;
            padding-bottom: 13px;
        }
        
        .divider {
            margin: 30px 30px;
            border: none;
            height: 20px;
            background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' height='100%' width='100%'><defs><pattern id='dotted' width='15' height='20' patternTransform='rotate(0 0 0)' patternUnits='userSpaceOnUse'><circle cx='3' cy='3' r='3' fill='teal'/><circle cx='12' cy='12' r='3' fill='teal'/> </pattern></defs><rect width='100%' height='100%' fill='url(%23dotted)'/></svg> ");
        }
        
        @media only screen and (max-width: 700px) {
            .name {
                flex-direction: column;
            }
        }
        
        .wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
        }
        
        .img-holder {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .img-bg {
            width: 100%;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
        }
        
        .img-tag {
            position: absolute;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: white 3px solid;
            box-shadow: 0px 0px 32px 10px rgba(0, 0, 0, 0.33);
        }
        
        .img-tag {
            position: absolute;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: white 2px solid;
            margin-top: -35px;
            transition: transform .5s;
        }
        
        .card {
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .card-title {
            font-size: 1.5rem;
        }
        
        .img-tag:hover {
            transform: scale(1.2);
            transition: transform .5s;
        }
        
        .fab {
            transition: transform .5s;
            color: black;
        }
        
        .fab:hover {
            transform: scale(1.3);
            transition: transform .5s;
        }
        
        .team {
            text-align: center;
            font-size: 3.5rem;
            font-weight: bolder;
        }
        
        .rank {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            margin: 50px 50px;
        }
        
        .jumbotron {
            position: relative;
            background: none;
            padding-bottom: 10px;
        }
        
        .jumbotron:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            background-image: url(ee-dept.png);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 100%;
            opacity: 0.3;
            z-index: -1;
        }
        
        .lead {
            font-weight: 500;
            font-weight: bold;
            text-align: center;
        }
        
        .heading {
            font-size: 26px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            width: 160px;
            text-align: center;
            margin: auto;
            white-space: nowrap;
            padding-bottom: 13px;
        }
        
        .heading:before {
            background-color: #008489;
            content: '';
            display: block;
            height: 3px;
            width: 75px;
            margin-bottom: 5px;
        }
        
        .heading:after {
            background-color: #008489;
            content: '';
            display: block;
            position: absolute;
            right: 0;
            bottom: 0;
            height: 3px;
            width: 75px;
            margin-bottom: 0.25em;
        }
    </style>
<body>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

<div class="jumbotron pt-6 container-fluid">
        <br>
        <h1 class="display-4 heading" style="text-align: center;">About Us</h1>
        <br>
        <p class="lead " style="margin-top: 10px; "> <u>Head of the Department:</u> Dr. Jyoti Prakash Mishra</p>
        <p class="lead "> <u>Faculty Advisor:</u> Dr. Prasanta Roy</p>
        <br>
        <p class="p-3" style="font-size: 1.2rem;margin-left:auto;margin-right: auto; font-weight: 500;text-align: justify; ">Forming a society of its own under each and every department is an age old tradition in NITS. Hence, Electrical Engineering department too, named as ELECTRA SOCIETY which mainly serves as a link between the teachers and the students. It serves
            various other purposes for the betterment of the students-</p>
        <ul style="font-size: 1.2rem;margin-left:auto;margin-right: auto; font-weight: 500; ">
            <li>The society helps in bringing out the best of its student traits.</li>
            <li>The Electra Society aims at providing guidance to the students in undertaking various activities.</li>
            <li>Various activities like technical seminars, debates, etc are organized in the field of electrical engineering for the students which enables them to gather knowledge and keep pace with the dynamic technologies.</li>
        </ul>



    </div>

    <div class="twelve mt-3 " style="font-size: 1.5rem;margin: 10px;text-align: center; font-weight: bolder; ">Keywords of Electra Society</div>

    <div class="mb-1 ">
        <div class="container-fluid p-0 " style="overflow-x: hidden; font-family: var(--font2); width: 80%; margin: auto; ">
            <ul style="font-size:1.1rem;margin-left:auto;margin-right: auto; ">
                <li><span style="font-weight: 600; ">Idea:</span> It requires a small idea to start for something big. Electra Society is open for any productive idea from its fellow members and it implements every feasible idea in the events and activities
                    that it conducts.</li>
                <li><span style="font-weight: 600; ">Concept:</span> The objective of the society is the overall development of its students. Be it technical or non-technical, it aims at making its students efficient and capable enough to face any problem
                    in the real world.</li>
                <li><span style="font-weight: 600; ">Teamwork:</span> Team efforts make the impossible possible. It is the backbone of Electra Society. Every member contributes in the best possible way to achieve the predefined set of goals.</li>
                <li> <span style="font-weight: 600; "> Development: </span>A good leadership and a sense of responsibility is very important for the smooth running of a team. Under the proper guidance of the able seniors, the juniors here are guided towards
                    a better future.
                </li>
            </ul>
        </div>
    </div>

    <div class="divider "></div>

    <div class="team ">OUR TEAM</div>
    <div class="rank " style="border-bottom: #080808 2px solid;">OUR SENIOR MEMBERS</div>

    <div class="wrapper ">


        <div class="card " style="width: 18rem;border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/bullbul_bhaiya.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Bulbul Hussain</strong></h3>
                <p class="card-text ">President</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/profile.php?id=100009279933916 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/in/bulbul-hussain-2799871a9/ " "><i class="fab fa-linkedin fa-2x "></i> </a>
            <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

    </div>
    </div>
    </div>

    <div class="card " style="width: 18rem;border-radius: 25px; ">
        <div class="img-holder ">
            <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
            <img src="about/gaurav_bhaiya.jpg " alt=" " class="img-tag ">
        </div>
        <div class="card-body text-center ">
            <h3 class="card-title "><strong>Gaurav Singh</strong></h3>
            <p class="card-text ">General Secretary</p>
            <div style="display: flex;align-items: center;justify-content: space-around; ">
                <a href="https://www.facebook.com/profile.php?id=100003308682971 "> <i class="fab fa-facebook fa-2x "></i></a>
                <a href=" https://www.linkedin.com/in/gaurav-singh-5824881b4/ "><i class="fab fa-linkedin fa-2x "></i> </a>
                <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

            </div>
        </div>
    </div>

    <div class="card " style="width: 18rem;border-radius: 25px; ">
        <div class="img-holder ">
            <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
            <img src="about/Prastuti.jpg " alt=" " class="img-tag ">
        </div>
        <div class="card-body text-center ">
            <h3 class="card-title "><strong>Prastuti Majumdar</strong></h3>
            <p class="card-text ">Vice President(General)</p>
            <div style="display: flex;align-items: center;justify-content: space-around; ">
                <a href=" https://www.facebook.com/prastuti.mazumdar.3 "> <i class="fab fa-facebook fa-2x "></i></a>
                <a href=" https://www.linkedin.com/in/prastuti-mazumdar-2943b41b5/ "><i class="fab fa-linkedin fa-2x "></i> </a>
                <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

            </div>
        </div>
    </div>

    <div class="card " style="width: 18rem;border-radius: 25px; ">
        <div class="img-holder ">
            <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
            <img src="about/arko.png " alt=" " class="img-tag ">
        </div>
        <div class="card-body text-center ">
            <h3 class="card-title "><strong>Arkadeep Kashyap</strong></h3>
            <p class="card-text ">Vice President(Technical)</p>
            <div style="display: flex;align-items: center;justify-content: space-around; ">
                <a href="https://www.facebook.com/arko.kashyap "> <i class="fab fa-facebook fa-2x "></i></a>
                <a href="https://www.linkedin.com/in/arkadeep-kashyap-8a186b1a7/ "><i class="fab fa-linkedin fa-2x "></i> </a>
                <a href=" "> <i class="fab fa-github fa-2x "></i></a>

            </div>
        </div>
    </div>
    <div class="card " style="width: 18rem;border-radius: 25px; ">
        <div class="img-holder ">
            <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
            <img src="about/Priyanki.jpg " alt=" " class="img-tag ">
        </div>
        <div class="card-body text-center ">
            <h3 class="card-title "><strong>Priyanki Priyam Borgohain</strong></h3>
            <p class="card-text ">Assistant General Secretary</p>
            <div style="display: flex;align-items: center;justify-content: space-around; ">
                <a href="https://www.facebook.com/pihu.gohain.58 "> <i class="fab fa-facebook fa-2x "></i></a>
                <a href="https://www.linkedin.com/in/priyanki-priyam-borgohain-ab11311b0/ "><i class="fab fa-linkedin fa-2x "></i> </a>
                <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

            </div>
        </div>
    </div>
    <div class="card " style="width: 18rem;border-radius: 25px; ">
        <div class="img-holder ">
            <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
            <img src="about/Nihal.jpeg " alt=" " class="img-tag ">
        </div>
        <div class="card-body text-center ">
            <h3 class="card-title "><strong>Nihal Dwivedi</strong></h3>
            <p class="card-text ">Senior Technical Member</p>
            <div style="display: flex;align-items: center;justify-content: space-around; ">
                <a href="https://www.facebook.com/nihal.dwivedi.7549 "> <i class="fab fa-facebook fa-2x "></i></a>
                <a href=" https://www.linkedin.com/in/nihal-dwivedi-6623281a0/ "><i class="fab fa-linkedin fa-2x "></i> </a>
                <a href=" "> <i class="fab fa-github fa-2x "></i></a>

            </div>
        </div>
    </div>
    <div class="card " style="width: 18rem;border-radius: 25px; ">
        <div class="img-holder ">
            <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
            <img src="about/kartik.jpg " alt=" " class="img-tag ">
        </div>
        <div class="card-body text-center ">
            <h3 class="card-title "><strong>Kartik Verma</strong></h3>
            <p class="card-text ">Senior Technical Member</p>
            <div style="display: flex;align-items: center;justify-content: space-around; ">
                <a href=" https://www.facebook.com/kartik.verma.5492 "> <i class="fab fa-facebook fa-2x "></i></a>
                <a href=" https://www.linkedin.com/in/kartik07/ "><i class="fab fa-linkedin fa-2x "></i> </a>
                <a href=" https://github.com/Kar2410 "> <i class="fab fa-github fa-2x "></i></a>

            </div>
        </div>
    </div>
    <div class="card " style="width: 18rem; border-radius: 25px; ">
        <div class="img-holder ">
            <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
            <img src="about/Sonali.jpg " alt=" " class="img-tag ">
        </div>
        <div class="card-body text-center ">
            <h3 class="card-title "><strong>Sonali Kanu</strong></h3>
            <p class="card-text ">Senior Executive Member</p>
            <div style="display: flex;align-items: center;justify-content: space-around; ">
                <a href="https://www.facebook.com/sonalikanu.999 "> <i class="fab fa-facebook fa-2x "></i></a>
                <a href="https://www.linkedin.com/in/sonali-kanu-0060a71ab/ "><i class="fab fa-linkedin fa-2x "></i> </a>
                <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

            </div>
        </div>
    </div>

    <div class="card " style="width: 18rem; border-radius: 25px; ">
        <div class="img-holder ">
            <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
            <img src="about/Sarmistha.jpg " alt=" " class="img-tag ">
        </div>
        <div class="card-body text-center ">
            <h3 class="card-title "><strong>Sarmistha Bora</strong></h3>
            <p class="card-text ">Literary Representative</p>
            <div style="display: flex;align-items: center;justify-content: space-around; ">
                <a href="https://www.facebook.com/sarmistha.bora1 "> <i class="fab fa-facebook fa-2x "></i></a>
                <a href=" https://www.linkedin.com/in/sarmistha-bora/ "><i class="fab fa-linkedin fa-2x "></i> </a>
                <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

            </div>
        </div>
    </div>



    </div>



    <div class="rank " style="margin: 90px 50px;border-bottom: #080808 2px solid; ">OUR JUNIOR MEMBERS</div>

    <div class="wrapper ">


        <div class="card " style="width: 18rem;border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="silence wench.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Biju Borah</strong></h3>
                <p class="card-text ">Technical Member(Web-D)</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href=" "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href=" "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <a href=" "> <i class="fab fa-github fa-2x "></i></a>

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem;border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/debasish.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Debasish Konwar</strong></h3>
                <p class="card-text ">Technical Member(Web-D)</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/debasish.konwar.25 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href=" https://www.linkedin.com/in/debasishkonwar "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <a href=" https://github.com/debasish-konwar "> <i class="fab fa-github fa-2x "></i></a>

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem;border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/ritesh.jpeg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Ritesh Kumar</strong></h3>
                <p class="card-text ">Technical Member(Web-D)</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href=" https://www.facebook.com/people/Ritesh-Kumar/100006925869901/ "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href=" https://www.linkedin.com/in/ritesh-kumar-435b08216 "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <a href="https://github.com/Ritesh565 "> <i class="fab fa-github fa-2x "></i></a>

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem;border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/tanmay.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Tanmay Tripathy</strong></h3>
                <p class="card-text ">Technical Member(Graphic)</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href=" https://www.facebook.com/profile.php?id=100009726932773 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href=" https://www.linkedin.com/in/tanmay-tripathy "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/shibam.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Shibam Debnath</strong></h3>
                <p class="card-text ">Technical Member(Graphic)</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/ind.iconic "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/mwlite/in/shibam-debnath-25b235206 "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/reetom.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Reetom Rana Dutta</strong></h3>
                <p class="card-text ">Technical Member(Graphic)</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/reetom.ranadutta "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/in/reetom-rana-dutta-34156220a "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem;border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/rohan.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Rohan Deb</strong></h3>
                <p class="card-text ">Technical Member(Graphic)</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/rohan.deb.908579 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/in/rohan-deb-444ab8204 "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <a href="https://github.com/RohanDeb1 "> <i class="fab fa-github fa-2x "></i></a>

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem; border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/juman.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Juman Jin Deka</strong></h3>
                <p class="card-text ">Technical Member(Graphic)</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/juman.sos "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/in/juman-jin-deka-4a3188202/ "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>
        <div class="card " style="width: 18rem; border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/ajay.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Gudla Ajay Babu</strong></h3>
                <p class="card-text ">Executive Member</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/ajay.dhoni.904 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/in/ajay-gudla-31545b20a "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem; border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/debalina.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Debalina Borah</strong></h3>
                <p class="card-text ">Executive Member</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/debalina.borah.9 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/mwlite/in/s-t-4599aa21a "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <a href="https://github.com/Debalina-Borah "> <i class="fab fa-github fa-2x "></i></a>

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem; border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/miraj.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Miraj Deka</strong></h3>
                <p class="card-text ">Executive Member</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href=" https://www.facebook.com/miraz.deka "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href=" https://www.linkedin.com/in/miraj-deka-32a78720a "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem; border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/gillian.jpeg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Gillian Anthony</strong></h3>
                <p class="card-text ">Executive Member</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/gillian.anthony.18 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/in/gillian-anthony-40b1a521a "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem; border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/suman.jfif " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Suman Goswami</strong></h3>
                <p class="card-text ">Executive Member</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/profile.php?id=100058459812857 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/in/suman-goswami-aabb93218/ "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem; border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/soumya.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Soumya Soni</strong></h3>
                <p class="card-text ">Executive Member</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/profile.php?id=100056034555533 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/in/soumya-soni-7a060719b "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem; border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/kavya.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Kavya Sharma</strong></h3>
                <p class="card-text ">Executive Member</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/profile.php?id=100008131120392 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/in/kavya-sharma-b143651ba "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem; border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/adrita.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Adrita Buragohain</strong></h3>
                <p class="card-text ">Executive Member</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/adrita.buragohain.7 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/in/adrita-buragohain-460080219 "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <a href="https://github.com/Adrita2002 "> <i class="fab fa-github fa-2x "></i></a>

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem; border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/agneesh.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Agneesh Dasgupta</strong></h3>
                <p class="card-text ">Executive Member</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/agneesh.dasgupta "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/in/agneesh-dasgupta-81090a1bb "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem; border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/shriyal.jpeg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Shriyal Tandon</strong></h3>
                <p class="card-text ">Executive Member</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://m.facebook.com/shriyal.tandon.1 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/mwlite/in/s-t-4599aa21a "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem; border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/subhanan.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Subhanan Goswami</strong></h3>
                <p class="card-text ">Executive Member</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/profile.php?id=100010018535611 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/in/subhanan-goswami-2a08031b1 "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>

        <div class="card " style="width: 18rem; border-radius: 25px; ">
            <div class="img-holder ">
                <img src="Group 1.svg " class="img-bg " alt="Card image cap ">
                <img src="about/reisha.jpg " alt=" " class="img-tag ">
            </div>
            <div class="card-body text-center ">
                <h3 class="card-title "><strong>Reisha Ahmed</strong></h3>
                <p class="card-text ">Executive Member</p>
                <div style="display: flex;align-items: center;justify-content: space-around; ">
                    <a href="https://www.facebook.com/reisha.ahmed.7 "> <i class="fab fa-facebook fa-2x "></i></a>
                    <a href="https://www.linkedin.com/in/reisa-ahmed-238a0b19a "><i class="fab fa-linkedin fa-2x "></i> </a>
                    <!-- <a href=" "> <i class="fab fa-github fa-2x "></i></a> -->

                </div>
            </div>
        </div>




    </div>

    <br><br><br><br>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Custom Script -->
<script src="assets/js/scripts.js"></script>

 <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

</body>

   

     

</head>