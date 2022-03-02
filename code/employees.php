<?php

class Employees{

    private $id;
    private $firstName;
    private $lastName;
    private $age;
    private $department;
    private $occupation;
    private $salary;
    private $image;


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

    public function getDepartment(){

        return $this->department;
    }

    public function setDepartment($value){
        
        $this->department = $value;

    }

   


    public function getOccupation(){
        return $this->occupation;
    }

    public function setOccupation($value){
        
        $this->occupation = $value;


    }


    public function getSalary(){

        return $this->salary;
    }

    public function setSalary($value){

        $this->salary = $value;
    }

    public function getImage(){

        return $this->image;
    }

    public function setImage($value){


        $this->image = $value;
    }
    
}


?>