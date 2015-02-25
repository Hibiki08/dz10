<?php

class SQL
{
    public function __construct()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('ШП');
    }

    public function query($sql) {
        return mysql_query($sql);
    }
}