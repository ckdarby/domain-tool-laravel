<?php namespace Atrauzzi\DomainTool\Laravel {

	use Atrauzzi\DomainTool\Model\Adapter\Contract as ModelAdapterContract;


	class ModelAdapter implements ModelAdapterContract {

		/**
		 * Obtains a value from an instance.
		 *
		 * @param object $instance
		 * @param string $attribute
		 * @return mixed
		 */
		public function getAttribute($instance, $attribute) {
			// TODO: Implement getAttribute() method.
		}

		/**
		 * Assigns a value to an instance.
		 *
		 * @param object $instance
		 * @param string $attribute
		 * @param mixed $value
		 */
		public function setAttribute($instance, $attribute, $value) {
			// TODO: Implement setAttribute() method.
		}

		/**
		 * Obtains all attributes that are readable and writable.
		 *
		 * @param object $instance
		 * @return string[]
		 */
		public function getFullAttributes($instance) {
			// TODO: Implement getFullAttributes() method.
		}

		/**
		 * Obtains all the attributes of the model that can be set.
		 *
		 * @param object $instance
		 * @return string[]
		 */
		public function getWritableAttributes($instance) {
			// TODO: Implement getWritableAttributes() method.
		}

		/**
		 * Obtains all the attributes of the model that can be read.
		 *
		 * @param object $instance
		 * @return string[]
		 */
		public function getReadableAttributes($instance) {
			// TODO: Implement getReadableAttributes() method.
		}

	}

}