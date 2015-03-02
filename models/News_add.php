<?php

class News_add {

    public $title;
    public $text;

    public function add() {

        $res = new SQL;
        $sql = "INSERT INTO newss (title, text) VALUES ('" . $this->title . "'" . "," .
            "'" . $this->text . "')";
        mysql_query($sql);
    }

} 