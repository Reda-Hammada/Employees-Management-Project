<?php

class EmployeeManager{

    public function getAllEmployees($connectDB){

        $sqlGetData = 'SELECT ID, firt_name, last_name, age FROM employees';
        $result = mysql_query($connectDB, $sqlGetData);
        $data = mysql_fetch_all($result, MYSQLI_ASSOC);

        return $data;
    }
}



?>