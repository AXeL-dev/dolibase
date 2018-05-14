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
 * @copyright	Copyright (c) 2018 - 2019, AXeL-dev
 * @license
 * @link
 * 
 */

dolibase_include_once('/core/class/page.php');

/**
 * AboutPage class
 */

class AboutPage extends Page
{
	/**
	 * Constructor
	 * 
	 * @param     $page_title     HTML page title
	 * @param     $access_perm    Access permission
	 */
	public function __construct($page_title = 'About', $access_perm = '$user->admin')
	{
		global $langs, $dolibase_config;

		// Load lang files
		$langs->load("admin");
		$langs->load("about_page@".$dolibase_config['module_folder']);

		parent::__construct($page_title, $access_perm);
	}

	/**
	 * Generate page body
	 *
	 */
	protected function generate()
	{
		global $langs, $dolibase_config;

		// Add sub title
		$linkback = '<a href="'.DOL_URL_ROOT.'/admin/modules.php?mainmenu=home">'.$langs->trans("BackToModuleList").'</a>';
		$this->addSubTitle($this->title, 'title_generic.png', $linkback);

		// Add default tabs
		if (empty($this->tabs)) {
			$this->addTab("Settings", "/".$dolibase_config['module_folder']."/admin/".$dolibase_config['setup_page_url']."?mainmenu=home");
			$this->addTab("About", "/".$dolibase_config['module_folder']."/admin/".$dolibase_config['about_page_url']."?mainmenu=home", true);
		}

		parent::generate();
	}

	/**
	 * Print module informations
	 *
	 * @param     $picture     Picture to show, prefered size: 128x128 (leave empty to use the module picture)
	 */
	public function printModuleInformations($picture = '')
	{
		global $langs, $dolibase_config;

		if (empty($picture)) {
			$picture = 'object_'.$dolibase_config['module_picture'];
		}

		echo '<div style="float: left; margin-right: 20px;"><img src="../img/'.$picture.'" /></div>';
		echo '<br/>';
		echo '<div>';
		echo '<a href="'.$dolibase_config['module_url'].'" target="_blank">';
		echo '<b>'.$langs->trans($dolibase_config['module_name']).'</b>';
		echo '</a> : '.$langs->trans($dolibase_config['module_desc']);
		echo '<br/><br/>'.$langs->trans('DevelopedBy').' <a href="'.$dolibase_config['editor_url'].'" target="_blank">'.$dolibase_config['editor_name'].'</a>';
		echo '. '.$langs->trans('DolibaseVersion').' <a href="'.DOLIBASE_LINK.'" target="_blank">'.DOLIBASE_VERSION.'</a>';
		echo '<br/><br/>'.$langs->trans('ForAnyQuestions').' <a href="mailto:'.$dolibase_config['editor_email'].'">'.$dolibase_config['editor_email'].'</a>';
		echo '<br><br>'.$langs->trans('FindMyModules').' <a href="'.$dolibase_config['dolistore_url'].'" target="_blank">'.$langs->trans('Dolistore').'</a>';
		echo '</div>';
		echo '<br/><br/>';
	}
}