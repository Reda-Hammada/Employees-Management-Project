<?php
include 'employees.php';
class EmployeesManager{

        private $connect = Null;

        private function getConnect(){
            if(is_null($this->connect)){
                                //Get Heroku ClearDB connection information
                $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
                $cleardb_server = $cleardb_url["host"];
                $cleardb_username = $cleardb_url["user"];
                $cleardb_password = $cleardb_url["pass"];
                $cleardb_db = substr($cleardb_url["path"],1);
                $active_group = 'default';
                $query_builder = TRUE;
                // Connect to DB
                $this->connect = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
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
        $department = $employee->getDepartment();
        $occupation = $employee->getOccupation();
        $salary = $employee->getSalary();
        $image = $employee->getImage();
        

 
        $insertDB = "INSERT INTO employees(first_name,last_name,age,department,occupation,salary,img) VALUES('$firstName','$lastName','$age','$department','$occupation','$salary','$image')";
        
        mysqli_query($this->getConnect(),$insertDB);
}

    public function getAllEmployees(){

        $sqlGetData = "SELECT ID, first_name,last_name, age,department,occupation,salary,img FROM employees";
        $result = mysqli_query($this->getConnect(), $sqlGetData);
        $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $dataArray = array();

        foreach($datas as $data){

                $employe = new Employees();
                $employe->setId($data['ID']);
                $employe->setfirstName($data['first_name']);
                $employe->setlastName($data['last_name']);
                $employe->setAge($data['age']);
                $employe->setDepartment($data['department']);
                $employe->setOccupation($data['occupation']);
                $employe->setSalary($data['salary']); 
                $employe->setImage($data['img']);           
                array_push($dataArray, $employe);


        }

        return $dataArray;

    }

    public function deleteEmployee($id){

      $deleteDB = "DELETE FROM employees WHERE ID = $id";
      mysqli_query($this->getConnect(), $deleteDB);
    }


    public function getById($id){

        $getById = "SELECT * FROM employees WHERE ID = $id";
        $result =  mysqli_query($this->getConnect(), $getById);
        $employeeData = mysqli_fetch_assoc($result);

        $employee = new Employees();
        $employee->setId($employeeData['ID']);
        $employee->setfirstName($employeeData['first_name']);
        $employee->setlastName($employeeData['last_name']);
        $employee->setAge($employeeData['age']);
        $employee->setDepartment($employeeData['department']);
        $employee->setOccupation($employeeData['occupation']);
        $employee->setSalary($employeeData['salary']);

        return $employee;


    }
    
    public function modifyEmployee($employee, $id){

        $id = $employee->getId();
        $first_Name =  $employee->getfirstName();
        $last_Name = $employee->getlastName();
        $age = $employee->getAge();
        $department = $employee->getDepartment();
        $occupation = $employee->getOccupation();
        $salary = $employee->getSalary();
        $image = $employee->getImage();
        $updateDB = "UPDATE employees SET first_name = '$first_Name',  last_name = '$last_Name', age = '$age', department = '$department', occupation = '$occupation', salary = '$salary', img = '$image'
        WHERE ID = $id";
       mysqli_query($this->getConnect(),$updateDB);
        
        if(mysqli_error($this->getConnect())){

            $message = "data base connection error " . mysqli_error($this->getConnect());
            throw new exception($message);
        }


        
    }

    public function uploadImage($filename,$tempname){

        $folder ='./img/' . $filename;

        move_uploaded_file($tempname, $folder);
    }


    public function searchByInput($searchInput){

        $selectedRow = "SELECT * FROM employees WHERE first_name = '$searchInput' OR last_name = '$searchInput' OR department = '$searchInput'";
        $query = mysqli_query($this->getConnect(), $selectedRow);
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        
        $employeeArray = array();
        foreach($data as $searchedEmployee){

            $employee = new Employees();
            $employee->setImage($searchedEmployee['img']);
            $employee->setfirstName($searchedEmployee['first_name']);
            $employee->setlastName($searchedEmployee['last_name']);
            $employee->setDepartment($searchedEmployee['department']);
            $employee->setOccupation($searchedEmployee['occupation']);
            $employee->setSalary($searchedEmployee['salary']);
            array_Push($employeeArray, $employee);

        }   

        return $employeeArray;

    }
}



?>