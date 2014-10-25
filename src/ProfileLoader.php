<?php namespace Atrauzzi\DomainTool\Laravel {

	use Atrauzzi\DomainTool\ProfileLoader as Base;
	//
	use Illuminate\Config\Repository as Config;


	class ProfileLoader implements Base {

		/** @var \Illuminate\Config\Repository */
		protected $config;

		/**
		 * @param \Illuminate\Config\Repository $config
		 */
		public function __construct(Config $config) {
			$this->config = $config;
		}

		/**
		 * @param string $type
		 * @param null|string $profileName
		 * @return array
		 */
		public function getProfile($type, $profileName = null) {

			$namedProfile = $this->config->get(sprintf('domain-tool-laravel::%s.%s', $profileName, $type), null);

			// Invalid or no profile.
			if(!is_array($namedProfile)) {

				// But we wanted one...
				if($profileName)
					return null;
				// No big!
				else
					$namedProfile = [];

			}

			$all = $this->config->get('domain-tool-laravel::all', []);
			$default = $this->config->get(sprintf('domain-tool-laravel::default.'), []);

			return array_replace_recursive($all, $default, $namedProfile);

		}

	}

}