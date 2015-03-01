<?php

class SQL
{
    public function __construct()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('ШП');
    }

    public function queryAll($sql) {

        $resource = mysql_query($sql);

        while ($ret = mysql_fetch_object($resource, 'News')) {
            $object_array[] = $ret;
        }
        return $object_array;
    }

    public function queryOne($sql) {

        return $this->queryAll($sql)[0];
    }
}