<?php

if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) 
    exit();

$option_name = 'remove_title';

delete_option( $option_name );

// For site options in multisite
delete_site_option( $option_name );  

