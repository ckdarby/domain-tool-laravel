<?php namespace Atrauzzi\DomainToolLaravel {

	use Illuminate\Support\ServiceProvider as Base;
	//
	use Atrauzzi\DomainTool\Service as DomainTool;


	class ServiceProvider extends Base {

		public function boot() {
			// ToDo: Fix composer.json's namespacing when L5 settles on package config conventions!
			$this->package('atrauzzi/domain-tool-laravel');
		}

		/**
		 * Register the service provider.
		 *
		 * @return void
		 */
		public function register() {

			DomainTool::setMaker([$this->app, 'make']);
			DomainTool::setProfileLoader($this->app->make('Atrauzzi\DomainToolLaravel\ProfileLoader'));

		}

	}

}