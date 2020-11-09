(function($) {
	// INIT SCROLLSPY
	let $body = $('html, body');
	$body.scrollspy({ target: '#front-nav'});

	function animateHash($hash) {
		console.log('hash ', $hash)
		$body.animate({
			scrollTop: $($hash).offset().top
		}, 800, () => {
			window.location.hash = $hash;
		});

	}
	
	$(window).load( () => {
		let $hash = window.location.hash;
		console.log($hash)
		return $hash  ? animateHash($hash) : null;
	});

	$('#front-nav a').on('click', e => {
		if(this.hash !== '') {
			// e.preventDefault();
			let $hash = document.activeElement.hash;
			return animateHash($hash);
		}
	})
})(jQuery)