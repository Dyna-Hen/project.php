<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controller/home/home.php',
    '/post' => 'controller/post/post.controller.php',
    '/create' => 'controller/post/post.create.controller.php',
    '/delete' => 'controller/post/post.delete.controller.php',
    '/edit' => 'controller/post/post.edit.controller.php',
   ];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}

