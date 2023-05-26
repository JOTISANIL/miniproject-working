<?php

$firstName = $_POST['firstName'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];


$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);

}else{

    $stmt = $conn->prepare("insert into registration(firstName, number, email, password )
           values(?, ?, ?, ?)");
    $stmt->bind_param("siss",$firstName, $number, $email, $password);
    $stmt->execute();
    
    header("Location:index.html");
    echo "Succesfuly Registerd";
    $stmt->close();
    $conn->close();       
}
?>