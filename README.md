# w3c-validator

[![Build Status](https://travis-ci.org/eldadfux/w3c-validator.png?branch=master)](https://travis-ci.org/eldadfux/w3c-validator)

PHP class for validating web documents with W3C validation API

    Example:

    include_once '../src/W3CValidator.php';

    // Create a new validator object
    $validate = new W3CValidator('http://www.walla.co.il');

    var_dump($validate->isValid()); /* output: bool(false) */
    var_dump($validate->getErrorsCount()); /* output: int(463) */
    var_dump($validate->getWarningsCount()); /* output: int(372) */

## Contributing

All code contributions - including those of people having commit access - must go through a pull request and approved by a core developer before being merged. This is to ensure proper review of all the code.

Fork the project, create a feature branch, and send us a pull request.


### Versioning

For transparency and insight into our release cycle, and for striving to maintain backward compatibility, Utopia PHP Framework will be maintained under the Semantic Versioning guidelines as much as possible. Releases will be numbered with the following format:

`<major>.<minor>.<patch>`

For more information on SemVer, please visit [http://semver.org/](http://semver.org/).

## Requirements

PHP 5.3+

We recommend using the latest PHP version whenever possible.

## Author

**Eldad Fux**

+ [https://twitter.com/eldadfux](https://twitter.com/eldadfux)
+ [https://github.com/eldadfux](https://github.com/eldadfux)
+ [![endorse](https://api.coderwall.com/eldadfux/endorsecount.png)](https://coderwall.com/eldadfux)

See also the list of [contributors](https://github.com/composer/satis/contributors) who participated in this project.

## License

W3C Validator class is licensed under the MIT License - see the LICENSE file for details
