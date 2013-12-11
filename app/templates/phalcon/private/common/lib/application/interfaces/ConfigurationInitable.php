<?php

namespace <%= project.namespace %>\Application\Interfaces;

use \Phalcon\DiInterface,
	\Phalcon\Config;

interface ConfigurationInitable {

	/**
	 * Perform any pre object init logic here,
	 * e.g. register the module specific configuration classes
	 *
 	 * @param \Phalcon\DiInterface $di
	 * @param \Phalcon\Config $config
	 */
    public static function initConfiguration(DiInterface $di, Config $config);

}
