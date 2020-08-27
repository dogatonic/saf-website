<?php
define('__ROOT__', dirname(__FILE__));
require_once(dirname(__FILE__) . "/includes/a_top.php");
require_once(__ROOT__ . "/includes/html_head.php");

require_once(__ROOT__ . "/pages/$sPageInclude.php");

require_once(__ROOT__ . "/includes/html_foot.php");
require_once(__ROOT__ . "/includes/z_bottom.php");
?>