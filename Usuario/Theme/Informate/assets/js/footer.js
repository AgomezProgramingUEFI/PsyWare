$(document).ready(function(){
    $('#mobile').click(function(){
        $("#fripple").slideToggle();
        $("#site-navigation").slideToggle();
        $("#secondary").slideToggle(); 

        if($(window).width() < 850){
            $("#fripple").slideUp();
            $("#site-navigation").slideUp();
            $("#secondary").slideUp();
        }
    });
});

$(window).resize(function() {
    if ($(window).width() < 850) {
        $("#fripple").slideUp();
        $("#site-navigation").slideUp();
        $("#secondary").slideUp();
    }
});