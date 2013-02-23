<?php

add_filter('stylesheet_uri', function() {
    return get_stylesheet_directory_uri(). '/assets/css/screen.css';
}); 

add_option('urlToCompetitionSystem', 'http://souteze.juniorinternet.cz/register/');


function netteLink($destination)
{  
  require_once ABSPATH. '../libs/autoload.php';

  $a = strrpos($destination, ':');
  $presenter = substr($destination, 0, $a);
  $action = $a === strlen($destination) - 1 ? NULL : substr($destination, $a + 1);
  
  $request = new Nette\Application\Request( $presenter, 'GET', array('action' => $action) );
  
  $router = require ABSPATH. '../app/routes.php';

  return $router->constructUrl( $request, new Nette\Http\Url( home_url("/") ) );
}