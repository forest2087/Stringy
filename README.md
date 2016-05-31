Stringy Laravel Service Provider
=============

danielstjules/Stringy wrapped with laravel service provider for Laravel 5.1

Usage
-----------

Add VCS repo to composer.json

	  "repositories": [
        {
          "type": "vcs",
          "url": "git@github.com:forest2087/Stringy.git"
        }
      ]

Add the following to config\app.php

	//service provider
	FW\Stringy\StringyServiceProvider::class

	//alias
	'Stringy' => FW\Stringy\Stringy::class,
	
In code

	Use Stringy;
