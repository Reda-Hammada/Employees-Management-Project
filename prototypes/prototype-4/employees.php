<?php

class Employees {

    private $id;
    private $firstName;
    private $lastName;
    private $birthDay;


    public function setId($value){

        $this->id = $value;

}

    public function getId(){

        return $this->id;
    }


    public function setfirstName($value){
        
        $this->firstName =  $value;
    }


    public function getfirstName(){

        return $this->firstName;
    }
    
    public function setlastName($value){

        $this->lastName = $value;
    }

    public function getlastName(){

        return $this->lastName;

    }

    public function  setbirthDay($value){

        $this->birthDay =  $value;
    }

    public function getbirthDay(){

        return $this->birthDay;
    }

}




?>