<?php

function includeClassIfExists($path, $className)
{
    $location = $path . DIRECTORY_SEPARATOR . $className;
    if (file_exists($location)) {
        require_once ($location);
    }
}

function includeClass($className)
{
    $className .= ".php";
    includeClassIfExists("./", $className);
}

spl_autoload_register("includeClass");
spl_autoload_register(function ($className) {
    $className .= ".php";
    includeClassIfExists("Model", $className);
});