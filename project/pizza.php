<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="ind.css">
    <title>Yummy</title>
    <style>

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}


.column {
  float: left;
  width: 30%;
  padding: 0 8px;
  margin: 15px;
  
}
.row{
    align-content: center;
     margin-left: 5%; 
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 6px;
  background-color: #F75D59;
  opacity: 0.9;
}

.about-section {
  padding: 50px;
  text-align: center;
  color: white;
  background-color: #000;
  opacity: 0.9;
}

.container {
  padding: 0 16px;
  height:auto;
  color:white;
}
.container b{
  font-size:150%;
  color:white;
}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.container .button{
  background-color:#59F2F7;
  height:20px;
  width:20%;
  margin-left:40%;
  margin-top:1%;
  margin-bottom:2%;
  border:gray;
  border-radius:6px;
}
.container input{
  width:10%;
  height:10%;
  background-color:white;
  border:gray;
  border-radius:3px;
margin-left:5%;
}
.title {
  color: grey;
}
p{
  text-align:center;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
    float:center;
    margin-left:-10px;

  }
}
    </style>
   <!--  -->
   
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="nav">
        <ul >
            
        <li id="subnav"><img class="logo" src="images/logo2.png"  > Yummy</li>
                <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a></li>
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>
                <?php
                session_start();
                if(isset($_SESSION['init'])){
                  if( count($_SESSION['pname'])!=0){
                      echo '<div id="cart">'.count($_SESSION['pname']).'</div>Cart</a></li>';
                  }
                  else{
                    echo 'Cart</a></li>';
                  }
                }
                else{
                  echo 'Cart';
                }
           
                          if(isset($_SESSION['uname'])){
                            echo '<li><a href="account.php"><i class="fa fa-fw fa-user"></i>';
                            echo $_SESSION['uname'];
                            echo '</a></li>';
          
                          } 
                          else{
                            echo '<li><a href="login.php"><i class="fa fa-fw fa-user"></i>';
                            echo 'login';
                            echo '</a></li>';
                          }
                ?>
        </a></li>
        <li><a href='index.php'><i class="fa fa-fw fa-home"></i>Home</a></li>

        </ul>

    </div>

      <?php
          

      $id=[];
      $name=[];
      $price=[];
      $ing=[];
      $i=0;
      $con =mysqli_connect('localhost', 'root', '','ip');
  
      $sql = "SELECT * FROM pizza";
      $result = $con->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $id[$i]=$row["id"];
          $name[$i]=$row["name"];
          $price[$i]=$row["price"];
          $ing[$i]=$row["ing"];
          $oprice[$i]=$row["oprice"];
          $i++;
        }
      } else {
        echo "0 results";
      }

      if (isset($_POST["button"]))
      {
        $_SESSION['init']= 1;
          if($_POST["button"]==0){  
            array_push($_SESSION['pname'],$name[0]);
            array_push($_SESSION['pprice'],$price[0]); 
            array_push($_SESSION['quantity'],$_POST['quantity']);
          }
          elseif($_POST["button"]==1){
            array_push($_SESSION['pname'],$name[1]);
            array_push($_SESSION['pprice'],$price[1]); 
            array_push($_SESSION['quantity'],$_POST['quantity']);
          }
          elseif($_POST["button"]==2){
                     array_push($_SESSION['pname'],$name[2]);
                     array_push($_SESSION['pprice'],$price[2]); 
                     array_push($_SESSION['quantity'],$_POST['quantity']);
          }
          elseif($_POST["button"]==3){
            array_push($_SESSION['pname'],$name[3]);
            array_push($_SESSION['pprice'],$price[3]); 
            array_push($_SESSION['quantity'],$_POST['quantity']);
         }
         elseif($_POST["button"]==4){
          array_push($_SESSION['pname'],$name[4]);
          array_push($_SESSION['pprice'],$price[4]); 
          array_push($_SESSION['quantity'],$_POST['quantity']);
        }
        elseif($_POST["button"]==5){
          array_push($_SESSION['pname'],$name[5]);
          array_push($_SESSION['pprice'],$price[5]); 
          array_push($_SESSION['quantity'],$_POST['quantity']);
        }
          
       }
        
    
    ?>
    <div class="row">

        <div class="column">
          <div class="card">
            <img src="images/p1.jpeg" width='353' height='264'alt="siddharth.v" style="width:100%">
            <div class="container">
            <?php
              echo '<b>'.$name[0].'<br>'.'Price :&nbsp;' .$price[0].'</b>&nbsp;&nbsp;<del>'.$oprice[0].'</del><br><br>'.$ing[0].'<br>';
              ?>            
            <form action=''method="post"> 
            <label for="quantity">Qnty :</label>  <input type='number' name='quantity' min='1' value='1'>
              <button type="submit" name="button" class='button' value='0'> cart</button>
          </form> 
          </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="images/p2.jpeg" width='353' height='264'alt="sahil" style="width:100%">
            <div class="container">
            <?php
              echo '<b>'.$name[1].'<br>'.'Price :&nbsp;' .$price[1].'</b>&nbsp;&nbsp;<del>'.$oprice[1].'</del><br>'.$ing[1].'<br>';
              ?> 
            <form action=''method="post"> 
            <label for="quantity">Qnty :</label>  <input type='number' name='quantity' min='1' value='1'>
              <button type="submit" name="button" class='button' value='1'>cart</button>    
          </form> 
            </div>
          </div>
        </div>
        
        <div class="column">
          <div class="card">
            <img src="images/p3.jpeg" width='353' height='264'alt="parth" style="width:100%">
            <div class="container">
            <?php
              echo '<b>'.$name[2].'<br>'.'Price :&nbsp;' .$price[2].'</b>&nbsp;&nbsp;<del>'.$oprice[2].'</del><br>'.$ing[2].'<br>';
              ?> 
            <form action=''method="post"> 
            <label for="quantity">Qnty :</label>  <input type='number' name='quantity' min='1' value='1'>
              <button type="submit" name="button" class='button' value='2'>cart</button>    
          </form> 
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="column">
          <div class="card">
            <img src="images/p4.jpeg" width='353' height='264'alt="krupal.v" style="width:100%">
            <div class="container">
            <?php
              echo '<b>'.$name[3].'<br>'.'Price :&nbsp;' .$price[3].'</b>&nbsp;&nbsp;<del>'.$oprice[3].'</del><br>'.$ing[3].'<br>';
              ?>            
            <form action=''method="post"> 
            <label for="quantity">Qnty :</label>  <input type='number' name='quantity' min='1' value='1'>
              <button  id='button2' type="submit" name="button" class='button' value='3'> cart</button>
          </form> 
          </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="images/p5.jpg" width='353' height='264'alt="kush" style="width:100%">
            <div class="container">
            <?php
              echo '<b>'.$name[4].'<br>'.'Price :&nbsp;' .$price[4].'</b>&nbsp;&nbsp;<del>'.$oprice[4].'</del><br>'.$ing[4].'<br>';
              ?> 
            <form action=''method="post"> 
            <label for="quantity">Qnty :</label>  <input type='number' name='quantity' min='1' value='1'>
              <button id='button2'type="submit" name="button" class='button' value='4'>cart</button>    
          </form> 
            </div>
          </div>
        </div>
        
        <div class="column">  
          <div class="card">
            <img src="images/p6.jpg" width='353' height='264'alt="yash" style="width:100%">
            <div class="container">
            <?php
              echo '<b>'.$name[5].'<br>'.'Price :&nbsp;' .$price[5].'</b>&nbsp;&nbsp;<del>'.$oprice[5].'</del><br>'.$ing[5].'<br>';
              ?> 
            <form action=''method="post"> 
            <label for="quantity">Qnty :</label>  <input type='number' name='quantity' min='1' value='1'>
              <button id='button2' type="submit" name="button" class='button' value='5'>cart</button>    
          </form> 
            </div>
          </div>
        </div>
      </div>
       
        <p>Go to :&nbsp;
        <a style='text-align:center' href="garlic.php">Garlic Bread</a><label>&nbsp;or
        </label>
        <a href="dessert.php">Desserts</a></p>
    
</body>
</html>