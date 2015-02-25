<?php

class News {

    public function actionAll() {

        $res = new SQL;
        $sql = 'SELECT * FROM newss';
        $resource = $res->query($sql);

        while ($ret = mysql_fetch_object($resource, 'News')) {
            $object_array[] = $ret;
        }
        return $object_array;
    }
}


