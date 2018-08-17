<?php

class DbConnection{

    private $SERVER_NAME;
    private $USER_NAME;
    private $PASSWORD;
    private $DATABASE;

    protected function connect()
    {
        $this->SERVER_NAME="localhost";
        $this->USER_NAME="root";
        $this->PASSWORD="";
        $this->DATABASE="oop_php";

        $conn=new mysqli($this->SERVER_NAME,$this->USER_NAME,$this->PASSWORD,$this->DATABASE);

        return $conn;
    }
}

?>