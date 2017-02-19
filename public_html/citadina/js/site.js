function init() {
	fitVideo($("#home"), $(".youtube"));
}

// Receives jquery objects
function fitVideo (out, inside) {
	var outWidth = parseInt(out.css("width").replace('px', ''));
	var outHeight = parseInt(out.css("height").replace('px', ''));
	var inWidth = parseInt(inside.css("width").replace('px', ''));
	var inHeight = parseInt(inside.css("height").replace('px', ''));
	var containerRatio = outWidth / outHeight;
	if (containerRatio > 16/9){
		inWidth = outWidth;
		inHeight = outWidth * 16/9;
	} else {
		inHeight = outHeight;
		inWidth = outHeight * 16/9;
	}

	var marginTop = (outHeight - inHeight) / 2;
	var marginLeft =  (outWidth - inWidth) / 2;

	inside.css("width", inWidth);
	inside.css("height", inHeight);
	inside.css("margin-top", marginTop);
	inside.css("margin-left", marginLeft);
}

$(window).on('resize', function(){
	fitVideo($("#home"), $(".youtube"));
});

init();