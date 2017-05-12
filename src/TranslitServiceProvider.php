<?php namespace diadus\Translit;

use Illuminate\Support\ServiceProvider;

class TranslitServiceProvider extends ServiceProvider{


	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('translit', function($app){
            return new Translit($app);
        });
	}

}
