<?php
require_once "vendor/autoload.php";

use Holyrisk\PhpTool\StringHandle;

$obj = new StringHandle();
$ret = $obj->run();
var_dump($ret);