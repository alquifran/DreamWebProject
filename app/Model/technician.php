<?php

public class Technician extends Usuario{
    protected $task;


public function __construct($name,$email,$password,$task){
    $this->task=$task;

    parent::__construct($name,$email,$password);




    }

    function setTask($task){
        $this->task=$task;


    }
    function getTask(){
        return $this->task;


    }
}

?>