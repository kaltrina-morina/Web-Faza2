<?php

class User{
    public $userName;
    public $userSurname;
    public $userDay;
    public $userMonth;
    public $userYear;
    public $userGender;
    public $userEmail;
    public $userPassword;
    public $userRole;
    public function __construct($userName,$userSurname,$userDay,$userMonth,$userYear,$userGender,$userEmail,$userPassword,$userRole){
        $this->userName=$userName;
        $this->userSurname=$userSurname;
        $this->userDay=$userDay;
        $this->userMonth=$userMonth;
        $this->userYear=$userYear;
        $this->userGender=$userGender;
        $this->userEmail=$userEmail;
        $this->userPassword=$userPassword;
        $this->userRole=$userRole;
    }
    public function __toString(){
        return "<tr>
        <td>".$this->userName." ".$this->userSurname."</td>
        <td>".$this->userDay."/".$this->userMonth."/".$this->userYear."</td>
        <td>".$this->userGender."</td>
        <td>".$this->userEmail."</td>
        <td>".$this->userPassword."</td>
        <td>".$this->userRole."</td>
        <td><a href=\"editUser.php?id=".$this->userEmail."\" id=\"editButton\">Edit</a></td>
        <td><a href=\"deleteUser.php?id=".$this->userEmail."\" id=\"deleteButton\">Delete</a></td>
        </tr>";
    }
}


?>