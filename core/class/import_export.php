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

/**
 * ImportExport class
 */

class ImportExport
{
	/**
	 * Add import/export js files to the page
	 *
	 * @param     $page     page handler/object
	 */
	public static function addJsFiles(&$page)
	{
		$page->appendToHead('<script type="text/javascript" src="'.DOL_URL_ROOT.DOLIBASE_DOCUMENT_ROOT.'/extra/FileSaver/FileSaver.min.js"></script>'."\n");

		$page->appendToHead('<script type="text/javascript" src="'.DOL_URL_ROOT.DOLIBASE_DOCUMENT_ROOT.'/core/js/import_export.js.php"></script>'."\n");
	}

	/**
	 * Add/print export button
	 *
	 * @param     $text      button text
	 * @param     $id        button id
	 * @param     $class     button class
	 * @param     $alt       button alt/title
	 */
	public static function addExportButton($text, $id = 'export', $class = 'butAction', $alt = '')
	{
		global $langs;

		print '<a href="#" id="'.$id.'" class="'.$class.'"'.(empty($alt) ? '' : ' title="'.$alt).'">'.$langs->trans($text).'</a>';
	}

	/**
	 * Add/print import button
	 *
	 * @param     $text              button text
	 * @param     $accept            files to accept, e.: '.txt|.png'
	 * @param     $id                button id
	 * @param     $file_input_id     hidden file input id
	 * @param     $class             button class
	 * @param     $alt               button alt/title
	 */
	public static function addImportButton($text, $accept, $id = 'import', $file_input_id = 'import-file-input', $class = 'butAction', $alt = '')
	{
		global $langs;

		print '<a href="#" id="'.$id.'" class="'.$class.'"'.(empty($alt) ? '' : ' title="'.$alt).'">'.$langs->trans($text).'</a>';
		print '<input type="file" class="hidden" style="display: none;" id="'.$file_input_id.'" accept="'.$accept.'"/>';
	}
}