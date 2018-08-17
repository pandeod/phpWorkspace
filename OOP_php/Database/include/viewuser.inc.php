<?php

class ViewUser extends User{

    public function showAllUsers()
    {
        $data=$this->getAllUsers();

        foreach($data as $d)
        {
            echo "User: ".$d['uid']."<br> Password: ".$d['pwd']."<br><br>";
        }
    }
}

?>