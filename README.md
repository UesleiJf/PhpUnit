### PhpUnit

#### To execute this project follow the steps below:

The following steps were done on Ubuntu 16.04

- First install Php (sudo apt install php)
- Install Composer (https://getcomposer.org)

- Create a directory for the project
- Within the project directory execute: composer require --dev phpunit/phpunit
- Execute: alias phpunit="./vendor/phpunit/phpunit/phpunit"


#### Example to run the tests on the file in that directory:

phpunit tests/ExampleTest.php