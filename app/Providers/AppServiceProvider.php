<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Page;
use App\Categories;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$pages = Page::select('permalink','title')->get();
		$categories = Categories::select('name')->get();
		view()->share([ 'pages'=> $pages,
		'categories' => $categories ]);
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
