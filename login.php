<!DOCTYPE html>
<html>
<head>
</head>
<body>
  
  <form  action="" method="post">
    <div class="">
      <h2>My Login</h2>
      <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter your email id" name="uname" required> </br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
	  </br>
        
      <button type="submit" name="login">Login</button> 
	  <button type="button" name="cancel" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	  
    </div>

    <div class="" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span> 
    </div> 
  </form>




</body>
</html>
