<?php namespace Atrauzzi\DomainTool\Laravel {

	use Illuminate\Support\ServiceProvider as Base;
	//
	use Atrauzzi\DomainTool\Service as DomainTool;


	class ServiceProvider extends Base {

		/**
		 * Register the service provider.
		 *
		 * @return void
		 */
		public function register() {

			$this->package('atrauzzi/domain-tool-laravel');

			DomainTool::setMaker([$this->app, 'make']);
			DomainTool::setProfileLoader($this->app->make('Atrauzzi\DomainTool\Laravel\ProfileLoader'));

		}

	}

}