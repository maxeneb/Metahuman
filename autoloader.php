<?php

spl_autoload_register(function($class) {
    #var_dump($class);
    $namespace = explode('\\', $class);

    if (file_exists('..\\'.$class.'.php') && !class_exists($class)) {
        require_once '..\\'.$class.'.php';
    }
});