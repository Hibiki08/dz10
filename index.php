<?php
require_once __DIR__ . '/autoload.php';

$news = new News;
$array = $news->actionAll();
var_dump($array);

require_once __DIR__. '/views/all.php';