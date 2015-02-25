<?php

class SQL {

    public static function __construct() {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('ШП');
    }
} 