<?php

class PDOConnection{

    private $SERVER_NAME;
    private $USER_NAME;
    private $PASSWORD;
    private $DATABASE;
    private $charset;

    protected function connect()
    {
        $this->SERVER_NAME="localhost";
        $this->USER_NAME="root";
        $this->PASSWORD="";
        $this->DATABASE="oop_php";
        $this->charset="utf8mb4";

        try{

            $dsn="mysql:host=".$this->SERVER_NAME.";dbname=".$this->DATABASE.";charset=".$this->charset;
            $pdo=new PDO($dsn,$this->USER_NAME,$this->PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;

        }
        catch(PDOException $e)
        {
            echo "Connection Error ".$e.getMessage();
        }
    }
}

?>