$(document).ready(function () {
    $(".awesome__slider").slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        lazyLoad: "ondemand",
        prevArrow:
            '<button class="prev-img"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"/></svg></button>',
        nextArrow:
            '<button class="next-img"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right next-img"><polyline points="9 18 15 12 9 6"/></svg></button>'
    });

    $(".awesome__slider").on("swipe", function (event, slick, direction) {
        console.log(direction);
        // left
    });
    $(".awesome__slider").on(
        "beforeChange",
        function (event, slick, currentSlide, nextSlide) {
            console.log(nextSlide);
            $(".thumb").removeClass("active");
            $('.thumb[data-rel="' + nextSlide + '"]').addClass("active");
        }
    );
    $(".thumb").on("click", function () {
        $(".awesome__slider").slick("slickGoTo", $(this).data("rel"));
    });
});

/* LIGHTBOX IMAGE GALLERY */
const $dynamicGallery = document.getElementById("ba_gallery");
const dynamicGallery = window.lightGallery($dynamicGallery, {
    dynamic: true,
    plugins: [lgThumbnail],
    dynamicEl: [
        {
            src:
                "https://images.unsplash.com/photo-1609342122563-a43ac8917a3a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1400&q=80",
            responsive:
                "https://images.unsplash.com/photo-1609342122563-a43ac8917a3a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=480&q=80 480, https://images.unsplash.com/photo-1609342122563-a43ac8917a3a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=800&q=80 800",
            thumb:
                "https://images.unsplash.com/photo-1609342122563-a43ac8917a3a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=240&q=80",
            subHtml: `<div class="lightGallery-captions">
                <h4>Photo by <a href="https://unsplash.com/@brookecagle">Brooke Cagle</a></h4>
                <p>Description of the slide 1</p>
            </div>`
        },
        {
            src:
                "https://images.unsplash.com/photo-1477322524744-0eece9e79640?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80",
            responsive:
                "https://images.unsplash.com/photo-1477322524744-0eece9e79640?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=480&q=80 480, https://images.unsplash.com/photo-1477322524744-0eece9e79640?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80 800",
            thumb:
                "https://images.unsplash.com/photo-1477322524744-0eece9e79640?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=240&q=80"
        },
        {
            src: "//www.youtube.com/watch?v=egyIeygdS_E",
            poster: "https://img.youtube.com/vi/egyIeygdS_E/maxresdefault.jpg",
            thumb: "https://img.youtube.com/vi/egyIeygdS_E/maxresdefault.jpg"
        }
    ]
});
$dynamicGallery.addEventListener("click", () => {
    dynamicGallery.openGallery(0);
});

/* LIGHTBOX VIDEO GALLERY */
/* LIGHTBOX GALLERY */
const $vidGallery = document.getElementById("vid_gallery");
const vidGallery = window.lightGallery($dynamicGallery, {
    dynamic: true,
    plugins: [lgThumbnail, lgVideo],
    dynamicEl: [
        {
            src: "https://www.youtube.com/watch?v=Jolt8lGTQvQ",
            poster: "../images/v-th-1.jpg",
            thumb: "../images/v-th-1.jpg",
            subHtml: `<div class="lightGallery-captions">
                <h4>Photo by <a href="https://unsplash.com/@brookecagle">Brooke Cagle</a></h4>
                <p>Description of the slide 2</p>
            </div>`
        },
        {
            src: "https://www.youtube.com/watch?v=Jolt8lGTQvQ",
            poster: "https://img.youtube.com/vi/egyIeygdS_E/maxresdefault.jpg",
            thumb: "https://img.youtube.com/vi/egyIeygdS_E/maxresdefault.jpg",
            subHtml: `<div class="lightGallery-captions">
                <h4>Photo by <a href="https://unsplash.com/@brookecagle">Brooke Cagle</a></h4>
                <p>Description of the slide 2</p>
            </div>`
        },
        {
            src: "https://www.youtube.com/watch?v=Jolt8lGTQvQ",
            poster: "https://img.youtube.com/vi/egyIeygdS_E/maxresdefault.jpg",
            thumb: "https://img.youtube.com/vi/egyIeygdS_E/maxresdefault.jpg",
            subHtml: `<div class="lightGallery-captions">
                <h4>Photo by <a href="https://unsplash.com/@brookecagle">Brooke Cagle</a></h4>
                <p>Description of the slide 2</p>
            </div>`
        }
    ]
});
$vidGallery.addEventListener("click", () => {
    vidGallery.openGallery(0);
});

