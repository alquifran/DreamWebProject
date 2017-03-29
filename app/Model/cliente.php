<?php

public class Cliente extends Usuario{
    private $telefon;
    private $packType;
    private $time;

    function __construct($name,$email,$password = "",$telefon ="",$time = 0){
        $this->telefon=$telefon;
        $this->time=$time;
        parent::__construct($name,$email,$password);


    }

    function listClientes(){
        // leer archivo json
    }

    function setTelefon($telefon){
        $this->telefon=$telefon;


    }
    function getTelefon(){
        return $this->telefon;


    }
    function setTime($time){
        $this->time=$time;


    }
    function getTime(){
        return $this->time;


    }




 ?>