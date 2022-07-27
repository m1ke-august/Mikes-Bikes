<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobileNumber'];
    $password = $_POST['password'];


    //Database Connection
    $conn = new mysqli('localhost','root','','mikesbikes');
    if($conn->connect_error){
        die('Connection Error : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into signup(firstName, lastName, email, mobileNumber, password) 
            values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssis", $firstName, $lastName, $email, $mobileNumber, $password);
        $stmt->execute();
        echo "login successful";
        $stmt->close();
        $conn->close();
    }
?>