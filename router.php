<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
'/' => 'controllers/index.php',
'/team' => 'controllers/team.php',
'/projects' => 'controllers/projects.php',
'/calendar' => 'controllers/calendar.php',
'/reports' => 'controllers/reports.php',
];

function abort($code=404){
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

function goToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
       abort();
    }
}


goToController($uri, $routes);

?>