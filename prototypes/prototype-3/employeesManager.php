<?php
include 'employees.php';
class EmployeesManager{

        private $connect = Null;

        private function getConnect(){
            if(is_null($this->connect)){
                $this->connect =  mysqli_connect('localhost','Reda','123456','prototype3');
            }

            else{

                if(!$this->connect){
                    $message = 'Data base connection error : ' . mysqli_connect_error();
                    throw new Exception($message);
                }
            }

            return $this->connect;
        }

    
    public function insertEmployees($employee){
        $firstName = $employee->getfirstName();
        $lastName = $employee->getlastName();
        $age = $employee->getAge();
 
        $insertDB = "INSERT INTO employees(first_name,last_name,age) VALUES('$firstName','$lastName','$age')";
        
        mysqli_query($this->getConnect(),$insertDB);
}

    public function getAllEmployees(){

        $sqlGetData = "SELECT ID, first_name, last_name, age FROM employees";
        $result = mysqli_query($this->getConnect(), $sqlGetData);
        $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $dataArray = array();

        foreach($datas as $data){

                $employe = new Employees();
                $employe->setId($data['ID']);
                $employe->setfirstName($data['first_name']);
                $employe->setlastName($data['last_name']);
                $employe->setAge($data['age']);
                array_push($dataArray, $employe);


        }

        return $dataArray;

    }

    public function deleteEmployee($id){

      $deleteDB = "DELETE FROM employees WHERE ID = '$id'";
      mysqli_query($this->getConnect(), $deleteDB);
    }


}



?>