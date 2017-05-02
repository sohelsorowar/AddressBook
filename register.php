


<?php
    session_start();
     $db = mysqli_connect("localhost", "root" , "" ,"authentication");

     if(isset($_POST['register_btn'])){
     	$username = mysql_real_escape_string($_POST['username']);
     	$email = mysql_real_escape_string($_POST['email']);
     	$password = mysql_real_escape_string($_POST['password']);
     	$password2 = mysql_real_escape_string($_POST['password2']);

     	if($password == $password2){
                 $password =md5($password);
                 $sql = "INSERT INTO users(username , email , password) VALUES('$username','$email' , '$password') ";

                 mysqli_query($db, $sql);

                 $_SESSION['message'] = " You are now logged in !";
                 $_SESSION['username'] = $username;

         if(empty($username) || empty($email) || empty($password) ) {
        
      echo "<font color='red'>Insert correctly !!!.</font><br/>";}else{
    
                 header("location: login1.php");}
             }

                 else{
                 	$_SESSION['message']= "This two password do not mache";
                 }
     	}
 ?>






<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="z.css">
	<title>Register</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>  



       <div class="header">
       	<h1>Address Book</h1>

       </div>

     <form method="post" action="register.php">
     	
         <table>
         <a class="A" type="submit" href="login1.php" >Log in</a>
         	  <tr>
         	  	    <td>Username:</td>
         	  	    <td><input type = "text" name="username" class="textInput"> </td>

         	  </tr>
         	  <tr>
         	  	    <td>Email:</td>
         	  	    <td><input type = "email" name="email" class="textInput"> </td>

         	  </tr>
         	  <tr>
         	  	    <td>Password:</td>
         	  	    <td><input type = "password" name="password" class="textInput"> </td>

         	  </tr>
         	  <tr>
         	  	    <td>Password Again:</td>
         	  	    <td><input type = "password" name="password2" class="textInput"> </td>

         	  </tr>
         	  <tr>
         	  	    <td></td>
         	  	    <td><input class="A" type ="submit" name="register_btn" value="Registration Submit"> </td>

         	  </tr>
         </table>

     </form>
    




</body>
</html>