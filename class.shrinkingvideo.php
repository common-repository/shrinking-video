<?php
class shrinking_video{
	
	private static $initialized = null;
	
	function __construct(){
		add_action( 'wp_enqueue_scripts', array( $this, 'shrinking_video_scripts' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'shrinking_video_stylesheet' ) );
		add_shortcode( 'shrinkingvideo', array( $this, 'shrinking_video_shortcode' ) );
	}
	
	public static function shrinking_video_init(){
		if( is_null( self::$initialized ) ){
			self::$initialized = new shrinking_video();
		}
		return self::$initialized;
	}
	
	function shrinking_video_shortcode( $atts ){
		$a = shortcode_atts( array(
			'src' => '',
			'height' => '394',
			'width' => '700',
			'position' => 'top-right',
			'class' => ''
		), $atts );
		
		$new_url = wp_oembed_get( $a['src'], array( 'width' => $a['width'], 'height' => $a['height'] ) );
		echo "<script> shrinking_video({$a['height']},{$a['width']},'{$a['position']}'); </script>";

		return "<div id='shrinking_video' class='{$a['class']}'>{$new_url}</div>";
	}
	
	function shrinking_video_scripts(){
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'shrinkingvideo.js', plugin_dir_url( __FILE__ ) . 'js/shrinkingvideo.js' );
	}
	
	function shrinking_video_stylesheet(){
		wp_enqueue_style( 'shrinkingvideo.css', plugin_dir_url( __FILE__ ) . 'css/shrinkingvideo.css' );
	}
	
	public static function shrinking_video_activation(){
		if( !current_user_can( 'activate_plugins' ) ) return;
		if ( version_compare( $GLOBALS['wp_version'], SHRINKINGVIDEO_MIN_WP_VERSION, '<' ) ) {
			$error_message = sprintf( "Could not activate Shrinking Video version %s because it requires wordpress version %s or greater.", SHRINKINGVIDEO_PLUGIN_VERSION, SHRINKINGVIDEO_MIN_WP_VERSION );
			wp_die( $error_message );
		}
	}
	
	public static function shrinking_video_deactivation(){
		if( !current_user_can( 'activate_plugins' ) ) return;
	}
	
}
shrinking_video::shrinking_video_init();