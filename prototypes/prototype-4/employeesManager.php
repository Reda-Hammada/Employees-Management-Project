<?php

include 'employees.php';

class EmployeesManager {

    public function insertEmployee($employee){
        $getJSON = file_get_contents('employees.json');
        $JSONarray = json_decode($getJSON);

        $employeeData = array(

            'id'=> $employee->getId(),
            'firstname' => $employee -> getfirstName(),
            'lastname' => $employee ->  getlastName(),
            'birthday' => $employee -> getbirthDay()
        );

        array_push($JSONarray, $employeeData);
        file_put_contents('employees.json', json_encode($JSONarray));
       
    }


    public function getEmployee(){

        $file = file_get_contents('employees.json');
        $employee_data = json_decode($file, true);
        $employeeArray = array();
        foreach($employee_data as $data){
            $employee = new Employees();
            $employee->setId($data['id']);
            $employee->setfirstName($data['firstname']);
            $employee->setlastName($data['lastname']);
            $employee->setbirdthDay($data['birthday']);

            array_push($employeeArray,$employee);
        }

        return $employeeArray;
        
    }


    public function deleteEmployee($id){

        $fileJSON = file_get_contents('employees.json');
        $dataJSON  = json_decode($fileJSON);
        for($i=0; $i<count($dataJSON); $i++){

            if($id == $dataJSON[$i]->id){
                unset($dataJSON[$i]);
                $dataJSON = array_values($dataJSON);
                file_put_contents('employees.json', json_encode($dataJSON));
                break;
 
            }
        }

    }


}


?>