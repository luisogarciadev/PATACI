// if ( !window.phantom && !/github/.test(window.location.hostname) ) document.write('<scr' + 'ipt src="http://' + location.hostname + ':35711/livereload.js"></scr' + 'ipt>');

(function() {
	var $section = $('section').first();
	$section.find('.panzoom').panzoom({
		$zoomIn: $section.find(".zoom-in"),
		$zoomOut: $section.find(".zoom-out"),
		$zoomRange: $section.find(".zoom-range"),
		$reset: $section.find(".reset")
	});
})();

(function() {
	var $section = $('section').first();
	var $panzoom = $section.find('.panzoom').panzoom();
	$panzoom.parent().on('mousewheel.focal', function( e ) {
		e.preventDefault();
		var delta = e.delta || e.originalEvent.wheelDelta;
		var zoomOut = delta ? delta < 0 : e.originalEvent.deltaY > 0;
		$panzoom.panzoom('zoom', zoomOut, {
			increment: 0.1,
			animate: false,
			focal: e
		});
	});
})();

$( ".panzoom" ).dblclick(function(e) {
	var $section = $('section').first();
	var $panzoom = $section.find('.panzoom').panzoom();
  	$panzoom.panzoom('zoom', false, {
			increment: 0.8,
			animate: true,
			focal: e
		});
});



