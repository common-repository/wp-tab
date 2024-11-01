<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.


// ------------------------------------------------------------------------------------------------
require_once plugin_dir_path( __FILE__ ) .'/cs-framework-path.php';
// ------------------------------------------------------------------------------------------------

if( ! function_exists( 'cs_framework_init' ) && ! class_exists( 'CSFramework' ) ) {
  function cs_framework_init() {

    // active modules
    defined( 'CS_ACTIVE_SHORTCODE' )  or  define( 'CS_ACTIVE_SHORTCODE',  true );

    // helpers
    cs_locate_template( 'functions/deprecated.php'     );
    cs_locate_template( 'functions/helpers.php'        );
    cs_locate_template( 'functions/actions.php'        );
    cs_locate_template( 'functions/enqueue.php'        );
    cs_locate_template( 'functions/sanitize.php'       );
    cs_locate_template( 'functions/validate.php'       );

    // classes
    cs_locate_template( 'classes/abstract.class.php'   );
    cs_locate_template( 'classes/options.class.php'    );
    cs_locate_template( 'classes/shortcode.class.php'  );

    // configs
    cs_locate_template( 'config/shortcode.config.php'  );

  }
  add_action( 'init', 'cs_framework_init', 10 );
}
