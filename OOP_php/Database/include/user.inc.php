<?php

class User extends DbConnection{

    protected function getAllUsers()
    {
        $query="select * from user";
        $conn=$this->connect();
        $result=$conn->query($query);
        $numRows=$result->num_rows;

        if($numRows>0)
        {
            while($row=$result->fetch_assoc())
            {
                $data[]=$row;
            }

            return $data;
        }
    }
}

?>