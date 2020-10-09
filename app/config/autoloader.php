<?php

define('SRC_DIR', __DIR__ . '/../src/');

function autoload_class_multiple_directory($class_name)
{

    $array_paths = array_filter(glob('app/src/*'), 'is_dir');
    foreach ($array_paths as &$item) {
        $arr = explode('/', $item);
        $item = end($arr) . '/';
    }

    $total_paths = count($array_paths);

    $parts = explode('\\', $class_name);
    $file_name = end($parts) . '.php';

    for ($i = 0; $i < $total_paths; $i++) {
        if (file_exists(SRC_DIR . $array_paths[$i] . $file_name)) {
            require_once SRC_DIR . $array_paths[$i] . $file_name;
        }
    }
}

spl_autoload_register('autoload_class_multiple_directory');
