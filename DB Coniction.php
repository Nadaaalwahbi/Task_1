<?php

if(isset($_POST['save'])){

$Motor1=$_POST['motor1'];
$Motor2=$_POST['motor2'];
$Motor3=$_POST['motor3'];
$Motor4=$_POST['motor4'];
$Motor5=$_POST['motor5'];
$Motor6=$_POST['motor6'];
}


// Create connection
$conn = new mysqli('localhost','root','','Arms');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{$stmt=$conn->prepare("insert into motor(Motor1,Motor2,Motor3,Motor4,Motor5,Motor6)value(?,?,?,?,?,?)");

$stmt->bind_param("iiiiii",$Motor1,$Motor2,$Motor3,$Motor4,$Motor5,$Motor6); 
$stmt->execute();
$stmt->close();
$conn->close();

}


?>