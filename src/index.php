<?php
require "vendor/autoload.php";

use Adition\XMLProcessor;



$xmlProcessor = new XMLProcessor();
$result = $xmlProcessor->process(__DIR__ . "/nums.xml");

echo $result;