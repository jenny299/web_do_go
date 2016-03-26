/**
 * Image Zoom Navigation by @sekler
 */

(function($) {
	var ZoomNav = function() {
		var self = this;

		self.o = {
			maxscale: 4,
			easing: 'easeOutQuint',
			minimap: false,
			minimapsource: false,
			arrowbuttons: 'bottom-right',
			zoombuttons: 'bottom-left'
		}

		self.init = function(el, params) {
			self.o = $.extend(self.o, params);
			self.elem = el;
			self.cont = $('.zoomnav-content', el);
			self.x = 0;
			self.y = 0;
			self.scale = 1;

			var element = self.elem;
				content = self.cont;

			// Width & Height
			if (self.o.width) element.css('max-width', self.o.width + 'px');
			if (self.o.height) element.height(self.o.height);

			$('img', content).filter(function() {
				return this.complete;
			}).each(loaded).end().load(loaded);

			// CONTROLS
			// Drag & Drop
			self.dragging = false;

			content.on('mousedown', function(event) {
				event.preventDefault();

				self.dragging = true;
				content.data('mouseX', event.pageX);
				content.data('mouseY', event.pageY);
				content.data('lastX', self.x);
				content.data('lastY', self.y);

				element.addClass('dragging');
			});

			$(document).on('mousemove', function(event) {
				if (self.dragging) {
					var x = event.pageX - content.data('mouseX') + self.x;
						y = event.pageY - content.data('mouseY') + self.y;

					x = normalizeX(x);
					y = normalizeY(y);

					moveTo(x, y);
					content.data('lastX', x);
					content.data('lastY', y);
				}
			});

			$(document).on('mouseup', function(event) {
				if (self.dragging) {
					self.dragging = false;

					self.x = content.data('lastX');
					self.y = content.data('lastY');

					element.removeClass('dragging');
				}
			});

			// Double click
			content.on('dblclick', function(event) {
				var scale = self.scale;
				self.scale = normalizeScale(2*scale);

				var x = normalizeX(self.x - (event.pageX - element.offset().left - self.x) * (self.scale/scale - 1)),
					y = normalizeY(self.y - (event.pageY - element.offset().top - self.y) * (self.scale/scale - 1));

				moveTo(x, y, self.scale, 400);

				self.x = x;
				self.y = y;
			});

			// Touch
			element.on('touchstart', function(event) {
				var orig = event.originalEvent;
				var touches = orig.touches.length;

				if (touches == 2) {
					content.data('pinch', true);
					content.data('dist', false);
				}

				content.data('touchX', orig.changedTouches[0].pageX);
				content.data('touchY', orig.changedTouches[0].pageY);
			});

			element.on('touchmove', function(event) {
				event.preventDefault();
				var orig = event.originalEvent;
				var touches = orig.touches.length;

				if (content.data('pinch')) {
					if (touches == 2) {
						var dist = Math.sqrt(Math.pow(orig.changedTouches[0].pageX - orig.changedTouches[1].pageX, 2) + Math.pow(orig.changedTouches[0].pageY - orig.changedTouches[1].pageY, 2));
						if (content.data('dist') == false) content.data('dist', dist);
						else {
							var delta = dist - content.data('dist');
							var posx = (orig.changedTouches[0].pageX + orig.changedTouches[1].pageX) / 2;
								posy = (orig.changedTouches[0].pageY + orig.changedTouches[1].pageY) / 2;

							var scale = self.scale;
							self.scale = normalizeScale(scale + scale * delta/500);

							var x = normalizeX(self.x - (posx - element.offset().left - self.x) * (self.scale/scale - 1)),
								y = normalizeY(self.y - (posy - element.offset().top - self.y) * (self.scale/scale - 1));

							self.x = x;
							self.y = y;

							moveTo(x, y, self.scale);

							content.data('lastX', x);
							content.data('lastY', y);
						}
					}
				}
				else {
					var x = orig.changedTouches[0].pageX - content.data('touchX') + self.x;
						y = orig.changedTouches[0].pageY - content.data('touchY') + self.y;

					x = normalizeX(x);
					y = normalizeY(y);
					
					moveTo(x, y);
					content.data('lastX', x);
					content.data('lastY', y);
				}
			});

			$(document).on('touchend', function(event) {
				if (content.data('pinch')) {
					content.data('pinch', false);
				}
				else {
					self.x = content.data('lastX');
					self.y = content.data('lastY');
				}
			});

			// Mousewheel
			element.bind('mousewheel DOMMouseScroll', function(event, delta) {
				event.preventDefault();

				var scale = self.scale;
				self.scale = normalizeScale(scale + scale * delta/5);

				var x = normalizeX(self.x - (event.pageX - element.offset().left - self.x) * (self.scale/scale - 1)),
					y = normalizeY(self.y - (event.pageY - element.offset().top - self.y) * (self.scale/scale - 1));

				self.x = x;
				self.y = y;

				moveTo(x, y, self.scale, 200);
			});
		}

		var loaded = function() {
			var element = self.elem;
				content = self.cont;

			// Fitscale
			self.contentWidth = self.cont.width();
			self.contentHeight = self.cont.height();

			var wr = self.elem.width() / self.contentWidth,
				hr = self.elem.height() / self.contentHeight;

			if (wr > hr) self.fitscale = wr;
			else self.fitscale = hr;

			// COMPONENTS
			// Minimap
			if (self.o.minimap) {
				var image = $('img', self.cont);
				self.minimap = $('<div></div>').addClass('zoomnav-minimap').addClass(self.o.minimap).appendTo(element);

				$('<div></div>').addClass('zoomnav-minimap-overlay').width(self.minimap.width()).appendTo(self.minimap);

				if (self.o.minimapsource) {
					$('<img>').attr('src', self.o.minimapsource).addClass('zoomnav-minimap-background').prependTo(self.minimap);
					$('<div></div>').addClass('zoomnav-minimap-active').append($('<img>').attr('src', self.o.minimapsource)).appendTo(self.minimap);
				}
				else {
					image.clone().addClass('zoomnav-minimap-background').prependTo(self.minimap);
					$('<div></div>').addClass('zoomnav-minimap-active').append(image.clone()).appendTo(self.minimap);
				}

				self.minimap.css('height', Math.floor(self.minimap.width() * self.contentHeight / self.contentWidth));
				self.minimap.on('click', function(event) {
					var x = (event.pageX - self.minimap.offset().left) / self.minimap.width(),
						y = (event.pageY - self.minimap.offset().top) / self.minimap.height();
					show(x, y, self.scale, 400);
				});
			}

			// Arrow Buttons
			if (self.o.arrowbuttons) {
				var arrowbuttons = $('<div></div>').addClass('zoomnav-arrowbuttons').addClass(self.o.arrowbuttons).appendTo(element);
				self.buttontop = $('<a></a>').addClass('zoomnav-buttontop').appendTo(arrowbuttons).on('click', function() {
					var y = normalizeY(self.y + content.height() / 5);
					self.y = y;
					moveTo(self.x, self.y, self.scale, 400);
					return false;
				});
				self.buttonright = $('<a></a>').addClass('zoomnav-buttonright').appendTo(arrowbuttons).on('click', function() {
					var x = normalizeX(self.x - element.width() / 5);
					self.x = x;
					moveTo(self.x, self.y, self.scale, 400);
					return false;
				});
				self.buttonbottom = $('<a></a>').addClass('zoomnav-buttonbottom').appendTo(arrowbuttons).on('click', function() {
					var y = normalizeY(self.y - content.height() / 5);
					self.y = y;
					moveTo(self.x, self.y, self.scale, 400);
					return false;
				});
				self.buttonleft = $('<a></a>').addClass('zoomnav-buttonleft').appendTo(arrowbuttons).on('click', function() {
					var x = normalizeX(self.x + element.width() / 5);
					self.x = x;
					moveTo(self.x, self.y, self.scale, 400);
					return false;
				});
				self.buttoncenter = $('<a></a>').addClass('zoomnav-buttoncenter').appendTo(arrowbuttons).on('click', function() {
					show(0.5, 0.5, self.fitscale, 400);
					return false;
				});
			}

			// Zoom Buttons
			if (self.o.zoombuttons) {
				var zoombuttons = $('<div></div>').addClass('zoomnav-zoombuttons').addClass(self.o.zoombuttons).appendTo(element);
				self.buttonzoomin = $('<a></a>').addClass('zoomnav-zoomin').appendTo(zoombuttons).on('click', function() {
					zoom(self.scale + self.scale/2, 400);
					return false;
				});
				self.buttonzoomout = $('<a></a>').addClass('zoomnav-zoomout').appendTo(zoombuttons).on('click', function() {
					zoom(self.scale - self.scale/2, 400);
					return false;
				});
			}

			show(0.5, 0.5, self.fitscale);
		}

		var show = function(x, y, scale, duration) {
			if (duration === undefined) duration = 0;
			self.scale = normalizeScale(scale);
			self.x = normalizeX((self.elem.width() - self.contentWidth * scale) * x);
			self.y = normalizeY((self.elem.height() - self.contentHeight * scale) * y);

			moveTo(self.x, self.y, scale, duration);
		}

		var zoom = function(s, duration) {
			if (duration === undefined) duration = 0;
			var scale = self.scale;
			self.scale = normalizeScale(s);

			var x = normalizeX(self.x - (self.elem.width()/2 - self.x) * (self.scale/scale - 1)),
				y = normalizeY(self.y - (self.elem.height()/2 - self.y) * (self.scale/scale - 1));
			
			self.x = x;
			self.y = y;
			
			moveTo(x, y, self.scale, duration);
		}

		var normalizeX = function(x) {
			var minX = self.elem.width() - self.contentWidth * self.scale;

			if (x > 0) x = 0;
			else if (x < minX) x = minX;

			// Disabling buttons
			if (self.o.arrowbuttons) {
				self.buttonleft.removeClass('disabled');
				self.buttonright.removeClass('disabled');
				if (x >= 0) self.buttonleft.addClass('disabled');
				if (x <= minX) self.buttonright.addClass('disabled');
			}
			return x;
		}

		var normalizeY = function(y) {
			var minY = self.elem.height() - self.contentHeight * self.scale;

			if (y > 0) y = 0;
			else if (y < minY) y = minY;

			// Disabling buttons
			if (self.o.arrowbuttons) {
				self.buttontop.removeClass('disabled');
				self.buttonbottom.removeClass('disabled');
				if (y >= 0) self.buttontop.addClass('disabled');
				if (y <= minY) self.buttonbottom.addClass('disabled');
			}

			return y;
		}

		var normalizeScale = function(scale) {
			if (scale < self.fitscale) scale = self.fitscale;
			else if (scale > self.o.maxscale) scale = self.o.maxscale;
			
			// Disabling buttons
			if (self.o.arrowbuttons) {
				if (scale == self.fitscale) self.buttoncenter.addClass('disabled');
				else self.buttoncenter.removeClass('disabled');
			}

			if (self.o.zoombuttons) {
				self.buttonzoomin.removeClass('disabled');
				self.buttonzoomout.removeClass('disabled');
				if (scale == self.fitscale) self.buttonzoomout.addClass('disabled');
				else if (scale == self.o.maxscale) self.buttonzoomin.addClass('disabled'); 
			}

			return scale;
		}

		var updateMinimap = function(x, y) {
			var active = $('.zoomnav-minimap-active', self.minimap);

			if (x === undefined) x = self.x;
			if (y === undefined) y = self.y;

			var width = Math.round(self.elem.width() / self.contentWidth / self.scale * self.minimap.width()),
				height = Math.round(self.elem.height() / self.contentHeight / self.scale * self.minimap.height()),
				top = Math.round(-y / self.contentHeight / self.scale * self.minimap.height()),
				left = Math.round(-x / self.contentWidth / self.scale * self.minimap.width()),
				right = left + width,
				bottom = top + height;

			active.css('clip', 'rect(' + top + 'px, ' + right + 'px, ' + bottom + 'px, ' + left + 'px)');
		}

		var moveTo = function(x, y, scale, d) {
			if (scale !== undefined) {
				self.cont.stop().animate({
					'left': x,
					'top': y,
					'width': self.contentWidth * scale,
					'height': self.contentHeight * scale
				}, d, self.o.easing);
			}
			else {
				self.cont.css({
					'left': x,
					'top': y
				});
			}
			if (self.o.minimap) updateMinimap(x, y);
		}
	};

	//  Create plugin
	$.fn.zoomnav = function(params) {
		var len = this.length;

		return this.each(function(index) {
			var me = $(this),
				key = 'zoomnav' + (len > 1 ? '-' + ++index : ''),
				instance = (new ZoomNav).init(me, params);

			me.data(key, instance).data('key', key);
		});
	};
})(jQuery);