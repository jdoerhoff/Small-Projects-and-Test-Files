<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
// NOTE: Smarty has a capital 'S'
require_once('/home/acct4/doerhoj1/www/Smarty2/libs/Smarty.class.php');
$smarty = new Smarty();
echo "<h5>Smarty works!</h5>";
$smarty->testInstall();
?>