<?php
class user{
    private $id;
    private $email;
    private $password;

    function get_id(){
        return $this->id;
    }
    function set_id($id){
        $this->id = $id;
    }
    function get_email(){
        return $this->email;
    }
    function set_email($email){
        $this->email = $email;
    }
    function get_password(){
        return $this->password;
    }
    function set_password($password){
        $this->password = $password;
    }

    function __construct($id, $email, $password){
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
    }
}
?>