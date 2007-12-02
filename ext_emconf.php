<?php

########################################################################
# Extension Manager/Repository config file for ext: "ter_update_check"
#
# Auto generated 02-12-2007 15:57
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TER Update Check',
	'description' => 'This extension adds a new function to the EM of Typo3 that enables the
administrator to get a quick overview what extensions have a newer version in TER than the one installed.
It also provides a CLI script that can be run by cron or shell.',
	'category' => 'be',
	'shy' => 0,
	'version' => '0.8.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'cli',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 0,
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Christian Welzel',
	'author_email' => 'gawain@camlann.de',
	'author_company' => 'Schech.net | Visuelle Kommunikation GbR',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '4.3.0-5.99.99',
			'typo3' => '3.8.0-4.1.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:13:{s:32:"class.tx_terupdatecheck_sort.php";s:4:"2c3d";s:12:"ext_icon.gif";s:4:"be5a";s:14:"ext_tables.php";s:4:"8430";s:16:"locallang_db.php";s:4:"8748";s:14:"doc/manual.sxw";s:4:"631a";s:36:"cli/class.tx_terupdatecheck2_cli.php";s:4:"722f";s:37:"cli/class.tx_terupdatecheck41_cli.php";s:4:"284b";s:12:"cli/conf.php";s:4:"be2b";s:26:"cli/ter_update_check.phpsh";s:4:"4d9e";s:47:"modfunc1/class.tx_ter_update_check_modfunc1.php";s:4:"b3b2";s:46:"modfunc1/class.tx_terupdatecheck2_modfunc1.php";s:4:"2b5a";s:47:"modfunc1/class.tx_terupdatecheck41_modfunc1.php";s:4:"059c";s:22:"modfunc1/locallang.php";s:4:"6a7a";}',
	'suggests' => array(
	),
);

?>