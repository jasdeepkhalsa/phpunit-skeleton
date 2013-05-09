# PHPUnit Skeleton #
_Get up and running with PHPUnit testing easily for your project_

* Are you frustrated with trying to install and configure PHPUnit?
* Are you wishing you could use just one command and BANG it was all done for you and you could get on with writing your beautiful unit tests?
* Are you having sleepless nights or sleepy afternoons?

Well, I'm happy to let you know that you just need to `clone` this repo and all your problems will be whisked away (apart from the last one, perhaps).

We have also included a sample PHP class so you can learn a few tricks in how to use PHPUnit in your projects!

# Simple-tastic 3 Step Installation #
* Open a Terminal. Download the repo with `git clone https://github.com/jasdeepkhalsa/tweet-counter.git`
* `cd` into where you downloaded your repo and run `php composer.phar self-update`
* Now, run `php composer.phar update`

## Run PHPUnit ##
* Open up a terminal
* `cd` to your project root
* Type `./vendor/bin/phpunit` and...magic! Tests (should) now be running!

You should see something like...

		PHPUnit 3.7.19 by Sebastian Bergmann.
		
		Configuration read from /(directory)/phpunit-skeleton/phpunit.xml
		
		....
		
		Time: 0 seconds, Memory: 3.00Mb
		
		OK (4 tests, 4 assertions)

# Credits #
* Me and my awesomely laborious efforts in getting to grips with PHPUnit testing
* Constant support from PHP Guru Jujhar Singh from [Buto](http://get.buto.tv/) who also inspired the test case style in the examples
* Class examples inspired from video by Jeffrey Way from [Nettuts+](http://net.tutsplus.com/tutorials/php/better-workflow-in-php-with-composer-namespacing-and-phpunit/)