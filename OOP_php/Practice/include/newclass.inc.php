<?php

class NewClass{

    public $any_var="some variable <br>";
    private $private_var="It's private variable <br>";
    private $obj_print="Printing object using toString <br>";
    
    private $first;
    
    public static $static_var=999;

    public static function getStaticVariable()
    {
        return self::$static_var;   // static property accessed
    }

    function __construct($first)
    {
        $this->first=$first;    // initialize variable for instance with parameterized constructor

        echo __CLASS__." is instanciated ______   ".$this->first."   is passed<br><br>";
    }

    public function __toString()
    {
        return $this->obj_print;
    }

    public function getPrivate()
    {
        return $this->private_var;
    }

    function __destruct()
    {
        echo __CLASS__." is destructed";
    }
}

?>