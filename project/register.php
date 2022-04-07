<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
      background-size: cover;
    margin: 0;
    background-repeat: no-repeat;
}

* {
  box-sizing: border-box;
}

.container {
  padding: 16px;
  background-color: white;
  margin: 50px 300px 0px 300px;
  border-radius: 4px;
}

input[type=text],input[type=number], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus,input[type=number], input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #59F2F7;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
  border-radius: 5px;
}
a {
  color: dodgerblue;
}
@media screen and (max-width: 650px) {
  .container {
  padding: 16px;
  background-color: white;
  margin: 5px 30px 0px 30px;
  border-radius: 4px;
}
}

</style>
</head>
<body>
  <script>  
  function validateform(){  
  var name=document.myform.name.value;  
  var pswd=document.myform.pswd.value; 
  var rpswd=document.myform.rpswd.value; 
  if (name==null || name==""){  
    alert("Name can't be blank");  
    return false;  
  }else if(password.length<6){  
    alert("Password must be at least 6 characters long.");  
    return false;  
    } 
 
  }  
  </script> 
<form action="register1.php" name="myform" method="post" onsubmit="return validateform()">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="uname"><b>User name</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" required>


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="email"><b>Contact</b></label>
    <input type="number" placeholder="Enter contact number" max="9999999999" aria-invalid="improper no"  name="contact" id="contact" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pswd" id="psw" required>

<!--     <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="rpswd" id="psw-repeat" required>
    <hr> -->
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="address" id="address" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button><br>
    <p style="text-align: center;" >Already have an account? <a href="login.php">Sign in</a>.</p>

  </div>
 
</form>

</body>
</html>
