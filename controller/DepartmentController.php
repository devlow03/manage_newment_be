<?php
class DepartmentController
{
    public static function getDepartment($connect)
    {

        $data = Department::getDepartment($connect);
        return $data;
    }

    public static function addDepartment($connect, $post)
    {

        return Department::addDepartment($connect, $post);
    }

    public static function updateDepartment($connect, $post)
    {
        return Department::updateDepartment($connect, $post);
    }

    public static function deleteDepartment($connect, $id)
    {
        return Department::deleteDepartment($connect, $id);
    }
}
