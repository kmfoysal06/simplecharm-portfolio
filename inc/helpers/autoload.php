<?php
/**
 * Class File Autoloader
 * @package Aquila
 */
if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

spl_autoload_register('simplecharm_portfolio_autoloader');

function simplecharm_portfolio_autoloader($class) {
	$namespace = 'SIMPLECHARM_PORTFOLIO';
 
	if (strpos($class, $namespace) !== 0) {
		return;
	}
 
	$class = str_replace($namespace, '', $class);
	$class = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
 
	$directory = get_template_directory();
	$path = strtolower($directory . $class);

 
	if (file_exists($path)) {
		require_once($path);
	}
}