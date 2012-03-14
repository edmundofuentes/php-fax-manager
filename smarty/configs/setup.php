<?php

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/idpsaNetwork/smarty/templates');
$smarty->setCompileDir('/var/www/idpsaNetwork/smarty/templates_c');
$smarty->setCacheDir('/var/www/idpsaNetwork/smarty/cache');
$smarty->setConfigDir('/var/www/idpsaNetwork/smarty/configs');

$smarty->testInstall();

?>