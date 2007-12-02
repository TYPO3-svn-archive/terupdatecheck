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
 * Sorting helper class for the 'ter_update_check' extension.
 *
 * @author	Christian Welzel <gawain@camlann.de>
 */

class tx_terupdatecheck_sort {

	function compare($aIn, $bIn) {
		$aParts = explode('.', $aIn, 2);
		$bParts = explode('.', $bIn, 2);
		$a = (int) $aParts[0];
		$b = (int) $bParts[0];
		if($a > $b){
			return 1;
		}elseif($a < $b){
			return -1;
		} else {
			if (isset($aParts[1]) && isset($bParts[1])) {
				return tx_terupdatecheck_sort::compare($aParts[1], $bParts[1]);
			} else {
				return 0;
			}
		}
	}
}

if (defined("TYPO3_MODE") && $TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/ter_update_check/class.tx_terupdatecheck_sort.php"])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/ter_update_check/class.tx_terupdatecheck_sort.php"]);
}

?>
