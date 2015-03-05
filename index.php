<?php
require_once __DIR__ . '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerName = $ctrl . 'Controller';

$controller = new $controllerName;

$action = 'action' . $act;
$controller->$action();
