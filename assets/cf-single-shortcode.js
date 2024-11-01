// 1. Create this file on your  themename/js/cs-modify.js
;(function ( $ ) {
  'use strict';

  $(document).ready( function() {

    $('body').on('click', '.cs-shortcode', function( e ) {

      e.preventDefault();

      var shortcode_id = 'wp_tab'; // your shortcode id.

      var $this     = $(this),
          $dialog   = $('#cs-shortcode-dialog'),
          $selector = $dialog.find('.cs-dialog-select'),
          $header   = $dialog.find('.cs-dialog-header');

      $dialog.outerHeight( $dialog.outerHeight() - $header.outerHeight() );
      $header.hide();

      $selector.val( shortcode_id ).trigger( 'change' );

    });

  });

})( jQuery );