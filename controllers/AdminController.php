<?php

require_once __DIR__ . '/../autoload.php';

class AdminController
{

    public function actionAdd() {

if ((!empty($_POST)) &&
(empty($_POST['title']) || empty($_POST['text'])))
{

echo 'Не все поля заполнены!';
}

elseif
(!empty($_POST['title']) && !empty($_POST['text'])) {

    $items = new News_add;

    $items->title = $_POST['title'];
    $items->text = $_POST['text'];

    $items->add();
    header('Location: ../index.php');
}
}
}

$admin = new AdminController();
$admin->actionAdd();

$form = new View;
$form->display('form.php');

