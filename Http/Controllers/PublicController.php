<?php namespace Modules\Test\Http\Controllers;

use Illuminate\Support\Facades\App;
use Modules\Core\Http\Controllers\BasePublicController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PublicController extends BasePublicController
{
	/**
	 * @var PostRepository
	 */
	//private $post;
	
	/*
	public function __construct(PostRepository $post)
	{
		parent::__construct();
		$this->post = $post;
	}
	*/
	
	public function test()
	{
		$localeCode = LaravelLocalization::getCurrentLocale();
		
		$urltrans = trans('test::routes.test');
		\Debugbar::info( $urltrans );
		
		//$localeCode = 'de';
		$test = LaravelLocalization::getLocalizedURL($localeCode, route('test'));
		\Debugbar::info( $test );
		return '<p>Test</p><p><b>Language</b>: '.$localeCode.'</p><p>Our translation url: '.$urltrans.'</p>';
	}
	
	public function subtest()
	{
		$localeCode = LaravelLocalization::getCurrentLocale();
		
		$urltrans = trans('test::routes.subtest');
		\Debugbar::info( $urltrans );
		
		$test = LaravelLocalization::getLocalizedURL($localeCode, route('test'));
		\Debugbar::info( $test );
		
		return '<p>Sub-test</p><p><b>Language</b>: '.$localeCode.'</p><p>Our translation url: '.$urltrans.'</p>';
	}
}





