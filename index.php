<?php


require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__. '/Src/Exception/exception.php';

$logger = new \App\Logger\Logger();
$logger->log(\App\Logger\LogLevel::EMERGENCY, 'THere is emergency', ['exception' => 'An emergency occured']);