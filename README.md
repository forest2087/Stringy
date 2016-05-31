Stringy Laravel Service Provider
=============

danielstjules/Stringy wrapped with laravel service provider for Laravel 5.1

Usage
-----------

Add the following to config\app.php

	//service provider
	FW\Stringy\StringyServiceProvider::class

	//alias
	'Stringy' => FW\Stringy\Stringy::class,
	
In code

	Use Stringy;
