<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-02 20:42:09 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /var/www/myKohana/system/classes/Kohana/Cookie.php:67
2013-09-02 20:42:09 --- DEBUG: #0 /var/www/myKohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('__utma', NULL)
#1 /var/www/myKohana/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('__utma')
#2 /var/www/myKohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/myKohana/system/classes/Kohana/Cookie.php:67