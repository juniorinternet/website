<?php

class NetteLink
{
  /** @var Nette\Application\Routers\RouteList */
  public static $router;
  
  /** 
   * Function to be used for the link generating.
   * @var Nette\Callback
   */
  public static $function;

  public static function link($destination)
  {
    if ( isset(self::$function) ) return self::$function->invoke($destination);
    
    if ( !isset(self::$router) ) throw new MissingAttributeException("Either NetteLink::\$router or NetteLink::\$function must be set for this method to work!");
  
    $a = strrpos($destination, ':');
    $presenter = substr($destination, 0, $a);
    $action = $a === strlen($destination) - 1 ? NULL : substr($destination, $a + 1);
    
    $request = new Nette\Application\Request( $presenter, 'GET', array('action' => $action) );

    return self::$router->constructUrl( $request, new Nette\Http\Url( home_url("/") ) );
  }
}

class MissingAttributeException extends Exception {}

function netteLink($destination)
{
  return NetteLink::link($destination);
}