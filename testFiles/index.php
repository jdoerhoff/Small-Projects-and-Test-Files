<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
// put full path to Smarty.class.php
require('setup.php');

$smarty = new Smarty_smartyTest();

$smarty->assign('people', array('bob','jim','joe','jerry','fred'));

// assign an array of data
$smarty->assign('names', array('bob','jim','joe','jerry','fred'));

// assign an associative array of data
$smarty->assign('users', array(
	array('name' => 'bob', 'phone' => '555-3425'),
	array('name' => 'jim', 'phone' => '555-4364'),
	array('name' => 'joe', 'phone' => '555-3422'),
	array('name' => 'jerry', 'phone' => '555-4973'),
	array('name' => 'fred', 'phone' => '555-3235')
	));

$smarty->display('index.tpl');

//** un-comment the following line to show the debug console
//$smarty->debugging = true;
?>