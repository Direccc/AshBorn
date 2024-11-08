<?php

$total = $_POST['total'];

$conn = new mysqli("localhost","root","","tutorial");
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into crud(total) values(?)");
    $stmt->bind_param("s",$total);
    $stmt->execute();
    echo "Thank Your For Supporting Us!";
    $stmt-> close();
    $conn-> close();
}

?>