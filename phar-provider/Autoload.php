<?php

function requireClassIfExists($path, $className)
{
    $location = $path . DIRECTORY_SEPARATOR . $className;
    if (file_exists($location)) {
        require_once ($location);
    }
}

function requireClass($className)
{
    $className .= ".php";
    requireClassIfExists("", $className);
}

spl_autoload_register("requireClass");
spl_autoload_register(function ($className) {
    $className .= ".php";
    requireClassIfExists("Proxy", $className);
    requireClassIfExists("Model", $className);
});