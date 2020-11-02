(function($){
  wp.customize( 'dd_header_show_user', function( value ) {
    value.bind( function( new_val ) {
      if( !new_val == true) return $('#top-user').hide();
      $('#top-user').show();
    });
  });

  wp.customize( 'dd_header_show_cart', function( value ) {
    value.bind(function( new_val ) {
      if( !new_val ) return $('#top-cart').hide();
      $('#top-cart').show();
    });
  });
})(jQuery);