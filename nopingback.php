<?php
add_filter( 'the_content_more_link', 'custom_content_more_link' );
function no_self_ping( &$links ) {
    $home = get_option( 'home' );
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, $home ) )
            unset($links[$l]);
    }
add_action( 'pre_ping', 'no_self_ping' );
?>
