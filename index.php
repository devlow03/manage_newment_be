<?php
require "config/connect.php";
require "controller/EmployeeController.php";
require "model/employees.php";


$employee = EmployeeController::getEmployee($connect);

echo json_encode($employee);

//gọi hàm thêm nhân viên các hàm kia tương tự

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Add Employee</h2>
<form method="POST" action="index.php">
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstname" required>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastname" required>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="birthday" required>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select>

    <label for="phoneNumber">Phone Number:</label>
    <input type="tel" id="phoneNumber" name="phone" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="city">City:</label>
    <input type="text" id="city" name="city" required>

    <label for="district">District:</label>
    <input type="text" id="district" name="district" required>

    <label for="ward">Ward:</label>
    <input type="text" id="ward" name="ward" required>

    <label for="fullAddress">full Address:</label>
    <input type="text" id="fullAddress" name="fullAddress" required>

    <button type="submit"  name="add">Submit</button>
</form>
<?php
if(isset($_POST['add'])){
    
    EmployeeController::addEmployee($connect,$_POST);
    // echo "them thanh cong";
}
?>



</body>
</html>






