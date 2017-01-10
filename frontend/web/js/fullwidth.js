$(document).ready(function (){
            $("#btn-learnmore").click(function (){
                $('html, body').animate({
                    scrollTop: $("#first").offset().top
                }, 2000);
            });
        });
$(document).ready(function (){
            $("#btn-columns").click(function (){
                $('html, body').animate({
                    scrollTop: $("#second").offset().top
                }, 2000);
            });
        });