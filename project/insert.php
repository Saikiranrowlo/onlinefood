<?php

$link = mysqli_connect('sql110.epizy.com', 'epiz_27129050', 'jIKVj4zc5bv','epiz_27129050_ip');
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>
