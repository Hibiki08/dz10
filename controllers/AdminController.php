<?php
require_once __DIR__ . '/../autoload.php';

if ((!empty($_POST)) &&
    (empty($_POST['title']) || empty($_POST['text']))) {

        echo 'Не все поля заполнены!';
}
elseif (!empty($_POST['title']) && !empty($_POST['text'])){

    News_add::add();
    header('Location: ../index.php');
}

$form = new View;
$form->display('form.php');

