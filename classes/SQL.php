<?php

class SQL
{

    public function __construct()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('ШП');
    }

    public function query($sql) {
        mysql_query($sql);
    }
}