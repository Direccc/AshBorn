<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli("localhost","root","","tutorial");
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into crud(username, email, password) values(?,?,?)");
    $stmt->bind_param("sss",$username,$email,$password);
    $stmt->execute();
    echo "Registration Successfully";
    $stmt-> close();
    $conn-> close();
}

?>