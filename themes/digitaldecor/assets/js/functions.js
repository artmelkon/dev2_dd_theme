(function ($) {
	$('#main-nav a').on('click', e => {
		if(this.hash !== '') {
			e.preventDefault();
			let $hash = document.activeElement.hash;
			let url = location.protocol + '//' + location.hostname + '/' + $hash;
			console.log(location.protocol)
			console.log(url)
			location.replace(url)
		}
		e.stopPropagation();
	});
})(jQuery);