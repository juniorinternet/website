<?php

require_once LIBS_DIR. '/NetteLink.php';
NetteLink::$router = require APP_DIR. '/routes.php';

add_filter('stylesheet_uri', function() {
    return get_stylesheet_directory_uri(). '/assets/css/screen.css';
}); 

add_option('urlToCompetitionSystem', 'http://souteze.juniorinternet.cz/register/');
