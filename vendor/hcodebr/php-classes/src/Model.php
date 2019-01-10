<?php
	/**
	 * Created by PhpStorm.
	 * User: gilsonalves
	 * Date: 2019-01-04
	 * Time: 22:12
	 */

	namespace Hcode;


	class Model
	{
		private $values = [];

		public function __call($name, $arguments) {
			// TODO: Implement __call() method.
			$method = substr($name, 0, 3);
			$fieldName = substr($name, 3, strlen($name));

			switch ($method) {
				case "get":
					return (isset($this->values[$fieldName])) ? $this->values[$fieldName] : null;
					break;

				case "set":
					$this->values[$fieldName] = $arguments[0];
					break;
			}
		}

		public function setData($data = array()) {
			foreach ($data as $key => $value) {
				$this->{"set" . $key}($value);
			}
		}

		public function getValues() {
			return $this->values;
		}

	}