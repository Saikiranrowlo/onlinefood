<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="ind.css">
    <title>account</title>
    <style>
    #text{
      text-align:center;
      color:black;
      font-size:150%;
    }
    button{
      background-color:#59F2F7;
  height:40px;
  width:20%;
  border:gray;
  border-radius:6px;
  color:white;
    }

a {
    color: white;
    text-decoration: none;
}
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div class="nav">
                <ul >
                <li id="subnav"><img class="logo" src="images/logo2.png"  > Yummy</li>
                <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a></li>
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                <li><a class="active"><i class="fa fa-fw fa-user"></i><?php
                session_start();
                echo $_SESSION['uname'];
                ?>
                </a></li>
                <li><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
                </ul>
               
        
            </div>
<?php
                echo '<div id="text"> <h1>Your Account Details</h1>';
                $uname=$_SESSION['uname'];
                $conn = mysqli_connect('localhost', 'root', '','ip');
  
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                  }
                  
                  $sql= "SELECT * FROM register WHERE uname = '$uname'";
                  $result = $conn->query($sql);
    
                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo  " Name: " . $row["uname"]. "<br>Email :" . $row["email"]. "<br>Contact :". $row["contact"]. "<br>Address is :". $row["uaddress"]. "<br>";
                    }
                  } else {
                      echo $sql;
                    echo "0 results";
                  }
                  $conn->close();
                  echo '</div>';
                ?>
                <div id="text"><button><a href='dest.php' >logout</a></button></div>
</body>
</html>