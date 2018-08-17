<?php
class Calculate{

    private $num1;
    private $num2;
    private $op;

    function __construct($num1,$num2,$op)
    {
        $this->num1=$num1;
        $this->num2=$num2;
        $this->op=$op;
    }

    public function calc()
    {
        switch($this->op)
        {
            case "add":
                        return $this->num1+$this->num2;
                        break;
            case "subtract":
                        return $this->num1-$this->num2;
                        break;
            case "multiply":
                        return $this->num1*$this->num2;
                        break;
            case "divide":
                        return $this->num1/$this->num2;
                        break;
        }
    }

}

?>