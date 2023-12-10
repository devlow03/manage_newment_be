<?php

class EmployeeController
{

    public static function getEmployee($connect)
    {

        $data = Employee::getEmployee($connect);
        return $data;
    }

    public static function addEmployee($connect, $post)
    {

        return Employee::addEmployee($connect,$post);
    }

    public static function updateEmployee($connect, $post){
       return  Employee::updateEmployee($connect,$post);
    }

    public static function deleteEmployee($connect,$userId){
        return Employee::deleteEmployee($connect,$userId);
    }
}
