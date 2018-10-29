<?php

// Autoloader from current project to load internal classes
require ("Autoload.php");
// Autoloader from current project to load external classes (phar-provider-project)
require ("AutoloadProvider.php");

// Class from current project
$c = new Client('a');
// Class from phar-provider project
$u = new User("a", "b", "c");

var_dump($c);
echo "<br />";
var_dump($u);