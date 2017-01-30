$('#whatis').on('click', function(e){
    e.preventDefault();
    var target= $(this).get(0).id == 'whatis' ? $('#whatis');
    $('html, body').stop().animate({
       scrollTop: target.offset().top
    }, 1000);
});