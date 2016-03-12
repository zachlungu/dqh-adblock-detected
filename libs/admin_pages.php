<?php

function dqhad_settings_page()
{
    echo '<div class="wrap"><h1>Options Adblock Detected</h1>';
    ?>
    <form method="post" action="options.php">
        <?php settings_fields( 'dqhad-plugin' ); ?>
        <?php do_settings_sections( 'dqhad-plugin' ); ?>

        <?php echo '<h2>Message show</h2>'; ?>

        <?php wp_editor( get_option('DQHAD_message', 'Turn Off Adblock To See Content.') , "DQHAD_message", array('textarea_name' => 'DQHAD_message')); ?>

        <?php submit_button(); ?>
    </form></div>
    <?php
}