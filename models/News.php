<?php

class News
    implements IModel
{

    public static function getAll()
    {
        $res = new SQL;
        $sql = 'SELECT * FROM newss';
        return $res->queryAll($sql);
    }


    public static function getOne($id)
    {
        $res = new SQL;
        $sql = 'SELECT * FROM newss WHERE id=' . $id;
        return $res->queryOne($sql);
    }
}


