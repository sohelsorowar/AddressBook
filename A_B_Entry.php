
<?php
   
     $db = mysqli_connect("localhost", "root" , "" ,"authentication");


     if(isset($_POST['submit'])){
        
        $fullname = mysql_real_escape_string($_POST['fullname']);
        $nickname = mysql_real_escape_string($_POST['nickname']);
        $email = mysql_real_escape_string($_POST['email']);
        $address = mysql_real_escape_string($_POST['address']);
         $phone = mysql_real_escape_string($_POST['phone']);
         

         if(empty($fullname) || empty($nickname) || empty($email) || empty($address) || empty($phone)) {
        
    if(empty($fullname)) {
      echo "<font color='red'>Name field is empty.</font><br/>";
    }
    
    if(empty($nickname)) {
      echo "<font color='red'>Age field is empty.</font><br/>";
    }
    
    if(empty($email)) {
      echo "<font color='red'>Email field is empty.</font><br/>";
    }
    
    if(empty($address)) {
      echo "<font color='red'>Age field is empty.</font><br/>";
    }
    
    if(empty($phone)) {
      echo "<font color='red'>Email field is empty.</font><br/>";
    }
    //link to the previous page
    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

        } else { 
                 $sql = "INSERT INTO add_db(fullname , nickname ,email,address,phone) VALUES('$fullname ','$nickname' ,'$email','$address','$phone' ) ";

                 $result=mysqli_query($db, $sql);

                       if ($result==1) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $db>error;
}
}
                 
             
 $db->close();
        }
     
 ?>






<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="z.css">

<style >
  
/*.A{

  font-size: 20px;
  margin: 5px auto;
}*/
</style>

</head>
<body>  



       <div class="header">
        <h1>Address Book</h1>

       </div>

     <form method="post" action="A_B_Entry.php">
        
         <table>
         <a class="A" type="submit" href="home.php" >Data List</a>
          <a class="A" type="submit" href="login1.php" >Login Page</a>
          <a class="A" type="submit" href="register.php" >Register Page</a>
              <tr>
                    <td>Full Name:</td>
                    <td><input type = "text" name="fullname" class="textInput"> </td>

              </tr>
              <tr>
                    <td>Nick Name:</td>
                    <td><input type = "text" name="nickname" class="textInput"> </td>

              </tr>
              <tr>
                    <td>Email:</td>
                    <td><input type = "email" name="email" class="textInput"> </td>

              </tr>
              <tr>
                    <td>address:</td>
                    <td><input type = "text" name="address" class="textInput"> </td>

              </tr>
              <tr>
                    <td>Phone:</td>
                    <td><input type = "number" name="phone" class="textInput"> </td>

              </tr>
              <tr>
                    <td></td>
                    <td><input class="A" type = "submit" name="submit" value="submit"> </td>

              </tr>
            
         </table>
         
     </form>
    




</body>
</html>

