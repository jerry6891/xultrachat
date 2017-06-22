<?php
if (!defined('ABSPATH')) die('-1');
/**
 *
 * Web APP
 *
 */
Kirki::add_section( 'sweipe_web_app_section', array(
		'title'          => esc_html__( 'Web App', 'sweipe' ),
		'priority'       => 160,
		'capability'     => 'edit_theme_options',
) );

Kirki::add_config( 'sweipe_web_app', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'option',
		'option_name'   => 'sweipe_web_app',
) );


Kirki::add_field( 'sweipe_web_app', array(
		'type'        => 'select',
		'settings'    => 'sweipe_web_app_capable',
		'label'       => esc_html__( 'Activity', 'sweipe' ),
		'section'     => 'sweipe_web_app_section',
		'default'     => 'on',
		'priority'    => 25,
		'choices'     => array(
				'on'  => esc_html__( 'On', 'sweipe' ),
				'off' => esc_html__( 'Off', 'sweipe' ),
		),
) );

Kirki::add_field( 'sweipe_web_app', array(
		'type'        => 'select',
		'settings'    => 'sweipe_web_app_status_bar',
		'label'       => esc_html__( 'Status Bar Style', 'sweipe' ),
		'section'     => 'sweipe_web_app_section',
		'default'     => 'black',
		'priority'    => 25,
		'choices'     => array(
				'black'             => esc_html__( 'Black', 'sweipe' ),
				'black-translucent' => esc_html__( 'Black Translucent', 'sweipe' ),
		),
) );

Kirki::add_field( 'sweipe_web_app', array(
		'settings'      => 'web_app_ipad_retina_portrait',
		'label'         => esc_html__( 'iPad Retina Portrait | Startup Image', 'sweipe' ),
		'description'   => esc_html__( 'Required dimensions: 1536x2008', 'sweipe' ),
		'section'       => 'sweipe_web_app_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_web_app', array(
		'settings'      => 'sweipe_web_app_ipad_retina_landscape',
		'label'         => esc_html__( 'iPad Retina Landscape | Startup Image', 'sweipe' ),
		'description'   => esc_html__( 'Required dimensions: 1496x2048', 'sweipe' ),
		'section'       => 'sweipe_web_app_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_web_app', array(
		'settings'      => 'sweipe_web_app_ipad_portrait',
		'label'         => esc_html__( 'iPad Portrait | Startup Image', 'sweipe' ),
		'description'   => esc_html__( 'Required dimensions: 768x1004', 'sweipe' ),
		'section'       => 'sweipe_web_app_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_web_app', array(
		'settings'      => 'sweipe_web_app_ipad_landscape',
		'label'         => esc_html__( 'iPad Landscape | Startup Image', 'sweipe' ),
		'description'   => esc_html__( 'Required dimensions: 748x1024', 'sweipe' ),
		'section'       => 'sweipe_web_app_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_web_app', array(
		'settings'      => 'sweipe_web_app_iphone_6_plus_portrait',
		'label'         => esc_html__( 'iPhone 6 Plus Portrait | Startup Image', 'sweipe' ),
		'description'   => esc_html__( 'Required dimensions: 1242x2148', 'sweipe' ),
		'section'       => 'sweipe_web_app_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_web_app', array(
		'settings'      => 'sweipe_web_app_iphone_6_plus_landscape',
		'label'         => esc_html__( 'iPhone 6 Plus Landscape | Startup Image', 'sweipe' ),
		'description'   => esc_html__( 'Required dimensions: 1182x2208', 'sweipe' ),
		'section'       => 'sweipe_web_app_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_web_app', array(
		'settings'      => 'sweipe_web_app_iphone_6_portrait',
		'label'         => esc_html__( 'iPhone 6 Portrait | Startup Image', 'sweipe' ),
		'description'   => esc_html__( 'Required dimensions: 750x1294', 'sweipe' ),
		'section'       => 'sweipe_web_app_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_web_app', array(
		'settings'      => 'sweipe_web_app_iphone_6_landscape',
		'label'         => esc_html__( 'iPhone 6 Landscape | Startup Image', 'sweipe' ),
		'description'   => esc_html__( 'Required dimensions: 640x1096', 'sweipe' ),
		'section'       => 'sweipe_web_app_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_web_app', array(
		'settings'      => 'sweipe_web_app_iphone_retina_5_and_lower',
		'label'         => esc_html__( 'iPhone Retina < 5 | Startup Image', 'sweipe' ),
		'description'   => esc_html__( 'Required dimensions: 640x920', 'sweipe' ),
		'section'       => 'sweipe_sweipe_web_app_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_web_app', array(
		'settings'      => 'sweipe_web_app_iphone_5_and_lower',
		'label'         => esc_html__( 'iPhone < 5 | Startup Image', 'sweipe' ),
		'description'   => esc_html__( 'Required dimensions: 320x460', 'sweipe' ),
		'section'       => 'sweipe_web_app_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );



/**
 *
 * Favicons
 *
 */
Kirki::add_section( 'sweipe_favicons_section', array(
		'title'          => esc_html__( 'Fav Icons', 'sweipe' ),
		'priority'       => 160,
		'capability'     => 'edit_theme_options',
) );

Kirki::add_config( 'sweipe_favicons', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'option',
		'option_name'   => 'sweipe_favicons',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_favicons_16_16',
		'label'         => esc_html__( 'Favicon 16x16', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_favicons_32_32',
		'label'         => esc_html__( 'Favicon 32x32', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_favicons_96_96',
		'label'         => esc_html__( 'Favicon 96x96', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_favicons_192_192',
		'label'         => esc_html__( 'Favicon 192x192', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_favicons_194_194',
		'label'         => esc_html__( 'Favicon 194x194', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_apple_touch_57x57',
		'label'         => esc_html__( 'Apple Touch Icon 57x57', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_apple_touch_60x60',
		'label'         => esc_html__( 'Apple Touch Icon 60x60', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_apple_touch_72x72',
		'label'         => esc_html__( 'Apple Touch Icon 72x72', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_apple_touch_76x76',
		'label'         => esc_html__( 'Apple Touch Icon 76x76', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_apple_touch_114x114',
		'label'         => esc_html__( 'Apple Touch Icon 114x114', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_apple_touch_120x120',
		'label'         => esc_html__( 'Apple Touch Icon 120x120', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_apple_touch_144x144',
		'label'         => esc_html__( 'Apple Touch Icon 144x144', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_apple_touch_152x152',
		'label'         => esc_html__( 'Apple Touch Icon 152x152', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );

Kirki::add_field( 'sweipe_favicons', array(
		'settings'      => 'sweipe_apple_touch_180x180',
		'label'         => esc_html__( 'Apple Touch Icon 180x180', 'sweipe' ),
		'description'   => esc_html__( 'Must be PNG file type', 'sweipe' ),
		'section'       => 'sweipe_favicons_section',
		'type'          => 'image',
		'priority'      => 25,
		'default'       => '',
) );



/**
 *
 * Logo
 *
 */
Kirki::add_section( 'sweipe_logo_section', array(
		'title'          => esc_html__( 'Logo', 'sweipe' ),
		'priority'       => 160,
		'capability'     => 'edit_theme_options',
) );

Kirki::add_config( 'sweipe_logo', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'option',
		'option_name'   => 'sweipe_logo',
) );

Kirki::add_field( 'sweipe_logo', array(
		'settings' => 'sweipe_url',
		'label'    => esc_html__( 'Image', 'sweipe' ),
		'section'  => 'sweipe_logo_section',
		'type'     => 'image',
		'priority' => 10,
		'default'  => '',
) );

Kirki::add_field( 'sweipe_logo', array(
		'type'        => 'slider',
		'settings'    => 'sweipe_height',
		'label'       => esc_html__( 'Height', 'sweipe' ),
		'section'     => 'sweipe_logo_section',
		'default'     => 15,
		'priority'    => 10,
		'choices'     => array(
				'min'  => 5,
				'max'  => 100,
				'step' => 1
		),
		'output' => ( '15' != sweipe::option( 'sweipe_logo', 'sweipe_height' ) ) ? array(
				array(
						'element'  => '.tc-logo img',
						'property' => 'height',
						'units'    => 'px',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars'   => array(
				array(
						'element'  => '.tc-logo img',
						'function' => 'css',
						'property' => 'height',
						'units'    => 'px',
				),
		)
) );



/**
 *
 * Typography
 *
 */
Kirki::add_section( 'sweipe_typography_section', array(
		'title'          => esc_html__( 'Typography', 'sweipe' ),
		'priority'       => 160,
		'capability'     => 'edit_theme_options',
) );

Kirki::add_config( 'sweipe_typography', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'option',
		'option_name'   => 'sweipe_typography',
) );

Kirki::add_field( 'sweipe_typography', array(
		'type' => 'select',
		'settings' => 'sweipe_base_font_family',
		'label' => esc_html__( 'Font Family', 'sweipe' ),
		'section' => 'sweipe_typography_section',
		'default' => 'Roboto',
		'priority' => 20,
		'choices' => Kirki_Fonts::get_font_choices(),
		'output' => array(
				array(
						'element'  => 'body',
						'property' => 'font-family',
				),
		),
		'transport' => 'postMessage',
		'js_vars'   => array(
				array(
						'element'  => 'body',
						'function' => 'css',
						'property' => 'font-family',
				),
		)
) );

Kirki::add_field( 'sweipe_typography', array(
		'type' => 'slider',
		'settings' => 'sweipe_base_font_weight',
		'label' => esc_html__( 'Font Weight', 'sweipe' ),
		'section' => 'sweipe_typography_section',
		'default' => 400,
		'priority' => 24,
		'choices' => array(
				'min' => 100,
				'max' => 900,
				'step' => 100,
		),
		'output' => ( '400' != sweipe::option( 'sweipe_typography', 'sweipe_base_font_weight' ) ) ? array(
				array(
						'element'  => 'body',
						'property' => 'font-weight',
						'units'    => 'px',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => 'body',
						'function' => 'css',
						'property' => 'font-weight',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_typography', array(
		'type'        => 'color-alpha',
		'settings'    => 'base_font_color',
		'label'       => esc_html__( 'Body Font Color', 'sweipe' ),
		'section'     => 'typography_section',
		'default'     => 'rgba(0,0,0,0.6)',
		'priority'    => 24,
		'output' => ( 'rgba(0,0,0,0.6)' != sweipe::option( 'sweipe_typography', 'base_font_color' ) ) ? array(
				array(
						'element'  => 'body',
						'property' => 'color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => 'body',
						'function' => 'css',
						'property' => 'color',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_typography', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_headings_font_color',
		'label'       => esc_html__( 'Headings Font Color', 'sweipe' ),
		'section'     => 'sweipe_typography_section',
		'default'     => 'rgba(0,0,0,0.87)',
		'priority'    => 24,
		'output' => ( 'rgba(0,0,0,0.87)' != sweipe::option( 'sweipe_typography', 'sweipe_headings_font_color' ) ) ? array(
				array(
						'element'  => 'h1,h2,h3,h4,h5,h6',
						'property' => 'color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => 'h1,h2,h3,h4,h5,h6',
						'function' => 'css',
						'property' => 'color',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_typography', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_links_font_color',
		'label'       => esc_html__( 'Links Font Color', 'sweipe' ),
		'section'     => 'sweipe_typography_section',
		'default'     => 'rgba(33,150,243,1)',
		'priority'    => 24,
		'output' => ( 'rgba(33,150,243,1)' != sweipe::option( 'sweipe_typography', 'sweipe_links_font_color' ) ) ? array(
				array(
						'element'  => '.inner a',
						'property' => 'color',
						'units'    => '',
				),
				array(
						'element'  => '.tc-filters a.active:after',
						'property' => 'background-color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.inner a',
						'function' => 'css',
						'property' => 'color',
						'units' => ''
				),
				array(
						'element' => '.tc-filters a.active:after',
						'function' => 'css',
						'property' => 'background-color',
						'units' => ''
				),
		),
) );

$font_types = array(
		'base' => array(
				'label' => '',
				'element' => 'body',
				'default' => array(
						'size' => 14,
						'line' => 30
				)
		),
		'h1' => array(
				'label' => 'H1 ',
				'element' => 'h1',
				'default' => array(
						'size' => 30,
						'line' => 40
				)
		),
		'h2' => array(
				'label' => 'H2 ',
				'element' => 'h2',
				'default' => array(
						'size' => 24,
						'line' => 44
				)
		),
		'h3' => array(
				'label' => 'H3 ',
				'element' => 'h3',
				'default' => array(
						'size' => 20,
						'line' => 28
				)
		),
		'h4' => array(
				'label' => 'H4 ',
				'element' => 'h4',
				'default' => array(
						'size' => 16,
						'line' => 22
				)
		),
		'h5' => array(
				'label' => 'H5 ',
				'element' => 'h5',
				'default' => array(
						'size' => 11,
						'line' => 16
				)
		),
		'h6' => array(
				'label' => 'H6 ',
				'element' => 'h6',
				'default' => array(
						'size' => 8,
						'line' => 12
				)
		),
);

foreach ( $font_types as $font_type => $val ):
	Kirki::add_field( 'sweipe_typography', array(
			'type' => 'slider',
			'settings' => 'sweipe_'.$font_type.'_font_size',
			'label' => $val['label'].esc_html__( 'Font Size', 'sweipe' ),
			'section' => 'sweipe_typography_section',
			'default' => $val['default']['size'],
			'priority' => 25,
			'choices' => array(
					'min' => 7,
					'max' => 48,
					'step' => 1,
			),
			'output' => ( $val['default']['size'] != sweipe::option( 'sweipe_typography', 'sweipe_'.$font_type.'_font_size' ) ) ? array(
					array(
							'element'  => $val['element'],
							'property' => 'font-size',
							'units'    => 'px',
					),
			) : null,
			'transport' => 'postMessage',
			'js_vars' => array(
					array(
							'element' => $val['element'],
							'function' => 'css',
							'property' => 'font-size',
							'units' => 'px'
					),
			),
	) );

	Kirki::add_field( 'sweipe_typography', array(
			'type' => 'slider',
			'settings' => 'sweipe_'.$font_type.'_line_height',
			'label' => $val['label'].esc_html__( 'Line Height', 'sweipe' ),
			'section' => 'sweipe_typography_section',
			'default' => $val['default']['line'],
			'priority' => 25,
			'choices' => array(
					'min' => 7,
					'max' => 70,
					'step' => 1,
			),
			'output' => ( $val['default']['line'] != sweipe::option( 'sweipe_typography', 'sweipe_'.$font_type.'_line_height' ) ) ? array(
					array(
							'element'  => $val['element'],
							'property' => 'line-height',
							'units'    => 'px',
					),
			) : null,
			'transport' => 'postMessage',
			'js_vars' => array(
					array(
							'element' => $val['element'],
							'function' => 'css',
							'property' => 'line-height',
							'units' => 'px'
					),
			),
	) );
endforeach;



/**
 *
 * Navigation Bar
 *
 */
Kirki::add_section( 'sweipe_navbar_section', array(
		'title'          => esc_html__( 'Navigation Bar', 'sweipe' ),
		'priority'       => 160,
		'capability'     => 'edit_theme_options',
) );

Kirki::add_config( 'sweipe_navbar', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'option',
		'option_name'   => 'sweipe_navbar',
) );

Kirki::add_field( 'sweipe_navbar', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_navbar_bg_color',
		'label'       => esc_html__( 'Background Color', 'sweipe' ),
		'section'     => 'sweipe_navbar_section',
		'default'     => 'rgba(23, 22, 22, 1)',
		'priority'    => 24,
		'output' => ( 'rgba(23, 22, 22, 1)' != sweipe::option( 'sweipe_navbar', 'sweipe_navbar_bg_color' ) ) ? array(
				array(
						'element'  => '.navbar,.navbar.navbar-fixed.colored',
						'property' => 'background-color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.navbar,.navbar.navbar-fixed.colored',
						'function' => 'css',
						'property' => 'background-color',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_navbar', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_links_icon_color',
		'label'       => esc_html__( 'Icon Color', 'sweipe' ),
		'section'     => 'sweipe_navbar_section',
		'default'     => 'rgba(255,255,255,0.87)',
		'priority'    => 24,
		'output' => ( 'rgba(255,255,255,0.87)' != sweipe::option( 'sweipe_navbar', 'sweipe_links_icon_color' ) ) ? array(
				array(
						'element'  => '.navbar .icon-only',
						'property' => 'color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.navbar .icon-only',
						'function' => 'css',
						'property' => 'color',
						'units' => ''
				),
		),
) );



/**
 *
 * Layout Coloring
 *
 */
Kirki::add_section( 'sweipe_layout_coloring_section', array(
		'title'          => esc_html__( 'Layout Coloring', 'sweipe' ),
		'priority'       => 160,
		'capability'     => 'edit_theme_options',
) );

Kirki::add_config( 'sweipe_layout_coloring', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'option',
		'option_name'   => 'sweipe_layout_coloring',
) );

Kirki::add_field( 'sweipe_layout_coloring', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_content_bg',
		'label'       => esc_html__( 'Content Background', 'sweipe' ),
		'section'     => 'sweipe_layout_coloring_section',
		'default'     => 'rgba(255, 255, 255, 1)',
		'priority'    => 24,
		'output' => ( 'rgba(255, 255, 255, 1)' != sweipe::option( 'sweipe_layout_coloring', 'sweipe_content_bg' ) ) ? array(
				array(
						'element'  => '.tc-page',
						'property' => 'background-color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.tc-page',
						'function' => 'css',
						'property' => 'background-color',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_layout_coloring', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_body_bg',
		'label'       => esc_html__( 'Body Background', 'sweipe' ),
		'section'     => 'sweipe_layout_coloring_section',
		'default'     => 'rgba(23, 22, 22, 1)',
		'priority'    => 24,
		'output' => ( 'rgba(23, 22, 22, 1)' != sweipe::option( 'sweipe_layout_coloring', 'sweipe_body_bg' ) ) ? array(
				array(
						'element'  => 'body',
						'property' => 'background-color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => 'body',
						'function' => 'css',
						'property' => 'background-color',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_layout_coloring', array(
		'settings' => 'sweipe_body_image',
		'label'    => esc_html__( 'Body Image', 'sweipe' ),
		'section'  => 'sweipe_layout_coloring_section',
		'type'     => 'image',
		'priority' => 25,
		'default'  => ''
) );



/**
 *
 * Panels
 *
 */
Kirki::add_section( 'sweipe_panesweipe_ls_section', array(
		'title'          => esc_html__( 'Panels', 'sweipe' ),
		'priority'       => 160,
		'capability'     => 'edit_theme_options',
) );

Kirki::add_config( 'sweipe_mspanels', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'option',
		'option_name'   => 'sweipe_mspanels',
) );

Kirki::add_field( 'sweipe_mspanels', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_panels_background_color',
		'label'       => esc_html__( 'Background Color', 'sweipe' ),
		'section'     => 'sweipe_panesweipe_ls_section',
		'default'     => 'rgba(23, 22, 22, 1)',
		'priority'    => 24,
		'output' => ( 'rgba(23, 22, 22, 1)' != sweipe::option( 'sweipe_mspanels', 'sweipe_panels_background_color' ) ) ? array(
				array(
						'element'  => '.ms-panel',
						'property' => 'background-color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.ms-panel',
						'function' => 'css',
						'property' => 'background-color',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_mspanels', array(
		'type' => 'slider',
		'settings' => 'sweipe_panels_font_size',
		'label' => esc_html__( 'Font Size', 'sweipe' ),
		'section' => 'sweipe_panesweipe_ls_section',
		'default' => 12,
		'priority' => 25,
		'choices' => array(
				'min' => 7,
				'max' => 48,
				'step' => 1,
		),
		'output' => ( '12' != sweipe::option( 'sweipe_mspanels', 'sweipe_panels_font_size' ) ) ? array(
				array(
						'element'  => '.ms-panel',
						'property' => 'font-size',
						'units'    => 'px',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.ms-panel',
						'function' => 'css',
						'property' => 'font-size',
						'units' => 'px'
				),
		),
) );

Kirki::add_field( 'sweipe_mspanels', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_panels_headings_color',
		'label'       => esc_html__( 'Headings Color', 'sweipe' ),
		'section'     => 'sweipe_panesweipe_ls_section',
		'default'     => 'rgba(255, 255, 255, 0.87)',
		'priority'    => 25,
		'output' => ( 'rgba(255, 255, 255, 0.87)' != sweipe::option( 'sweipe_mspanels', 'sweipe_panels_headings_color' ) ) ? array(
				array(
						'element'  => '.ms-panel h1,.ms-panel h2,.ms-panel h3,.ms-panel h4,.ms-panel h5,.ms-panel h6',
						'property' => 'color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.ms-panel h1,.ms-panel h2,.ms-panel h3,.ms-panel h4,.ms-panel h5,.ms-panel h6',
						'function' => 'css',
						'property' => 'color',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_mspanels', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_panels_text_color',
		'label'       => esc_html__( 'Text Color', 'sweipe' ),
		'section'     => 'sweipe_panesweipe_ls_section',
		'default'     => 'rgba(255, 255, 255, 0.54)',
		'priority'    => 25,
		'output' => ( 'rgba(255, 255, 255, 0.54)' != sweipe::option( 'sweipe_mspanels', 'sweipe_panels_text_color' ) ) ? array(
				array(
						'element'  => '.ms-panel',
						'property' => 'color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.ms-panel',
						'function' => 'css',
						'property' => 'color',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_mspanels', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_menu_border_bottom_color',
		'label'       => esc_html__( 'Border Bottom Color', 'sweipe' ),
		'section'     => 'sweipe_panesweipe_ls_section',
		'default'     => 'rgba(255, 255, 255, 0.12)',
		'priority'    => 25,
		'output' => ( 'rgba(255, 255, 255, 0.12)' != sweipe::option( 'sweipe_mspanels', 'sweipe_menu_border_bottom_color' ) ) ? array(
				array(
						'element'  => '.tc-blog-sidebar-box > ul li:not(:last-child):after,.tc-blog-sidebar-box ul.menu li:not(:last-child):after',
						'property' => 'background-color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.tc-blog-sidebar-box > ul li:not(:last-child):after,.tc-blog-sidebar-box ul.menu li:not(:last-child):after',
						'function' => 'css',
						'property' => 'background-color',
						'units' => ''
				),
		),
) );



/**
 *
 * Menu
 *
 */
Kirki::add_section( 'sweipe_menu_section', array(
		'title'          => esc_html__( 'Menu Styling', 'sweipe' ),
		'priority'       => 160,
		'capability'     => 'edit_theme_options',
) );

Kirki::add_config( 'sweipe_menu', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'option',
		'option_name'   => 'sweipe_menu',
) );

Kirki::add_field( 'sweipe_menu', array(
		'type' => 'slider',
		'settings' => 'sweipe_font_size',
		'label' => esc_html__( 'Font Size', 'sweipe' ),
		'section' => 'sweipe_menu_section',
		'default' => 12,
		'priority' => 25,
		'choices' => array(
				'min' => 7,
				'max' => 48,
				'step' => 1,
		),
		'output' => ( '12' != sweipe::option( 'sweipe_menu', 'sweipe_font_size' ) ) ? array(
				array(
						'element'  => '.menu-list a',
						'property' => 'font-size',
						'units'    => 'px',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.menu-list a',
						'function' => 'css',
						'property' => 'font-size',
						'units' => 'px'
				),
		),
) );

Kirki::add_field( 'sweipe_menu', array(
		'type'        => 'select',
		'settings'    => 'sweipe_font_weight',
		'label'       => esc_html__( 'Font Weight', 'sweipe' ),
		'section'     => 'sweipe_menu_section',
		'default'     => '900',
		'priority'    => 25,
		'choices'     => array(
				'100' => '100',
				'300' => '300',
				'400' => '400',
				'500' => '500',
				'700' => '700',
				'900' => '900',
		),
		'output' => ( '900' != sweipe::option( 'sweipe_menu', 'sweipe_font_weight' ) ) ? array(
				array(
						'element'  => '.menu-list a',
						'property' => 'font-weight',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.menu-list a',
						'function' => 'css',
						'property' => 'font-weight',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_menu', array(
		'type' => 'slider',
		'settings' => 'sweipe_line_height',
		'label' => esc_html__( 'Line Height', 'sweipe' ),
		'section' => 'sweipe_menu_section',
		'default' => 40,
		'priority' => 25,
		'choices' => array(
				'min' => 15,
				'max' => 50,
				'step' => 1,
		),
		'output' => ( '12' != sweipe::option( 'sweipe_menu', 'sweipe_line_height' ) ) ? array(
				array(
						'element'  => '.menu-list a',
						'property' => 'line-height',
						'units'    => 'px',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.menu-list a',
						'function' => 'css',
						'property' => 'line-height',
						'units' => 'px'
				),
		),
) );

Kirki::add_field( 'sweipe_menu', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_text_color',
		'label'       => esc_html__( 'Text Color', 'sweipe' ),
		'section'     => 'sweipe_menu_section',
		'default'     => 'rgba(255, 255, 255, 1)',
		'priority'    => 25,
		'output' => ( 'rgba(255, 255, 255, 1)' != sweipe::option( 'sweipe_menu', 'sweipe_text_color' ) ) ? array(
				array(
						'element'  => '.menu-list a',
						'property' => 'color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.menu-list a',
						'function' => 'css',
						'property' => 'color',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_menu', array(
		'type'        => 'select',
		'settings'    => 'sweipe_text_transform',
		'label'       => esc_html__( 'Text Transform', 'sweipe' ),
		'section'     => 'sweipe_menu_section',
		'default'     => 'uppercase',
		'priority'    => 25,
		'choices'     => array(
				'uppercase' => esc_html__( 'Upper Case', 'sweipe' ),
				'lowercase' => esc_html__( 'Lower Case', 'sweipe' ),
				'capitalize' => esc_html__( 'Capitalize', 'sweipe' ),
		),
		'output' => ( 'uppercase' != sweipe::option( 'sweipe_menu', 'sweipe_text_transform' ) ) ? array(
				array(
						'element'  => '.menu-list a',
						'property' => 'text-transform',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.menu-list a',
						'function' => 'css',
						'property' => 'text-transform',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_menu', array(
		'type'        => 'radio',
		'settings'    => 'sweipe_pills',
		'label'       => esc_html__( 'Pills', 'sweipe' ),
		'section'     => 'sweipe_menu_section',
		'default'     => 'inline-block',
		'priority'    => 25,
		'choices'     => array(
				'inline-block'  => esc_html__( 'On', 'sweipe' ),
				'none'          => esc_html__( 'Off', 'sweipe' ),
		),
		'output' => ( 'inline-block' != sweipe::option( 'sweipe_menu', 'sweipe_pills' ) ) ? array(
				array(
						'element'  => '.menu-list span',
						'property' => 'display',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.menu-list span',
						'function' => 'css',
						'property' => 'display',
						'units' => ''
				),
		),
) );



/**
 *
 * Loading Screen
 *
 */
Kirki::add_section( 'sweipe_ls_section', array(
		'title'          => esc_html__( 'Loading Screen', 'sweipe' ),
		'priority'       => 160,
		'capability'     => 'edit_theme_options',
) );

Kirki::add_config( 'sweipe_loading_screen', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'option',
		'option_name'   => 'sweipe_loading_screen',
) );

Kirki::add_field( 'sweipe_loading_screen', array(
		'type'        => 'switch',
		'settings'    => 'sweipe_ls_switch',
		'label'       => esc_html__( 'Enable/Disable', 'sweipe' ),
		'section'     => 'sweipe_ls_section',
		'default'     => '1',
		'priority'    => 25,
		'choices'     => array(
				'on'  => esc_html__( 'On', 'sweipe' ),
				'off' => esc_html__( 'Off', 'sweipe' ),
		),
) );

Kirki::add_field( 'sweipe_loading_screen', array(
		'type'        => 'switch',
		'settings'    => 'sweipe_ls_show',
		'label'       => esc_html__( 'Show Always', 'sweipe' ),
		'section'     => 'sweipe_ls_section',
		'default'     => '0',
		'priority'    => 25,
		'choices'     => array(
				'on'  => esc_html__( 'On', 'sweipe' ),
				'off' => esc_html__( 'Off', 'sweipe' ),
		),
) );

Kirki::add_field( 'sweipe_loading_screen', array(
		'type'        => 'select',
		'settings'    => 'sweipe_ls_type',
		'label'       => esc_html__( 'Type', 'sweipe' ),
		'section'     => 'sweipe_ls_section',
		'default'     => 'twelve',
		'priority'    => 25,
		'choices'     => array(
				'one'    => esc_html__( 'One', 'sweipe' ),
				'two'    => esc_html__( 'Two', 'sweipe' ),
				'three'  => esc_html__( 'Three', 'sweipe' ),
				'four'   => esc_html__( 'Four', 'sweipe' ),
				'five'   => esc_html__( 'Five', 'sweipe' ),
				'six'    => esc_html__( 'Six', 'sweipe' ),
				'seven'  => esc_html__( 'Seven', 'sweipe' ),
				'eight'  => esc_html__( 'Eight', 'sweipe' ),
				'nine'   => esc_html__( 'Nine', 'sweipe' ),
				'ten'    => esc_html__( 'Ten', 'sweipe' ),
				'eleven' => esc_html__( 'Eleven', 'sweipe' ),
				'twelve' => esc_html__( 'Twelve', 'sweipe' ),
		)
) );

Kirki::add_field( 'sweipe_loading_screen', array(
		'type'        => 'text',
		'settings'    => 'sweipe_bottom_text',
		'label'       => esc_html__( 'Bottom Text', 'sweipe' ),
		'default'     => 'Loading, Please Wait...',
		'section'     => 'sweipe_ls_section',
		'priority'    => 25,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.ms-page-loading .sub-text',
						'function' => 'html',
				),
		),
) );

Kirki::add_field( 'sweipe_loading_screen', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_ls_bg',
		'label'       => esc_html__( 'Background Color', 'sweipe' ),
		'section'     => 'sweipe_ls_section',
		'default'     => 'rgba(23, 22, 22, 1)',
		'priority'    => 25,
		'output' => ( 'rgba(23, 22, 22, 1)' != sweipe::option( 'sweipe_loading_screen', 'sweipe_ls_bg' ) ) ? array(
				array(
						'element'  => '.ms-page-loading',
						'property' => 'background-color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.ms-page-loading',
						'function' => 'css',
						'property' => 'background-color',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_loading_screen', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_ls_sub_text_color',
		'label'       => esc_html__( 'Sub Text Color', 'sweipe' ),
		'section'     => 'sweipe_ls_section',
		'default'     => 'rgba(255, 255, 255, 1)',
		'priority'    => 25,
		'output' => ( 'rgba(255, 255, 255, 1)' != sweipe::option( 'sweipe_loading_screen', 'sweipe_ls_sub_text_color' ) ) ? array(
				array(
						'element'  => '.ms-page-loading .sub-text',
						'property' => 'color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.ms-page-loading .sub-text',
						'function' => 'css',
						'property' => 'color',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_loading_screen', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_ls_animation_color',
		'label'       => esc_html__( 'Animation Color', 'sweipe' ),
		'section'     => 'sweipe_ls_section',
		'default'     => 'rgba(255, 255, 255, 1)',
		'priority'    => 25,
		'output' => ( 'rgba(255, 255, 255, 1)' != sweipe::option( 'sweipe_loading_screen', 'sweipe_ls_animation_color' ) ) ? array(
				array(
						'element'  => '.ms-loading-1,.ms-loading-2 .double-bounce1,.ms-loading-2 .double-bounce2,.ms-loading-3 > div,.ms-loading-4 .cube1,.ms-loading-4 .cube2,.ms-loading-5,.ms-loading-6 .dot1,.ms-loading-6 .dot2,.ms-loading-7 > div,.ms-loading-8 .sk-child:before,.ms-loading-9 .sk-cube,.ms-loading-10 .sk-circle:before,.ms-loading-11 .sk-cube:before,.ms-loading-12 span',
						'property' => 'background-color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.ms-loading-1,.ms-loading-2 .double-bounce1,.ms-loading-2 .double-bounce2,.ms-loading-3 > div,.ms-loading-4 .cube1,.ms-loading-4 .cube2,.ms-loading-5,.ms-loading-6 .dot1,.ms-loading-6 .dot2,.ms-loading-7 > div,.ms-loading-8 .sk-child:before,.ms-loading-9 .sk-cube,.ms-loading-10 .sk-circle:before,.ms-loading-11 .sk-cube:before,.ms-loading-12 span',
						'function' => 'css',
						'property' => 'background-color',
						'units' => ''
				),
		),
) );




/**
 *
 * Footer
 *
 */
Kirki::add_section( 'sweipe_footer_section', array(
		'title'          => esc_html__( 'Footer Styling', 'sweipe' ),
		'priority'       => 160,
		'capability'     => 'edit_theme_options',
) );

Kirki::add_config( 'sweipe_footer', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'option',
		'option_name'   => 'sweipe_footer',
) );

Kirki::add_field( 'sweipe_footer', array(
		'type'        => 'select',
		'settings'    => 'sweipe_footer_display',
		'label'       => esc_html__( 'Enable/Disable', 'sweipe' ),
		'section'     => 'sweipe_footer_section',
		'default'     => 'on',
		'priority'    => 25,
		'choices'     => array(
				'on'  => esc_html__( 'Off', 'sweipe' ),
				'off' => esc_html__( 'On', 'sweipe' ),
		),
) );

Kirki::add_field( 'sweipe_footer', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_bg',
		'label'       => esc_html__( 'Background Color', 'sweipe' ),
		'section'     => 'sweipe_footer_section',
		'default'     => 'rgba(23, 22, 22, 1)',
		'priority'    => 25,
		'output' => ( 'rgba(23, 22, 22, 1)' != sweipe::option( 'sweipe_footer', 'sweipe_bg' ) ) ? array(
				array(
						'element'  => '.ms-footer',
						'property' => 'background-color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.ms-footer',
						'function' => 'css',
						'property' => 'background-color',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_footer', array(
		'type'        => 'color-alpha',
		'settings'    => 'sweipe_color',
		'label'       => esc_html__( 'Text Color', 'sweipe' ),
		'section'     => 'sweipe_footer_section',
		'default'     => 'rgba(255, 255, 255, 1)',
		'priority'    => 25,
		'output' => ( 'rgba(255, 255, 255, 1)' != sweipe::option( 'sweipe_footer', 'sweipe_color' ) ) ? array(
				array(
						'element'  => '.ms-footer span',
						'property' => 'color',
						'units'    => '',
				),
		) : null,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.ms-footer span',
						'function' => 'css',
						'property' => 'color',
						'units' => ''
				),
		),
) );

Kirki::add_field( 'sweipe_footer', array(
		'type'        => 'text',
		'settings'    => 'sweipe_copyright_text',
		'label'       => esc_html__( 'Copyright Text', 'sweipe' ),
		'help'        => esc_html__( 'Leave blank to disable.', 'sweipe' ),
		'default'     => 'Copyright 2015 by Mobius Studio',
		'section'     => 'sweipe_footer_section',
		'priority'    => 25,
		'transport' => 'postMessage',
		'js_vars' => array(
				array(
						'element' => '.ms-footer span',
						'function' => 'html',
				),
		),
) );

Kirki::add_field( 'sweipe_footer', array(
		'type'        => 'code',
		'settings'    => 'sweipe_custom_html',
		'label'       => esc_html__( 'Custom HTML', 'sweipe' ),
		'section'     => 'sweipe_footer_section',
		'default'     => '<a href="#" class="tc-icon-ball socialicon-facebook43 color-facebook"></a>
<a href="#" class="tc-icon-ball socialicon-google109 color-google"></a>
<a href="#" class="tc-icon-ball socialicon-twitter34 color-twitter"></a>
<a href="#" class="tc-icon-ball socialicon-pinterest26 color-pinterest"></a>
<a href="#" class="tc-icon-ball socialicon-dribbble11 color-dribbble"></a>',
		'priority'    => 25,
		'choices'     => array(
				'language' => 'html',
				'theme'    => 'monokai',
				'height'   => 450,
		),
) );



/**
 *
 * Custom Code
 *
 */
Kirki::add_section( 'sweipe_custom_code_section', array(
		'title'          => esc_html__( 'Custom Code', 'sweipe' ),
		'priority'       => 160,
		'capability'     => 'edit_theme_options',
) );

Kirki::add_config( 'sweipe_custom_code', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'option',
		'option_name'   => 'sweipe_custom_code',
) );

Kirki::add_field( 'sweipe_custom_code', array(
		'type'        => 'code',
		'settings'    => 'sweipe_custom_css',
		'label'       => esc_html__( 'Custom CSS Code', 'sweipe' ),
		'section'     => 'sweipe_custom_code_section',
		'default'     => '',
		'priority'    => 25,
		'choices'     => array(
				'language' => 'css',
				'theme'    => 'monokai',
				'height'   => 450,
		),
) );

Kirki::add_field( 'sweipe_custom_code', array(
		'type'        => 'code',
		'settings'    => 'sweipe_custom_js',
		'label'       => esc_html__( 'Custom JS Code', 'sweipe' ),
		'section'     => 'sweipe_custom_code_section',
		'default'     => '',
		'priority'    => 25,
		'choices'     => array(
				'language' => 'javascript',
				'theme'    => 'monokai',
				'height'   => 450,
		),
) );
