<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="ind.css">
    <title>Document</title>
    <style>
* {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0;width:100%}
        .mySlides {display: none}
        img {vertical-align: middle;
            width: 100px;
            height: 400px;
            border-radius: 4px;
        }
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: 50px;
  margin-left: 12%;
}

h3{
  font-size:50px;
  text-align: center;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 10s ease;
}


/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 10s;
  animation-name: fade;
  animation-duration: 10s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 370px) {
  .text {font-size: 11px}
}



*, *:before, *:after {
  box-sizing: inherit;
}


.column {
  float: left;
  width: 32%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background-color: #000;
  opacity: 0.9;

}
.abs{
  text-align: center;
}
@media screen and (max-width: 670px) {
  h3{
    font-size:25px;
    text-align: center;
  }
  .column {
    width: 100%;
    display: block;
  }
  img {vertical-align: middle;
            width: 350px;
            height: 200px;
            border-radius: 4px;
        }
        .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin-top: 5%;
    margin-bottom:5%;
    margin-right:3%;
    margin-left:3%;
}
.dot {
  height: 15px;
  width: 15px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 10s ease;
}
}
        
        @-webkit-keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .prev, .next,.text {font-size: 11px}
          body {font-family: Verdana, sans-serif; margin:0;width:100%}
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
                  $_SESSION['pname']= array();
                 $_SESSION['pprice']= array();
                 $_SESSION['quantity']=array();
                 
                }
                
                if(isset($_SESSION['uname'])){
                  echo '<li><a href="account.php"><i class="fa fa-fw fa-user"></i>'.$_SESSION['uname'].'</a></li>';
                } 
                else{
                  echo '<li><a href="login.php"><i class="fa fa-fw fa-user"></i>';
                  echo 'login';
                  echo '</a></li>';
                }
                ?>
                
                <li><a class="active"><i class="fa fa-fw fa-home"></i>Home</a></li>
                </ul>
            </div>

            <div class="slideshow-container">

              <div class="mySlides fade">
                <img src="images/s1.jpg" style="width:100%">
              </div>
              
              <div class="mySlides fade">
                <img src="images/s2.jpg" style="width:100%">
              </div>
              
              <div class="mySlides fade">
                <img src="images/s3.jpg" style="width:100%">
              </div>
              
              </div>
              <br>
              
              <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
              </div>
              
              <h3>Shop by Category</h3>
          
              <div class="row">
                <div class="column">
                  <div class="card">
                   <a href='pizza.php' > <img src="images/op3.jpeg"    style="width:100%;height:80%;"></a>
    
                  </div>
                </div>
              
                <div class="column">
                  <div class="card">
                    <a href='garlic.php ' ><img src="images/op2.jpeg" alt="kush" style="width:100%; height:50%;"></a>
      
                  </div>
                </div>
                
                           
                <div class="column">
                  <div class="card">
                    <a href='dessert.php' > <img src="images/op1.jpeg" alt="yash" style="width:100%;height:80%;"></a>
    
                  </div>
                </div>
              </div> 

                <script>
                  var slideIndex = 0;
                  showSlides();
                  
                  function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";  
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {slideIndex = 1}    
                    for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                    setTimeout(showSlides, 1000); // Change image every 5 seconds
                  }
                  </script>

<br>
<div class='abs'>
<h3>About us</h3>
<p>This is one of the popular food ordering website in India and across the other 23 countries. It has its own facilities like online ordering along with delivery option from different restaurants and food places.</p>
  <p>We aim to serve the highest quality products and provide uncompromising heartfelt services to our values guest and community. </p>
  <p>Phone- no : 9876543210<br>Email : yummy@email.com</p>
</div>

<iframe  style="margin-left: 20%;  position: absolute;top: 1500px;right: 20px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.3527820997388!2d72.90946941420141!3d19.048220757796607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c5f39a7d77d1%3A0x9ebbdeaea9ec24ae!2sShah%20%26%20Anchor%20Kutchhi%20Engineering%20College!5e0!3m2!1sen!2sin!4v1600839795756!5m2!1sen!2sin" width="350" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


</body>
</html>