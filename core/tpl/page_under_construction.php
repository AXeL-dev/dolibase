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

global $langs, $dolibase_config;

$langs->load("page@".$dolibase_config['langs']['path']);

$title = $langs->trans('PageUnderConstruction');

?>

<br><br><br>
<div class="center">
	<img src="<?php echo dolibase_buildurl('/core/img/under-construction.png'); ?>" title="<?php echo $title; ?>" alt="<?php echo $title; ?>">
	<h1 style="color: orange;">
		<strong>
			<i><?php echo $title; ?></i>
		</strong>
	</h1>
</div>

<?php
