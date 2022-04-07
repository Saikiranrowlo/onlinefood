 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="ind2.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #59F2F7;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  color: black;
  margin-left: 25% ;
  margin-right: 25%;
  margin-top: 3%;
}
@media screen and (max-width: 650px) {
  .container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  color: black;
  margin-left: 2% ;
  margin-right: 2%;
  margin-top: 3%;
}

}
</style>
<link rel="stylesheet" type="text/css" href="ind.css">

</head>
<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
            <div class="nav">
                <ul >
                  <li id="subnav"><img class="logo" src="images/logo2.png"  > Yummy</li>
                  <li><a class="active"><i class="fa fa-fw fa-envelope"></i> Contact Us</a></li>
                  <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>'
                <li><a href="login.php"><i class="fa fa-fw fa-user"></i>Login</a></li>
                <li><a href='index.php'><i class="fa fa-fw fa-home"></i>Home</a></li>
                </ul>
        
            </div>

<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>

<script>

function validateForm()
{
  var x = document.forms["myForm"]["fname"].value;
  if (x == "")
  {
    alert("Name must be filled out");
    return false;
  }
}

</script>

<div class="container">
  <form action="mailto:krupalvora789@gmail.com" method="POST" enctype="text/plain">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" onkeyup="showHint(this.value)" required   placeholder="Your name..">
   

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required placeholder="Your Email id..">

    <label for="Contact">Contact</label>
    <input type="number" id="Contact" name="Contact" min="7000000000" max="9999999999" aria-invalid="improper no" placeholder="Your Contact no..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

    <input type="submit" value="Send">
  </form>
  <p>Phone- no : 9876543210<br>Email : yummy@gmail.com</p>
</div>

</body>
</html>
