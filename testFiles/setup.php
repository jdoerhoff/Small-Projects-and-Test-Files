<?php

// load Smarty library
require('/home/acct4/doerhoj1/www/Smarty2/libs/Smarty.class.php');

// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');

class Smarty_smartyTest extends Smarty {

   function Smarty_smartyTest()
   {

        // Class Constructor.
        // These automatically get set with each new instance.

        $this->Smarty();

        $smarty->templateDir = '/home/acct4/doerhoj1/www/smartyTest/templates';
		$smarty->compileDir = '/home/acct4/doerhoj1/www/smartyTest/templates_c';
		$smarty->cacheDir = '/home/acct4/doerhoj1/www/smartyTest/cache';
		$smarty->configDir = '/home/acct4/doerhoj1/www/smartyTest/configs';

        $this->caching = true;
        $this->assign('app_name', 'smarty test');
   }

}
?>