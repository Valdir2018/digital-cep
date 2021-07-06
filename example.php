<?php

require_once "vendor/autoload.php";

use \Wead\DigitalCep\Search;


$busca = new Search;

$result = $busca->getAddressFromZipCode('01001000');

print_r($result);