$(window).scroll(function () {
    //console.log($("#menu").offset().top);
    if ($("#menu").offset().top > 56) {
        $("#menu").addClass("bg-light");
        $("#ul").removeClass("menu");
        $("#ul").addClass("menu2");
    } else {
        $("#menu").removeClass("bg-light");
        $("#ul").removeClass("menu2");
        $("#ul").addClass("menu");
    }
});

$('.carousel').carousel({
    interval: 3000,
});

/*$(function() {
    changeword();

    function changeword() {
       setTimeout(() => {

       }, 5000);
    }
});*/