<?php

class Employee{

    private $id;
    private $firstName;
    private $lastName;
    private $age;


    public function getId(){

        return $this->id;
    }

    public function setId($value){

         $this->id = $value;
    }

    public function getfirstName(){
        return $this->firstName;
    }

    public function setfirstName($value){

        $this->firstName = $value;
    }

    public function getlastName(){

        return $this->lastName;
    }

    public function setlastName($value){

         $this->lastName = $value;
    }

    public function getAge(){
        
        return $this->age;
    }

    public function setAge($value){
        $this-> age = $value;
    }


}


?>