<?php

class SQL {

    private $dbh;
    private $class = 'stdClass';

    public function __construct()
    {
       $this->dbh = new PDO('mysql:dbname=ШП;host=localhost', 'root', '');
    }

    public function className($className) {

        $this->class = $className;
    }

    public function query($sql, $parameters=[]) {

        $res = $this->dbh->prepare($sql);
        $res->execute($parameters);
        return $res->fetchAll(PDO::FETCH_CLASS, $this->class);
    }

    public function queryOther($sql, $parameters=[]) {

        $res = $this->dbh->prepare($sql);
        return $res->execute($parameters);
    }
}