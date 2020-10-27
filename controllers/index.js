$(window).scroll(function() {
    //console.log($("#menu").offset().top);
    if ($("#menu").offset().top > 56) {
        $("#menu").addClass("bg-dark");
    } else {
        $("#menu").removeClass("bg-dark");
    }
  });