<?php

add_filter('stylesheet_uri', function() {
    return get_stylesheet_directory_uri(). '/assets/css/screen.css';
}); 