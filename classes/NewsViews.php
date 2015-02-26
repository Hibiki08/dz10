<?php

require_once __DIR__ . '/../autoload.php';


class NewsViews {

    public function news($news, $link) {

        $news;
        include_once __DIR__ . $link;
    }
}


