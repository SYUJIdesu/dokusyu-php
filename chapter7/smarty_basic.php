<?php

require_once '../vendor/autoload.php';

$e = new Smarty();
$e->template_dir = '../templates';
$e->compile_dir = '../templates_c/';
$e->assign('message', 'こんにちは、世界');
$e->display('smarty_basic.tpl');