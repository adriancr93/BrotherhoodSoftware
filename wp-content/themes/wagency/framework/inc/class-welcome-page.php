<?php

class Atiframebuilder_Welcome {

	public $core;

	public $plugins_to_activate;

	public $allowed_html;

	public $current;

	public $opts;

	public $theme_type;

	public $theme_names;

	public $checked;

	public $install_log_class;

	private $wn;

	public function __construct( $core ) {

		$this->core = $core;
		if ( method_exists( $this->core->installer(), 'welcome_notice' ) ) {
			$this->core->installer()->welcome_notice();
			global $wn;
			$this->wn = $wn;
		} else {
			$this->wn = '';
		}

		wp_enqueue_script( 'atiframebuilder-import-attach-js',
			esc_url( get_template_directory_uri() ) . '/js/import_attach.js',
			array( 'jquery', 'jquery-ui-tooltip', 'jquery-ui-progressbar' ),
			20140421,
			true );
		wp_enqueue_script( 'atiframebuilder-welcome-js',
			esc_url( get_template_directory_uri() ) . '/framework/js/welcome.js',
			array( 'jquery' ),
			'1.0',
			true );
		wp_enqueue_script( 'bootstrap',
			esc_url( get_template_directory_uri() ) . '/js/bootstrap.min.js',
			array( 'jquery' ),
			'1.0',
			true );

		wp_enqueue_style( 'atiframebuilder-welcome',
			esc_url( get_template_directory_uri() ) . '/framework/css/welcome.css',
			array(),
			'3.03' );
		wp_enqueue_style( 'jquery-ui',
			esc_url( get_template_directory_uri() ) . '/framework/css/jquery-ui.css',
			array(),
			'3.03' );

		wp_localize_script(
			'atiframebuilder-import-attach-js',
			'aiL10n',
			array(
				'import_start'        => esc_html__( 'Start of attachments import - reading appropriate XML file',
					'wagency' ),
				'import_start_failed' => esc_html__( 'XML file reading error occurred - check its existence',
					'wagency' ),
				'emptyInput'          => esc_html__( 'Please select a file.', 'wagency' ),
				'noAttachments'       => esc_html__( 'There were no attachment files found in the import file.',
					'wagency' ),
				'parsing'             => esc_html__( 'Parsing the file.', 'wagency' ),
				'importing'           => esc_html__( 'Importing file ', 'wagency' ),
				'progress'            => esc_html__( 'Overall progress: ', 'wagency' ),
				'retrying'            => esc_html__( 'An error occurred. In 5 seconds, retrying file ',
					'wagency' ),
				'done'                => esc_html__( 'All done!', 'wagency' ),
				'ajaxFail'            => esc_html__( 'There was an error connecting to the server.',
					'wagency' ),
				'pbAjaxFail'          => esc_html__( 'The program could not run. Check the error log below or your JavaScript console for more information',
					'wagency' ),
				'fatalUpload'         => esc_html__( 'There was a fatal error. Check the last entry in the error log below.',
					'wagency' ),
			)
		);

		$welcome_params = array(
			'nonce'   => wp_create_nonce( 'sl_nonce' ),
		);
		wp_localize_script( 'atiframebuilder-welcome-js', 'welcome_params', $welcome_params );

		$this->plugins_to_activate = array(
			'kc_pro/kc_pro.php',
			'kingcomposer/kingcomposer.php',
			'redux-framework/redux-framework.php',
			'revslider/revslider.php',
			'secretlab_shortcodes/index.php',
			'marketing-and-seo-booster/marketing-and-seo-booster.php',
			'woocommerce/woocommerce.php',
			'wordpress-seo/wp-seo.php',
			'yikes-inc-easy-mailchimp-extender/yikes-inc-easy-mailchimp-extender.php',
		);

		// Allowed HTML tags for escaping of texts
		$this->allowed_html = array(
			'a'      => array(
				'href'   => array(),
				'title'  => array(),
				'target' => array(),
			),
			'div'    => array(
				'id'    => array(),
				'class' => array(),
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

		$this->current = get_option( 'active_plugins' );

		$this->opts = get_transient( 'seo_on_click_setup' );
		if ( ! is_array( $this->opts ) ) {
			$this->opts = array(
				'theme_type'           => 'main',
				'install_plugins'      => 1,
				'activate_plugins'     => 1,
				'import_widgets'       => 1,
				'set_theme_options'    => 1,
				'set_sliders'          => 1,
				'import_caldera_forms' => 1,
				'technical_refresh'    => 1,
				'import_sample_data'   => 1,
				'i_id'                 => 1,
				'install_theme'        => 1,
				'import_data'          => 1,
				'import_attachments'   => 1,
			);
		}
		if ( isset( $_COOKIE['guard_theme_type'] ) ) {
			$this->opts['theme_type'] = $_COOKIE['guard_theme_type'];
		}
		$this->theme_type = $this->opts['theme_type'];

		$this->theme_names = Atiframebuilder_Theme_Demo::get_demos();

		$this->checked = array();

		foreach ( $this->opts as $name => $val ) {
			if ( 1 === $val ) {
				$this->checked[ $name ] = ' checked="checked"';
			} else {
				$this->checked[ $name ] = '';
			}
		}

		if ( is_admin() && isset( $_POST['sl_theme_reg'] ) && is_array( $_POST['sl_theme_reg'] ) ) {
			if ( isset( $_POST['sl_theme_reg']['username'] ) && isset( $_POST['sl_theme_reg']['key'] ) ) {
				$reg_data             = array();
				$reg_data['username'] = sanitize_text_field( $_POST['sl_theme_reg']['username'] );
				$reg_data['key']      = sanitize_text_field( $_POST['sl_theme_reg']['key'] );
				update_option( 'sl_theme_reg_data', $reg_data );
			}
		}

	}

	public function render() {
		$active_tab = isset( $_GET['tab'] ) ? $_GET['tab'] : 'welcome';
		if ( $active_tab == 'welcome' ) {
			$active_class = 'nav-tab-active';
		} else {
			$active_class = '';
		}
		echo '<div class="wrap"><h2 class="nav-tab-wrapper">
    <a href="?page=welcome" class="nav-tab ' . $active_class . '">' . esc_html__( 'Installation', 'wagency' ) . '</a>
    <a href="?page=welcomedocs" class="nav-tab">' . esc_html__( 'Documentation', 'wagency' ) . '</a>
</h2>
</div>';
		echo '<div class="increase">';

		if ( ! empty( $this->wn ) ) {
			echo wp_kses( $this->wn['real_capabilities'], $this->allowed_html );
			$install_log_class = "install_log_active";
		} else {
			$install_log_class = "install_log_passive";
		}

		echo '<div class="container">';

		if ( is_admin() && isset( $_POST['sl_theme_reg'] ) && is_array( $_POST['sl_theme_reg'] ) ) {
			if ( isset( $_POST['sl_theme_reg']['username'] ) && isset( $_POST['sl_theme_reg']['key'] ) ) {
				$reg_data             = array();
				$reg_data['username'] = sanitize_text_field( $_POST['sl_theme_reg']['username'] );
				$reg_data['key']      = sanitize_text_field( $_POST['sl_theme_reg']['key'] );
				update_option( 'sl_theme_reg_data', $reg_data );
			}
		}

		echo '<br><h1>', esc_html__( 'Welcome to SecretLab Theme', 'wagency' ), '</h1>
 		<p class="descr">', esc_html__( 'Fully Customizable and Easy-to-use', 'wagency' ), '</p>
  			<ul class="nav-tabs" role="tablist"', $this->hide(), '>
                        <li role="presentation" class="active"><a href="#firsttab" aria-controls="home" role="tab" data-toggle="tab">', esc_html__( 'Auto Install',
			'wagency' ), '</a></li>
                        <li role="presentation"><a href="#secondtab" aria-controls="profile" role="tab" data-toggle="tab">', esc_html__( 'Manual Install',
			'wagency' ), '</a></li>
                        
                    </ul>

<div class="tab-content" >';
		$this->inst_error_mess();
		echo '<div role="tabpanel" class="tab-pane fade in active" id="firsttab"', $this->hide(), '>

            
            <div class="row">
                <div class="col-md-6 col-sm-12">
                <h2>1. ', esc_html__( 'Automatic installation can take 2-8 min', 'wagency' ), '</h2>
                <div  id="theme_setup_box">
                    
                    <div id="progressBar1" class="progressBar"><div class="progress_bar"></div><div class="progress_count"></div></div>
					
					<div id="theme_setup_summary">
					
		                <div id="theme_setup_control">
						 <div id="theme_type">
							 <span>', esc_html__( 'Select Theme version', 'wagency' ), '</span>
							 <select id="theme_type_select" name="theme_type">';
		foreach ( $this->theme_names as $tn => $title ) {
			if ( $tn === $this->opts['theme_type'] ) {
				echo '<option selected="selected" value="', esc_attr( $tn ), '">', esc_html( $title ), '</option>';
			} else {
				echo '<option value="', esc_attr( $tn ), '">', esc_html( $title ), '</option>';
			}
		}
		echo '
							</select>
						 </div>
						 <div class="welcome_install">
						    <p><input id="install_theme_info" class="bulk_install_item" type="checkbox" name="install_theme"', $this->checked['install_theme'], ' /> <b>', esc_html__( 'Install Plugins',
			'wagency' ), '</b></p>
						</div>
							<div id="theme_setup_control" class="install_steps">
								<div class="welcome_install">
									<p><input id="install_plugins_checkbox" type="checkbox" name="install_plugins"', $this->checked['install_plugins'], ' /> <b>', esc_html__( 'Install plugins',
			'wagency' ), '</b></p>
								</div>
								<div class="welcome_install">
									<p><input id="activate_plugins_checkbox" type="checkbox" name="activate_plugins"', $this->checked['activate_plugins'], ' /> <b>', esc_html__( 'Activate plugins',
			'wagency' ), '</b></p>
								</div>
								<div class="welcome_install">
									<p><input id="technical_refresh_checkbox" name="technical_refresh" type=checkbox ', $this->checked['technical_refresh'], ' /> <b>', esc_html__( 'Do Page Technical Refresh',
			'wagency' ), '</b></p>
								</div>								
							</div>
							</div>
						</div>	
							
						<div id="theme_import_summary">
						
						    <div class="welcome_install">
								<p><input id="import_data_info" class="bulk_install_item" type="checkbox" name="import_data"', $this->checked['import_data'], ' /> <b>', esc_html__( 'Import Data',
			'wagency' ), '</b></p>
							</div>
						    <div id="theme_import_control" class="install_steps">
                                <div class="welcome_install">
							       <p><input id="import_attachments_checkbox" name="import_attachments" type=checkbox ', $this->checked['import_attachments'], ' /> <b>', esc_html__( 'Import attachments',
			'wagency' ), '</b></p>
							    </div>
                                <div id="import_attachment_data">
								    <!--<p><input type="file" name="file" id="attachments_file"/></p>-->
	                                <p>', esc_attr__( 'Attribute uploaded images to:', 'wagency' ), '<br/>
		                            <input type="radio" name="author" value=1 checked />&nbsp;', esc_attr__( 'Current User',
			'wagency' ), '<br/>
		                            <input type="radio" name="author" value=2 />&nbsp;', esc_attr__( 'User in the import file',
			'wagency' ), '<br/>
		                            <input type="radio" name="author" value=3 />&nbsp;', esc_attr__( 'Select User:',
			'wagency' ), wp_dropdown_users( array( 'echo' => false ) ) .

		                          '<p><input type="checkbox" checked="checked" name="delay" />&nbsp;', esc_attr__( 'Delay file requests by at least five seconds.',
			'wagency' ), '&nbsp;<a href="#" title="', esc_attr__( 'This delay can be useful to mitigate hosts that throttle traffic when too many requests are detected from an IP address and mistaken for a DDOS attack.',
			'wagency' ), '"><span class="dashicons dashicons-editor-help"></span></a></p> 									
                                </div>
		                        <div class="welcome_install">
							        <p><input id="import_sample_data_checkbox" name="import_sample_data" type=checkbox ', $this->checked['import_sample_data'], ' /> <b>', esc_html__( 'Import Demo Data',
			'wagency' ), '</b></p>
							    </div>
		                        <div class="welcome_install">
									<p><input id="set_sliders_checkbox" name="set_sliders" type=checkbox ', $this->checked['set_sliders'], ' /> <b>', esc_html__( 'Import Demo Revolution Sliders',
			'wagency' ), '</b></p>
								</div>
	                          	<div class="welcome_install">
									<p><input id="set_theme_options_checkbox" name="set_theme_options" type=checkbox ', $this->checked['set_theme_options'], ' /> <b>', esc_html__( 'Import Theme Options',
			'wagency' ), '</b></p>
								</div>
		                        <div class="welcome_install">
									<p><input id="import_caldera_forms_checkbox" name="import_caldera_forms" type=checkbox ', $this->checked['import_caldera_forms'], ' /> <b>', esc_html__( 'Import Caldera Forms',
			'wagency' ), '</b></p>
								</div>
                                <div class="welcome_install">
									<p><input id="import_widgets_checkbox" name="import_widgets" type=checkbox ', $this->checked['import_widgets'], ' /> <b>', esc_html__( 'Import Widgets',
			'wagency' ), '</b></p>
								</div>							
							</div>

                        </div>							

						<div><a id="theme_setup_submit" class="meta_btn" href="#">', esc_html__( 'Start installation',
			'wagency' ), '</a></div>
						
					</div>
						<h2 class="second">', esc_html__( 'Log of installation', 'wagency' ), '</h2>
						<div class="', $install_log_class, '">
							   <div id="theme_setup_result"></div>
						</div>
                </div>
                <div class="col-md-6 col-sm-12">
                <div class="row">
                	<div class="col-md-12 col-sm-12">
	                    <h2>', esc_html__( '2. Setup your theme', 'wagency' ), '</h2>
						<div class="helpful">
							<ol>
							<li><a href="admin.php?page=revslider">', esc_html__( 'Edit Sliders', 'wagency' ), '</a></li>
							<li><a href="admin.php?page=_sl_theme_options">', esc_html__( 'Theme Options',
				'wagency' ), '</a> ', esc_html__( '(required Redux Framework)',
				'wagency' ), '</li>
							<li><a href="admin.php?page=_sl_theme_options&tab=8">', esc_html__( 'Typography (required Redux Framework)', 'wagency' ), '</a></li>
							<li><a href="nav-menus.php">', esc_html__( 'Menu',
				'wagency' ), '</a> ', esc_html__( '(configure your menu items)', 'wagency' ), '</li>
							<li><a href="edit.php?post_type=composer_widget">', esc_html__( 'Edit Header',
				'wagency' ), '</a> ', esc_html__( '(change design of header)', 'wagency' ), '</li>
							<li><a href="edit.php?post_type=composer_widget">', esc_html__( 'Edit Footer',
				'wagency' ), '</a> ', esc_html__( '(if you choose it at Theme Options -> Design -> Footer)',
				'wagency' ), '</li>
							<li><a href="widgets.php">', esc_html__( 'Widgets',
				'wagency' ), '</a> ', esc_html__( '(choose custom footer to display)', 'wagency' ), '</li>
							<li><a href="admin.php?page=icon-manager-dashboard">', esc_html__( 'Icon Fonts',
				'wagency' ), '</a></li>
							<li><a href="admin.php?page=wpcf7">', esc_html__( 'Contact Forms',
				'wagency' ), '</a> ', esc_html__( '(setup your email data to receive requests)',
				'wagency' ), '</li>
							</ol>
						</div>
					</div>
				</div>
                </div>
            </div>
            

            <div class="row pt30">';
		if ( ! empty( $this->wn ) ) {
			echo wp_kses( $this->wn['recommended_capabilities'], $this->allowed_html );
			echo wp_kses( $this->wn['fail_install'], $this->allowed_html );
		}

		echo '
                <div class="col-md-4 col-sm-12">
                    <h2 class="second">', esc_html__( 'Support', 'wagency' ), '</h2>
                    <div class="inform">
                    
                    <a href="http://secretlab.pw/doc/atiframe/atiframe/" target="_blank">', esc_attr__( 'Online documentation',
			'wagency' ), '</a><br>
                    <a href="https://support.secretlab.pw/" target="_blank">', esc_attr__( 'Send a Ticket',
			'wagency' ), '</a>
                    <p>', esc_attr__( 'Response time is 24 hours', 'wagency' ), '</p>
                    <p>', esc_attr__( 'Send your site, admin login and password please. It is increase time of solving your problem',
			'wagency' ), '</p>
                    </div>
                </div>
            </div>
            
            <div class="row pt30">
            	<div class="col-md-6 col-sm-12">
            		<h2>', esc_attr__( 'Manager of Customer Care', 'wagency' ), '</h2>
            		<div class="manager">
            			<img src="', get_template_directory_uri(), '/images/manager.jpg" alt="', esc_attr__( 'Rate the theme',
			'wagency' ), '">
            			<p class="name">', esc_attr__( 'Oleg Malkov', 'wagency' ), '</p>
            			<p>', esc_attr__( 'Send us feedback and criticism. Your feedback and experience is valuable for us! It will help to improve the theme.',
			'wagency' ), '</p>
            			<b>m@secretlab.pw</b>
            		</div>
            	</div>
            	<div class="col-md-6 col-sm-12">
            		
            	</div>
            </div>
            <div class="row pt30">
            	<div class="col-md-12">
            		
            	</div>
            </div>
</div>

<div role="tabpanel" class="tab-pane fade" id="secondtab"', $this->hide(), '>
	<div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="manins">
                                <p>', esc_attr__( 'You can use it if you got any error and dont want to wait a solution from your hosting company.',
			'wagency' ), '</p>
                                <p>', esc_attr__( 'Details about manual installations process: ', 'wagency' ), '<a href="http://secretlab.pw/doc/atiframe/#line4" target="_blank">http://secretlab.pw/doc/atiframe/#line4</a></p>
								<div id="progressBar2" class="progressBar"><div  class="progress_bar"></div><div class="progress_count"></div></div>';
		echo '
								 <div id="theme_type">
									 <span>', esc_attr__( 'Select Theme version', 'wagency' ), '</span>
									 <select id="manual_theme_type_select" name="theme_type">';
		foreach ( $this->theme_names as $tn => $title ) {
			if ( $tn === $this->opts['theme_type'] ) {
				echo '<option selected="selected" value="', esc_attr( $tn ), '">', esc_html( $title ), '</option>';
			} else {
				echo '<option value="', esc_attr( $tn ), '">', esc_html( $title ), '</option>';
			}
		}
		echo '
									 </select>
								 </div>';
		echo '<ol class="step">';
		echo '<li><span>1</span> <a target="_blank" href="themes.php?page=install-required-plugins&plugin_status=install">', esc_attr__( 'Begin installing plugins',
			'wagency' ), '</a> <a id="manual_install_plugins" class="manual_install manual_btn" href="#">', esc_attr__( 'Do It',
			'wagency' ), '</a></li>';

		echo '<li><span>2</span> <a target="_blank" href="themes.php?page=install-required-plugins&plugin_status=activate">', esc_attr__( 'Begin activating plugins',
			'wagency' ), '</a> <a id="manual_activate_plugins" class="manual_install manual_btn" href="#">', esc_attr__( 'Do It',
			'wagency' ), '</a></li>';

		echo '<li><span>3</span> <a href="themes.php?page=welcome">', esc_attr__( 'Refresh the page',
			'wagency' ), '</a></li>';

		echo '<li><span>4</span> <a target="_blank" href="admin.php?import=wordpress">', esc_attr__( 'Import Dummy Data Attachments, It can take 5-15 min',
			'wagency' ), '</a>';
		echo '<p><a id="manual_import_attachments" class="manual_install manual_btn" href="#">', esc_attr__( 'Do It',
			'wagency' ), '</a></p></li>';

		echo '<li><span>5</span> <a target="_blank" href="admin.php?import=wordpress">', esc_attr__( 'Import Dummy Data (Skip it, if you dont need demo-data)',
			'wagency' ), '</a> ', esc_attr__( ' If it got error, you can run it again 2-6 times (at slow webhosting) until you get a success message',
			'wagency' ), ' <a id="manual_import_sample_data" class="manual_install manual_btn" href="#">', esc_attr__( 'Do It',
			'wagency' ), '</a></li>';

		echo '<li><span>6</span> <a target="_blank" href="admin.php?page=revslider">', esc_attr__( 'Import Sliders',
			'wagency' ), '</a> <a id="manual_set_sliders" class="manual_install manual_btn" href="#">', esc_attr__( 'Do It',
			'wagency' ), '</a></li>';

		echo '<li><span>7</span> <a target="_blank" href="admin.php?page=_sl_theme_options&tab=14">', esc_attr__( 'Import Theme Option Set',
			'wagency' ), '</a> <a id="manual_set_theme_options" class="manual_install manual_btn" href="#">', esc_attr__( 'Do It',
			'wagency' ), '</a></li>';

		echo '<li><span>8</span> <a target="_blank" href="admin.php?page=caldera-forms">', esc_attr__( 'Import Caldera Forms',
			'wagency' ), '</a> <a id="manual_import_caldera_forms" class="manual_install manual_btn" href="#">', esc_attr__( 'Do It',
			'wagency' ), '</a></li>';

		echo '<li><span>9</span> <a target="_blank" href="tools.php?page=widget-importer-exporter">', esc_attr__( 'Import Widgets',
			'wagency' ), '</a> <a id="manual_import_widgets" class="manual_install manual_btn" href="#">', esc_attr__( 'Do It',
			'wagency' ), '</a></li>';

		echo '<li><span>10</span> <a href="admin.php?page=_sl_theme_options&atifrom=welcome">', esc_attr__( 'Go to Theme Options page to finish',
			'wagency' ), '</a></li>';
		echo '</ol>';
		echo '</div></div>';

		echo '<div class="col-md-6 col-sm-12 ">
		<h2 class="second">', esc_attr__( 'Log of installation', 'wagency' ), '</h2>
		<div class="', esc_attr( $install_log_class ), '">
                       <div id="manual_theme_install_result"></div>
                  </div>
             </div>';
		echo '</div></div>';
		echo '</div><!-- Tab Content -->
</div>';


		echo '</div>';

		echo '<div id="theme_type_dialog">
          <div id="theme_type_dialog_content">', esc_attr__( 'It seems you have started SecretLab Theme Install already, now you are trying to change Theme Type to another one. Are you sure?',
			'wagency' ), '</div>
		  <a id="theme_type_dialog_continue" class="theme_type_dialog_button manual_btn" href="#">', esc_attr__( 'Continue',
			'wagency' ), '</a>
		  <a id="theme_type_dialog_stop" class="theme_type_dialog_button manual_btn" href="#">', esc_attr__( 'Stop',
			'wagency' ), '</a>
	  </div>';
	}

	public function inst_error_mess() {
		if ( ! method_exists( $this->core->installer(), 'welcome_notice' ) ) {
			echo '<div class="noinstaller">', esc_html__( 'Install SecretLab Installer plugin to install the theme',
				'wagency' ), '</div>';
		}
	}

	public function hide() {
		if ( ! method_exists( $this->core->installer(), 'welcome_notice' ) ) {
			return ' class="hide"';
		} else {
			return '';
		}
	}
}
