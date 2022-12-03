<?php include('path.php'); 
include(ROOT_PATH . "/app/controllers/topics.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/gallery.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-v4-grid-only@1.0.0/dist/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.5/css/lightgallery-bundle.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.5/css/lg-thumbnail.min.css">

    <title>Document</title>
</head>

<body>
    <div class="filters">
        <button class="filter-btn active">Glimpses</button>
        <button class="filter-btn" id="ba_gallery">Photo Gallery</button>
        <button class="filter-btn" id="vid_gallery">Video Gallery</button>
        <button class="filter-btn">Past Session</button>
    </div>
    <div class="container">
        <div class="row flex-column-reverse flex-md-row">

            <!-- THUMBNAIL CONTAINER -->
            <div class="col-md-3">
                <div class="awesome__thumbnails">
                    <div class="thumb active" data-rel="0">
                        <img src="https://images.unsplash.com/photo-1622910076411-b126ff7e469b?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100"
                            alt="Image 1">
                    </div>
                    <div class="thumb" data-rel="1">
                        <img src="https://images.unsplash.com/photo-1611080541599-8c6dbde6ed28?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80"
                            alt="image 2">
                    </div>
                    <div class="thumb" data-rel="2">
                        <img src="https://images.unsplash.com/photo-1613637069737-2cce919a4ab7?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100"
                            alt="image 3">
                    </div>
                    <div class="thumb" data-rel="3">
                        <img src="https://images.unsplash.com/photo-1615217482859-6b0c8a50129d?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100"
                            alt="image 4">
                    </div>
                    <div class="thumb" data-rel="4">
                        <img src="https://images.unsplash.com/photo-1553691158-91a7f9183156?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100"
                            alt="image 4">
                    </div>
                    <div class="thumb" data-rel="5">
                        <img src="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100"
                            alt="image 4">
                    </div>
                    <div class="thumb" data-rel="6">
                        <img src="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100"
                            alt="image 4">
                    </div>
                    <div class="thumb" data-rel="7">
                        <img src="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100"
                            alt="image 4">
                    </div>
                    <div class="thumb" data-rel="8">
                        <img src="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100"
                            alt="image 4">
                    </div>
                    <div class="thumb" data-rel="9">
                        <img src="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100"
                            alt="image 4">
                    </div>
                    <div class="thumb" data-rel="10">
                        <img src="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100"
                            alt="image 4">
                    </div>
                    <div class="thumb" data-rel="11">
                        <img src="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100"
                            alt="image 4">
                    </div>
                    <div class="thumb" data-rel="12">
                        <img src="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100"
                            alt="image 4">
                    </div>
                    <div class="thumb" data-rel="13">
                        <img src="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100"
                            alt="image 4">
                    </div>
                </div>
                <!-- <div class="popup__btns">
                    <div class="bord"></div>
                    <div class="awesome__ba" id="ba_gallery">
                        Before &amp; Afters
                        <small>(popup gallery)</small>
                    </div>
                    <div class="bord"></div>
                    <div class="awesome__videos" id="vid_gallery">
                        Video Gallery
                        <small>(youtube &amp; vimeo)</small>
                    </div>
                </div> -->
            </div>

            <!-- SLIDER CONTAINER -->
            <div class="col-md-9">
                <div class="awesome__slider">
                    <div>
                        <img src="https://images.unsplash.com/photo-1622910076411-b126ff7e469b?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700"
                            alt="Image 1">
                    </div>
                    <div>
                        <img data-lazy="https://images.unsplash.com/photo-1611080541599-8c6dbde6ed28?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700&q=80"
                            alt="image 2">
                    </div>
                    <div>
                        <img data-lazy="https://images.unsplash.com/photo-1613637069737-2cce919a4ab7?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700"
                            alt="image 3">
                    </div>
                    <div>
                        <img data-lazy="https://images.unsplash.com/photo-1615217482859-6b0c8a50129d?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700"
                            alt="image 4">
                    </div>
                    <div>
                        <img data-lazy="https://images.unsplash.com/photo-1553691158-91a7f9183156?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700"
                            alt="image 4">
                    </div>
                    <div>
                        <img data-lazy="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700"
                            alt="image 4">
                    </div>
                    <div>
                        <img data-lazy="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700"
                            alt="image 4">
                    </div>
                    <div>
                        <img data-lazy="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700"
                            alt="image 4">
                    </div>
                    <div>
                        <img data-lazy="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700"
                            alt="image 4">
                    </div>
                    <div>
                        <img data-lazy="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700"
                            alt="image 4">
                    </div>
                    <div>
                        <img data-lazy="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700"
                            alt="image 4">
                    </div>
                    <div>
                        <img data-lazy="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700"
                            alt="image 4">
                    </div>
                    <div>
                        <img data-lazy="https://images.unsplash.com/photo-1592967833769-60d8693bbf91?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700"
                            alt="image 4">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/lightgallery@2.4.0/lightgallery.umd.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.5/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.5/plugins/video/lg-video.min.js"></script>
    <script src="assets/js/gallery.js"></script>

    <script>
        (function () {

            [].slice.call(document.querySelectorAll('.tabs')).forEach(function (el) {
                new CBPFWTabs(el);
            });

        })();
    </script>

</body>

</html>