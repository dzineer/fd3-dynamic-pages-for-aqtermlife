<?php
// namespace FD3DynamicPages;

if ( ! defined( 'FD3_DYNAMIC_PAGES_PLUGIN_AQTERM' ) ) {
	exit( 'No direct script access allowed' );
}

/**
 * Filename: DynamicPagesAdminSettingPage.class.php
 * Project: webroot
 * Namespace: FD3DynamicPages
 * Class: DynamicPagesAdminSettingPage
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/20/2016 3:13 PM
 */
class DynamicPagesAdminSettingPage extends FD3Library {
	
	/* variables */
	
	var $pageTitle , $menuTitle , $capability , $menuSlug , $optionsGroup , $fields , $menuIcon;
	
	/* constants */
	
	function __construct() {
		
		//	echo "<br>DynamicPagesAdminSettingPage";
		// add_action( 'admin_menu', array( $this, 'queueOptions') );
		
		$this->fields = [];
	}
	
	function __destruct() {
	}
	
	function addOptionsGroup( $group ) {
		$this->optionsGroup = $group;
	}
	
	function addField( $field ) {
		$this->fields[] = $field;
	}
	
	function addPage() {
		
		add_options_page(
			$this->pageTitle , $this->menuTitle , $this->capability , $this->menuSlug , [ $this , 'displayOptionsPage' ]
		);
	}
	
	function sanitize( $input ) {
		$new_input = [];
		
		if ( isset( $input[ 'id_number' ] ) ) {
			$new_input[ 'id_number' ] = absint( $input[ 'id_number' ] );
		}
		
		if ( isset( $input[ 'title' ] ) ) {
			$new_input[ 'title' ] = absint( $input[ 'title' ] );
		}
		
		return $new_input;
	}
	
	function pageInit() {
		
		foreach ( $this->fields as $field ) {
			register_setting(
				$this->optionsGroup , $field[ 'id' ]
			);
		}
		
	}
	
	function queueOptions() {
		
		add_menu_page(
			$this->pageTitle , $this->menuTitle , $this->capability , $this->menuSlug , [ $this , 'renderPage' ] , $this->menuIcon
		);
	}
	
	function addAdminMenuSeparator( $position ) {
		
		global $menu;
		
		$menu[ $position ] = [
			0 => '' ,
			1 => 'read' ,
			2 => 'separator' . $position ,
			3 => '' ,
			4 => 'wp-menu-separator',
		];
		
	}
	
	function addOptionPage( $pageTitle , $menuTitle , $menuSlug , $menuIcon ) {
		
		$this->pageTitle  = $pageTitle;
		$this->menuTitle  = $menuTitle;
		$this->capability = 'manage_options';
		$this->menuSlug   = $menuSlug;
		// $this->menuIcon = $menuIcon;
		
		/*

		$page_title
			(string) (required) The text to be displayed in the title tags of the page when the menu is selected
			Default: None
		$menu_title
			(string) (required) The text to be used for the menu
			Default: None
		$capability
			(string) (required) The capability required for this menu to be displayed to the user.
			Default: None
		$menu_slug
			(string) (required) The slug name to refer to this menu by (should be unique for this menu).
			Default: None
		$function
			(callback) (optional) The function to be called to output the content for this page.
			Default: ' '
		 
		 *
		 */
	}
	
	function getSelectOption( $value , $text , $selectValue ) {
		ob_start();
		?>
							<option value="<?= $value ?>" <?= ( $value == $selectValue ) ? 'selected="selected"' : ''; ?> ><?= $text ?></option>
		<?
		$output = ob_get_clean();
		
		return $output;
	}
	
	function renderMaintenanceSelect( $field ) {
		ob_start();
		$selectValue  = get_option( $field[ 'id' ] );
		$modeSelected = get_option( 'fd3_dynamic_pages_website_under_maintenance_select' );
		
		?>
							<select type="text" name="<?= $field[ 'id' ] ?>" id="<?= $field[ 'id' ] ?>">
										<optgroup label="Website Status">
			  <?= $this->getSelectOption( 'maintenance' , 'Website Under Maintenance' , $selectValue ) ?>
			  <?= $this->getSelectOption( 'active' , 'Website Active' , $selectValue ) ?>
										</optgroup>
							</select>
							<p class="description"><?= $field[ 'help' ] ?></p>
		<?
		$output = ob_get_clean();
		
		return $output;
	}
	
	public function bg_settings_field() {
		ob_start();
		?>
							<input type="text" name="cpa_settings_options[background]" value="' . $val . '" class="cpa-color-picker">
		<?
		$output = ob_get_clean();
		
		return $output;
	}
	
	function renderPageSelect( $field ) {
		ob_start();
		$selectValue  = get_option( $field[ 'id' ] );
		$pageSelected = get_option( 'aq2emm_page_select' );
		
		if ( $pageSelected ) {
			$page     = get_page_by_title( $pageSelected );
			$pageLink = $this->renderPageLink( $page->post_name , $page->post_title );
		}
		else {
			$pageLink = '';
		}
		
		?>
							<select type="text" name="<?= $field[ 'id' ] ?>" id="<?= $field[ 'id' ] ?>">
										<optgroup label="Home Pages">
			  <?= $this->getSelectOption( 'Home' , 'Main Home Page' , $selectValue ) ?>
			  <?= $this->getSelectOption( 'Webinar Home' , 'Webinar Home Page' , $selectValue ) ?>
										</optgroup>
							</select> <?= $pageLink ?>
							<p class="description"><?= $field[ 'help' ] ?></p>
		<?
		$output = ob_get_clean();
		
		return $output;
	}
	
	function renderTextField( $field ) {
		ob_start();
		?>
							<input type="text" name="<?= $field[ 'id' ] ?>" id="<?= $field[ 'id' ] ?>" value="<?= get_option( $field[ 'id' ] ); ?>" class="regular-text code"/>
							<p class="description"><?= $field[ 'help' ] ?></p>
		<?
		$output = ob_get_clean();
		
		return $output;
	}
	
	function renderColorField( $field ) {
		ob_start();
		$selectValue = get_option( $field[ 'id' ] );
		$desc        = isset( $field[ 'help' ] ) ? $field[ 'help' ] : '';
		?>
							<input type="text" name="<?= $field[ 'id' ] ?>" id="<?= $field[ 'id' ] ?>" value="<?= get_option( $field[ 'id' ] ); ?>" class="regular-text code" data-default-color="<?= $selectValue ?>"/>
							<p class="description"><?= $desc ?></p>
		<?
		$output = ob_get_clean();
		
		return $output;
	}
	
	function renderPage() {
		// $this->setHomePage(); // this is always called after update so we set the new homepage default here
		// echo "hello"; exit(0);
		ob_start();
		?>
							<div class="wrap aq2e-support-options">
										
										<div class="aq2e-form-wrapper">
													
													<div class="aq2e-admin-panel">
																
																<div class="aq2e-admin-panel-content">
																			<h2><?= $this->pageTitle ?></h2>
																			<p class="about-description">Welcome to the AQ2E Platform (AQTerm) Admin Page.</p>
																</div>
													</div>
													
													<div class="aq2e-admin-panel">
																
																<div class="aq2e-admin-panel-content">
																			<div class="aq2e-admin-panel-column-container">
																						<div class="">
																									
																									<form action="options.php" method="post">
																										<? settings_fields( $this->optionsGroup ); ?>
																										<? @do_settings_fields( $this->optionsGroup ); ?>
																												
																												<table class="form-table">
																												<? foreach ( $this->fields as $field ) : ?>
																																			<tr valign="top">
																																						<th scope="row"><label for="<?= $field[ 'id' ] ?>"><?= $field[ 'text' ] ?></label></th>
																																						<td>
																																										<?
																																										switch ( $field[ 'type' ] ) {
																																											case 'text':
																																												echo $this->renderTextField( $field );
																																												break;
																																											case 'color':
																																												echo $this->renderColorField( $field );
																																												break;
																																											case 'select':
																																												echo call_user_func( [ $field[ 'callback' ][ 0 ] , $field[ 'callback' ][ 1 ] ] , $field );
																																												break;
																																										}
																																										?>
																																						</td>
																																			</tr>
																												<? endforeach; ?>
																												</table>
																												
																												<div class="bootstrap-container fd3-asterisk-fields">
																															<div class="panel panel-default">
																																		<div class="panel-heading">
																																					<h3 class="panel-title">* Further Explanations</h3>
																																		</div>
																																		<div class="panel-body">
																																					<dl class="dl-horizontal fd3-asterisk-fields">
										 																										<? foreach ( $this->fields as $field ) :
																																								if ( isset( $field[ 'asterisk' ] ) ): ?>
																																																			<dt>* <?= $field[ 'asterisk' ][ 'title' ] ?></dt>
																																																			<dd><?= $field[ 'asterisk' ][ 'description' ] ?></dd>
																																								<? endif; ?>
										 																										<? endforeach; ?>
																																					</dl>
																																		</div>
																															</div>
																												</div>
							 																				<? @submit_button() ?>
																									</form>
																						
																						</div>
																			</div>
																</div>
													</div>
										
										
										</div>
							</div>
		<?
		$output = ob_get_clean();
		echo $output;
	}
	
	/**
	 * Add admin menu separator before or after given menu item as identified by slug
	 *
	 * @param string $slug Admin menu item slug
	 * @param string $mode Can be 'before' or 'after', by default it is 'before'
	 */
	function add_admin_menu_separator( $slug , $mode = 'before' ) {
		global $menu;
		
		$count = 0;
		// Admin menu iterator
		foreach ( $menu as $section ) {
			
			// Find given slug
			if ( $section[ 2 ] == $slug ) {
				
				// Before or after
				if ( $mode == 'after' ) {
					$count ++;
				}
				
				// Part of the menu before given slug
				$new_menu = array_slice( $menu , 0 , $count , true );
				
				// Add separator
				$new_menu[] = [ '' , 'read' , 'separator' . $count , '' , 'wp-menu-separator' ];
				
				// Part of the menu after given slug
				$after = array_slice( $menu , $count , null , true );
				foreach ( $after as $aoffset => $asection ) {
					$new_menu[ $aoffset + 1 ] = $asection;
				}
				
				// Overwrite old menu with our new menu
				$menu = $new_menu;
				break;
			}
			$count ++;
		}
	}

	function customFont() {
		ob_start(); ?>
							<style type="text/css">
										#adminmenu #toplevel_page_aq2emm div.wp-menu-image img {
													display : none;
										}
										
										#adminmenu .wp-not-current-submenu#toplevel_page_aq2emm div.wp-menu-image:before {
													font-family : 'AQ2EFont' !important;
													content     : '\e900' !important;
													/*
						 color: #f48e0e !important;
			 */
													font-size   : 1.9em !important;
													padding-top : 5px !important;
										}
										
										#adminmenu .current#toplevel_page_aq2emm div.wp-menu-image:before {
													font-family : 'AQ2EFont' !important;
													content     : '\e900' !important;
													color       : #f48e0e !important;
													font-size   : 1.9em !important;
													padding-top : 5px !important;
										}
							
							</style>
		<?
		$content = ob_get_clean();
		echo $content;
	}
	
	function get_page_by_slug( $page_slug , $output = OBJECT , $post_type = 'page' ) {
		global $wpdb;
		
		if ( is_array( $post_type ) ) {
			$post_type           = esc_sql( $post_type );
			$post_type_in_string = "'" . implode( "','" , $post_type ) . "'";
			$sql                 = $wpdb->prepare( "SELECT ID FROM %s WHERE post_name = %s AND post_type IN (%s)" , $wpdb->posts , $page_slug , $post_type_in_string );
		}
		else {
			$sql = $wpdb->prepare( "SELECT ID FROM %s WHERE post_name = %s AND post_type = %s" , $wpdb->posts , $page_slug , $post_type );
		}
		
		$page = $wpdb->get_var( $sql );
		
		if ( $page ) {
			return $page;
		}
		else {
			return null;
		}
		//return get_post( $page, $output );
	}
	
	function setHomePage() {
		$pageSelected = get_option( 'aq2emm_page_select' );
		$page         = get_page_by_title( $pageSelected );
		update_option( 'page_on_front' , $page->ID );
		update_option( 'show_on_front' , 'page' );
	}
	
	function homePageLink() {
		add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ) , 'my_plugin_action_links' );
	}
	
	
	function renderPageLink( $link , $title ) {
		ob_start(); ?>
							<a href="<?= get_site_url(); ?>/<?= $link ?>" target="_blank"><?= $title ?></a>
		<?
		$output = ob_get_clean();
		
		return $output;
	}
	
	function run() {
		//add
		
		add_action( 'admin_head' , [ $this , 'customFont' ] );
		add_action( 'admin_init' , [ $this , 'pageInit' ] );
		add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ) , 'my_plugin_action_links' );
		
	}
	
	/*
	function WordPress_Admin_Menu_Page() {
	
	}
	*/
} // end of WordPress_Admin_Menu_Page