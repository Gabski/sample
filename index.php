<?php

use App\Interfaces\ResponseInterface;
use App\Services\Router;


require_once 'app/init.php';

Router::add("/", "SimpleController", 'simple');
Router::add("/404", "SimpleController", 'simple');

try {
    $watch = Router::watch();

    if (is_object($watch) && ($watch instanceof ResponseInterface)) {
        $watch->render();
    } else if (is_string($watch)) {
        echo $watch;
    } else {
        var_dump($watch);
    }

} catch (Exception $e) {
    header('Location: /404');
    die();
}

