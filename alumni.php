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
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
   
   
   <style>
       body {
            font-family: Arial, Helvetica, sans-serif;
            /* background: rgb(195, 34, 160); */
            background-color: #045de9;
            background-image: linear-gradient(315deg, #ffffff 0%, #afb2b3 74%);
            /* background: linear-gradient(0deg,
                    rgba(195, 34, 160, 1) 0%,
                    rgba(134, 45, 253, 1) 100%); */
            background-attachment: fixed;
            text-align: center;
        }
        
        .logo {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            border: white 2px solid;
        }
        
        .button {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            border-radius: 50px;
            width: 50%;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 16px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 1em;
            transition-duration: 0.4s;
            cursor: pointer;
            font-weight: bold;
        }
        
        .button:hover {
            background-color: white;
            text-decoration: none;
            border: 1px solid white;
            color: purple;
        }
        /* ////////////////////////////////////////////////////// */
        
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
        
        .card-title {
            font-size: 1.2rem;
        }
   </style>
   
   
   
   
   
   
   
   
   
   
   
   </head>
<body>

  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
  <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

  <h1 style="color: white;font-variant: small-caps;margin: 5px 0px;font-size: 3.5rem;font-weight: bolder;text-shadow: 2px 7px 5px rgba(0,0,0,0.3), 
    0px -4px 10px rgba(255,255,255,0.3);">Our Alumni</h1>
    <br><br>
    <div class="links mt-3">
        <button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample21" aria-expanded="false" aria-controls="collapseExample21">
            2017-2021
        </button>
        <div class="collapse px-lg-5 px-0" id="collapseExample21" style="width: 50%; margin: auto;">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3 p-3">
                <div class="col">
                    <div class="card" style="width: 18rem;border-radius: 25px;margin: auto;">
                        <div class="img-holder">
                            <img src="Group 1.svg" class="img-bg" alt="Card image cap">
                            <img src="alumni/pr2020.jpg" alt="" class="img-tag">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title "><strong>Bolisetti Dheeraj</strong></h3>
                            <p class="card-text">President</p>
                            <div style="display: flex;align-items: center;justify-content: space-around;">
                                <a href=" https://www.facebook.com/bolisetti.dheeraj.7"><i class="fab fa-facebook fa-2x"></i></a>
                                <a href="https://www.linkedin.com/in/bolisetti-dheeraj/ "><i class="fab fa-linkedin fa-2x"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;border-radius: 25px;margin: auto;">
                        <div class="img-holder">
                            <img src="Group 1.svg" class="img-bg" alt="Card image cap">
                            <img src="alumni/gs2020.jpg" alt="" class="img-tag">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title "><strong>Tanmay Sardar</strong></h3>
                            <p class="card-text">General Secretary</p>
                            <div style="display: flex;align-items: center;justify-content: space-around;">
                                <a href="https://www.facebook.com/tanmay.sardar.7355"><i class="fab fa-facebook fa-2x"></i></a>
                                <a href="https://www.linkedin.com/in/tanmay-s-14206213a/"><i class="fab fa-linkedin fa-2x"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample20" aria-expanded="false" aria-controls="collapseExample20">
            2016-2020
        </button>
        <div class="collapse px-lg-5 px-0" id="collapseExample20" style="width: 50%; margin: auto;">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-1 p-2">
                <div class="col">
                    <div class="card" style="width: 18rem;border-radius: 25px;margin: auto;">
                        <div class="img-holder">
                            <img src="Group 1.svg" class="img-bg" alt="Card image cap">
                            <img src="alumni/pr2019.jpeg" alt="" class="img-tag">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title "><strong>Binit Roy</strong></h3>
                            <p class="card-text">President</p>
                            <div style="display: flex;align-items: center;justify-content: space-around;">
                                <a href="https://www.facebook.com/binit.roy.338"><i class="fab fa-facebook fa-2x"></i></a>
                                <a href="https://www.linkedin.com/in/binit-roy-b4154b160/"><i class="fab fa-linkedin fa-2x"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;border-radius: 25px;margin: auto;">
                        <div class="img-holder">
                            <img src="Group 1.svg" class="img-bg" alt="Card image cap">
                            <img src="alumni/gs2019.jpeg" alt="" class="img-tag">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title "><strong>Swapnil Jadon</strong></h3>
                            <p class="card-text">General Secretary</p>
                            <div style="display: flex;align-items: center;justify-content: space-around;">
                                <a href="https://www.facebook.com/swapnil.jadon.5"><i class="fab fa-facebook fa-2x"></i></a>
                                <a href="https://www.linkedin.com/in/swapnil-jadon/"><i class="fab fa-linkedin fa-2x"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample19" aria-expanded="false" aria-controls="collapseExample19">
            2015-2019
        </button>
        <div class="collapse px-lg-5 px-0" id="collapseExample19" style="width: 50%; margin: auto;">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3 p-3">
                <div class="col">
                    <div class="card" style="width: 18rem;border-radius: 25px;margin: auto;">
                        <div class="img-holder">
                            <img src="Group 1.svg" class="img-bg" alt="Card image cap">
                            <img src="alumni/pr2018.jpeg" alt="" class="img-tag">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title "><strong>Anish Paul</strong></h3>
                            <p class="card-text">President</p>
                            <div style="display: flex;align-items: center;justify-content: space-around;">
                                <a href="  "><i class="fab fa-facebook fa-2x"></i></a>
                                <a href="https://www.linkedin.com/in/anishpaul95/"><i class="fab fa-linkedin fa-2x"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;border-radius: 25px;margin: auto;">
                        <div class="img-holder">
                            <img src="Group 1.svg" class="img-bg" alt="Card image cap">
                            <img src="alumni/gs2018.jpeg" alt="" class="img-tag">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title "><strong>Ashim Kr. Goswami</strong></h3>
                            <p class="card-text">General Secretary</p>
                            <div style="display: flex;align-items: center;justify-content: space-around;">
                                <a href="https://www.facebook.com/ashim.goswami.581"><i class="fab fa-facebook fa-2x"></i></a>
                                <a href="https://www.linkedin.com/in/ashim-goswami-bb25a2110/"><i class="fab fa-linkedin fa-2x"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample18" aria-expanded="false" aria-controls="collapseExample18">
            2014-2018
        </button>
        <div class="collapse px-lg-5 px-0" id="collapseExample18" style="width: 50%; margin: auto;">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3 p-3">
                <div class="col">
                    <div class="card" style="width: 18rem;border-radius: 25px;margin: auto;">
                        <div class="img-holder">
                            <img src="Group 1.svg" class="img-bg" alt="Card image cap">
                            <img src="alumni/pr2017.jpeg" alt="" class="img-tag">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title "><strong>Aditya Singh Rajput</strong></h3>
                            <p class="card-text">President</p>
                            <div style="display: flex;align-items: center;justify-content: space-around;">
                                <a href="https://www.facebook.com/aditya.raj.3990418"><i class="fab fa-facebook fa-2x"></i></a>
                                <a href=" "><i class="fab fa-linkedin fa-2x"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;border-radius: 25px;margin: auto;">
                        <div class="img-holder">
                            <img src="Group 1.svg" class="img-bg" alt="Card image cap">
                            <img src="alumni/gs2017.jpg" alt="" class="img-tag">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title "><strong>VK Sonkar</strong></h3>
                            <p class="card-text">General Secretary</p>
                            <div style="display: flex;align-items: center;justify-content: space-around;">
                                <a href="  https://www.facebook.com/vinaykumar.sonkar.98"><i class="fab fa-facebook fa-2x"></i></a>
                                <a href="https://www.linkedin.com/in/vk-sonkar-0b335a163"><i class="fab fa-linkedin fa-2x"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br><br><br>

      


     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
</body>
