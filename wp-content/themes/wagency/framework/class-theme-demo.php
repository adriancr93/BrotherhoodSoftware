<?php

class Atiframebuilder_Theme_Demo {

	const DEFAULT_DEMO = 'demo26';
	const DEFAULT_COLUMN = 1; // Columns
	const DEFAULT_ARCHIVE_THEMPLATE = 5; // Blog template number
	const DEFAULT_POST_THEMPLATE = 5; // Post template number
	const DEFAULT_COMMENT_THEMPLATE = 2; // Comment from view


	const DEMO_FONT_SRC = 'https://fonts.googleapis.com/css?family=Catamaran:400,500,700,600|Montserrat:700,500&subset=latin&display=swap';


	// Colors Presets;
	const SCHEME0 = '{"pgl_color_bgr":{"color":"#000000","alpha":"0.95","rgba":"rgba(0,0,0,0.95)"},
	                            "pgl_color":{"color":"#86af49","alpha":"1","rgba":"rgba(134,175,73,1)"},
	                            "gc1":{"color":"#0081d7","alpha":"1","rgba":"rgba(0,129,215,1)"},
	                            "gc1d":{"color":"#0062a3","alpha":"1","rgba":"rgba(0,98,163,1)"},
	                            "link":{"regular":"#0081d7","hover":"#0062a3","active":"#0062a3"},
	                            "gc2":{"color":"#f77924","alpha":"1","rgba":"rgba(247,121,36,1)"},
	                            "gc2d":{"color":"#ef5229","alpha":"1","rgba":"rgba(239,82,41,1)"},
	                            "bgrc":{"color":"#ffffff","alpha":"1","rgba":"rgba(255,255,255,1)"},
	                            "ac1":{"color":"#5f7278","alpha":"1","rgba":"rgba(95,114,120,1)"},
	                            "ac1l":{"color":"#8a9a9a","alpha":"1","rgba":"rgba(138,154,154,1)"},
	                            "ac1d":{"color":"#202729","alpha":"1","rgba":"rgba(32,39,41,1)"}}';

	const SCHEME1 = '{"pgl_color_bgr":{"color":"#000000","alpha":"0.95","rgba":"rgba(0,0,0,0.95)"},
	                            "pgl_color":{"color":"#86af49","alpha":"1","rgba":"rgba(134,175,73,1)"},
	                            "gc1":{"color":"#0699b8","alpha":"1","rgba":"rgba(6,153,184,1)"},
	                            "gc1d":{"color":"#06b2b8","alpha":"1","rgba":"rgba(6,178,184,1)"},
	                            "link":{"regular":"#0699b8","hover":"#06b2b8","active":"#06b2b8"},
	                            "gc2":{"color":"#86af49","alpha":"1","rgba":"rgba(134,175,73,1)"},
	                            "gc2d":{"color":"#44883d","alpha":"1","rgba":"rgba(68,136,61,1)"},
	                            "bgrc":{"color":"#ffffff","alpha":"1","rgba":"rgba(255,255,255,1)"},
	                            "ac1":{"color":"#5f7278","alpha":"1","rgba":"rgba(95,114,120,1)"},
	                            "ac1l":{"color":"#8a9a9a","alpha":"1","rgba":"rgba(138,154,154,1)"},
	                            "ac1d":{"color":"#202729","alpha":"1","rgba":"rgba(32,39,41,1)"}}';

	const SCHEME2 = '{"pgl_color_bgr":{"color":"#000000","alpha":"0.95","rgba":"rgba(0,0,0,0.95)"},
	                            "pgl_color":{"color":"#86af49","alpha":"1","rgba":"rgba(134,175,73,1)"},
	                            "gc1":{"color":"#86af49","alpha":"1","rgba":"rgba(134,175,73,1)"},
	                            "gc1d":{"color":"#44883d","alpha":"1","rgba":"rgba(68,136,61,1)"},
	                            "link":{"regular":"#86af49","hover":"#44883d","active":"#44883d"},
	                            "gc2":{"color":"#86af49","alpha":"1","rgba":"rgba(134,175,73,1)"},
	                            "gc2d":{"color":"#44883d","alpha":"1","rgba":"rgba(68,136,61,1)"},
	                            "bgrc":{"color":"#ffffff","alpha":"1","rgba":"rgba(255,255,255,1)"},
	                            "ac1":{"color":"#5f7278","alpha":"1","rgba":"rgba(95,114,120,1)"},
	                            "ac1l":{"color":"#8a9a9a","alpha":"1","rgba":"rgba(138,154,154,1)"},
	                            "ac1d":{"color":"#202729","alpha":"1","rgba":"rgba(32,39,41,1)"}}';

	const SCHEME3 = '{"pgl_color_bgr":{"color":"#000000","alpha":"0.95","rgba":"rgba(0,0,0,0.95)"},
	                            "pgl_color":{"color":"#ee9200","alpha":"1","rgba":"rgba(238,146,0,1)"},
	                            "gc1":{"color":"#8358dc","alpha":"1","rgba":"rgba(131,88,220,1)"},
	                            "gc1d":{"color":"#7900e0","alpha":"1","rgba":"rgba(121,0,224,1)"},
	                            "link":{"regular":"#ee9200","hover":"#7900e0","active":"#7900e0"},
	                            "gc2":{"color":"#ee9200","alpha":"1","rgba":"rgba(238,146,0,1)"},
	                            "gc2d":{"color":"#ef5229","alpha":"1","rgba":"rgba(239,82,41,1)"},
	                            "bgrc":{"color":"#ffffff","alpha":"1","rgba":"rgba(255,255,255,1)"},
	                            "ac1":{"color":"#5f7278","alpha":"1","rgba":"rgba(95,114,120,1)"},
	                            "ac1l":{"color":"#8a9a9a","alpha":"1","rgba":"rgba(138,154,154,1)"},
	                            "ac1d":{"color":"#202729","alpha":"1","rgba":"rgba(32,39,41,1)"}}';

	const SCHEME4 = '{"pgl_color_bgr":{"color":"#000000","alpha":"0.95","rgba":"rgba(0,0,0,0.95)"},
	                            "pgl_color":{"color":"#fde428","alpha":"1","rgba":"rgba(253,228,40,1)"},
	                            "gc1":{"color":"#032e58","alpha":"1","rgba":"rgba(3,46,88,1)"},
	                            "gc1d":{"color":"#032e58","alpha":"1","rgba":"rgba(3,46,88,1)"},
	                            "link":{"regular":"#032e58","hover":"#032e58","active":"#032e58"},
	                            "gc2":{"color":"#fde428","alpha":"1","rgba":"rgba(253,228,40,1)"},
	                            "gc2d":{"color":"#fde428","alpha":"1","rgba":"rgba(253,228,40,1)"},
	                            "bgrc":{"color":"#ffffff","alpha":"1","rgba":"rgba(255,255,255,1)"},
	                            "ac1":{"color":"#5f7278","alpha":"1","rgba":"rgba(95,114,120,1)"},
	                            "ac1l":{"color":"#8a9a9a","alpha":"1","rgba":"rgba(138,154,154,1)"},
	                            "ac1d":{"color":"#202729","alpha":"1","rgba":"rgba(32,39,41,1)"}}';

	const SCHEME5 = '{"pgl_color_bgr":{"color":"#000000","alpha":"0.95","rgba":"rgba(0,0,0,0.95)"},
	                            "pgl_color":{"color":"#cc181b","alpha":"1","rgba":"rgba(204,24,27,1)"},
	                            "gc1":{"color":"#cc181b","alpha":"1","rgba":"rgba(204,24,27,1)"},"gc1d":{"color":"#cc181b","alpha":"1","rgba":"rgba(204,24,27,1)"},"link":{"regular":"#cc181b","hover":"#f77924","active":"#f77924"},"gc2":{"color":"#f77924","alpha":"1","rgba":"rgba(247,121,36,1)"},"gc2d":{"color":"#f77924","alpha":"1","rgba":"rgba(247,121,36,1)"},"bgrc":{"color":"#ffffff","alpha":"1","rgba":"rgba(255,255,255,1)"},"ac1":{"color":"#5f7278","alpha":"1","rgba":"rgba(95,114,120,1)"},"ac1l":{"color":"#8a9a9a","alpha":"1","rgba":"rgba(138,154,154,1)"},"ac1d":{"color":"#202729","alpha":"1","rgba":"rgba(32,39,41,1)"},"redux-backup":1}';


	// Allowed HTML tags for escaping of texts
	const ALLOWED_HTML = array(
		'a'      => array(
			'href'   => array(),
			'title'  => array(),
			'target' => array(),
		),
		'br'     => array(),
		'em'     => array(),
		'strong' => array(),
		'h1'     => array(),
		'h2'     => array(),
		'h3'     => array(),
		'h4'     => array(),
		'h5'     => array(),
		'h6'     => array(),
		'p'      => array(
			'style' => array(),
		),
		'b'      => array(),
		'i'      => array(),
		'u'      => array(),
		'ol'     => array(),
		'ul'     => array(),
		'li'     => array(),
		'code'   => array(),
		'del'    => array(),
	);

	public static function get_theme_name() {
		return __( 'Wagency', 'wagency' );
	}

	public static function get_demos() {
		return array(
			'demo26'      => esc_html__( 'Demo 26: Web Design Agency', 'wagency' ),
		);
	}

	public static function get_config() {
		return array(
			'args'     => array(
				// Version that appears at the top of your panel
				'menu_type'            => 'menu',
				//Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
				'allow_sub_menu'       => true,
				// Show the sections below the admin menu item or not
				'menu_title'           => esc_html__( 'Theme Options', 'wagency' ),
				'page_title'           => esc_html__( 'SecretLab Theme Options', 'wagency' ),
				// Set it you want google fonts to update weekly. A google_api_key value is required.
				'google_update_weekly' => true,
				// Must be defined to add google fonts to the typography module
				'async_typography'     => true,
				// Use a asynchronous font on the front end or font string
				//'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
				'admin_bar'            => true,
				// Show the panel pages on the admin bar
				'admin_bar_icon'       => 'dashicons-portfolio',
				// Choose an icon for the admin bar menu
				'admin_bar_priority'   => 50,
				// Set a different name for your global variable other than the secretlab_theme_opt_name
				'dev_mode'             => false,
				// Show the time the page took to load, etc
				'update_notice'        => true,
				// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
				'customizer'           => true,
				// Enable basic customizer support
				//'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
				//'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

				// OPTIONAL -> Give you extra features
				'page_priority'        => null,
				// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
				'page_parent'          => 'themes.php',
				// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
				'page_permissions'     => 'manage_options',
				// Permissions needed to access the options panel.
				'menu_icon'            => '',
				// Specify a custom URL to an icon
				'last_tab'             => '',
				// Force your panel to always open to a specific tab (by id)
				'page_icon'            => 'icon-themes',
				// Icon displayed in the admin panel next to your menu_title
				'page_slug'            => '_sl_theme_options',
				// Page slug used to denote the panel
				'save_defaults'        => true,
				// On load save the defaults to DB before user clicks save or not
				'default_show'         => false,
				// If true, shows the default value next to each field that is not the default value.
				'default_mark'         => '',
				// What to print by the field's title if the value shown is default. Suggested: *
				'show_import_export'   => true,
				// Shows the Import/Export panel when not used as a field.

				// CAREFUL -> These options are for advanced use only
				'transient_time'       => 60 * MINUTE_IN_SECONDS,
				'output'               => true,
				// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
				'output_tag'           => true,
				// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
				'footer_credit'        => esc_html__( 'Developed with love by www.SecretLab.pw', 'wagency' ),
				// Disable the footer credit of Redux. Please leave if you can help it.


				'compiler' => true,

				'disable_tracking' => true,

				// HINTS
				'hints'            => array(
					'icon'          => 'el el-question-sign',
					'icon_position' => 'right',
					'icon_color'    => 'lightgray',
					'icon_size'     => 'normal',
					'tip_style'     => array(
						'color'   => 'light',
						'shadow'  => true,
						'rounded' => false,
						'style'   => '',
					),
					'tip_position'  => array(
						'my' => 'top left',
						'at' => 'bottom right',
					),
					'tip_effect'    => array(
						'show' => array(
							'effect'   => 'slide',
							'duration' => '500',
							'event'    => 'mouseover',
						),
						'hide' => array(
							'effect'   => 'slide',
							'duration' => '500',
							'event'    => 'click mouseleave',
						),
					),
				),
				// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external links.
				'admin_bar_links'  => array(
					array(
						'id'    => 'sl-docs',
						'href'  => 'http://secretlab.pw/documentation/',
						'title' => esc_html__( 'Documentation', 'wagency' ),
					),
					array(
						'id'    => 'sl-support',
						'href'  => 'https://support.secretlab.pw/',
						'title' => esc_html__( 'Support', 'wagency' ),
					),
					array(
						'id'    => 'sl-extensions',
						'href'  => 'http://secretlab.pw/',
						'title' => esc_html__( 'SecretLab Website', 'wagency' ),
					),
				),
				// Add content after the form.
				'footer_text'      => '<p>' . esc_html__( 'Support Panel: ',
						'wagency' ) . '<a href="https://support.secretlab.pw/" target="_blank">https://support.secretlab.pw/</a></p>',
			),
			'sections' => array(
				array(
					'title'  => esc_html__( 'General Setting', 'wagency' ),
					'id'     => 'general',
					'icon'   => 'el el-home',
					'fields' => array(
						array(
							'id'       => 'homepage',
							'type'     => 'text',
							'class'    => 'hide',
							'readonly' => true,
							'default'  => get_option( 'page_on_front' ),
						),
						array(
							'id'       => 'google_api_key_opt',
							'type'     => 'text',
							'title'    => esc_html__( 'Google API Key', 'wagency' ),
							'subtitle'    => esc_html__( 'You can get a new API key at https://developers.google.com/maps/documentation/javascript/get-api-key',
								'wagency' ),
							'default'  => '',
						),
						array(
							'id'       => 'contacts_email',
							'type'     => 'text',
							'title'    => esc_html__( 'Email for Contact Form 7', 'wagency' ),
							'subtitle'    => esc_html__( 'You can add a specific email address at each form',
								'wagency' ),
							'default'  => '',
						),
						array(
							'id'       => 'sender_email',
							'type'     => 'text',
							'title'    => esc_html__( 'Sender Email for Contact Form 7 Plugin', 'wagency' ),
							'subtitle'    => esc_html__( 'You can add a specific email address at each form',
								'wagency' ),
							'default'  => '',
						),
						array(
							'id'       => 'cases-info2',
							'type'     => 'info',
							'style'    => 'info',
							'title'    => esc_html__( 'Select Homepage', 'wagency' ),
							'subtitle' => wp_kses( __( ' You should select your homepage and blogpage on <a href="/wp-admin/options-reading.php">/wp-admin/options-reading.php</a>', 'wagency' ),
								self::ALLOWED_HTML ),
						),
						array(
							'id'      => 'header_widget',
							'type'    => 'select',
							'title'   => esc_html__( 'Select Header', 'wagency' ),
							'options' => Atiframebuilder_Config::get_composer_block_array( 'header' ),
							'default' => '1833',
						),

						array(
							'id'       => 'header_type',
							'type'     => 'select',
							'title'    => esc_html__( 'Select Header type', 'wagency' ),
							'options'  => array( 1 => 'Slider', ),
							'default'  => 1,
							'required' => array( 'header_type', '<', '0' ),
						),
						array(
							'id'       => 'pick_slider',
							'type'     => 'select',
							'title'    => esc_html__( 'Select Slider', 'wagency' ),
							'subtitle'    => esc_html__( 'Select slider for header section', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options'  => Atiframebuilder_Config::get_sliders_array(
								esc_html__( 'The Theme Support Layer Slider, Smart Slider and Slider Revolution, but couldn\'t find it. Install one of the plug-ins to choose the slider to display in the header.',
									'wagency' )
							),
							'default'  => '0',
						),
						array(
							'id'      => 'footer_widget',
							'type'    => 'select',
							'title'   => esc_html__( 'Select Footer', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options' => Atiframebuilder_Config::get_composer_block_array( 'footer' ),

							'default' => '1848',
						),
						array(
							'id'      => 'scroll-to-top',
							'type'    => 'switch',
							'title'   => esc_html__( 'Display Scroll to Top Button?', 'wagency' ),
							'default' => true,
						),


						array(
							'id'       => 'pageloader',
							'type'     => 'switch',
							'title'    => esc_html__( 'Display Page Loader', 'wagency' ),
							'subtitle'    => esc_html__( 'Do you want to show page loader, when website is loading?',
								'wagency' ),
							'default'  => false,
							'indent'   => false,
						),

						array(
							'id'       => 'pgl_color_bgr',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Select Background Color for Page Loader', 'wagency' ),
							'output'   => array( 'background-color' => '.loaderbgr' ),
							'default'  => array(
								'color' => '#000000',
								'alpha' => 0.95,
							),
							'required' => array( 'pageloader', '=', true ),
						),
						array(
							'id'    => 'pgl_color',
							'type'  => 'color_rgba',
							'title' => esc_html__( 'Select Arrow Color for Page Loader', 'wagency' ),

							'default'  => array(
								'color' => '#86af49',
								'alpha' => 1,
							),
							'required' => array( 'pageloader', '=', true ),
						),
					),
				),
				array(
					'title'  => esc_html__( 'Layout', 'wagency' ),
					'id'     => 'design-layout-subsection',
					'icon'   => 'el el-th-large',
					'fields' => array(
						array(
							'id'       => 'single-header',
							'type'     => 'switch',
							'title'    => esc_html__( 'Display Page H1 Heading', 'wagency' ),
							'subtitle'    => esc_html__( 'Do you want to show H1 heading for pages? Usually we display it through drag&drop builder',
								'wagency' ),
							'default'  => true,
							'indent'   => false,
						),
						array(
							'id'            => 'transition',
							'type'          => 'slider',
							'title'         => esc_html__( 'Transition time', 'wagency' ),
							'subtitle'      => esc_html__( 'Select hover effects time in ms', 'wagency' ),
							'desc'          => esc_html__( 'Slider description. Min: 0, max: 1000, step: 5, default value: 600',
								'wagency' ),
							'default'       => 400,
							'min'           => 0,
							'step'          => 5,
							'max'           => 1000,
							'display_value' => 'text',
						),

						array(
							'id'      => 'design-layout',
							'type'    => 'image_select',
							'title'   => esc_html__( 'Select page layout', 'wagency' ),

							//Must provide key => value(array:title|img) pairs for radio options
							'options' => array(
								'1' => array(
									'alt' => esc_attr__('Full width layout', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/full.gif',
								),
								'2' => array(
									'alt' => esc_attr__('Boxed layout, maximum resolution - 1170 px', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/boxed.gif',
								),
							),
							'default' => '1',
						),
						array(
							'id'       => 'boxed-background',
							'type'     => 'background',
							'title'    => esc_html__( 'Background settings for box', 'wagency' ),
							'output'   => array( '.page .mainbgr', ),
							'default'  => array(
								'background-color'      => '#323232',
								'background-repeat'     => 'no-repeat',
								'background-attachment' => 'fixed',
								'background-position'   => 'center center',
								'background-size'       => 'inherit',
							),
							'required' => array( 'design-layout', '=', '2' ),
						),

						array(
							'id'      => 'content-background',
							'type'    => 'background',
							'title'   => esc_html__( 'Background settings for content section', 'wagency' ),
							'output'  => array( '.page main', ),
							'default' => array(
								'background-color'      => '#ffffff',
								'background-repeat'     => 'no-repeat',
								'background-attachment' => 'fixed',
								'background-position'   => 'center center',
								'background-size'       => 'inherit',
								'background-image'      => '',
							),

						),
						array(
							'id'          => 'sidebar-layout',
							'type'        => 'image_select',
							'title'       => esc_html__( 'Select sidebar option', 'wagency' ),
							'description' => esc_html__( 'Default sidebars is Left Sidebar and Right sidebar',
								'wagency' ),

							//Must provide key => value(array:title|img) pairs for radio options
							'options'     => array(
								'1' => array(
									'alt' => esc_attr__('Without sidebar', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/nosidebar.gif',
								),
								'2' => array(
									'alt' => esc_attr__('2 sidebars', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/2sidebars.gif',
								),
								'3' => array(
									'alt' => esc_attr__('Left sidebar', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/leftsidebar.gif',
								),
								'4' => array(
									'alt' => esc_attr__('Right sidebar', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/rightsidebar.gif',
								),
							),
							'default'     => '1',
						),
						array(
							'id'       => 'left_sidebar_widgets',
							'type'     => 'select',
							'title'    => esc_html__( 'Widgets for Left Sidebar', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options'  => array( '_default_left_sidebar' => 'Left Sidebar', ),
							'default'  => '_default_left_sidebar',
							'required' => array( 'sidebar-layout', '<', '0' ),
						),
						array(
							'id'       => 'right_sidebar_widgets',
							'type'     => 'select',
							'title'    => esc_html__( 'Widgets for Right Sidebar', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options'  => array( '_default_right_sidebar' => 'Right Sidebar', ),
							'default'  => '_default_right_sidebar',
							'required' => array( 'sidebar-layout', '<', '0' ),
						),


					),
				),
				array(
					'title'  => esc_html__( 'Portfolio', 'wagency' ),
					'id'     => 'services-subsection',
					'icon'   => 'el el-brush',
					'fields' => array(


						array(
							'id'    => 'cases-info1',
							'type'  => 'info',
							'style' => 'info',
							'title' => esc_html__( 'Options for Portfolio Post Type', 'wagency' ),
						),

						array(
							'id'          => 'portfolio_slug',
							'type'        => 'text',
							'title'       => esc_html__( 'URL Slug For Portfolio Post Type', 'wagency' ),
							'description' => wp_kses( __( ' After you change it, go to <a href="options-permalink.php" target="_blank">/wp-admin/options-permalink.php</a> and click "Save Changes" button to activate the URL slug', 'wagency' ),
								self::ALLOWED_HTML ),
							'default'     => 'portfolio',
						),
						array(
							'id'       => 'cases_arch_title',
							'type'     => 'text',
							'title'    => esc_html__( 'Portfolio Page H1 Heading', 'wagency' ),
							'subtitle'    => esc_html__( 'Heading for Portfolio Archive page', 'wagency' ),
							'default'  => 'Case Studies List',
						),
						array(
							'id'       => 'portfolio_arch_desc',
							'type'     => 'editor',
							'title'    => esc_html__( 'Description Text Under H1 Heading', 'wagency' ),
							'subtitle'    => esc_html__( 'Allowed tags: a, img, br, em, strong, h1, h2, h3, h4, h5, h6, p, b, i, u, ol, ul, li, code, del',
								'wagency' ),
							'default'  => 'Some description text here',
						),


					),
				),
				array(
					'title' => esc_html__( 'Color Scheme', 'wagency' ),
					'id'    => 'ocs',
					'desc'  => esc_html__( 'Color scheme of the current design. You can create your own color scheme.',
						'wagency' ),
					'icon'  => 'el el-cog',

					'fields' => array(
						array(
							'id'     => 'colors_info_notice',
							'type'   => 'info',
							'notice' => true,
							'style'  => 'info',
							'icon'   => 'el-icon-info-sign',
							'title'  => esc_html__( 'Note', 'wagency' ),
							'desc'   => esc_html__( 'We recommend to export and save theme options setting before change everything.',
								'wagency' ),
						),
						// Presets of color schemes
						array(
							'id'       => 'skin_preset_dark_agency',
							'type'     => 'image_select',
							'presets'  => true,
							'presets'  => true,
							'title'    => esc_html__( 'Select Color Scheme of Design', 'wagency' ),
							'subtitle'    => esc_html__( 'Select a color scheme preset, including typography and menu colors',
								'wagency' ),
							'options'  => array(
								'0' => array(
									'alt'     => esc_attr__('Blue Orange', 'wagency' ),
									'img'     => get_template_directory_uri() . '/images/framework/scheme1.png',
									'presets' => self::SCHEME0,
								),
								'1' => array(
									'alt'     => esc_attr__('Blue Green', 'wagency' ),
									'img'     => get_template_directory_uri() . '/images/framework/scheme2.png',
									'presets' => self::SCHEME1,
								),
								'2' => array(
									'alt'     => esc_attr__('Green', 'wagency' ),
									'img'     => get_template_directory_uri() . '/images/framework/scheme3.png',
									'presets' => self::SCHEME2,
								),
								'3' => array(
									'alt'     => esc_attr__('Purple Orange', 'wagency' ),
									'img'     => get_template_directory_uri() . '/images/framework/scheme4.png',
									'presets' => self::SCHEME3,
								),
								'4' => array(
									'alt'     => esc_attr__('Blue Yellow', 'wagency' ),
									'img'     => get_template_directory_uri() . '/images/framework/scheme5.png',
									'presets' => self::SCHEME4,
								),
								'5' => array(
									'alt'     => esc_attr__('Red Orange', 'wagency' ),
									'img'     => get_template_directory_uri() . '/images/framework/scheme6.png',
									'presets' => self::SCHEME5,
								),
							),
						),

						//Section START
						array(
							'id'     => 'general-colors-section-start',
							'type'   => 'section',
							'title'  => esc_html__( 'General Colors', 'wagency' ),
							'indent' => true, // Indent all options below until the next 'section' option is set.
						),
						array(
							'id'       => 'gc1',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Major Color', 'wagency' ),
							'default'  => array(
								'color' => '#f35444',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
						),
						array(
							'id'       => 'gc1d',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Dark Major Color', 'wagency' ),
							'default'  => array(
								'color' => '#222222',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
						),

						array(
							'id'       => 'link',
							'type'     => 'link_color',
							'title'    => esc_html__( 'Links Color Option', 'wagency' ),
							'visited'  => false,  // Disable Visited Color
							'default'  => array(
								'regular' => '#f35444',
								'hover'   => '#222222',
								'active'  => '#222222',
							),
							'compiler' => true,
							'output'   => 'a',
						),
						array(
							'id'       => 'gc2',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Minor Color', 'wagency' ),
							'default'  => array(
								'color' => '#222222',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
						),
						array(
							'id'       => 'gc2d',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Dark Minor Color', 'wagency' ),
							'default'  => array(
								'color' => '#222222',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
						),

						array(
							'id'       => 'bgrc',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Background Color', 'wagency' ),
							'default'  => array(
								'color' => '#ffffff',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
						),

						array(
							'id'     => 'general-colors-section-end',
							'type'   => 'section',
							'indent' => false, // Indent all options below until the next 'section' option is set.
						),
						// Section END


						//Section START
						array(
							'id'     => 'additional-colors-section-start',
							'type'   => 'section',
							'title'  => esc_html__( 'Additional Colors', 'wagency' ),
							'indent' => true, // Indent all options below until the next 'section' option is set.
						),

						array(
							'id'       => 'ac1',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Gray Color', 'wagency' ),
							'default'  => array(
								'color' => '#666666',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
						),
						array(
							'id'       => 'ac1l',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Gray Color Light', 'wagency' ),
							'default'  => array(
								'color' => '#999999',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
						),
						array(
							'id'       => 'ac1d',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Gray Color Dark', 'wagency' ),
							'default'  => array(
								'color' => '#222222',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
						),


						array(
							'id'     => 'additional-colors-section-end',
							'type'   => 'section',
							'indent' => false, // Indent all options below until the next 'section' option is set.
						),
						// Section END

					),

				),
				array(
					'title'  => esc_html__( 'Design', 'wagency' ),
					'id'     => 'design',
					'icon'   => 'el el-tasks',
					'fields' => array(
						array(
							'id'    => 'design-info1',
							'type'  => 'info',
							'style' => 'info',
							'title' => esc_html__( 'Options for major design styles', 'wagency' ),
						),
						array(
							'id'             => 'boxed-padding',
							'type'           => 'spacing',
							'output'         => array( 'body main.boxed-wrapper' ),
							'mode'           => 'padding',
							'units'          => array( 'em', 'px' ),
							'units_extended' => 'false',
							'title'          => esc_html__( 'Padding Option for Boxed Background', 'wagency' ),
							'default'        => array(
								'padding-top'    => '',
								'padding-right'  => '',
								'padding-bottom' => '',
								'padding-left'   => '',
								'units'          => 'px',
							),
						),
						array(
							'id'    => 'design-info2',
							'type'  => 'info',
							'style' => 'info',
							'title' => esc_html__( 'Sidebars design styles', 'wagency' ),
						),
						array(
							'id'       => 'sidebar-bgr',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Sidebars Background Color', 'wagency' ),
							'default'  => array(
								'color' => '#ffffff',
								'alpha' => '0',
							),
							'compiler' => true,
							'output'   => false,
						),
						array(
							'id'             => 'sidebar-padding',
							'type'           => 'spacing',
							'output'         => array( 'main .widget-area >div, html .sidebar-type' ),
							'mode'           => 'padding',
							'units'          => array( 'em', 'px' ),
							'units_extended' => 'false',
							'title'          => esc_html__( 'Padding Option for Sidebar', 'wagency' ),
							'default'        => array(
								'padding-top'    => '0',
								'padding-right'  => '0',
								'padding-bottom' => '0',
								'padding-left'   => '0',
								'units'          => 'px',
							),
						),
						array(
							'id'     => 'sidebar-border',
							'type'   => 'border',
							'title'  => esc_html__( 'Border Option for Sidebar', 'wagency' ),
							'output' => array( 'main .widget-area >div, html .sidebar-type' ),
							// An array of CSS selectors to apply this font style to

							'default' => array(
								'border-color'  => '',
								'border-style'  => '',
								'border-top'    => '',
								'border-right'  => '',
								'border-bottom' => '',
								'border-left'   => '',
							),
						),
						array(
							'id'            => 'sidebar-border-radius',
							'type'          => 'slider',
							'title'         => esc_html__( 'Border Radius', 'wagency' ),
							'desc'          => esc_html__( 'Select border radius in px. Min: 0, max: 100, step: 1, default value: 0',
								'wagency' ),
							'default'       => '10',
							'min'           => 0,
							'step'          => 1,
							'max'           => 100,
							'display_value' => 'text',
						),

						array(
							'id'             => 'sidebar-width',
							'type'           => 'dimensions',
							'output'         => array( 'main .widget-area, html .sidebar-type' ),
							'units'          => array( 'em', 'px', '%' ),
							// You can specify a unit value. Possible: px, em, %
							'units_extended' => 'true',
							// Allow users to select any type of unit
							'title'          => esc_html__( 'Sidebar Width', 'wagency' ),
							'desc'           => esc_html__( 'Total content zone width is 1170px. If you turn 2 sidebars on, remember about it.',
								'wagency' ),
							'height'         => false,
							'default'        => array(
								'width'  => '',
							),
						),
						array(
							'id'             => 'content-width',
							'type'           => 'dimensions',
							'output'         => array( 'main .cont-box-area' ),
							'units'          => array( 'em', 'px', '%' ),
							// You can specify a unit value. Possible: px, em, %
							'units_extended' => 'true',
							// Allow users to select any type of unit
							'title'          => esc_html__( 'Content Column Width', 'wagency' ),
							'desc'           => esc_html__( 'Total content zone width is 1170px. If you turn 2 sidebars on, remember about it.',
								'wagency' ),
							'height'         => false,
							'default'        => array(
								'width'  => '',
							),
						),
						array(
							'id'             => 'content-padding',
							'type'           => 'spacing',
							'output'         => array( 'main .cont-box-area' ),
							'mode'           => 'padding',
							'units'          => array( 'em', 'px' ),
							'units_extended' => 'false',
							'title'          => esc_html__( 'Padding Option for Content Column', 'wagency' ),
							'default'        => array(
								'padding-top'    => '0',
								'padding-right'  => '0',
								'padding-bottom' => '0',
								'padding-left'   => '0',
								'units'          => 'px',
							),
						),


						array(
							'id'    => 'design-info3',
							'type'  => 'info',
							'style' => 'info',
							'title' => esc_html__( 'Buttons design styles', 'wagency' ),
						),
						array(
							'id'             => 'button-padding',
							'type'           => 'spacing',
							'output'         => array( 'main button, main input[type="button"], main input[type="reset"], main input[type="submit"]' ),
							'mode'           => 'padding',
							'units'          => array( 'em', 'px' ),
							'units_extended' => 'false',
							'title'          => esc_html__( 'Padding Option for Buttons', 'wagency' ),
							'default'        => array(
								'padding-top'    => '0',
								'padding-right'  => '50',
								'padding-bottom' => '0',
								'padding-left'   => '50',
								'units'          => 'px',
							),
						),
						array(
							'id'       => 'button-border',
							'type'     => 'border',
							'title'    => esc_html__( 'Border Option for Buttons', 'wagency' ),
							'output'   => array( 'main button, main input[type="button"], main input[type="reset"], main input[type="submit"], main .form-submit input[type="submit"]' ),
							// An array of CSS selectors to apply this font style to
							'compiler' => true,
							'default'  => array(
								'border-color'  => '#f35444',
								'border-style'  => 'solid',
								'border-top'    => '2px',
								'border-right'  => '2px',
								'border-bottom' => '2px',
								'border-left'   => '2px',
							),
						),

						array(
							'id'       => 'button-color',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Buttons Background Color', 'wagency' ),
							'default'  => array(
								'color' => '#f35444',
								'alpha' => '0',
							),
							'compiler' => true,
							'output'   => false,

						),
						array(
							'id'       => 'button-text-color',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Buttons Text Color', 'wagency' ),
							'default'  => array(
								'color' => '#222222',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
						),
						array(
							'id'       => 'button-border-hover',
							'type'     => 'border',
							'title'    => esc_html__( 'Border Option for Buttons (hover)', 'wagency' ),
							'output'   => array( 'main button:hover, main input[type="button"]:hover, main input[type="reset"]:hover, main .form-submit input[type="submit"]:hover' ),
							// An array of CSS selectors to apply this font style to
							'compiler' => true,
							'default'  => array(
								'border-color'  => '#f35444',
								'border-style'  => 'solid',
								'border-top'    => '2px',
								'border-right'  => '2px',
								'border-bottom' => '2px',
								'border-left'   => '2px',
							),
						),
						array(
							'id'       => 'button-color-hover',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Buttons Background Color (hover)', 'wagency' ),
							'default'  => array(
								'color' => '#f35444',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
						),
						array(
							'id'       => 'button-text-color-hover',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Buttons Text Color (hover)', 'wagency' ),
							'default'  => array(
								'color' => '#ffffff',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
						),
						array(
							'id'            => 'button-border-radius',
							'type'          => 'slider',
							'title'         => esc_html__( 'Border Radius for Buttons', 'wagency' ),
							'desc'          => esc_html__( 'Select border radius in px. Min: 0, max: 100, step: 1, default value: 0',
								'wagency' ),
							'default'       => '50',
							'min'           => 0,
							'step'          => 1,
							'max'           => 100,
							'display_value' => 'text',
						),


						array(
							'id'    => 'design-info4',
							'type'  => 'info',
							'style' => 'info',
							'title' => esc_html__( 'Inputs design styles', 'wagency' ),
						),
						array(
							'id'       => 'input-border',
							'type'     => 'border',
							'title'    => esc_html__( 'Border Option for Inputs', 'wagency' ),
							'output'   => array( 'input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], input[type="color"], html body textarea, select.form-control,select,.select2-container a' ),
							// An array of CSS selectors to apply this font style to
							'compiler' => true,
							'default'  => array(
								'border-color'  => '#e5e6eb',
								'border-style'  => 'solid',
								'border-top'    => '1px',
								'border-right'  => '1px',
								'border-bottom' => '1px',
								'border-left'   => '1px',
							),
						),
						array(
							'id'            => 'input-border-radius',
							'type'          => 'slider',
							'output'        => array( 'input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], input[type="color"], textarea' ),
							'compiler'      => true,
							'title'         => esc_html__( 'Border Radius for Inputs', 'wagency' ),
							'desc'          => esc_html__( 'Select border radius in px. Min: 0, max: 100, step: 1, default value: 0',
								'wagency' ),
							'default'       => '50',
							'min'           => 0,
							'step'          => 1,
							'max'           => 100,
							'display_value' => 'text',
						),
						array(
							'id'       => 'input-color',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Inputs Background Color', 'wagency' ),
							'default'  => array(
								'color' => '#7483be',
								'alpha' => '0.2',
							),
							'compiler' => true,
							'output'   => false,
						),
						array(
							'id'       => 'input-text-color',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Inputs Text Color', 'wagency' ),
							'default'  => array(
								'color' => '#7e8399',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
						),


					),
				),
				array(
					'title'  => esc_html__( 'Typography', 'wagency' ),
					'id'     => 'typography',
					'icon'   => 'el el-font',
					'fields' => array(
						array(
							'id'     => 'typography-_info_notice',
							'type'   => 'info',
							'notice' => true,
							'style'  => 'info',
							'icon'   => 'el-icon-info-sign',
							'title'  => esc_html__( 'Note', 'wagency' ),
							'desc'   => esc_html__( 'We recommend to use font pair: one font for body text and one for headings. You can find good font pair on',
									'wagency' ) . ' <a href="http://fontpair.co/" target="_blank">http://fontpair.co/</a>',
						),
						array(
							'id'          => 'typography-body',
							'type'        => 'typography',
							'title'       => esc_html__( 'Body Font', 'wagency' ),
							'subtitle'    => esc_html__( 'Specify the body font properties.', 'wagency' ),
							'font-backup' => true,
							'google'      => true,
							'subsets'     => true,
							'default'     => array(
								'color'       => '#666666',
								'font-size'   => '17px',
								'font-family' => 'Catamaran',
								'font-weight' => '400',
								'text-align'  => 'left',
								'line-height' => '29px',
							),
						),
						array(
							'id'             => 'h1-typography',
							'type'           => 'typography',
							'title'          => esc_html__( 'Heading H1 Font', 'wagency' ),
							'subtitle'       => esc_html__( 'Specify the H1 font properties.', 'wagency' ),
							'font-backup'    => true,
							'google'         => true,
							'subsets'        => true,
							'text-transform' => true,
							'default'        => array(
								'color'          => '#222222',
								'font-weight'    => '700',
								'font-family'    => 'Montserrat',
								'font-size'      => '48px',
								'line-height'    => '52px',
								'text-transform' => 'capitalize',
								'text-align'     => 'center',
							),
						),

						array(
							'id'             => 'h2-typography',
							'type'           => 'typography',
							'title'          => esc_html__( 'Heading H2 Font', 'wagency' ),
							'subtitle'       => esc_html__( 'Specify the H2 font properties.', 'wagency' ),
							'font-backup'    => true,
							'google'         => true,
							'subsets'        => true,
							'text-transform' => true,
							'default'        => array(
								'color'          => '#222222',
								'font-weight'    => '500',
								'font-family'    => 'Montserrat',
								'font-size'      => '40px',
								'line-height'    => '52px',
								'text-transform' => 'capitalize',
								'text-align'     => 'center',
							),
						),
						array(
							'id'             => 'h3-typography',
							'type'           => 'typography',
							'title'          => esc_html__( 'Heading H3 Font', 'wagency' ),
							'subtitle'       => esc_html__( 'Specify the H3 font properties.', 'wagency' ),
							'font-backup'    => true,
							'google'         => true,
							'subsets'        => true,
							'text-transform' => true,
							'default'        => array(
								'color'          => '#222222',
								'font-weight'    => '500',
								'font-family'    => 'Montserrat',
								'font-size'      => '25px',
								'line-height'    => '32px',
								'text-transform' => '',
								'text-align'     => 'center',
							),
						),

						array(
							'id'             => 'reserved-typography',
							'type'           => 'typography',
							'title'          => esc_html__( 'Reserved Font', 'wagency' ),
							'subtitle'       => esc_html__( 'Connects the font.', 'wagency' ),
							'font-backup'    => false,
							'google'         => true,
							'subsets'        => true,
							'text-transform' => false,
							'text-align'     => false,
							'font-size'      => false,
							'line-height'    => false,
							'color'          => false,
							'default'        => array(
								'font-family' => 'Catamaran',
								'font-weight' => '500',
							),
						),
						array(
							'id'             => 'reserved2-typography',
							'type'           => 'typography',
							'title'          => esc_html__( 'Reserved Font #2', 'wagency' ),
							'subtitle'       => esc_html__( 'Connects the font.', 'wagency' ),
							'font-backup'    => false,
							'google'         => true,
							'subsets'        => true,
							'text-transform' => false,
							'text-align'     => false,
							'font-size'      => false,
							'line-height'    => false,
							'color'          => false,
							'default'        => array(
								'font-family' => 'Catamaran',
								'font-weight' => '700',
							),
						),
						array(
							'id'             => 'reserved3-typography',
							'type'           => 'typography',
							'title'          => esc_html__( 'Reserved Font #3', 'wagency' ),
							'subtitle'       => esc_html__( 'Connects the font.', 'wagency' ),
							'font-backup'    => false,
							'google'         => true,
							'subsets'        => true,
							'text-transform' => false,
							'text-align'     => false,
							'font-size'      => false,
							'line-height'    => false,
							'color'          => false,
							'default'        => array(
								'font-family' => 'Catamaran',
								'font-weight' => '600',
							),
						),
						array(
							'id'             => 'reserved4-typography',
							'type'           => 'typography',
							'title'          => esc_html__( 'Reserved Font #4', 'wagency' ),
							'subtitle'       => esc_html__( 'Connects the font.', 'wagency' ),
							'font-backup'    => false,
							'google'         => true,
							'subsets'        => true,
							'text-transform' => false,
							'text-align'     => false,
							'font-size'      => false,
							'line-height'    => false,
							'color'          => false,
							'default'        => array(
								'font-family' => '',
								'font-weight' => '',
							),
						),
						array(
							'id'             => 'reserved5-typography',
							'type'           => 'typography',
							'title'          => esc_html__( 'Reserved Font #5', 'wagency' ),
							'subtitle'       => esc_html__( 'Connects the font.', 'wagency' ),
							'font-backup'    => false,
							'google'         => true,
							'subsets'        => true,
							'text-transform' => false,
							'text-align'     => false,
							'font-size'      => false,
							'line-height'    => false,
							'color'          => false,
							'default'        => array(
								'font-family' => '',
								'font-weight' => '',
							),
						),
						array(
							'id'     => 'typography-_info_notice_2',
							'type'   => 'info',
							'notice' => true,
							'style'  => 'info',
							'icon'   => 'el-icon-info-sign',
							'title'  => esc_html__( 'Responsive Default Fonts', 'wagency' ),
							'desc'   => esc_html__( 'Fonts settings for mobile version under width resolution 600px ',
								'wagency' ),
						),
						array(
							'id'          => 'typography-body-m',
							'type'        => 'typography',
							'title'       => esc_html__( 'Body Font', 'wagency' ),
							'subtitle'    => esc_html__( 'Specify the body font properties.', 'wagency' ),
							'font-backup' => true,
							'google'      => true,
							'subsets'     => true,
							'default'     => array(
								'color'       => '#666666',
								'font-size'   => '17px',
								'font-family' => 'Catamaran',
								'font-weight' => '400',
								'text-align'  => 'left',
								'line-height' => '29px',
							),
						),
						array(
							'id'             => 'h1-typography-m',
							'type'           => 'typography',
							'title'          => esc_html__( 'Heading H1 Font', 'wagency' ),
							'subtitle'       => esc_html__( 'Specify the H1 font properties.', 'wagency' ),
							'font-backup'    => true,
							'google'         => true,
							'subsets'        => true,
							'text-transform' => true,
							'default'        => array(
								'color'          => '#222222',
								'font-weight'    => '700',
								'font-family'    => 'Montserrat',
								'font-size'      => '36px',
								'line-height'    => '42px',
								'text-transform' => 'capitalize',
								'text-align'     => 'center',
							),
						),


					),
				),
				array(
					'title'  => esc_html__( 'Translate', 'wagency' ),
					'id'     => 'translate',
					'icon'   => 'el el-list-alt',
					'fields' => array(
						array(
							'id'    => '404-info1',
							'type'  => 'info',
							'style' => 'info',
							'title' => esc_html__( 'Text for 404 error page', 'wagency' ),
						),
						array(
							'id'      => '404_title',
							'type'    => 'text',
							'title'   => esc_html__( '404 Page Heading', 'wagency' ),
							'default' => esc_html__( 'Not Found', 'wagency' ),
						),
						array(
							'id'      => '404_descr',
							'type'    => 'text',
							'title'   => esc_html__( '404 Page Description', 'wagency' ),
							'default' => esc_html__( 'It looks like nothing was found at this location. Maybe try a search?',
								'wagency' ),
						),
						array(
							'id'    => '404_icon',
							'type'  => 'media',
							'url'   => true,
							'title' => esc_html__( 'Icon On 404 Error Page', 'wagency' ),

							'default' => array(
								'url' => 'https://demo26.atiframe.com/wp-content/uploads/2020/02/404-nf_00.png',
							),
						),
					),
				),
				array(
					'title'  => esc_html__( 'Custom CSS/JS', 'wagency' ),
					'id'     => 'custom_settings',
					'desc'   => esc_html__( 'Your settings for customization', 'wagency' ),
					'icon'   => 'el el-file-edit',
					'fields' => array(


						array(
							'id'       => 'header-nested',
							'type'     => 'switch',
							'title'    => esc_html__( 'Header Section JS, CSS editors', 'wagency' ),
							'subtitle'    => esc_html__( 'Click On to choice of editors to appear.', 'wagency' ),
							'default'  => false,
						),
						array(
							'id'       => 'header-nested-buttonset',
							'type'     => 'button_set',
							'subtitle'    => esc_html__( 'This code will appear in the HEADER secrion of the site',
								'wagency' ),
							'options'  => array(
								'button-js'  => 'JS editor',
								'button-css' => 'CSS editor',
							),
							'required' => array( 'header-nested', '=', true ),
							'default'  => 'button-js',
						),

						array(
							'id'       => 'header-nested-ace-js',
							'type'     => 'ace_editor',
							'mode'     => 'javascript',
							'title'    => esc_html__( 'JS Editor', 'wagency' ),
							'default'  => '// function hello() { alert ("HELLO"); }',
							'required' => array( 'header-nested-buttonset', '=', 'button-js' ),
						),

						array(
							'id'       => 'header-nested-ace-css',
							'type'     => 'ace_editor',
							'mode'     => 'css',
							'title'    => esc_html__( 'CSS Editor', 'wagency' ),
							'default'  => 'body { margin : 0; padding : 0; }',
							'required' => array( 'header-nested-buttonset', '=', 'button-css' ),
						),

						array(
							'id'       => 'footer-nested',
							'type'     => 'switch',
							'title'    => esc_html__( 'Footer Section JS, CSS editors', 'wagency' ),
							'subtitle'    => esc_html__( 'Click On to choice of editors to appear.', 'wagency' ),
							'default'  => false,
						),
						array(
							'id'       => 'footer-nested-buttonset',
							'type'     => 'button_set',
							'subtitle'    => esc_html__( 'This code will appear in the FOOTER secrion of the site',
								'wagency' ),
							'options'  => array(
								'button-js'  => 'JS editor',
								'button-css' => 'CSS editor',
							),
							'required' => array( 'footer-nested', '=', true ),
							'default'  => 'button-js',
						),

						array(
							'id'       => 'footer-nested-ace-js',
							'type'     => 'ace_editor',
							'mode'     => 'javascript',
							'title'    => esc_html__( 'JS Editor', 'wagency' ),
							'default'  => 'function hello() { alert ("HELLO"); }',
							'required' => array( 'footer-nested-buttonset', '=', 'button-js' ),
						),

						array(
							'id'       => 'footer-nested-ace-css',
							'type'     => 'ace_editor',
							'mode'     => 'css',
							'title'    => esc_html__( 'CSS Editor', 'wagency' ),
							'default'  => 'body { margin : 0; padding : 0; }',
							'required' => array( 'footer-nested-buttonset', '=', 'button-css' ),
						),
					),
				),
				array(
					'title'  => esc_html__( 'Shop', 'wagency' ),
					'id'     => 'shop-setting',
					'icon'   => 'el el-shopping-cart',
					'fields' => array(
						array(
							'id'       => 'shop-header_type',
							'type'     => 'select',
							'title'    => esc_html__( 'Choose Header type', 'wagency' ),
							'options'  => array( 1 => 'Slider', ),
							'default'  => 1,
							'required' => array( 'header_type', '<', '0' ),
						),

						array(
							'id'       => 'shop-pick_slider',
							'type'     => 'select',
							'title'    => esc_html__( 'Select Slider for Shop', 'wagency' ),
							'subtitle'    => esc_html__( 'Select slider for header section', 'wagency' ),
							'options'  => Atiframebuilder_Config::get_sliders_array(
								esc_html__( 'The Theme Support Layer Slider, Smart Slider and Slider Revolution, but couldn\'t find it. Install one of the plug-ins to choose the slider to display in the header.',
									'wagency' )
							),
							'default'  => '0',
						),
						array(
							'id'       => 'shop1',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Price Color', 'wagency' ),
							'default'  => array(
								'color' => '#ce0000',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
						),

						array(
							'id'       => 'product_columns',
							'type'     => 'text',
							'title'    => esc_html__( 'Columns of Products', 'wagency' ),
							'subtitle'    => esc_html__( 'For catalog and categories pages', 'wagency' ),
							'default'  => '4',
						),
						array(
							'id'       => 'relates_product_products',
							'type'     => 'text',
							'title'    => esc_html__( 'Related Products to show', 'wagency' ),
							'subtitle'    => esc_html__( 'For product page', 'wagency' ),
							'default'  => '4',
						),
						array(
							'id'       => 'relates_product_columns',
							'type'     => 'text',
							'title'    => esc_html__( 'Columns of related products', 'wagency' ),
							'subtitle'    => esc_html__( 'For product page', 'wagency' ),
							'default'  => '4',
						),

						array(
							'id'       => 'shop-layout',
							'type'     => 'image_select',
							'title'    => esc_html__( 'Select shop page layout', 'wagency' ),
							'subtitle'    => esc_html__( 'The option work for slug /shop/', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options'  => array(
								'1' => array(
									'alt' => esc_attr__('Full width layout', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/full.gif',
								),
								'2' => array(
									'alt' => esc_attr__('Boxed layout, maximum resolution - 1170 px', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/boxed.gif',
								),
							),
							'default'  => '1',
						),
						array(
							'id'       => 'shop-boxed-background',
							'type'     => 'background',
							'title'    => esc_html__( 'Background settings for box', 'wagency' ),
							'output'   => array( '.woocommerce-page .mainbgr', ),
							'default'  => array(
								'background-color'      => '#323232',
								'background-repeat'     => 'no-repeat',
								'background-attachment' => 'fixed',
								'background-position'   => 'center center',
								'background-size'       => 'inherit',
							),
							'required' => array( 'shop-layout', '=', '2' ),
						),
						array(
							'id'      => 'shop-content-background',
							'type'    => 'background',
							'title'   => esc_html__( 'Background settings for content section', 'wagency' ),
							'output'  => array( '.woocommerce-page main' ),
							'default' => array(
								'background-color'      => '#ffffff',
								'background-repeat'     => 'no-repeat',
								'background-attachment' => 'fixed',
								'background-position'   => 'center center',
								'background-size'       => 'inherit',
							),
						),

						array(
							'id'      => 'shop-sidebar-layout',
							'type'    => 'image_select',
							'title'   => esc_html__( 'Select sidebar option for shop', 'wagency' ),

							//Must provide key => value(array:title|img) pairs for radio options
							'options' => array(
								'1' => array(
									'alt' => esc_attr__('Without sidebar', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/nosidebar.gif',
								),
								'2' => array(
									'alt' => esc_attr__('2 sidebars', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/2sidebars.gif',
								),
								'3' => array(
									'alt' => esc_attr__('Left sidebar', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/leftsidebar.gif',
								),
								'4' => array(
									'alt' => esc_attr__('Right sidebar', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/rightsidebar.gif',
								),
							),
							'default' => '0',
						),
						array(
							'id'       => 'shop_left_sidebar_widgets',
							'type'     => 'select',
							'title'    => esc_html__( 'Widgets for Shop Left Sidebar', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options'  => array( 'shop_default_left_sidebar' => 'Left Shop Sidebar', ),
							'default'  => 'shop_default_left_sidebar',
							'required' => array( 'shop-sidebar-layout', '<', '0' ),
						),
						array(
							'id'       => 'shop_right_sidebar_widgets',
							'type'     => 'select',
							'title'    => esc_html__( 'Widgets for Shop Right Sidebar', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options'  => array( 'shop_default_right_sidebar' => 'Right Shop Sidebar', ),
							'default'  => 'shop_default_right_sidebar',
							'required' => array( 'shop-sidebar-layout', '<', '0' ),
						),

						array(
							'id'      => 'shop_header_widget',
							'type'    => 'select',
							'title'   => esc_html__( 'Select Header for Shop', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options' => Atiframebuilder_Config::get_composer_block_array( 'header' ),
							'default' => '1833',
						),


						array(
							'id'      => 'shop_footer_widget',
							'type'    => 'select',
							'title'   => esc_html__( 'Select Footer for Shop', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options' => Atiframebuilder_Config::get_composer_block_array( 'footer' ),
							'default' => '1848',
						),
						array(
							'id'      => 'woocomp',
							'type'    => 'switch',
							'title'   => esc_html__( 'Enable company field in checkout', 'wagency' ),
							'default' => true,
						),
						array(
							'id'      => 'wooadd1',
							'type'    => 'switch',
							'title'   => esc_html__( 'Enable address 1 field in checkout', 'wagency' ),
							'default' => true,
						),
						array(
							'id'      => 'wooadd2',
							'type'    => 'switch',
							'title'   => esc_html__( 'Enable address 2 field in checkout', 'wagency' ),
							'default' => true,
						),
						array(
							'id'      => 'woostate',
							'type'    => 'switch',
							'title'   => esc_html__( 'Enable state field in checkout', 'wagency' ),
							'default' => true,
						),
						array(
							'id'      => 'woocity',
							'type'    => 'switch',
							'title'   => esc_html__( 'Enable city field in checkout', 'wagency' ),
							'default' => true,
						),
						array(
							'id'      => 'woophone',
							'type'    => 'switch',
							'title'   => esc_html__( 'Enable phone field in checkout', 'wagency' ),
							'default' => true,
						),
						array(
							'id'      => 'woopostcode',
							'type'    => 'switch',
							'title'   => esc_html__( 'Enable postcode field in checkout', 'wagency' ),
							'default' => true,
						),
						array(
							'id'      => 'woocountry',
							'type'    => 'switch',
							'title'   => esc_html__( 'Enable country field in checkout', 'wagency' ),
							'default' => true,
						),

					),
				),
				array(
					'title'  => esc_html__( 'Blog', 'wagency' ),
					'id'     => 'blog-setting',
					'icon'   => 'el el-blogger',
					'fields' => array(
						array(
							'id'       => 'blog-columns',
							'type'     => 'button_set',
							'title'    => esc_html__( 'Blog Columns Option', 'wagency' ),
							'subtitle'    => esc_html__( 'The option works for blog post type', 'wagency' ),
							'desc'     => esc_html__( 'If you are turn on sidebar or sidebars, you cannot use 2-3 columns layout',
								'wagency' ),
							//Must provide key => value pairs for radio options
							'options'  => array(
								'1' => esc_html__( '1 Column', 'wagency' ),
							),
							'default'  => '1',
						),
						array(
							'id'      => 'archive_template',
							'type'    => 'image_select',
							'title'   => esc_html__( 'Select archive template', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options' => array(
								
								'5' => array(
									'alt' => esc_attr__( 'Archive', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/arc5.gif',
								),
							),
							'default' => '5',
						),
						array(
							'id'      => 'single_template',
							'type'    => 'image_select',
							'title'   => esc_html__( 'Select single post template', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options' => array(
								
								'5' => array(
									'alt' => esc_attr__( 'Post', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/post5.gif',
								),

							),
							'default' => '5',
						),
						array(
							'id'      => 'comment_template',
							'type'    => 'image_select',
							'title'   => esc_html__( 'Select comment template', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options' => array(
								
								'2' => array(
									'alt' => esc_html__( 'Post', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/comm2.gif',
								),
								
							),
							'default' => '2',
						),

						array(
							'id'       => 'blog-sidebar-layout',
							'type'     => 'image_select',
							'title'    => esc_html__( 'Choose sidebar option for blog', 'wagency' ),
							'subtitle'    => esc_html__( 'The option work for POST post type', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options'  => array(
								'1' => array(
									'alt' => esc_attr__('Without sidebar', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/nosidebar.gif',
								),
								'2' => array(
									'alt' => esc_attr__('2 sidebars', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/2sidebars.gif',
								),
								'3' => array(
									'alt' => esc_attr__('Left sidebar', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/leftsidebar.gif',
								),
								'4' => array(
									'alt' => esc_attr__('Right sidebar', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/rightsidebar.gif',
								),
							),
							'default'  => '1',
						),

						array(
							'id'       => 'blog_left_sidebar_widgets',
							'type'     => 'select',
							'title'    => esc_html__( 'Widgets for Blog Left Sidebar', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options'  => array( 'blog_default_left_sidebar' => 'Left Blog Sidebar', ),
							'default'  => 'blog_default_left_sidebar',
							'required' => array( 'blog-sidebar-layout', '<', '0' ),
						),
						array(
							'id'       => 'blog_right_sidebar_widgets',
							'type'     => 'select',
							'title'    => esc_html__( 'Widgets for Blog Right Sidebar', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options'  => array( 'blog_default_right_sidebar' => 'Right Blog Sidebar', ),
							'default'  => 'blog_default_right_sidebar',
							'required' => array( 'blog-sidebar-layout', '<', '0' ),
						),


						array(
							'id'             => 'blog-title-typography',
							'type'           => 'typography',
							'title'          => esc_html__( 'Blog Category Heading', 'wagency' ),
							'subtitle'       => esc_html__( 'Specify the blog category heading font  properties.',
								'wagency' ),
							'font-backup'    => true,
							'google'         => true,
							'subsets'        => true,
							'text-transform' => true,
							'default'        => array(
								'color'          => '#222222',
								'font-weight'    => '500',
								'font-family'    => 'Catamaran',
								'font-size'      => '25px',
								'line-height'    => '32px',
								'text-transform' => 'none',
								'text-align'     => 'left',
							),
						),


						array(
							'id'       => 'blog-layout',
							'type'     => 'image_select',
							'title'    => esc_html__( 'Select page layout', 'wagency' ),
							'subtitle'    => esc_html__( 'The option work for Post post type', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options'  => array(
								'1' => array(
									'alt' => esc_attr__('Full width layout', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/full.gif',
								),
								'2' => array(
									'alt' => esc_attr__('Boxed layout, maximum resolution - 1170 px', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/boxed.gif',
								),
							),
							'default'  => '1',

						),
						array(
							'id'       => 'blog-boxed-background',
							'type'     => 'background',
							'title'    => esc_html__( 'Background settings for box', 'wagency' ),
							'output'   => array( '.single-post .mainbgr', '.archive.category .mainbgr', ),
							'default'  => array(
								'background-color'      => '#323232',
								'background-repeat'     => 'no-repeat',
								'background-attachment' => 'fixed',
								'background-position'   => 'center center',
								'background-size'       => 'inherit',
							),
							'required' => array( 'blog-layout', '=', '2' ),
						),
						array(
							'id'      => 'blog-content-background',
							'type'    => 'background',
							'title'   => esc_html__( 'Background settings for content section', 'wagency' ),
							'output'  => array( '.single-post main', '.archive.category main', ),
							'default' => array(
								'background-color'      => '#ffffff',
								'background-repeat'     => 'no-repeat',
								'background-attachment' => 'fixed',
								'background-position'   => 'center center',
								'background-size'       => 'inherit',
								'background-image'      => '',
							),
						),


						array(
							'id'      => 'blog_header_widget',
							'type'    => 'select',
							'title'   => esc_html__( 'Header Menu for Blog', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options' => Atiframebuilder_Config::get_composer_block_array( 'header' ),
							'default' => '1833',
						),
						array(
							'id'       => 'blog-header_type',
							'type'     => 'select',
							'title'    => esc_html__( 'Select Header type', 'wagency' ),
							'options'  => array( 1 => 'Slider', ),
							'default'  => 1,
							'required' => array( 'header_type', '<', '0' ),
						),
						array(
							'id'      => 'blog_footer_widget',
							'type'    => 'select',
							'title'   => esc_html__( 'Footer for Blog', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options' => Atiframebuilder_Config::get_composer_block_array( 'footer' ),
							'default' => '1848',
						),
						array(
							'id'   => 'blog-opt-divide1',
							'type' => 'divide',
						),
						array(
							'id'    => 'cases-info-BLOG',
							'type'  => 'info',
							'style' => 'info',
							'title' => esc_html__( 'Blog Heading Box', 'wagency' ),
						),

						// BLOG Headings to choose
						array(
							'id'      => 'blog-custom-heading',
							'type'    => 'image_select',
							'title'   => esc_html__( 'Select blog header', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options' => array(
								'1' => array(
									'alt' => esc_attr__( 'Blog Head', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/bloghead1.gif',
								),
								'2' => array(
									'alt' => esc_attr__( 'Blog Head', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/bloghead2.gif',
								),
								'3' => array(
									'alt' => esc_attr__( 'Blog Head', 'wagency' ),
									'img' => get_template_directory_uri() . '/images/framework/bloghead3.gif',
								),

							),
							'default' => '1',
						),


						array(
							'id'       => 'blog-pick_slider',
							'type'     => 'select',
							'title'    => esc_html__( 'Select Slider for Blog', 'wagency' ),
							'subtitle'    => esc_html__( 'The option work for Post post type', 'wagency' ),
							//Must provide key => value(array:title|img) pairs for radio options
							'options'  => Atiframebuilder_Config::get_sliders_array(
								esc_html__( 'The Theme Support Layer Slider, Smart Slider and Slider Revolution, but couldn\'t find it. Install one of the plug-ins to choose the slider to display in the header.',
									'wagency' )
							),
							'default'  => '0',
							'required' => array( 'blog-custom-heading', '=', 1 ),
						),


						array(
							'id'       => 'blog-heading-background',
							'type'     => 'background',
							'title'    => esc_html__( 'Background settings for the heading box on the blog',
								'wagency' ),
							'compiler' => true,
							'output'   => false,
							'default'  => array(
								'background-color'      => '#FFFFFF',
								'background-repeat'     => 'no-repeat',
								'background-attachment' => 'fixed',
								'background-position'   => 'center center',
								'background-size'       => 'inherit',
							),
							'required' => array( 'blog-custom-heading', '=', 2 ),
						),
						array(
							'id'       => 'bgfrom',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Gradient Underlay for Background From', 'wagency' ),
							'default'  => array(
								'color' => '#F45769',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
							'required' => array( 'blog-custom-heading', '=', 2 ),
						),
						array(
							'id'       => 'bgto',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Gradient Underlay for Background To', 'wagency' ),
							'default'  => array(
								'color' => '#F6964D',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
							'required' => array( 'blog-custom-heading', '=', 2 ),
						),
						array(
							'id'       => 'bgfromo',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Gradient Overlay for Background From', 'wagency' ),
							'default'  => array(
								'color' => '#F45769',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
							'required' => array( 'blog-custom-heading', '=', 2 ),
						),
						array(
							'id'       => 'bgtoo',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Gradient Overlay for Background To', 'wagency' ),
							'default'  => array(
								'color' => '#F6964D',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
							'required' => array( 'blog-custom-heading', '=', 2 ),
						),

						array(
							'id'             => 'blog-heading-padding',
							'type'           => 'spacing',
							'output'         => array( '.custblog' ),
							'compiler'       => false,
							'mode'           => 'padding',
							'units'          => array( 'em', 'px' ),
							'units_extended' => 'false',
							'title'          => esc_html__( 'Padding Option for Heading Box', 'wagency' ),
							'default'        => array(
								'padding-top'    => '55',
								'padding-right'  => '55',
								'padding-bottom' => '45',
								'padding-left'   => '55',
								'units'          => 'px',
							),
							'required'       => array( 'blog-custom-heading', '=', 2 ),
						),
						array(
							'id'       => 'blog-heading-cat-text',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Category Link Text Color', 'wagency' ),
							'default'  => array(
								'color' => '#FFFFFF',
								'alpha' => '1',
							),
							'output'   => array( '.single .entry-header ul.post-categories li a' ),
							'compiler' => false,
							'required' => array( 'blog-custom-heading', '=', 2 ),
						),
						array(
							'id'       => 'blog-heading-cat-bgr',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Category Link Background Color', 'wagency' ),
							'default'  => array(
								'color' => '#FFFFFF',
								'alpha' => '0',
							),
							'output'   => array( '.single .entry-header ul.post-categories li a' ),
							'compiler' => false,
							'required' => array( 'blog-custom-heading', '=', 2 ),
						),
						array(
							'id'       => 'blog-heading-cat-border',
							'type'     => 'border',
							'title'    => esc_html__( 'Category Link Border', 'wagency' ),
							'output'   => array( '.single .entry-header ul.post-categories li a' ),
							'compiler' => false,
							'default'  => array(
								'border-color'  => '#FFFFFF',
								'border-style'  => 'solid',
								'border-top'    => '1px',
								'border-right'  => '1px',
								'border-bottom' => '1px',
								'border-left'   => '1px',
							),
							'required' => array( 'blog-custom-heading', '=', 2 ),
						),
						array(
							'id'            => 'blog-heading-cat-radius',
							'type'          => 'slider',
							'title'         => esc_html__( 'Category Link Border Radius', 'wagency' ),
							'desc'          => esc_html__( 'Select border radius in px. Min: 0, max: 20, step: 1, default value: 0',
								'wagency' ),
							'output'        => array( '.single .entry-header ul.post-categories li a' ),
							'compiler'      => false,
							'default'       => '0',
							'min'           => 0,
							'step'          => 1,
							'max'           => 20,
							'display_value' => 'text',
							'required'      => array( 'blog-custom-heading', '=', 2 ),
						),

						array(
							'id'       => 'blog-heading-h1-color',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'H1 Heading Text Color', 'wagency' ),
							'default'  => array(
								'color' => '#FFFFFF',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
							'required' => array( 'blog-custom-heading', '=', 2 ),
						),
						array(
							'id'       => 'blog-heading-meta-color',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Meta Data Text Color', 'wagency' ),
							'default'  => array(
								'color' => '#FFFFFF',
								'alpha' => '1',
							),
							'compiler' => true,
							'output'   => false,
							'required' => array( 'blog-custom-heading', '=', 2 ),
						),


						array(
							'id'   => 'blog-opt-divide1',
							'type' => 'divide',
						),
						/*======== Slider OR Image END ==========*/
						array(
							'id'            => 'thumb-border-radius',
							'type'          => 'slider',
							'title'         => esc_html__( 'Border Radius for blog elements', 'wagency' ),
							'desc'          => esc_html__( 'Select border radius in px. Min: 0, max: 100, step: 1, default value: 0',
								'wagency' ),
							'default'       => '10',
							'min'           => 0,
							'step'          => 1,
							'max'           => 100,
							'display_value' => 'text',
						),
						array(
							'id'       => 'post-header',
							'type'     => 'switch',
							'title'    => esc_html__( 'Display Post H1 Heading', 'wagency' ),
							'subtitle'    => esc_html__( 'Do you want to show H1 heading for post? Usually we display it through drag&drop builder',
								'wagency' ),
							'default'  => false,
							'indent'   => false,
						),
						array(
							'id'       => 'is_related_posts',
							'type'     => 'switch',
							'title'    => esc_html__( 'Related Posts for Single Post View', 'wagency' ),
							'subtitle'    => esc_html__( 'Press On to template choice appear', 'wagency' ),
							'default'  => true,
						),
						array(
							'id'       => 'related_posts_title',
							'type'     => 'text',
							'title'    => esc_html__( 'Related Posts Title', 'wagency' ),
							'subtitle'    => esc_html__( 'Set Title for Related Posts section', 'wagency' ),
							'required' => array( 'is_related_posts', '=', true ),
							'default'  => 'Related Posts',
						),

						array(
							'id'      => 'show_post_author',
							'type'    => 'switch',
							'title'   => esc_html__( 'Show Post Author ', 'wagency' ),
							'default' => true,
						),
						array(
							'id'      => 'show_post_category',
							'type'    => 'switch',
							'title'   => esc_html__( 'Show Post Category ', 'wagency' ),
							'default' => true,
						),
						array(
							'id'      => 'show_post_tags',
							'type'    => 'switch',
							'title'   => esc_html__( 'Show Post Tags ', 'wagency' ),
							'default' => true,
						),
						array(
							'id'      => 'show_post_share',
							'type'    => 'switch',
							'title'   => esc_html__( 'Show Post Share ', 'wagency' ),
							'default' => true,
						),
						array(
							'id'      => 'show_post_date',
							'type'    => 'switch',
							'title'   => esc_html__( 'Show Post Date ', 'wagency' ),
							'default' => true,
						),
						array(
							'id'      => 'show_comments_count',
							'type'    => 'switch',
							'title'   => esc_html__( 'Show Post Comments count ', 'wagency' ),
							'default' => true,
						),
						array(
							'id'      => 'show_read_more',
							'type'    => 'switch',
							'title'   => esc_html__( 'Show Read More Link', 'wagency' ),
							'default' => true,
						),
						array(
							'id'       => 'read_more_text',
							'type'     => 'text',
							'title'    => esc_html__( 'Read More Link Text', 'wagency' ),
							'subtitle'    => esc_html__( 'Set Text for Read More Link', 'wagency' ),
							'required' => array( 'show_read_more', '=', true ),
							'default'  => 'Continue reading',
						),
						array(
							'id'       => 'read_more_related',
							'type'     => 'text',
							'title'    => esc_html__( 'Read More Link Text On Related Posts', 'wagency' ),
							'subtitle'    => esc_html__( 'Set Text for Read More Link', 'wagency' ),
							'default'  => 'Continue reading',
						),
					),
				),
				array(
					'title'  => esc_html__( 'Modal Window', 'wagency' ),
					'id'     => 'modal',
					'icon'   => 'el el-list-alt',
					'fields' => array(
						array(
							'id'    => 'modal-info',
							'type'  => 'info',
							'style' => 'info',
							'title' => esc_html__( 'Option enabling you to display a modal window before a user leaves your website.',
								'wagency' ),
						),
						array(
							'id'      => 'show_modal',
							'type'    => 'switch',
							'title'   => esc_html__( 'Show Modal Window', 'wagency' ),
							'default' => false,
						),
						array(
							'id'          => 'modal_window',
							'type'        => 'select',
							'data'        => 'posts',
							'args'        => array( 'post_type' => array( 'modal_window', ) ),
							'title'       => esc_html__( 'Select Modal Window', 'wagency' ),
							'description' => wp_kses( __( ' Create a new Modal Window <a href="post-new.php?post_type=modal_window" target="_blank">here</a>',
								'wagency' ),
								self::ALLOWED_HTML ),
							'required'    => array( 'show_modal', '=', true ),
							'default'     => false,
						),
						array(
							'id'       => 'close-color',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Close Button Color', 'wagency' ),
							'default'  => array(
								'color' => '#ffffff',
								'alpha' => '1',
							),
							'compiler' => false,
							'output'   => array( '#ouibounce-modal .modal > i' ),
						),

						array(
							'id'       => 'agressive_modal',
							'type'     => 'switch',
							'title'    => esc_html__( 'Aggressive Mode', 'wagency' ),
							'subtitle'    => esc_html__( 'The modal to be eligible to fire anytime the page is loaded/ reloaded',
								'wagency' ),
							'default'  => false,
						),
						array(
							'id'       => 'time_modal',
							'type'     => 'text',
							'title'    => esc_html__( 'Set a min time before Ouibounce fires, in seconds',
								'wagency' ),
							'subtitle'    => esc_html__( 'By default, Ouibounce won\'t fire in the first second to prevent false positives, as it\'s unlikely the user will be able to exit the page within less than a second.',
								'wagency' ),
							'default'  => '1000',
						),
						array(
							'id'       => 'day_modal',
							'type'     => 'text',
							'title'    => esc_html__( 'Cookie expiration, in days', 'wagency' ),
							'subtitle'    => esc_html__( 'Ouibounce sets a cookie by default to prevent the modal from appearing more than once per user. By default, the cookie will expire at the end of the session, which for most browsers is when the browser is closed entirely.',
								'wagency' ),
							'default'  => '5',
						),
					),
				),
			),
		);
	}

	public static function get_widgets() {
		return array(
			array(
				'name'          => esc_html__( 'Left Sidebar', 'wagency' ),
				'id'            => '_default_left_sidebar',
				'description'   => esc_html__( 'Appears in the left section of the site.', 'wagency' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			),
			array(
				'name'          => esc_html__( 'Right Sidebar', 'wagency' ),
				'id'            => '_default_right_sidebar',
				'description'   => esc_html__( 'Appears in the right section of the site.', 'wagency' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			),
			array(
				'name'          => esc_html__( 'Left Blog Sidebar', 'wagency' ),
				'id'            => 'blog_default_left_sidebar',
				'description'   => esc_html__( 'Appears in the left blog section of the site.', 'wagency' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			),
			array(
				'name'          => esc_html__( 'Right Blog Sidebar', 'wagency' ),
				'id'            => 'blog_default_right_sidebar',
				'description'   => esc_html__( 'Appears in the right blog section of the site.', 'wagency' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			),
			array(
				'name'          => esc_html__( 'Left Shop Sidebar', 'wagency' ),
				'id'            => 'shop_default_left_sidebar',
				'description'   => esc_html__( 'Appears in the left shop section of the site.', 'wagency' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			),
			array(
				'name'          => esc_html__( 'Right Shop Sidebar', 'wagency' ),
				'id'            => 'shop_default_right_sidebar',
				'description'   => esc_html__( 'Appears in the left shop section of the site.', 'wagency' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			),
		);
	}

	public static function get_notices() {
		return array(
			'was_installed'   => __( 'SecretLab themes data was installed successfully', 'wagency' ),
			'sliders_message' => __( 'You use more that one slider on the site, so we advise to you leave only one of them. You can deactiveta others at:',
				'wagency' ),
			'sliders_plugins' => __( 'plugins', 'wagency' ),
		);
	}

	public static function get_welcomes() {
		return array(
			'welcome'       => __( 'SecretLab', 'wagency' ),
			'documentation' => __( 'Documentation', 'wagency' ),
		);
	}
}