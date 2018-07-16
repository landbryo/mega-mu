<?php
/////////////////////////////////
// ENQUEUE MATCHHEIGHT SCRIPTS //
/////////////////////////////////
function match_scripts() {
    wp_enqueue_script( 'match-script', WPMU_PLUGIN_URL . '/match/jquery.matchHeight-min.js', array(), '0.7.2', true );
    wp_enqueue_script( 'match-init', WPMU_PLUGIN_URL . '/match/init.js', null, null, true);
}
add_action( 'wp_enqueue_scripts', 'match_scripts' );