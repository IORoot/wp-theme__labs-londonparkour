<?php

add_action( 'wp_head', 'remove_wp_print_media_templates', 100 );

function remove_wp_print_media_templates() {
    remove_action( 'wp_footer', 'wp_print_media_templates' );
}