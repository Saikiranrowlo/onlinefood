<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="ind.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;background-color: white;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #59F2F7;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


img.avatar {
  width: 30%;
  border-radius: 50%;
  margin-left: 35%;
}

.container {
  padding: 16px;
  background-color: white;
  text-align: center;
  margin-top: 5%;
  margin-left: 30%;
  margin-right: 30%;
  align-content: center;
  color: black;
  text-align: left;
  height: 500px;
}


span.psw {
  float: left;
  padding-top: 16px;
}
#result{
  text-align:center;
  color:red;
}
@media screen and (max-width: 650px) {
  input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color: white;
  text-align: center;
  margin-top: 5%;
  margin-left: 0%;
  margin-right: 0%;
  align-content: center;
  color: black;
  text-align: left;
  
}
}
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
            <div class="nav">
                <ul >
                  <li id="subnav"><img class="logo" src="images/logo2.png"  > Yummy</li>
                  <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a></li>
                  <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>'
                <li><a class="active"><i class="fa fa-fw fa-user"></i>Login</a></li>
                <li><a href='index.php'><i class="fa fa-fw fa-home"></i>Home</a></li>
                </ul>
        
            </div>
   
    <?php
$message = "";
if(isset($_POST['submit'])){ //check if form was submitted
  $uname = $_POST['uname'];
  $pswd = $_POST['psw'];
  
  $con = mysqli_connect('localhost', 'root', '','ip');
  
  $sql= "SELECT * FROM login WHERE uname = '$uname' AND pswd = '$pswd' ";
  $result = mysqli_query($con,$sql);
  $check = mysqli_fetch_array($result);
  if(isset($check)){
    session_start();
    $_SESSION['uname']= $uname;
    header('location:index.php'); 
    exit;
  }else{
    $message = "<p id='result'>Invalid username or password</p> ";
  }

}    
?>
<form action="" method="post">

    <div class="container">
            <img  src="images/login.png" alt="Avatar" class="avatar"><br><br>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required><br><br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required><br><br>
                
            <button type="submit" name='submit'>Login</button><br><br>
            <?php echo $message; ?>
            <a href="register.php">Register</a>
                
     </div>


</form>

</body>
</html>
