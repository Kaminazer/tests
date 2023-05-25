<?php
require_once __DIR__."/vendor/autoload.php";
$formatter = new \Logging\Formatter();
$writer = new \Logging\FileWriter(__DIR__."/Logs/logs.txt",$formatter);
$logger = new \Logging\Logger($writer);
$logger->log(\Psr\Log\LogLevel::ALERT, "App broken", [
    'code'=>'505',
    'variable'=>'fileName'
]);