w3c-validator
=================

[![Build Status](https://travis-ci.org/eldadfux/w3c-validator.png?branch=master)](https://travis-ci.org/eldadfux/w3c-validator)

PHP class for validating web documents with W3C validation API

    Example:

    include_once '../src/W3CValidator.php';

    // Create a new validator object
    $validate = new W3CValidator('http://www.walla.co.il');

    var_dump($validate->getReport());

    /*

    Output:
    ------------------------------------------------------------
        array(6) {
          ["URI"]=>
          string(23) "http://www.walla.co.il/"
          ["Validity"]=>
          bool(false)
          ["Errors"]=>
          int(441)
          ["Error List"]=>
          array(10) {
            [0]=>
            array(3) {
              ["line"]=>
              string(2) "10"
              ["column"]=>
              string(2) "17"
              ["message"]=>
              string(32) "there is no attribute "property""
            }
            [1]=>
            array(3) {
              ["line"]=>
              string(2) "23"
              ["column"]=>
              string(1) "9"
              ["message"]=>
              string(39) "required attribute "type" not specified"
            }
            ...
          }
          ["Warnings"]=>
          int(441)
          ["Warning List"]=>
          array(10) {
            [0]=>
            array(3) {
              ["line"]=>
              string(2) "10"
              ["column"]=>
              string(2) "17"
              ["message"]=>
              string(32) "there is no attribute "property""
            }
            ...
          }
    */