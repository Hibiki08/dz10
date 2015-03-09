<?php

class NewsController
{

    public function actionAll()
    {
        $view = new View;
        $view->display('search.php');

        $view->data = News::findAll();;

        $view->display('all.php');
    }

    public function actionOne()
    {

        $id = $_GET['id'];

        $view = new View();
        $view->data = News::findByID($id);
        $view->display('one.php');
    }

    public function actionFind()
    {

        if (!empty($_POST) && isset($_POST['searchTitle'])) {

            $items = new News;
            $column = 'title';
            $value = $_POST['searchTitle'];

            $res = $items->findByColumn($column, $value);

            if ($res == true) {

                $view = new View();
                $view->data = $res;
                $view->display('all.php');
            } else {
                echo 'Новость не найдена!';
            }
        }

        if (!empty($_POST) && isset($_POST['searchText'])) {

            $items = new News;
            $column = 'text';
            $value = $_POST['searchText'];

            $res = $items->findByColumn($column, $value);

            if ($res == true) {

                $view = new View();
                $view->data = $res;
                $view->display('all.php');
            } else {
                echo 'Новость не найдена!';
            }
        }

    }
}