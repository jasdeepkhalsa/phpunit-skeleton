# PHPUnit Skeleton [![Tests](https://github.com/jasdeepkhalsa/phpunit-skeleton/actions/workflows/tests.yml/badge.svg)](https://github.com/jasdeepkhalsa/phpunit-skeleton/actions/workflows/tests.yml)

_Get up and running with PHPUnit testing easily for your project with this skeleton_

* Are you frustrated with trying to install and configure PHPUnit?
* Are you wishing you could use just one command and BANG it was all done for you and you could get on with writing your beautiful unit tests?
* Are you having sleepless nights or sleepy afternoons?

Well, I'm happy to let you know that you just need to `clone` this repo and all your problems will be whisked away (apart from the last one, perhaps).

We have also included a sample PHP class so you can learn a few tricks in how to use PHPUnit in your projects!

## Requirements ##
* PHP 8.2 or higher
* [Composer](https://getcomposer.org/)

## Simple-tastic 2 Step Installation ##
* Open a Terminal. Download the repo with `git clone https://github.com/jasdeepkhalsa/phpunit-skeleton.git`
* `cd` into where you downloaded your repo and run `composer install`

## Run PHPUnit ##
* Open a Terminal
* `cd` to your project root
* Run `composer test` (or `./vendor/bin/phpunit` directly) and...magic! Tests (should) now be running!

You should see something like...

```
PHPUnit 11.x by Sebastian Bergmann and contributors.

Runtime:       PHP 8.3.x
Configuration: /(directory)/phpunit-skeleton/phpunit.xml

..                                                                  2 / 2 (100%)

Time: 00:00.010, Memory: 8.00 MB

OK (2 tests, 3 assertions)
```

## Checking coding standards ##
This skeleton ships with [PHP-CS-Fixer](https://cs.symfony.com/) configured for the PSR-12 coding standard.

* Check for violations: `composer cs-check`
* Automatically fix violations: `composer cs-fix`

## Customizing PHPUnit Skeleton ##
Once you've successfully installed PHPUnit Skeleton, you'll probably want to customize it to your application.

### How do I change the name of the application? ###
Once you have the name of your application which we shall refer to as `YourApp`, then do the following:

1. First you have to change the entry `Application` in the `composer.json` file to `YourApp` under `autoload.psr-4` (and `autoload-dev.psr-4` if you keep the same pattern for tests):

   ```json
   {
       "autoload": {
           "psr-4": {
               "YourApp\\": "lib/"
           }
       },
       "autoload-dev": {
           "psr-4": {
               "Tests\\": "tests/"
           }
       }
   }
   ```

2. Update the `namespace` inside the following PHP files:
    * Inside `/lib/Example.php` update `namespace Application;` to `namespace YourApp;`
    * Inside `/tests/ExampleTest.php` update `use Application\Example;` to `use YourApp\Example;`
3. Run `composer dump-autoload` to refresh the autoloader
4. Run `composer test` again to make sure all tests are passing again

## Credits ##
* To the wonderful people on [Stack Overflow](http://stackoverflow.com/questions/15710410/autoloading-classes-in-phpunit-using-composer-and-autoload-php) for helping me understand PHPUnit better
* Constant support from PHP Guru Jujhar Singh from [Buto](http://get.buto.tv/) who also inspired the test case style used in the examples
* Class examples inspired from video by Jeffrey Way from [Nettuts+](http://net.tutsplus.com/tutorials/php/better-workflow-in-php-with-composer-namespacing-and-phpunit/)

## Contact ##
* Email: jasdeep {at} simplyspiritdesign {dot} com
* Twitter: [@JasdeepKhalsa1](http://twitter.com/@JasdeepKhalsa1)
