<?php
public class Usuario{

    public $name;
    public $email;
    private $password;

    public function __construct($name,$email,$password){
        this->name=$name;
        this->email=$email;
        this->password=$password;
    }

    function setName($name){
        $this->name=$name;


    }
    function getName(){
        return $this->name;


    }
    function setEmail($email){
        $this->email=$email;


    }

    function getEmail(){
        return $this->email;

    }

     function setPass($password{
        $this->password=$password;


    }

    function getPassword(){
        return $this->password;

    }

}



?>