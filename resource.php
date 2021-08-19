<?php
include("path.php");

?>

<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
usersOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Electra Resource</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <!-- ***********CARD -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>

       <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
  <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


    <div class="cards">
        <h2 class="header">
            ELECTRA RESOURCE
        </h2>
        <div class="services">
            <div class="content content-1">
                <i class="fa fa-child fa-5x"></i>
                <h2>
                Semester Wise
                </h2>
                <p>
                    “To acquire knowledge, one must study;
                    but to acquire wisdom, one must observe.”<br>
                    ― Marilyn vos Savant
                </p>
                <a href="https://drive.google.com/folderview?id=1BmMOal1qhoigYSB6JVMpl6Gy-Kfz8Zyp">Resource</a>
            </div>

            <div class="content content-2">
                <div class="fa fa-book fa-5x"></div>
                <h2>
                books and coaching material
                </h2>
                <p>
                    “Let us study things that are no more. It is necessary to understand them, if only to avoid them.”<br>
                    ― Victor Hugo
                </p>
                <a href="https://drive.google.com/folderview?id=12SgQM-CUU-FXq-LO7GTAQCAFTf2hQJw0">Resource</a>
            </div>
            
        </div>
    </div>


    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800|Poppins&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        .cards {
            max-width: 1100px;
            margin: 0 auto;
            text-align: center;
            padding: 30px;
        }

        .cards h2.header {
            font-size: 40px;
            margin: 0 0 30px 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .services {
            display: flex;
            align-items: center;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            flex: 1;
            margin: 20px;
            padding: 20px;
            border: 2px solid black;
            border-radius: 4px;
            transition: all .3s ease;
        }

        .content .fab {
            font-size: 70px;
            margin: 16px 0;
        }

        .content>* {
            flex: 1 1 100%;
        }

        .content:hover {
            color: white;
        }

        .content:hover a {
            border-color: white;
            background: white;
        }

        .content-1:hover {
            border-color: #1DA1F2;
            background: #1DA1F2;
        }

        .content-1:hover a {
            color: #1DA1F2;
        }

        .content-2:hover {
            border-color: #E1306C;
            background: #E1306C;
        }

        .content-2:hover a {
            color: #E1306C;
        }

        .content-3:hover {
            border-color: #102c92;
            background: #102c92;
        }

        .content-4:hover {
            border-color: #ff0000;
            background: #ff0000;
        }

        .content-4:hover a {
            color: #ff0000;
        }

        .content-3:hover a {
            color: #102c92;
        }

        .content h2 {
            font-size: 30px;
            margin: 16px 0;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .content p {
            font-size: 17px;
            font-family: 'Poppins', sans-serif;
        }

        .content a {
            margin: 22px 0;
            background: black;
            color: white;
            text-decoration: none;
            text-transform: uppercase;
            border: 1px solid black;
            padding: 15px 0;
            border-radius: 25px;
            transition: .3s ease;
        }

        .content a:hover {
            border-radius: 4px;
        }

        @media (max-width: 900px) {
            .services {
                display: flex;
                flex-direction: column;
            }
        }
    </style>






    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>



    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>





</body>

</html>