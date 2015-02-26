<?php
require_once __DIR__ . '/../autoload.php';

class NewsController {

    public static function actionAll() {

        $news = News::getAll();

        $all = new NewsViews();
        $all->news($news, '/../views/all.php');
    }

    public static function actionOne() {

        $news = News::getOne();

        $all = new NewsViews();
        $all->news($news, '/../views/one.php');
    }
}

if (isset($_GET['cntr'])) {

    $news = $_GET['cntr'] . 'Controller';

        if (isset($_GET['act'])) {

            $act = 'action' . $_GET['act'];
            $news::$act();
        }
}
