<?php
spl_autoload_register('autoloader');
function autoloader(string $name) {
    if (file_exists(__DIR__ . "./controllers/".$name.'.php')){
        require_once __DIR__ . "./controllers/".$name.'.php';
    }
}
require("./vendor/autoload.php");
require(__DIR__ . "./../swagger-generator/vendor/autoload.php");
$openapi = \OpenApi\Generator::scan([__DIR__ . "./controllers"]);
header('Content-Type: application/json');
echo $openapi->toJson();