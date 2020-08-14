<?php

namespace Structural\Adapter;

require_once "vendor/autoload.php";

$registry = new Registry();

$registry->setFirst("FirstValue");
$registry->setSecond("3.14");

printf("Original: %s \n", $registry->getFirst());
printf("Original: %s \n", $registry->getSecond());

$adapter = new Adapter(new AnotherRegistry());

$adapter->setFirst("FirstValue");
$adapter->setSecond("3.14");

printf("Adapted: %s \n", $adapter->getFirst());
printf("Adapted: %s \n", $adapter->getSecond());
