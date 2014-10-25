<?php namespace Atrauzzi\DomainTool\Laravel {

	use Atrauzzi\DomainTool\ProfileLoader as ProfileLoaderContract;
	//
	use Illuminate\Config\Repository as Config;


	class ProfileLoader implements ProfileLoaderContract {

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
				$namedProfile = [];
				$default = [];

			}
			// When a profile is loaded, mix in defaults (when available).
			else {
				$default = $this->config->get(sprintf('domain-tool-laravel::default.%s', $type), []);
			}

			return array_replace_recursive(
				$this->config->get('domain-tool-laravel::all', []),
				$default,
				$namedProfile
			);

		}

	}

}