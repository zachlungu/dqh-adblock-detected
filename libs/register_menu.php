<?php

add_action('admin_menu', 'DQHAD_register_settings_page');
function DQHAD_register_settings_page() {
    add_options_page(
        'Adblock Detected',
        'Adblock Detected',
        'manage_options',
        'dqhad_settings',
        'dqhad_settings_page' );
    add_action( 'admin_init', 'DQHAD_plugin_settings' );
}

function DQHAD_plugin_settings() {
    //register our settings
    register_setting( 'dqhad-plugin', 'DQHAD_message' );
}
