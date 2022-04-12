<?php


require_once __DIR__ .'/public/index.php';

use App\model\user;
use App\controller\controller;
use App\config\config;

$obj = new config();

print_r($obj->testModel());