<?php

$request = $_SERVER['REQUEST_URI'];

// ensure static resources are served 
if (preg_match('/^\/public\//', $request)) {
    return False;
}

$request = explode('?', $request)[0];

switch ($request) {
    case '/':
        require 'pages/index.php';
        break;
    case '/view':
        require 'pages/view.php';
        break;
    case '/projects':
        require 'pages/projects.php';
        break;
    case '/blog':
        require 'pages/blog.php';
        break;
    default:
        http_response_code(404);
}