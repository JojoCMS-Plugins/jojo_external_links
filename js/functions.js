jQuery(document).ready(function() {
	if (typeof(extlinkopts)=='undefined' || extlinkopts===null) {
		return false;
	}
	if (extlinkopts.newwindow) {
		var sel = extlinkopts.newwparent+" a[href]:not([href*='"+location.hostname+"'],[href^=#])";
		if (extlinkopts.newwexclude) { sel = sel+":not("+extlinkopts.newwexclude+")" };
		$("body").delegate(sel, "click", function() {
			window.open(this.href); return false;
		});
	}
	if (extlinkopts.rel||extlinkopts.addclass) {
		$(extlinkopts.rorcparent+" a[href]:not([href*='"+location.hostname+"'],[href^=#],:has(img))").each(function(i,v) {
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
