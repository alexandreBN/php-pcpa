<?php

function pharProviderIncludeClassIfExists($path, $className)
{
    $p = new Phar('phar-provider.phar', 0);
    foreach (new RecursiveIteratorIterator($p) as $file) {
        if (file_exists($file->getPathName())) {
            $path = $file->getPathName();
            $explodedPath = explode("/", $path);
            $fileName = $explodedPath[count($explodedPath) - 1];
            $fileName = str_replace(".php", "", $fileName);
            $className = str_replace(".php", "", $className);
            
            $alreadyExists = class_exists($fileName, "pharProviderIncludeClass");
            $alreadyExists = $alreadyExists || class_exists($fileName, "includeClass");
            
            if (! $alreadyExists && $className == $fileName) {
                include_once ($file->getPathName());
                return;
            }
        }
    }
}

function pharProviderIncludeClass($className)
{
    $className .= ".php";
    pharProviderIncludeClassIfExists(".", $className);
}

spl_autoload_register("pharProviderIncludeClass");