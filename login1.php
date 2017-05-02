


<?php
    session_start();
     $db = mysqli_connect("localhost", "root" , "" ,"authentication");

     if(isset($_POST['login_btn'])){
     	$username = mysql_real_escape_string($_POST['username']);
    
     	$password = mysql_real_escape_string($_POST['password']);
     	
        $password = md5($password);
        $sql= "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result= mysqli_query($db, $sql);

        if(mysqli_num_rows($result)==1){
            $_SESSION['message']= " You are logged in ";
            $_SESSION['username']=$username;
            header("location: A_B_Entry.php");

        }else{
            $_SESSION['messsage'] = "Usename/password combination incorrect";
        }
}
     	
 ?>






<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="z.css">
</head>
<body>  

       <div class="header">
       	<h1>Address Book</h1>

       </div>

     <form method="post" action="login1.php">
     	
         <table>
         <a class="A" type="submit" href="register.php" >Registration</a>
         	  <tr>
         	  	    <td>Username:</td>
         	  	    <td><input type = "text" name="username" class="textInput"> </td>

         	  </tr>
         	 
         	  <tr>
         	  	    <td>Password:</td>
         	  	    <td><input type = "password" name="password" class="textInput"> </td>

         	  </tr>
         	 
         	  <tr>
         	  	    <td></td>
         	  	    <td><input class="A" type = "submit" name="login_btn" value="Login"> </td>
                 
         	  </tr>

         </table>
               <!--  <a class="A" type="submit" href="register.php" >Register</a> -->
     </form>
    
</body>
</html>