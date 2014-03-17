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
            [2]=>
            array(3) {
              ["line"]=>
              string(2) "62"
              ["column"]=>
              string(1) "8"
              ["message"]=>
              string(39) "required attribute "type" not specified"
            }
            [3]=>
            array(3) {
              ["line"]=>
              string(3) "260"
              ["column"]=>
              string(2) "96"
              ["message"]=>
              string(41) "required attribute "action" not specified"
            }
            [4]=>
            array(3) {
              ["line"]=>
              string(3) "262"
              ["column"]=>
              string(3) "178"
              ["message"]=>
              string(36) "there is no attribute "autocomplete""
            }
            [5]=>
            array(3) {
              ["line"]=>
              string(3) "307"
              ["column"]=>
              string(3) "114"
              ["message"]=>
              string(61) "general entity "utm_medium" not defined and no default entity"
            }
            [6]=>
            array(3) {
              ["line"]=>
              string(3) "307"
              ["column"]=>
              string(3) "124"
              ["message"]=>
              string(82) "reference to entity "utm_medium" for which no system identifier could be generated"
            }
            [7]=>
            array(3) {
              ["line"]=>
              string(3) "307"
              ["column"]=>
              string(3) "130"
              ["message"]=>
              string(62) "general entity "utm_content" not defined and no default entity"
            }
            [8]=>
            array(3) {
              ["line"]=>
              string(3) "307"
              ["column"]=>
              string(3) "141"
              ["message"]=>
              string(83) "reference to entity "utm_content" for which no system identifier could be generated"
            }
            [9]=>
            array(3) {
              ["line"]=>
              string(3) "307"
              ["column"]=>
              string(3) "149"
              ["message"]=>
              string(63) "general entity "utm_campaign" not defined and no default entity"
            }
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
            [1]=>
            array(3) {
              ["line"]=>
              string(2) "23"
              ["column"]=>
              string(1) "9"
              ["message"]=>
              string(39) "required attribute "type" not specified"
            }
            [2]=>
            array(3) {
              ["line"]=>
              string(2) "62"
              ["column"]=>
              string(1) "8"
              ["message"]=>
              string(39) "required attribute "type" not specified"
            }
            [3]=>
            array(3) {
              ["line"]=>
              string(3) "260"
              ["column"]=>
              string(2) "96"
              ["message"]=>
              string(41) "required attribute "action" not specified"
            }
            [4]=>
            array(3) {
              ["line"]=>
              string(3) "262"
              ["column"]=>
              string(3) "178"
              ["message"]=>
              string(36) "there is no attribute "autocomplete""
            }
            [5]=>
            array(3) {
              ["line"]=>
              string(3) "307"
              ["column"]=>
              string(3) "114"
              ["message"]=>
              string(61) "general entity "utm_medium" not defined and no default entity"
            }
            [6]=>
            array(3) {
              ["line"]=>
              string(3) "307"
              ["column"]=>
              string(3) "124"
              ["message"]=>
              string(82) "reference to entity "utm_medium" for which no system identifier could be generated"
            }
            [7]=>
            array(3) {
              ["line"]=>
              string(3) "307"
              ["column"]=>
              string(3) "130"
              ["message"]=>
              string(62) "general entity "utm_content" not defined and no default entity"
            }
            [8]=>
            array(3) {
              ["line"]=>
              string(3) "307"
              ["column"]=>
              string(3) "141"
              ["message"]=>
              string(83) "reference to entity "utm_content" for which no system identifier could be generated"
            }
            [9]=>
            array(3) {
              ["line"]=>
              string(3) "307"
              ["column"]=>
              string(3) "149"
              ["message"]=>
              string(63) "general entity "utm_campaign" not defined and no default entity"
            }
          }
    */