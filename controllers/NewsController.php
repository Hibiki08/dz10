<?php
require_once __DIR__ . '/../autoload.php';

class NewsController {

    public static function actionAll() {

        $array = News::getAll();
        include_once __DIR__ . '/../views/all.php';
    }

    public static function actionOne() {

        $news_one = News::getOne();
        include_once __DIR__ . '/../views/one.php';
    }
}

if (isset($_GET['cntr'])) {

    $news = $_GET['cntr'] . 'Controller';

        if (isset($_GET['act'])) {

            $act = 'action' . $_GET['act'];
            $news::$act();
        }
}
