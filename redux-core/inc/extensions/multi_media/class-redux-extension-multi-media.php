<?php
/**
 * Redux Multi Media Extension Class
 *
 * @package Redux
 * @author Kevin Provance <kevin.provance@gmail.com>
 * @class   Redux_Extension_Multi_Media
 *
 * @version 4.3.15
 */

defined( 'ABSPATH' ) || exit;

// Don't duplicate me!
if ( ! class_exists( 'Redux_Extension_Multi_Media' ) ) {

	/**
	 * Main ReduxFramework_extension_multi_media extension class
	 *
	 * @since       1.0.0
	 */
	class Redux_Extension_Multi_Media extends Redux_Extension_Abstract {

		/**
		 * Extension version.
		 *
		 * @var string
		 */
		public static $version = '4.3.15';

		/**
		 * Extension name.
		 *
		 * @var string
		 */
		public $extension_name = 'Multi Media';

		/**
		 * Class Constructor. Defines the args for the extensions class
		 *
		 * @since       1.0.0
		 * @access      public
		 *
		 * @param       ReduxFramework $parent Parent settings.
		 *
		 * @return      void
		 */
		public function __construct( $parent ) {
			parent::__construct( $parent, __FILE__ );

			$this->add_field( 'multi_media' );
		}

		/**
		 * Get extended image data.
		 *
		 * @param int|string $id image ID.
		 *
		 * @return array|void
		 */
		public static function get_extended_data( $id ) {
			if ( '' !== $id && is_numeric( $id ) ) {
				return wp_prepare_attachment_for_js( $id );
			}
		}
	}
}