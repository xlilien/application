<?php

/**
 * Test: Nette\Application\Routers\Route with UrlEncoding
 */

use Nette\Application\Routers\Route,
	Tester\Assert;


require __DIR__ . '/../bootstrap.php';

require __DIR__ . '/Route.inc';


$route = new Route('<param>', array(
	'presenter' => 'Presenter',
));

testRouteIn($route, '/a%3Ab', 'Presenter', array(
	'param' => 'a:b',
	'test' => 'testvalue',
), '/a%3Ab?test=testvalue');
