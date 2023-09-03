<?php

class fortuneWheel{

	function __construct(){

		add_action( 'admin_menu', [ $this, 'custom_menu_page' ] );

		add_action( 'admin_init', [$this, 'display_options'] );

		add_action( 'admin_enqueue_scripts', [ $this, 'backend_script' ] );

		add_action( 'wp_enqueue_scripts', [ $this, 'frontend_script' ] );

		add_action( 'wp_head', [ $this, 'html' ] );
	}

	/**
	 * Menu Page
	 *
	 * @author Atikul Islam
	 * @version 1.0.0
	 */

	function custom_menu_page(){
		add_menu_page(
			'Fortune Wheel',
			'Fortune Wheel',
			'manage_options',
			'welcome-page',
			[$this, 'fortune_wheel_callback'],
			'dashicons-admin-generic',
			30
		);
	}

	function fortune_wheel_callback(){
		include(plugin_dir_path( __FILE__ ) . 'welcome.php');
	}

	/**
	 * Settings fields
	 *
	 * @author Atikul Islam
	 * @version 1.0.0
	 */

	function display_options(){

		add_settings_section("header_section", "", [$this, 'display_header_options_content'], "welcome-page");

		register_setting("header_section", "wheel-enable");
		register_setting("header_section", "wheel-title");
		register_setting("header_section", "button-text");
		register_setting("header_section", "slice1-text");
		register_setting("header_section", "slice2-text");
		register_setting("header_section", "slice3-text");
		register_setting("header_section", "slice4-text");
		register_setting("header_section", "slice5-text");
		register_setting("header_section", "slice6-text");
		register_setting("header_section", "slice7-text");
		register_setting("header_section", "slice8-text");
		register_setting("header_section", "slice9-text");
		register_setting("header_section", "slice10-text");

		add_settings_field("wheel-enable", "Enable Fortune Wheel", [$this, 'enable_wheel_callback'], "welcome-page", "header_section");
		add_settings_field("wheel-title", "Wheel Title", [$this, 'wheel_title_callback'], "welcome-page", "header_section");
		add_settings_field("button-text", "Button Text", [$this, 'button_text_callback'], "welcome-page", "header_section");
		add_settings_field("slice1-text", "Slice 1 Text", [$this, 'slice1_text_callback'], "welcome-page", "header_section");
		add_settings_field("slice2-text", "Slice 2 Text", [$this, 'slice2_text_callback'], "welcome-page", "header_section");
		add_settings_field("slice3-text", "Slice 3 Text", [$this, 'slice3_text_callback'], "welcome-page", "header_section");
		add_settings_field("slice4-text", "Slice 4 Text", [$this, 'slice4_text_callback'], "welcome-page", "header_section");
		add_settings_field("slice5-text", "Slice 5 Text", [$this, 'slice5_text_callback'], "welcome-page", "header_section");
		add_settings_field("slice6-text", "Slice 6 Text", [$this, 'slice6_text_callback'], "welcome-page", "header_section");
		add_settings_field("slice7-text", "Slice 7 Text", [$this, 'slice7_text_callback'], "welcome-page", "header_section");
		add_settings_field("slice8-text", "Slice 8 Text", [$this, 'slice8_text_callback'], "welcome-page", "header_section");
		add_settings_field("slice9-text", "Slice 9 Text", [$this, 'slice9_text_callback'], "welcome-page", "header_section");
		add_settings_field("slice10-text", "Slice 10 Text", [$this, 'slice10_text_callback'], "welcome-page", "header_section");

	}
    function display_header_options_content(){
    	//echo "The header of the theme";
    }
	function enable_wheel_callback(){
		?>
		<input type="checkbox" id="enable-wheel" name="enable-wheel" value="Enable wheel">
		<?php
	}
	function wheel_title_callback(){
		?>
		<input type="text" name="wheel-title" value="<?php echo get_option('wheel-title'); ?>">
		<?php
	}
	function button_text_callback(){
		?>
		<input type="text" name="button-text" value="<?php echo get_option('button-text'); ?>">
		<?php
	}

	function slice1_text_callback(){
		?>
		<input type="text" name="slice1-text" value="<?php echo get_option('slice1-text'); ?>">
		<?php
	}
	function slice2_text_callback(){
		?>
		<input type="text" name="slice2-text" value="<?php echo get_option('slice2-text'); ?>">
		<?php
	}
	function slice3_text_callback(){
		?>
		<input type="text" name="slice3-text" value="<?php echo get_option('slice3-text'); ?>">
		<?php
	}
	function slice4_text_callback(){
		?>
		<input type="text" name="slice4-text" value="<?php echo get_option('slice4-text'); ?>">
		<?php
	}
	function slice5_text_callback(){
		?>
		<input type="text" name="slice5-text" value="<?php echo get_option('slice5-text'); ?>">
		<?php
	}
	function slice6_text_callback(){
		?>
		<input type="text" name="slice6-text" value="<?php echo get_option('slice6-text'); ?>">
		<?php
	}
	function slice7_text_callback(){
		?>
		<input type="text" name="slice7-text" value="<?php echo get_option('slice7-text'); ?>">
		<?php
	}
	function slice8_text_callback(){
		?>
		<input type="text" name="slice8-text" value="<?php echo get_option('slice8-text'); ?>">
		<?php
	}
	function slice9_text_callback(){
		?>
		<input type="text" name="slice9-text" value="<?php echo get_option('slice9-text'); ?>">
		<?php
	}
	function slice10_text_callback(){
		?>
		<input type="text" name="slice10-text" value="<?php echo get_option('slice10-text'); ?>">
		<?php
	}


	/**
	 * Backend Script
	 *
	 * @author Atikul Islam
	 * @version 1.0.0
	 */

	function backend_script($hook) {

		if ($hook == 'toplevel_page_welcome-page') {

			wp_enqueue_style('bootstrap', FORTUNE_WHEEL_PLUGIN_URL . '/assets/css/bootstrap.min.css');

		}


		// wp_enqueue_script('ajax-script', FORTUNE_WHEEL_PLUGIN_URL . '/js/script.js', array('jquery'), null, false);
		// wp_localize_script(
		// 	'ajax-script',
		// 	'ajax_object',
		// 	array(
		// 		'ajaxurl' => admin_url('admin-ajax.php'),
		// 		'author' => 'Atikul Islam',
		// 		'serverTime' => date('Y-m-d h:i:s'),
		// 	)
		// );

	}

	function frontend_script() {

		wp_enqueue_style('bootstrap', FORTUNE_WHEEL_PLUGIN_URL . '/assets/css/wheel-style.css');

		// JS

		wp_enqueue_script( 'jquery', FORTUNE_WHEEL_PLUGIN_URL . '/assets/js/jquery.min.js', array( 'jquery' ), '1.1.1', true );

		wp_enqueue_script( 'jquery-easing', FORTUNE_WHEEL_PLUGIN_URL . '/assets/js/jquery.easing.min.js', array( 'jquery' ), '1.1.1', true );

		wp_enqueue_script( 'sweetalert', FORTUNE_WHEEL_PLUGIN_URL . '/assets/js/sweetalert.min.js', array( 'jquery' ), '1.1.1', true );

		wp_enqueue_script( 'wheel-script', FORTUNE_WHEEL_PLUGIN_URL . '/assets/js/wheel-script.js', array( 'jquery' ), '1.1.1', true );
	}

	/**
	 * Frontend html
	 *
	 * @author Atikul Islam
	 * @version 1.0.0
	 */

	function html(){
		?>

		<div class="mainbox" id="mainbox">
			<div class="box" id="box">
				<div class="box1">
					<span class="font span1"><b><?php if(!empty(get_option('slice1-text'))){echo get_option('slice1-text');}else{echo "Samsung Tab A6";} ?></b></span>
					<span class="font span2"><b><?php if(!empty(get_option('slice2-text'))){echo get_option('slice2-text');}else{echo "JBL Speaker";} ?></b></span>
					<span class="font span3"><b><?php if(!empty(get_option('slice3-text'))){echo get_option('slice3-text');}else{echo "Magic Roaster";} ?></b></span>
					<span class="font span4"><b><?php if(!empty(get_option('slice4-text'))){echo get_option('slice4-text');}else{echo "Sepeda Aviator";} ?></b></span>
					<span class="font span5"><b><?php if(!empty(get_option('slice5-text'))){echo get_option('slice5-text');}else{echo "Rice Cooker <br />Philips";} ?></b></span>
				</div>
				<div class="box2">
					<span class="font span1"><b><?php if(!empty(get_option('slice6-text'))){echo get_option('slice6-text');}else{echo "Lunch Box Lock&Lock";} ?></b></span>
					<span class="font span2"><b><?php if(!empty(get_option('slice7-text'))){echo get_option('slice7-text');}else{echo "Air Cooler <br />Sanken";} ?></b></span>
					<span class="font span3"><b><?php if(!empty(get_option('slice8-text'))){echo get_option('slice8-text');}else{echo "Ipad Mini 4";} ?></b></span>
					<span class="font span4"><b><?php if(!empty(get_option('slice9-text'))){echo get_option('slice9-text');}else{echo "Exclusive Gift";} ?></b></span>
					<span class="font span5"><b><?php if(!empty(get_option('slice10-text'))){echo get_option('slice10-text');}else{echo "Electrolux <br />Blender";} ?></b></span>
				</div>
			</div>
			<button id="aaa" class="spin"><?php if(!empty(get_option('button-text'))){echo get_option('button-text');}else{echo "SPIN";} ?></button>
		</div>

		<?php

	}


}