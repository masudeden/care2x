<?php
error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
require('./roots.php');
require($root_path.'include/core/inc_environment_global.php');

define('LANG_FILE','reporting.php');
$local_user = 'aufnahme_user';
require($root_path.'include/core/inc_front_chain_lang.php');
require_once('gui/gui_reporting_main_menu.php');

?>
