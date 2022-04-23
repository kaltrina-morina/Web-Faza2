<?php

class Contact{
    public $firstname;
    public $lastname;
    public $email;
    public $message;

    public function __construct($firstname,$lastname,$email,$message){
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->email=$email;
        $this->message=$message;
    }
    public function __toString(){
        return "<tr>
        <td>".$this->firstname."</td>
        <td>".$this->lastname."</td>
        <td>".$this->email."</td>
        <td>".$this->message."</td>
        </tr>";
    }
}

?>