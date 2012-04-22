<?php

 /**
 * If Set Or function
 *
 * @author      SORIA Pierre-Henry
 * @email       pierrehs@hotmail.com
 * @link        http://github.com/pH-7
 * @license     Lesser General Public License (LGPL) (http://www.gnu.org/copyleft/lesser.html)
 * @version     $Id: ifsetor.inc.php 2012-01-25 pierrehs $
 */
 
namespace {
	
  /**
   * @desc PHP 6 was to give birth to this function, but the development PHP team to decline this feature :(, so we create
   * @param string $sVar a variable (e.g. $_GET['foo'])
   * @param string $sOr a message if $sVar is empty (optional)
   * @return string $sVar or $sOr
   */
         function ifsetor(&$sVar, $sOr = '') {
            return (isset($sVar)) ? $sVar : $sOr;
         }
	
}
