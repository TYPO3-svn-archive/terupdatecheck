<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2005 Christian Welzel (gawain@camlann.de)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * CLI extension (addition to function menu) 'Check for updates' for the 'ter_update_check' extension.
 *
 * @author	Christian Welzel <gawain@camlann.de>
 */

class tx_terupdatecheck41_cli {

	function main($dev, $shy, $not) {
		global $LANG;

		$tmp = & $this->pObj->getInstalledExtensions();
		$list = & $tmp[0];

	    $content =  sprintf("%-30s %-20s %-15s %-15s\n%-79s\n",
			$LANG->getLL('tab_mod_name'), $LANG->getLL('tab_mod_key'),
			$LANG->getLL('tab_mod_loc_ver'), $LANG->getLL('tab_mod_rem_ver'),
			$LANG->getLL('tab_mod_comment'));

	    $diff = $dev ? 1 : 1000;

		reset($list);
		while (list($name,) = each($list)) {
			$data = & $list[$name];

			$this->pObj->xmlhandler->searchExtensionsXML($name, NULL, NULL, true, true);

			if(!is_array($this->pObj->xmlhandler->extensionsXML[$name])) continue;

			$v = & $this->pObj->xmlhandler->extensionsXML[$name][versions];
			$versions = array_keys($v);
			$lastversion = end($versions);
			$comment = $this->pObj->xmlhandler->extensionsXML[$name][versions][$lastversion][uploadcomment];

	        if( (t3lib_extMgm::isLoaded($name) || $not) &&
		    	($data[EM_CONF][shy] == 0 || $shy) &&
		    	$this->pObj->versionDifference($lastversion, $data[EM_CONF][version], $diff))
			{
		    	$content .= sprintf("%-30s %-20s %-15s %-15s\n%-79s\n\n",
					$data[EM_CONF][title],
					$name,
					$data[EM_CONF][version],
					$lastversion,
					wordwrap(nl2br($comment)));
			}

			$this->pObj->xmlhandler->freeExtensionsXML();
	    }

	    echo $content;
	}

}

if (defined("TYPO3_MODE") && $TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/ter_update_check/cli/class.tx_terupdatecheck41_cli.php"])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/ter_update_check/cli/class.tx_terupdatecheck41_cli.php"]);
}

?>
