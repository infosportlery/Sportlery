$(function(){
	$(document).on('click','.language',function(){
		var lang = $(this).attr('id');

		$.post('index.php?r=site/language', {'lang':lang},function(data){
			location.reload();
		});
	});
	
});

// Header Buttons
$(document).ready(function (){
    $("#btn-locations").click(function (){
        $('html, body').animate({
            scrollTop: $("#locations").offset().top
        }, 2000);
    });
});

$(document).ready(function (){
    $("#btn-matchmaking").click(function (){
        $('html, body').animate({
            scrollTop: $("#matchmaking").offset().top
        }, 2000);
    });
});

$(document).ready(function (){
    $("#btn-lessons").click(function (){
        $('html, body').animate({
            scrollTop: $("#lessons").offset().top
        }, 2000);
    });
});

$(document).ready(function (){
    $("#btn-trainer").click(function (){
        $('html, body').animate({
            scrollTop: $("#trainerinfo").offset().top
        }, 2000);
    });
});

$(document).ready(function (){
    $("#btn-sportclub").click(function (){
        $('html, body').animate({
            scrollTop: $("#sportclubinfo").offset().top
        }, 2000);
    });
});


$(document).ready(function (){
    $("#link-locations").click(function (){
        $('html, body').animate({
            scrollTop: $("#locations").offset().top
        }, 2000);
    });
});
$(document).ready(function (){
    $("#link-matchmaking").click(function (){
        $('html, body').animate({
            scrollTop: $("#matchmaking").offset().top
        }, 2000);
    });
});
$(document).ready(function (){
    $("#link-lessons").click(function (){
        $('html, body').animate({
            scrollTop: $("#lessons").offset().top
        }, 2000);
    });
});

/* MODALS */

$('#signup').on('shown.bs.modal', function () {
  $('#signupInput').focus()
});


function onEnterPress() {
    var key = window.event.keyCode;

    // If the user has pressed enter
    if (key === 13) {
        document.getElementById("txtArea").value = document.getElementById("txtArea").value + "\n*";
        return false;
    }
    else {
        return true;
    }
}