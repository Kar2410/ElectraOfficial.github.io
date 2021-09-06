<?php include('path.php'); ?>


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



  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b0f1c3ae66.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


    <style>

body{
            /* font-family: Arial, Helvetica, sans-serif; */
            
            background-image: linear-gradient(315deg, #ffffff 0%, #afb2b3 74%);
            background-attachment: fixed;
            
            margin: 0;
        }
        
        .control {
            background-color: #de0000;
            border-radius: 6px;
            padding: 5px 10px;
            border-style: none;
            font-family: arial;
            font-size: 1em;
            font-weight: bold;
            color: #fff;
            outline: none;
            margin: 10px;
        }
        
        .control:hover {
            cursor: pointer;
            color: #e8e8e8;
        }
        
        .control:active {
            color: #000000;
            padding: 4px 9px;
            font-size: .95em;
        }
        /* Main accordion container 
========================================================================== */
        
        .accordion {
            width: 50%;
            margin: 10px auto 0;
            padding: 5px 20px;
            border-radius: 20px;
            border: 2px solid white;
            /* color: white; */
            transition: all .5s ease;
            z-index: 3;
            font-family: Arial, Helvetica, sans-serif;
        }

   
        
        .accordion:hover {
            cursor: pointer;
            background-color: teal;
            border: 1px solid teal;
            text-decoration: none;
            
           
        }
        /* Main accordion title 
========================================================================== */
        
        .accordion h1 {
            display: inline;
            font-weight: 100;
            font-size: 25px;
        }
        /* Main accordion arrow 
========================================================================== */
        
        .accordion button {
            float: right;
            font-size: 20px;
            background-color: transparent;
            border-style: none;
            padding: 0;
            margin: 0;
            margin-top: 10px;
            outline: none;
        }
        /* Accordion dropdown panel
========================================================================== */
        
        .accordion-panel {
            display: flex;
            justify-content: space-between;
            margin: 0 auto;
            padding: 10px 15px;
            width: 50%;
            border-width: 2px;
            /* background-color: #fafafad4;
            border-color: #e3e3e3; */
            /* border-style: solid; */
            border-top: none;
            border-bottom-left-radius: 25px;
            border-bottom-right-radius: 25px;
            z-index: 1;
        }
        /* Rotate class for dropdown button
========================================================================== */
        
        .rotate {
            -moz-transition: all .5s linear;
            -webkit-transition: all .5s linear;
            transition: all .5s linear;
            align-items: center;
            justify-content: center;
        }
        
        .rotate.up {
            -moz-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        



        .img-holder {
            display: flex;
            position: relative;
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
            border: white 2px solid;
            box-shadow: 0px 0px 32px 10px rgba(0, 0, 0, 0.33);
            margin-top: -25px;
            transition: transform .5s;
            z-index: 1;
        }
        
        .card {
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            margin-left: auto;
            margin-right: auto;
            /* height: 25rem; */
            background-color: white;
            z-index: 1;
            font-family: Arial, Helvetica, sans-serif;
            width: 18rem;
            border-radius: 25px; 
        }
        
        .card-title {
            font-size: 1.5rem;
            text-align: center;
            margin-top: -5px;
            font-family: Arial, Helvetica, sans-serif;
            color:black;
        }
        
        .rank {
            text-align: center;
            font-size: 1.2rem;
            margin-top: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .img-tag:hover {
            transform: scale(1.2);
            transition: transform .5s;
        }
        
        .fab {
            transition: transform .5s;
            color: black;
            margin-bottom: 10px;
        }
        
        .fab:hover {
            transform: scale(1.3);
            transition: transform .5s;
        }
        .our{font-family: Arial, Helvetica, sans-serif;
        text-align:center;}

        .year{font-family: Arial, Helvetica, sans-serif;
      color:white;
      
    }



      
        /* //////for mobile devices */

@media only screen and (max-width:700px) {
   
   .card-title {
           font-size: 0.8rem;
           text-align: center;
           margin-top: -3px;
           font-family: Arial, Helvetica, sans-serif;
           color:black;
       }
       
       .rank {
           text-align: center;
           font-size: 0.5rem;
           margin-top: 0px;
           font-family: Arial, Helvetica, sans-serif;
       }
       .img-tag {
            
            width: 5rem;
            height:5rem;
            
            
        }
        .accordion {
            width: 90%;
           
        }
        .accordion-panel {
           
            justify-content: space-between;
            width: 90%;
           
        }
        .card{width:45%;}
    }
   
/* /////////between 700px & 1144px */


@media only screen and (min-width:701px) and (max-width:1144px){
    .our{
        display:block;
        width:50%;
        margin:auto;
        text-align:center;
    }
    .accordion {
            width: 90%;
           
        }
        .accordion-panel {
           
            justify-content: space-between;
            width: 90%;
           
        }


}











       
    </style>
    </head>   


<body>

  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
  <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

   <br><br><br>
  <h1 class="our" style="color: white;font-variant: small-caps;font-size: 3.5rem;font-weight: bolder;text-shadow: 2px 7px 5px rgba(0,0,0,0.3), 
    0px -4px 10px rgba(255,255,255,0.3);">Our Alumni</h1>
    <br><br>



    <div class="accordion-container">
        <div class="accordion" style=" color: purple">
            <h1 class="year">2017-21</h1>
            <button><i class="fa fa-chevron-down rotate"></i></button>
        </div>
        <div class="accordion-panel">

            <div class="card " >
                <div class="img-holder">
                    <img src="assets/images/bg.svg" class="img-bg" alt="Card image cap">
                    <img src="assets/images/alumni/pr2020.jpg" alt="" class="img-tag">
                </div>
                <div class="card-body text-center">
                    <h3 class="card-title "><strong>Bolisetti Dheeraj</strong></h3>
                    <p class="rank">President</p>
                    <div style="display: flex;align-items: center;justify-content: space-around;">
                        <a href=" https://www.facebook.com/bolisetti.dheeraj.7"><i
                                class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.linkedin.com/in/bolisetti-dheeraj/ "><i
                                class="fab fa-linkedin fa-2x"></i></a>

                    </div>
                </div>
            </div>
<br>
            <div class="card " >
                <div class="img-holder">
                    <img src="assets/images/bg.svg" class="img-bg" alt="Card image cap">
                    <img src="assets/images/alumni/gs2020.jpg" alt="" class="img-tag">
                </div>
                <div class="card-body text-center">
                    <h3 class="card-title "><strong>Tanmay Sardar</strong></h3>
                    <p class="rank">General Secretary</p>
                    <div style="display: flex;align-items: center;justify-content: space-around;">
                        <a href="https://www.facebook.com/tanmay.sardar.7355"><i
                                class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.linkedin.com/in/tanmay-s-14206213a/"><i
                                class="fab fa-linkedin fa-2x"></i></a>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="accordion-container">
        <div class="accordion">
            <h1 class="year">2016-20</h1>
            <button><i class="fa fa-chevron-down rotate"></i></button>
        </div>
        <div class="accordion-panel">
            <div class="card ">
                <div class="img-holder">
                    <img src="assets/images/bg.svg" class="img-bg" alt="Card image cap">
                    <img src="assets/images/alumni/pr2019.jpeg" alt="" class="img-tag">
                </div>
                <div class="card-body text-center">
                    <h3 class="card-title "><strong>Binit Roy</strong></h3>
                    <p class="rank">President</p>
                    <div style="display: flex;align-items: center;justify-content: space-around;">
                        <a href="https://www.facebook.com/binit.roy.338"><i
                                class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.linkedin.com/in/binit-roy-b4154b160/"><i
                                class="fab fa-linkedin fa-2x"></i></a>

                    </div>
                </div>
            </div>

            <div class="card ">
                <div class="img-holder">
                    <img src="assets/images/bg.svg" class="img-bg" alt="Card image cap">
                    <img src="assets/images/alumni/gs2019.jpeg" alt="" class="img-tag">
                </div>
                <div class="card-body text-center">
                    <h3 class="card-title "><strong>Swapnil Jadon</strong></h3>
                    <p class="rank">General Secretary</p>
                    <div style="display: flex;align-items: center;justify-content: space-around;">
                        <a href="https://www.facebook.com/swapnil.jadon.5"><i
                                class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.linkedin.com/in/swapnil-jadon/"><i
                                class="fab fa-linkedin fa-2x"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-container">
        <div class="accordion">
            <h1 class="year">2015-19</h1>
            <button><i class="fa fa-chevron-down rotate"></i></button>
        </div>
        <div class="accordion-panel">
            <div class="card ">
                <div class="img-holder">
                    <img src="assets/images/bg.svg" class="img-bg" alt="Card image cap">
                    <img src="assets/images/alumni/pr2018.jpeg" alt="" class="img-tag">
                </div>
                <div class="card-body text-center">
                    <h3 class="card-title "><strong>Anish Paul</strong></h3>
                    <p class="rank">President</p>
                    <div style="display: flex;align-items: center;justify-content: space-around;">
                        
                        <a href="https://www.linkedin.com/in/anishpaul95/"><i
                                class="fab fa-linkedin fa-2x"></i></a>

                    </div>
                </div>
            </div>

            <div class="card ">
                <div class="img-holder">
                    <img src="assets/images/bg.svg" class="img-bg" alt="Card image cap">
                    <img src="assets/images/alumni/gs2018.jpeg" alt="" class="img-tag">
                </div>
                <div class="card-body text-center">
                    <h3 class="card-title "><strong>Ashim Kr. Goswami</strong></h3>
                    <p class="rank">General Secretary</p>
                    <div style="display: flex;align-items: center;justify-content: space-around;">
                        <a href="https://www.facebook.com/ashim.goswami.581"><i
                                class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.linkedin.com/in/ashim-goswami-bb25a2110/"><i
                                class="fab fa-linkedin fa-2x"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-container">
        <div class="accordion">
            <h1 class="year">2014-18</h1>
            <button><i class="fa fa-chevron-down rotate"></i></button>
        </div>
        <div class="accordion-panel">
            <div class="card ">
                <div class="img-holder">
                    <img src="assets/images/bg.svg" class="img-bg" alt="Card image cap">
                    <img src="assets/images/alumni/pr2017.jpeg" alt="" class="img-tag">
                </div>
                <div class="card-body text-center">
                    <h3 class="card-title "><strong>Aditya Singh Rajput</strong></h3>
                    <p class="rank">President</p>
                    <div style="display: flex;align-items: center;justify-content: space-around;">
                        <a href="https://www.facebook.com/aditya.raj.3990418"><i
                                class="fab fa-facebook fa-2x"></i></a>
                       
                    </div>
                </div>
            </div>

            <div class="card ">
                <div class="img-holder">
                    <img src="assets/images/bg.svg" class="img-bg" alt="Card image cap">
                    <img src="assets/images/alumni/gs2017.jpg" alt="" class="img-tag">
                </div>
                <div class="card-body text-center">
                    <h3 class="card-title "><strong>V.K. Sonkar</strong></h3>
                    <p class="rank">General Secretary</p>
                    <div style="display: flex;align-items: center;justify-content: space-around;">
                        <a href="  https://www.facebook.com/vinaykumar.sonkar.98"><i
                                class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.linkedin.com/in/vk-sonkar-0b335a163"><i
                                class="fab fa-linkedin fa-2x"></i></a>

                    </div>
                </div>
            </div>
        </div>


        
    </div>
   
    <br><br><br><br><br><br><br>
        <br><br><br><br><br>
    <br><br><br><br><br>
   

    <!--script for collapse and hide  -->
    <script>
        $(document).ready(function() {
            $(".accordion-panel").hide(); //Hide accordions 

            /* Show all/Hide all accordions onclick */
            $(".control").click(function() {
                $(".accordion-panel").stop(); //Stops user from spamming button
                /* Toggle text in button and panel */
                if ($(".control").text() == "Collapse All") {
                    $(".control").text("Hide All");
                    $(".accordion-panel").slideDown("slow"); //Show all panels
                    $(".fa-chevron-down").addClass("up");
                } else {
                    $(".control").text("Collapse All");
                    $(".accordion-panel").slideUp("slow"); //Hide all panels
                    $(".fa-chevron-down").removeClass("up");

                }
            });

            /* Slide accordion panel down onclick */
            $(".accordion").click(function() {
                $(".accordion-panel").stop(); //Stops user from spamming button
                /* Select only the accordion clicked on */
                $(this).parent().find(".fa-chevron-down").toggleClass("up");
                $(this).parent().find(".accordion-panel").slideToggle("slow");
                panelCheck();
            });

            /* Checks if all panels are closed */
            function panelCheck() {
                /* Panels are all hidden */
                if ($('.fa-chevron-down').hasClass("up") == false) {
                    $(".control").text("Collapse All");
                } else {
                    $(".control").text("Hide All");
                }
            }

        });
    </script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>

     <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
</body>
