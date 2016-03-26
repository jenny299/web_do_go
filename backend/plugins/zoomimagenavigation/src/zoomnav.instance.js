jQuery(document).ready(function($) {
	var i = 1;

	while (window['zoomnav' + i] !== undefined) {
		var params = window['zoomnav' + i];
		var selector = '#zoomnav' + i;

		$(selector).zoomnav({
			'width': params.width,
			'height': params.height,
			'minimap': params.minimap,
			'minimapsource': params.minimapsource,
			'arrowbuttons': params.arrowbuttons,
			'zoombuttons': params.zoombuttons,
			'maxscale': 4,
			'easing': 'easeOutQuint'
		});

		i++;
	}
});