<?php return [

	// Global profile settings.
	'all' => [
		'adapter' => 'Atrauzzi\DomainTool\Model\Adapter\GetSet',
	],

	// Default profiles, per type.
	'default' => [

		'Path\To\Class' => [
		],

	],

	// Profiles, per type.
	'public' => [

		/*
		 * Sample profile!
		 *
		'Path\To\Class' => [

			// When absent/empty, defaults to AutoGetSet adapter with underscore output.
			'adapter' => 'Path\To\AdapterImpl',

			// Similar to L4's "fillable" array on models, but supports mapping.
			// When absent/empty, all attributes can be set.
			'in' => [
				'id',
				'firstName',
				'tele' => 'phone',
			],
			// Similar to L4's "visible" array on models, but supports mapping.
			// When absent/empty, all attributes are displayed.
			'out' => [
				'id',
				'firstName',
				'phone' => 'tele',
			],

		],
		*/

	],

];