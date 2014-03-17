<?php

include_once '../src/W3CValidator.php';

// Create a new validator object
$validate = new W3CValidator('http://www.walla.co.il');

var_dump($validate->getReport());

die();