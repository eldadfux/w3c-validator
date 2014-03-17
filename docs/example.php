<?php

include_once realpath(__DIR__ . '/../src/W3CValidator.php');

// Create a new validator object
$validate = new W3CValidator\W3CValidator('http://www.walla.co.il');

var_dump($validate->isValid());
var_dump($validate->getErrorsCount());
var_dump($validate->getWarningsCount());
var_dump($validate->getReport());