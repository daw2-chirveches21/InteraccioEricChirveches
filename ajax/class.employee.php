<?php

class Employee extends DataBoundObject {

    protected $EmployeeID;
    protected $EmployeeName;
    protected $Design_ID;
    protected $Dep_ID;
    protected $Staff_type;


    protected function DefineTableName() { //hacemos función que nos devuelve el system user
                return("employee");
    }

    protected function DefineRelationMap() { //hacemos una función que nos devolverá la siguiente array
                return(array(
                        "id" => "ID",
                        "employee_id" => "EmployeeID",
                        "employee_name" => "EmployeeName",
                        "designation_id" => "Design_ID",
                        "department_id" => "Dep_ID",
                        "staff_type" => "Staff_type"));
    }
}

?>