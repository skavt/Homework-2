<?php

include_once 'src/Request.php';
include_once 'src/Response.php';
include_once 'src/Router.php';

$router = new Router(new Request);

$router->get('/', 'user/main');

?>