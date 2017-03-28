<?php

public class Cliente extends Usuario{
    protected $telefon;
    protected $packType;
    protected $time;

public function __construct($name,$email,$password,$telefon,$packType,$time){
    $this->telefon=$telefon;
    $this->packType=$packType;
    $this->time=$time;
    parent::__construct($name,$email,$password);


    }

    function setTelefon($telefon){
        $this->telefon=$telefon;


    }
    function getTelefon(){
        return $this->telefon;


    }

    function setPackType($packType){
        $this->packType=$packType;


    }
    function getPackType(){
        return $this->packType;


    }
    function setTime($time){
        $this->time=$time;


    }
    function getTime(){
        return $this->time;


    }




 ?>