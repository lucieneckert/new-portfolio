<?php

$request = $_SERVER['REQUEST_URI'];

// ensure static resources are served 
if (preg_match('/^\/public\//', $request)) {
    return False;
}

switch ($request) {
    case '/':
        require 'pages/index.php';
    default:
        http_response_code(404);
}