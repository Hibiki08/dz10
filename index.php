<?php
require_once __DIR__ . '/autoload.php';

if (isset($_GET['cntr'])) {

    $news = $_GET['cntr'] . 'Controller';

    if (file_exists(__DIR__ . '/controllers/' . $news . '.php')) {

        if (isset($_GET['act'])) {

            $act = 'action' . $_GET['act'];
            $news::$act();
        }
    }
}

