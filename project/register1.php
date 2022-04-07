<?php

$uname = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$pswd= $_POST['pswd'];
$address = $_POST['address'];
$conn =mysqli_connect('localhost', 'root', '','ip');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  

$sql = "INSERT INTO register VALUES ('$uname','$email','$pswd','$address','$contact')"; /* (uid,uname,email,pswd,uaddress,contact) */
$sql2="INSERT INTO login VALUES ('$uname','$pswd')";
  if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['uname']= $uname;
    header('location:index.php'); 
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  if ($conn->query($sql2) === TRUE) {
    header('location:index.php'); 
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();

  


?>