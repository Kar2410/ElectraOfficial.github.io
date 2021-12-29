$(document).ready(function() {
    $('.arr_container').click(function() {
        console.log("hi")
        $(this).addClass('active_arr');
        if ($(this).siblings(".left_container").hasClass("off")) {
            $(this).siblings(".left_container").removeClass("off");
            $(this).siblings(".left_container").addClass("active");
        }
    })
    $('.cancel').click(function() {
        $(this).parent('.left_container').siblings('.arr_container').removeClass("active_arr")
        if ($(this).parent(".left_container").hasClass("active")) {
            $(this).parent(".left_container").removeClass("active");
            $(this).parent(".left_container").addClass("off");
        }
    })
})