<?php
require_once __DIR__ . '/autoload.php';

if (isset($_GET['cntr'])) {

    $news = $_GET['cntr'] . 'Controller';
}

elseif (isset($_GET['act'])) {

    $act = 'action' . $_GET['act'];
    $news::$act();
}

NewsController::actionAll();




