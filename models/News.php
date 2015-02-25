<?php

class News {

    public $title;
    public $text;

    public static function getAll() {

        $res = new SQL;
        $sql = 'SELECT * FROM newss';
        $resource = $res->query($sql);

        while ($ret = mysql_fetch_object($resource, 'News')) {
            $object_array[] = $ret;
        }
        return $object_array;
    }

    public static function getOne() {

        $all = self::getAll();

       foreach ($all as $values) {
           if ($_GET['id'] == $values->id) {
               echo $values->title;
               echo $values->text;
           }
       }
    }
}


