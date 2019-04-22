<?php
// Defaults / Config - CONSTANTS
define( 'DIR_PATH', str_replace( "\\", "/", __DIR__ ) );

// Include AltoRouter
require DIR_PATH . '/inc/AltoRouter/AltoRouter.php';

$router = new AltoRouter();
$router->setBasePath('');
/* Setup the URL routing */

// Routes
$router->addRoutes(array(
  array( 'GET', '/', function() { require DIR_PATH . '/content/index.php'; } ),
  array( 'GET', '/php', function() { require DIR_PATH . '/content/tools/info.php'; } ),
  array( 'GET', '/php/', function() { require DIR_PATH . '/content/tools/info.php'; } ),
  array( 'GET', '/example/', function() { require DIR_PATH . '/example/index.php'; } ),
  array( 'GET', '/example', function() { require DIR_PATH . '/example/index.php'; } ),
  array( 'GET', '/test', function() { require DIR_PATH . '/test/index.php'; } ),
  array( 'GET', '/test/', function() { require DIR_PATH . '/test/index.php'; } )
));

// match current request url
$match = $router->match();

// call closure or throw 404 status
if( $match && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    require DIR_PATH . '/content/404.php';
}
