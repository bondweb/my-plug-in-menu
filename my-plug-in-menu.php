<?php

/*
Plugin Name: My Plug In Menu 
Plugin URI: #
Description: Questo plug-in aggiunge un sublù-level menu sotto il top-level menu Impostazioni nella schermata amministrativa
Author: MB
Author URI: http://example.com
*/

/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_plugin_menu' );

/** Step 1. */
function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

/** Step 3. */
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'Non hai il permesso per accedere alla pagina.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Questo è il punto in cui dovresti inserire il tuo form con le opzioni.</p>';
	echo '</div>';
}
?>
