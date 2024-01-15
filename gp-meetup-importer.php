<?php
/**
 * Plugin Name:  GatherPress Meetup Importer
 * Plugin URI:   https://gatherpress.org/
 * Description:  Powering Communities with WordPress.
 * Author:       The GatherPress Community
 * Author URI:   https://gatherpress.org/
 * Version:      0.0.1
 * Requires PHP: 7.4
 * Text Domain:  gp-meetup-importer
 * Domain Path: /languages
 * License:      GPLv2 or later (license.txt)
 *
 * This file serves as the main plugin file for GatherPress. It defines the plugin's basic information,
 * constants, and initializes the plugin.
 *
 * @package GatherPress
 */

// Will refactor later. Just starting with some basic testing.

function gp_meetup_importer_sub_page( $sub_pages ) {
	$sub_pages['import'] = array(
		'name'     => __( 'Import', 'gp-meetup-importer' ),
		'priority' => 10,
		'sections' => array(
			'meetup_importer' => array(
				'name'        => __( 'Meetup Importer', 'gp-meetup-importer' ),
				'description' => __( 'Import events from Meetup.com to GatherPress', 'gp-meetup-importer' ),
				'options'     => array(
					'meetup_api_key' => array(
						'labels' => array(
							'name' => __( 'Meetup API key', 'gp-meetup-importer' ),
						),
						'field'  => array(
							'type' => 'text',
							'size' => 'regular',
						),
					),
				),
			),
		),
	);

	return $sub_pages;
}

add_filter( 'gatherpress_sub_pages', 'gp_meetup_importer_sub_page');
