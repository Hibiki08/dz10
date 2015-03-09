<?php
require_once __DIR__ . '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerName = $ctrl . 'Controller';

try {
    $controller = new $controllerName;

    $action = 'action' . $act;
    $controller->$action();
}
catch (E404Exception $e) {

    $date = date('m-d-Y/H-i-s');
    $file = $e->getFile();
    $line = $e->getLine();
    $message = $e->getMessage();

    $log = new LogEcxeption();
    $log->dataLog($date, $file, $line, $message);

    header("HTTP/1.0 404 Not Found");
    $view = new View();
    $view->error = $e->getMessage();
    $view->display('404.php');
}
