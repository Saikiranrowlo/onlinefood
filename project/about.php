<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="ind.css">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}


.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background-color: #000;
  opacity: 0.9;
}

.about-section {
  padding: 50px;
  text-align: center;
  color: white;
  background-color: #000;
  opacity: 0.9;
}
.location {
  
  padding: 50px;
  text-align: center;
  color: white;
  background-color: #000;
  opacity: 0.9;
  height: 350px;
}
.container {
  padding: 0 16px;
  
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}


@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body >
  <div class="header">

  </div>
      
          <div class="nav">
              <font size="4" color="white">
              <ul >
                <font size="4" color="white">
                  <li id="subnav"><font size='6'><img class="logo" src="images/logo2.png"  > Yummy</font></li>

              <li><a href="contact.php">Contact Us</a></li>
              <li><a class="active">About Us</a></li>
              <li><a href="cart.php">Cart</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="index.php">Home</a></li>
              </ul>
              </font>
      
          </div>
<font color='white'>
<div class="about-section">
  <h1>About Us </h1>
  <p>This is one of the popular food ordering website in India and across the other 23 countries. It has its own facilities like online ordering along with delivery option from different restaurants and food places.</p>
  <p>We aim to serve the highest quality products and provide uncompromising heartfelt services to our values guest and community. </p>
</div>

<br><br><div class="location">
  <p style="text-align: left;">Phone- no : 9087654321<br>Email : pycrust@email.com</p>
  <iframe  style="margin-left: 50%;  position: absolute;top: 530px;right: 40px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.3527820997388!2d72.90946941420141!3d19.048220757796607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c5f39a7d77d1%3A0x9ebbdeaea9ec24ae!2sShah%20%26%20Anchor%20Kutchhi%20Engineering%20College!5e0!3m2!1sen!2sin!4v1600839795756!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

</font>
</body>
</html>
