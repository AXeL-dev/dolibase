<?php
/**
 * Dolibase
 * 
 * Open source framework for Dolibarr ERP/CRM
 *
 * Copyright (c) 2018 - 2019
 *
 *
 * @package     Dolibase
 * @author      AXeL
 * @copyright   Copyright (c) 2018 - 2019, AXeL-dev
 * @license     MIT
 * @link        https://github.com/AXeL-dev/dolibase
 * 
 */

/**
 * Dolibase main configuration
 */

$dolibase_path = get_dolibase_path();

return array(
	'main' => array(
		'version'             => '3.0.3', // possible values: a.b.c-alpha, a.b.c-beta, a.b.c-rcX or a.b.c
		'link'                => 'https://github.com/AXeL-dev/dolibase',
		'path'                => $dolibase_path,
		'tables'              => array('logs'),
		'use_ajax_on_confirm' => true
	),
	'langs' => array(
		'path' => $dolibase_path // for backward compatibility
	)
);
