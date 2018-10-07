<?php

global $dolibase_config;

/**
 * Module configuration
 */

$dolibase_config['module'] = array(
	'name'          => '${name}',
	'desc'          => '${description}',
	'version'       => '${version}',
	'number'        => '${number}',
	'family'        => '${family}',
	'position'      => ${position},
	'rights_class'  => '${rights_class}',
	'url'           => '${url}',
	'folder'        => '${folder}',
	'picture'       => '${picture}',
	'dirs'          => array(),
	'dolibarr_min'  => array(3, 8),
	'php_min'       => array(5, 3),
	'depends'       => array(),
	'required_by'   => array(),
	'conflit_with'  => array(),
	'check_updates' => ${check_updates},
	'enable_logs'   => ${enable_logs}
);

/**
 * Author informations
 */

$dolibase_config['author'] = array(
	'name'          => '${author_name}',
	'url'           => '${author_url}',
	'email'         => '${author_email}',
	'dolistore_url' => '${author_dolistore_url}'
);

/**
 * Other (default)
 */

$dolibase_config['other'] = array(
	'setup_page'     => 'setup.php',
	'about_page'     => 'about.php',
	'lang_files'     => array($dolibase_config['module']['folder'].'@'.$dolibase_config['module']['folder']),
	'menu_lang_file' => $dolibase_config['module']['folder'].'@'.$dolibase_config['module']['folder'],
	'top_menu_name'  => str_replace('_', '', $dolibase_config['module']['folder'])
);

/**
 * Load Dolibarr environment (mandatory)
 */

if (false === (@include_once __DIR__ . '/../main.inc.php')) { // From htdocs directory
	@include_once __DIR__ . '/../../main.inc.php'; // From custom directory
}

/**
 * Load Dolibase
 */

if (false === (@include DOL_DOCUMENT_ROOT.'/dolibase/autoload.php')) { // From htdocs directory
	@include dol_buildpath('/'.$dolibase_config['module']['folder'].'/dolibase/autoload.php'); // From module directory
}