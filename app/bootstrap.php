<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    develop
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2018 Fuel Development Team
 * @link       http://fuelphp.com
 */

// Add overload framework classes here
\Autoloader::add_classes(array(
	// Example: 'View' => APPPATH.'classes/myview.php',
));

/**
 * Your environment.  Can be set to any of the following:
 *
 * Fuel::DEVELOPMENT
 * Fuel::TEST
 * Fuel::STAGING
 * Fuel::PRODUCTION
 */
\Fuel::$env = Arr::get($_SERVER, 'FUEL_ENV', \Arr::get($_ENV, 'FUEL_ENV', getenv('FUEL_ENV') ?: \Fuel::DEVELOPMENT));

// Initialize the framework with the config file.
\Fuel::init('config.php');
