<?php

/**
 * TGM Init Class
 */
include_once ('class-tgm-plugin-activation.php');

function mstudio_register_required_plugins() {

	$plugins = array(
		array(
			'name'               => 'Visual Composer', // The plugin name.
			'slug'               => 'js_composer', // The plugin slug (typically the folder name).
			'source'             => get_template_directory_uri() . '/mstudio/packs/js_composer.zip',
			'required'           => true,
			'version'            => '4.9.2',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),
		array(
			'name'               => 'Sweipe VC Extend', // The plugin name.
			'slug'               => 'sweipe-vc-extend', // The plugin slug (typically the folder name).
			'source'             => get_template_directory_uri() . '/mstudio/packs/sweipe-vc-extend.zip',
			'required'           => true,
			'version'            => '1.1',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),
		array(
			'name'               => 'Sweipe Sidebars', // The plugin name.
			'slug'               => 'sweipe-sidebars', // The plugin slug (typically the folder name).
			'source'             => get_template_directory_uri() . '/mstudio/packs/sweipe-sidebars.zip',
			'required'           => true,
			'version'            => '1.0',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),
		array(
			'name'               => 'Sweipe Post Types', // The plugin name.
			'slug'               => 'sweipe-post-types', // The plugin slug (typically the folder name).
			'source'             => get_template_directory_uri() . '/mstudio/packs/sweipe-post-types.zip',
			'required'           => true,
			'version'            => '1.0',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),
		array(
			'name'               => 'Revolution Slider', // The plugin name.
			'slug'               => 'revslider', // The plugin slug (typically the folder name).
			'source'             => get_template_directory_uri() . '/mstudio/packs/revslider.zip',
			'required'           => false,
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),
		array(
			'name'               => 'Meta Box', // The plugin name.
			'slug'               => 'meta-box', // The plugin slug (typically the folder name).
			'source'             => 'https://github.com/rilwis/meta-box/archive/master.zip',
			'required'           => true,
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),
		array(
			'name'               => 'Contact Form 7', // The plugin name.
			'slug'               => 'contact-form-7', // The plugin slug (typically the folder name).
			'source'             => 'https://downloads.wordpress.org/plugin/contact-form-7.4.3.1.zip',
			'required'           => true,
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),
		array(
			'name'               => 'Envato WordPress Toolkit', // The plugin name.
			'slug'               => 'envato-wordpress-toolkit', // The plugin slug (typically the folder name).
			'source'             => 'https://github.com/envato/envato-wordpress-toolkit/archive/master.zip',
			'required'           => true,
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),
		array(
			'name'               => 'WooCommerce', // The plugin name.
			'slug'               => 'woocommerce', // The plugin slug (typically the folder name).
			'source'             => 'http://downloads.wordpress.org/plugin/woocommerce.2.4.12.zip',
			'required'           => false,
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),
	);

	$config = array(
		'domain'       		=> 'mstudio',
		'default_path' 		=> '',
        'parent_slug'       => 'plugins.php',
        'capability'        => 'manage_options',
		'menu'              => 'install-required-plugins',
		'has_notices'      	=> true,
		'is_automatic'    	=> true,

		'strings'           => array(
			'page_title'                      => esc_html__( 'Install Required Plugins', 'sweipe' ),
			'menu_title'                      => esc_html__( 'Install Plugins', 'sweipe' ),
			'installing'                      => esc_html__( 'Installing Plugin: %s', 'sweipe' ),
			'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'sweipe' ),
			'notice_can_install_required'     => _n_noop(
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'mstudio'
			),
			'notice_can_install_recommended'  => _n_noop(
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'mstudio'
			),
			'notice_cannot_install'           => _n_noop(
				'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
				'mstudio'
			),
			'notice_ask_to_update'            => _n_noop(
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'mstudio'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'mstudio'
			),
			'notice_cannot_update'            => _n_noop(
				'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
				'mstudio'
			),
			'notice_can_activate_required'    => _n_noop(
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'mstudio'
			),
			'notice_can_activate_recommended' => _n_noop(
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'mstudio'
			),
			'notice_cannot_activate'          => _n_noop(
				'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
				'mstudio'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'mstudio'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'mstudio'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'mstudio'
			),
			'return'                          => esc_html__( 'Return to Required Plugins Installer', 'sweipe' ),
			'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'sweipe' ),
			'activated_successfully'          => esc_html__( 'The following plugin was activated successfully:', 'sweipe' ),
			'plugin_already_active'           => esc_html__( 'No action taken. Plugin %1$s was already active.', 'sweipe' ),
			'plugin_needs_higher_version'     => esc_html__( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'sweipe' ),
			'complete'                        => esc_html__( 'All plugins installed and activated successfully. %1$s', 'sweipe' ),
			'contact_admin'                   => esc_html__( 'Please contact the administrator of this site for help.', 'tgmpa' ),

			'nag_type'                        => 'updated',
		),
	);

	tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'mstudio_register_required_plugins' );