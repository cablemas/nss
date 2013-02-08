<?php
/** 
 * Smarty plugin 
 * @package Smarty
 * @subpackage plugins 
 */ 

 /** 
 * Smarty munge_string_to_url modifier plugin * 
 * Type: modifier 
 * Name: munge_string_to_url 
 * Purpose: make a friendly url out of a title 
 * @link http://smarty.php.net/ 
 * @param string 
 * @return string 
 */ 

function smarty_modifier_munge_string_to_url($alias, $tolower = false, $withslash = false) { return munge_string_to_url($alias, $tolower, $withslash); }

 ?>