//Contact Page Switcher

$('.view-info').click(function() {
  var index = $(this).index();
  $('.person-info').eq(index).toggle().siblings('.person-info').hide();
});

//animate.css effect
$('.person-info').addClass('animated fadeInUp');
//

$('.app-icon').click(function() {
  var index = $(this).index();
  $('.app-div').eq(index).toggle().siblings('.app-div').hide();
});

//animate.css effect
$('.app-div').addClass('animated fadeInUp');


$('#person-1').click(function(){
 $('#person-information').html('<div class="col-md-4 person-info-design"><img class="img-circle avatar" src="/images/floris.jpg" alt=""><div class="text-left"><h2>Floris</h2><span class="lead">Founder</span></div></div><div class="col-md-8"><p>Tijdens het afronden van de Hotelschool in Den Haag besloot hij dat een gewone stage niet voldeed aan zijn eisen.<br><br> De ondernemer in hem vond dat het tijd was voor een eigen bedrijf.<br><br> Met zijn communicatieve skills maakt hij het mogelijk om het team te laten werken als een geoliede machine, waardoor ze sneller en efficienter tot hun beoogde resultaat kunnen komen. In zijn vrije tijd speelt hij graag hockey.</p></div>');
});

$('#person-2').click(function(){
 $('#person-information').html('<div class="col-md-4 person-info-design"><img class="img-circle avatar" src="/images/Folkert.jpg" alt=""><div class="text-left"><h2>Folkert</h2><span class="lead">Co-Founder</span></div></div><div class="col-md-8"><p>Na het behalen van zn Bachelor Bedrijskunde en Master in Innovative Hospitality besloot hij om te gaan reizen in Centraal- & Zuid-Amerika. Hier heeft hij zijn creativiteit erop losgelaten en is met frisse business ideëen terug gekomen. Zijn specialiteit ligt in het out-of-the-box denken, wat perfect aansluit bij zijn marketing rol binnen het bedrijf. Na het werk gaat hij vaak kitesurfen, om zo lekker even stoom af te blazen.</p> </div>');
});

$('#person-3').click(function(){
 $('#person-information').html('<div class="col-md-4 person-info-design"><img class="img-circle avatar" src="/images/Benjamin.jpg" alt=""><div class="text-left"><h2>Benjamin</h2><span class="lead">Lead Developer</span></div></div><div class="col-md-8"><p>Hij is een all-round programmeur die vele verschillende progammeertalen spreekt. Met zijn goede planningen en krachtige uitleg zorgt hij ervoor dat iedereen weet wat er wanneer en waarom moet gebeuren. In zijn vrije tijd is hij te vinden in het zwembad, waar hij alle stress van zich af kan zwemmen.</p></div>');
});

$('#person-4').click(function(){
 $('#person-information').html('<div class="col-md-4 person-info-design"><img class="img-circle avatar" src="/images/Jesse.png" alt=""><div class="text-left"><h2>Jesse</h2><span class="lead">Development Stagiar</span></div></div><div class="col-md-8"><p>Tijdens het afronden van de Hotelschool in Den Haag besloot hij dat een gewone stage niet voldeed aan zijn eisen.<br><br> De ondernemer in hem vond dat het tijd was voor een eigen bedrijf.<br><br> Met zijn communicatieve skills maakt hij het mogelijk om het team te laten werken als een geoliede machine, waardoor ze sneller en efficienter tot hun beoogde resultaat kunnen komen. In zijn vrije tijd speelt hij graag hockey.</p></div></div>');
});