
jQuery( function() {
	if( jQuery( 'body' ).hasClass( 'single-product') ) {
		jQuery( '.action-design-options' ).click( function(e) {
			jQuery( '.action-design-options').removeClass( 'active' );
			jQuery(this).addClass( 'active' );
		});
	};
});