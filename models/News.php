<?php

class News {

    public $title;
    public $text;

    public static function actionAll() {

        $res = new SQL;
        $sql = 'SELECT * FROM newss';
        $resource = $res->query($sql);

        while ($ret = mysql_fetch_object($resource, 'News')) {
            $object_array[] = $ret;
        }
        return $object_array;
    }

    public static function actionOne() {

        $all = self::actionAll();
        var_dump($all);

       foreach ($all as $values) {
           if ($_GET['id'] == $values->id) {
               echo $values->title;
               echo $values->text;
           }
       }
    }
}


