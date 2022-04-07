<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="ind.css">
    <title>cart</title>
    <style>
/* #cart{
  max-width: 30%;
  margin: auto;
  background: white;
  padding: 10px;
} */
#item{
text-align:center;
}
button{
      background-color:#59F2F7;
  height:40px;
  width:20%;
  border:gray;
  border-radius:6px;
  color:white;
    } 
h1{
  text-align:center;
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
                <li><a class="active"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                
                <?php
                session_start();
                if(isset($_SESSION['uname'])){
                  echo '<li><a href="account.php"><i class="fa fa-fw fa-user"></i>'.$_SESSION['uname'].'</a></li>';
                } 
                else{
                  echo '<li><a href="login.php"><i class="fa fa-fw fa-user"></i>';
                  echo 'login';
                  echo '</a></li>';
                }
                ?>
                </a></li>
                
                <li><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
                </ul>
              
            </div>
             
        <h1 > Your Cart</h1>    
<?php

if(isset($_SESSION['init'])){
$name=array($_SESSION['pname']);
$price=array($_SESSION['pprice']);
$quant=array($_SESSION['quantity']);

$y=sizeof($_SESSION['pname']);
$sum=0;
for ($i=0;$i<$y;$i++){
  echo '<div id="item">'.$name[0][$i].'&nbsp;&nbsp;'.$quant[0][$i].'&nbsp;X&nbsp;'.$price[0][$i].'&nbsp;&nbsp;'.$price[0][$i]*$quant[0][$i]."/-</div><br>";
  $sum=$sum+($price[0][$i]*$quant[0][$i]);
} 

echo '<b><div id="item">total : '.$sum.'/-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; total items -'.array_sum($quant[0]).'</div><b><br><br>';
}
else{
  echo '<div id="item">your cart is empty!</div>';
}
$message = "";
if(isset($_POST['empty_cart'])){ 
    $_SESSION['pprice']=array();
    $_SESSION['pname']=array();
    $_SESSION['quantity']=array();
  $message = "your cart is empty!";
} 

if (isset($_POST["button"]))
      {
            if(isset($_SESSION['uname'])){
              if(isset($_SESSION['init'])){
              echo '<p style="text-align:center;">Thanks for ordering. Order placed successfully</p>';
             
            }
              else{
                header('location:index.php');  
              }

            } 
            else{
              header('location:login.php'); 
            } 
      }
?>
<div id="item">
<font color=white>
<form action="" method="post">
<?php echo $message; ?>
  <br><button type="submit" name="empty_cart">Empty cart</button>
</form>  
<br>
          <form method="post"> 
              <button type="submit" name="button" class='button' value='0'> order</button>
          </form> 
</div>
</font>
</body>
</html>