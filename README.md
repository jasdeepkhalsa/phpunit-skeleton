# PHPUnit Skeleton #
_Get up and running with PHPUnit testing easily for your project with this skeleton_

* Are you frustrated with trying to install and configure PHPUnit?
* Are you wishing you could use just one command and BANG it was all done for you and you could get on with writing your beautiful unit tests?
* Are you having sleepless nights or sleepy afternoons?

Well, I'm happy to let you know that you just need to `clone` this repo and all your problems will be whisked away (apart from the last one, perhaps).

We have also included a sample PHP class so you can learn a few tricks in how to use PHPUnit in your projects!

## Simple-tastic 3 Step Installation ##
* Open a Terminal. Download the repo with `git clone https://github.com/jasdeepkhalsa/phpunit-skeleton.git`
* `cd` into where you downloaded your repo and run `php composer.phar self-update`
* Now, run `php composer.phar install --dev`

Note: `php` refers to the location of your php executable, if its not on your system's path

## Run PHPUnit ##
* Open a Terminal
* `cd` to your project root
* Type `./vendor/bin/phpunit` and...magic! Tests (should) now be running!

You should see something like...

		PHPUnit 3.7.19 by Sebastian Bergmann.
		
		Configuration read from /(directory)/phpunit-skeleton/phpunit.xml
		
		....
		
		Time: 0 seconds, Memory: 3.00Mb
		
		OK (4 tests, 4 assertions)

## Customizing PHPUnit Skeleton  ##
Once you've successfully installed PHPUnit Skeleton, you'll probably want to customize it to your application.

### How do I change the name of the application? ###
Once you have the name of your application which we shall refer to as `YourApp`, then do the following:

1. First you have to change the entry `Application` in the `composer.json` file to `YourApp` under the object `psr-0`:

  >		{
  >			"require-dev": {
  >				"phpunit/phpunit": "3.7.*",
  >				"phpunit/dbunit": ">=1.2",
  >				"phpunit/phpunit-selenium": ">=1.2"
  >			},
  >			"autoload": {
  >				"psr-0": {
  >					"YourApp": "lib/"
  >				}
  >			}
  >		}
  >

2. Next, rename the following two directories from `Application` to `YourApp`:
	* Rename `/lib/Application/` to `/lib/YourApp/`
	* Rename `/tests/Application/` to `/tests/YourApp/`
3. Finally update the `namespace` inside the following php files:
	* Inside `/lib/YourApp/Example.php` update `namespace Application;` to `namespace YourApp;`
	* Inside `/tests/YourApp/ExampleTest.php` update `$this->obj = new Application\Example;` to `$this->obj = new YourApp\Example;`
4. Run `php composer.phar update` again to update the sources
5. Run `./vendor/bin/phpunit` again to make sure all tests are passing again

## Credits ##
* To the wonderful people on [Stack Overflow](http://stackoverflow.com/questions/15710410/autoloading-classes-in-phpunit-using-composer-and-autoload-php) for helping me understand PHPUnit better
* Constant support from PHP Guru Jujhar Singh from [Buto](http://get.buto.tv/) who also inspired the test case style used in the examples
* Class examples inspired from video by Jeffrey Way from [Nettuts+](http://net.tutsplus.com/tutorials/php/better-workflow-in-php-with-composer-namespacing-and-phpunit/)

## Contact ##
* Email: jasdeep {at} simplyspiritdesign {dot} com
* Twitter: [@JasdeepKhalsa1](http://twitter.com/@JasdeepKhalsa1)
