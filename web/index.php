<?php
require __DIR__ . "/../vendor/autoload.php";

use Adition\XMLProcessor;

$xmlProcessor = new XMLProcessor();
$result = $xmlProcessor->process(__DIR__ . "/../src/nums.xml");

echo $result;
