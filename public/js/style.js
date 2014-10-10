$(document).ready(function(){

    $('.bigh1').hide();
    $('.bigh1').slideDown(1000);

    $('div').hide();
    $('div').fadeIn(500);

    $(window).scroll(function () { 

       $('.bigh1').css({
          'margin-top' : -($(this).scrollTop()/3)+"px"
       }); 

    });

});