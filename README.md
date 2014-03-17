w3c-validator
=================

[![Build Status](https://travis-ci.org/eldadfux/w3c-validator.png?branch=master)](https://travis-ci.org/eldadfux/w3c-validator)

PHP class for validating web documents with W3C validation API

    Example:

    include_once '../src/W3CValidator.php';

    // Create a new validator object
    $validate = new W3CValidator('http://www.walla.co.il');

    var_dump($validate->getReport());

    die();

