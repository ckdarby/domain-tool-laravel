<?php return [

	// Global profile settings, applies to all types, always (even when no profile is requested).
	'all' => [

		/*
		 * Global default model adapter.
		 *
		 * Can be:
		 * 		- Atrauzzi\DomainTool\Model\Adapter\AutoGetSet
		 * 		- Atrauzzi\DomainTool\Model\Adapter\GetSet
		 * 		- Atrauzzi\DomainTool\Laravel\ModelAdapter
		 * 		- Any other, supplied by another integration library.
		 *
		 */
		'adapter' => 'Atrauzzi\DomainToolLaravel\ModelAdapter',

		/*
		 * External values will be in snake_case.
		 */
		'snake_out' => true

	],

	// Default profiles, per type.
	'default' => [

		/*
		 * Default Profiles
		 *
		 * If several of your profiles contain similar instructions for a specific class, you
		 * can avoid that duplication here.  Keep in mind, when no profile is requested, default
		 * does not get applied.
		 *
		'Path\To\Class' => [
		],
		 */

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