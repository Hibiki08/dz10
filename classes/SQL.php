<?php

class SQL {

    private $dbh;
    private $class = 'stdClass';

    public function __construct()
    {
        try {
            $this->dbh = new PDO('mysql:dbname=ШП;host=localhost', 'root', '');
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            header('HTTP/1.0 403 Forbidden');
            $e = new PDOException('Что-то пошло не так');

            $date = date('m-d-Y/H-i-s');
            $file = $e->getFile();
            $line = $e->getLine();
            $message = $e->getMessage();

            $log = new LogEcxeption;
            $log->dataLog($date, $file, $line, $message);

            $view = new View();
            $view->error = $e->getMessage();
            $view->display('403.php');
            die;
        }
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