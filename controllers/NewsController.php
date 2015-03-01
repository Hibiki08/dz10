<?php

class NewsController {

    public function actionAll() {

        $news = News::getAll();

        $all = new View();
        $all->items = $news;
        $all->display('all.php');
    }

    public function actionOne() {

        $id = $_GET['id'];
        $news = News::getOne($id);

        $one = new View();
        $one->items = $news;
        $one->display('one.php');
    }
}