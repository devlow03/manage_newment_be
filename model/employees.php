<?php

class Employee
{
    public static function getEmployee($connect)
    {
        $response = mysqli_query($connect, "SELECT * FROM `employees`");
        if ($response) {
            if (mysqli_num_rows($response) > 0) {
                while ($row = mysqli_fetch_array($response)) {
                    $data[] = $row;
                }
            }
        }
        return $data;
    }

    public static function addEmployee($connect, $post)
    {
        $firstname = $post['firstname'];
        $lastname = $post['lastname'];
        $birthday = $post['birthday'];
        $gender = $post['gender'];
        $phone = $post['phone'];
        $email = $post['email'];
        $city = $post['city'];
        $district = $post['district'];
        $ward = $post['ward'];
        $fullAddress = $post['fullAddress'];
        $query = "INSERT INTO `employee_management`.`employees` (`first_name`, `last_name`, `birthday`, `gender`, `phone`, `email`, `city`, `district`, `ward`, `full_address`) VALUES ('$firstname', '$lastname', '$birthday', '$gender', '$phone', '$email', '$city', '$district', '$ward', '$fullAddress')";
        $request = mysqli_query($connect, $query);
        if($request){
            echo "thêm thành công";
        }
        else{
            echo "thất bại";
        }
        
    }

    public static function updateEmployee($connect, $post){
        $userId = $post['userId'];
        $firstname = $post['firstname'];
        $lastname = $post['lastname'];
        $birthday = $post['birthday'];
        $gender = $post['gender'];
        $phone = $post['phone'];
        $email = $post['email'];
        $city = $post['city'];
        $district = $post['district'];
        $ward = $post['ward'];
        $fullAddress = $post['fullAddress'];
        $query = "UPDATE `employee_management`.`employees` SET `first_name`='$firstname', `last_name`= '$lastname', `birthday`= '$birthday', `gender`= '$gender', `phone`= '$phone', `email`= '$email', `city`= '$city', `district`= '$district', `ward`= '$ward', `full_address`='$fullAddress' WHERE  `id`= '$userId' ";
        mysqli_query($connect, $query);
    }

    public static function deleteEmployee($connect, $userId){
        $query = "DELETE FROM `employee_management`.`employees` WHERE  `id`='$userId'";
        mysqli_query($connect, $query);
        

    }


}
