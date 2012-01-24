<?php

 /**
 * If Set Or function
 *
 * @author      SORIA Pierre-Henry
 * @email       pierrehs@hotmail.com
 * @link        http://github.com/pH-7
 * @license     GNU GPL 3 (http://www.gnu.org/licenses/gpl-3.0.html)
 * @version     $Id: ifsetor.inc.php 2012-01-25 pierrehs $
 */
 
namespace {
	
  /**
   * @desc PHP 6 was to give birth to this function, but the development PHP team to decline this feature :(, so we create
   * @param string $var a variable (e.g. $_GET['foo'])
   * @param string $or a message if $var is empty (optional)
   * @return string $var or $or
   */
         function ifsetor(&$var, $or = '') {
            return (isset($var)) ? $var : $or;
         }
	
}
