<?php
$host="localhost";
$user="root";
$pass="";
$db="employee_management";
$connect = mysqli_connect($host,$user,$pass,$db);
mysqli_query($connect,"set names utf8");
// if($connect)
//     echo "Kết nối thành công"
// ?>