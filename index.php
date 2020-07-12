<?php
define('BASEDIR', __DIR__);
require_once BASEDIR . '/Common/Loader.php';
//命名空间，自动加载
spl_autoload_register('\\Common\\Loader::autoLoad');
//测试框架运行情况
Patterns\Test::test();
//
