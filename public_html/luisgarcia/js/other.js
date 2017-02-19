// Receives jquery objects
function alignBackground(out, bgContainer, offset) {
	var outWidth = parseInt(out.css("width").replace('px', ''));
	var bgWidth = parseInt(bgContainer.css("width").replace('px', ''));
	var widthDiff = outWidth - bgWidth;
	var margin = offset + (widthDiff / 2);
	bgContainer.css('margin-left', margin);
}

// $(window).on('resize', function(){
// 	alignBackground($('.bg-home'), $('.bg'), 123);	
// });

// alignBackground($('.bg-home'), $('.bg'), 123);

function initMap() {
  var myLatLng = {lat: 25.656013, lng: -100.352545};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Reynosa'
  });
}

$('.gallery-item').magnificPopup({
	type: 'image',
	gallery:{
		enabled:true
	}
});
$('div.dropdown-toggle').click(function(){
	var display = $('#small-dropdown').css('display')
	if (display == 'block') {
		$('#small-dropdown').css('display', 'none');
	} else {
		$('#small-dropdown').css('display', 'block');
	}
});