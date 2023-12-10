<?php

class Department{
    public static function getDepartment($connect)
    {
        $response = mysqli_query($connect, "SELECT * FROM `departments`");
        if ($response) {
            if (mysqli_num_rows($response) > 0) {
                while ($row = mysqli_fetch_array($response)) {
                    $data[] = $row;
                }
            }
        }
        return $data;
    }

    public static function addDepartment($connect, $post)
    {
        $name = $post['name'];
        $query = "INSERT INTO `employee_management`.`departments` (`name`) VALUES ('$name');";
        $request = mysqli_query($connect, $query);
        if($request){
            echo "thêm thành công";
        }
    }

    public static function updateDepartment($connect, $post){
        $name = $post['name'];
        $id = $post['id'];
        $query = "UPDATE `employee_management`.`departments` SET `name`=$name WHERE  `id`='$id'";
         mysqli_query($connect, $query);
    }

    public static function deleteDepartment($connect, $id){
        $query = "DELETE FROM `employee_management`.`departments` WHERE  `id`='$id'";
        mysqli_query($connect, $query);
        

    }
}