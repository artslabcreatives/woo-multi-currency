<?php

/*
Class Name: WOOMULTI_CURRENCY_F_Admin_Widget
Author: Artslab Creatives (support@dev.artslabcreatives.com)
Author URI: https://plugins.artslabcreatives.com
Copyright 2022 artslabcreatives.com. All rights reserved.
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WOOMULTI_CURRENCY_F_Admin_Widget {
	protected $settings;

	public function __construct() {
		$this->settings = WOOMULTI_CURRENCY_F_Data::get_ins();

		add_action( 'widgets_init', array( $this, 'widgets_init' ) );


	}


	/**
	 * Init widget
	 */
	public function widgets_init() {
		register_widget( 'WMC_Widget' );
		register_widget( 'WMC_Widget_Rates' );
	}


}

?>