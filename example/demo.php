<?php

require(dirname(__DIR__) . '/vendor/autoload.php');

$hlcc = new Flower\Rose\Rose();
$res = $hlcc->desc();
var_dump($res);
