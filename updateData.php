
<?php
  
    session_start();
   
     $db = mysqli_connect("localhost", "root" , "" ,"authentication");


     $id = $_GET['id'];

     $sql = "SELECT * FROM add_db WHERE id = '$id'";

     $result = mysqli_query($db,$sql);

     $row = mysqli_fetch_array($result);

     $_SESSION['id'] = $id;



  

 $db->close();
      
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

     <form method="post" action="dataUpdating.php">
        
         <table>
         <!-- <a class="A" type="submit" href="home.php" >Data List</a>
          <a class="A" type="submit" href="login1.php" >Login Page</a>
          <a class="A" type="submit" href="register.php" >Register Page</a> -->
              <tr>
                    <td>Full Name:</td>
                    <td><input type = "text" name="fullname" class="textInput" value="<?php echo $row['fullname']; ?>"> </td>

              </tr>
              <tr>
                    <td>Nick Name:</td>
                    <td><input type = "text" name="nickname" class="textInput" value="<?php echo $row['nickname']; ?>"> </td>

              </tr>
              <tr>
                    <td>Email:</td>
                    <td><input type = "email" name="email" class="textInput" value="<?php echo $row['email']; ?>"> </td>

              </tr>
              <tr>
                    <td>address:</td>
                    <td><input type = "text" name="address" class="textInput" value="<?php echo $row['address']; ?>"> </td>

              </tr>
              <tr>
                    <td>Phone:</td>
                    <td><input type = "number" name="phone" class="textInput" value="<?php echo $row['phone']; ?>"> </td>

              </tr>
              <tr>
                    <td></td>
                    <!--<td><input class="A" type="submit" name="update" value="submit"> </td>-->
                    <td><input class="A" type = "submit" name="submit" value="submit"> </td>

              </tr>
            
         </table>
         
     </form>
    




</body>
</html>

