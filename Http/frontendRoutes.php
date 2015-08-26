<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(
	[
		'prefix' => trans('test::routes.test')
	],
	function($router){
		
		$router->get(
			'/',
			[
				'as' => 'test',
				'uses' => 'PublicController@test'
			]
		);
		
		$router->group(
			[
				'prefix' => trans('test::routes.subtest')
			],
			function($router){
				
				$router->get(
					'/',
					[
						'as' => 'subtest',
						'uses' => 'PublicController@subtest'
					]
				);
				
			}
		);
	}
);