<?php

abstract class AbstractModel {

    protected static $idName =[];
    protected static $table;
    public $data=[];

    public function __set ($name, $value) {

        $this->data[$name] = $value;
    }

    public function __get($name) {

        $this->data[$name];
    }

    public static function findAll() {

        $class = get_called_class();
        $query = new SQL;
        $query->className($class);
        $sql = 'SELECT * FROM ' . static::$table;
        return $query->query($sql);
    }

    public static function findByID($id) {

        $class = get_called_class();
        $query = new SQL;
        $query->className($class);

        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $parameters = [':id' => $id];
        return $query->query($sql, $parameters)[0];
    }

    public static function findByColumn($column, $value) {

        $class = get_called_class();
        $query = new SQL;
        $query->className($class);

        $sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . '=:value';
        $parameters = [':value' => $value];

        return $query->query($sql, $parameters);
    }


    public function insert() {

        $keys = array_keys($this->data);

        foreach ($keys as $key => $val) {
            $datas[':' . $val] = $this->data[$val];
        }

        $query = new SQL;
        $sql = 'INSERT INTO ' . static::$table . '
        ('. implode(', ', $keys) .')
        VALUES
        ('. implode(', ', array_keys($datas)) .')';

        $query->queryOther($sql, $datas);
    }

    public function update($title1, $title1_val, $title2, $title2_val, $id) {

        $query = new SQL;
        $sql = 'UPDATE ' . static::$table .
        ' SET ' . $title1 . '=:title, ' . $title2 . '=:text' .
        ' WHERE id=:id';
        $parameters = [':title' => $title1_val,
            ':text' => $title2_val,
            ':id' => $id];

        return $query->queryOther($sql, $parameters);
    }

    public function delete($id) {

        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=' . $id;

        $query = new SQl;
        $query->queryOther($sql);
    }


}