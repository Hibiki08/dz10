<?php

class News_add {
    public static function add() {

        $res = new SQL;
        $sql = "INSERT INTO newss (title, text) VALUES ('" . $_POST['title'] . "'" . "," .
            "'" . $_POST['text'] . "')";
        $res->queryAll($sql);
    }

} 