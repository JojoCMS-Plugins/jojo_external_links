jQuery(document).ready(function() {
	if (typeof(extlinkopts)=='undefined' || extlinkopts===null) {
		return false;
	}
	if (extlinkopts.newwindow) {
		$(extlinkopts.newwparent+" a[href*='http://']:not([href*='"+location.hostname+"'])").click( function() {
		  window.open(this.href); return false;
		});
	}
	if (extlinkopts.rel||extlinkopts.addclass) {
		$(extlinkopts.rorcparent+" a[href*='http://']:not([href*='"+location.hostname+"'],:has(img))").each(function(i,v) {
			/* Exclude empty tags (eg if used as a clickable area with background image) */
			if ($(v).text().replace('/(&nbsp;|\s)/', '')) {
				if (extlinkopts.rel) {
					$(this).attr('rel', 'external '+$(this).attr('rel'));
				}
				if (extlinkopts.addclass) {
					$(this).addClass('external');
				}
			}
		})
	}

});