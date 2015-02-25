<?php

class NewsController {

    public static function actionAll() {

        $array = News::getAll();
        include_once __DIR__ . '/../views/all.php';
    }

    public static function actionOne() {

        $array = News::getOne();
        include_once __DIR__ . '/../views/one.php';
    }
}