<?php



    $query = "SELECT * FROM `add_db`";
    $result = filterTable($query);

    function filterTable($query){

    
     $db = mysqli_connect("localhost", "root" , "" ,"authentication");
     $filter_result= mysqli_query($db , $query);
     return $filter_result;


} 

?>


<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="z.css">
 <title>List</title>

  

<div class="header">
        <h1>Address Book</h1>

       </div>


</head>
<body>
              <form >
                  
                 <table>
                    <a class="A" type="submit" href="A_B_Entry.php" >Data entry</a>
                    <a  class="A" type="submit" href="login1.php." >Login Page</a>
                    <a  class="A" type="submit" href="register.php" >Register Page</a>

                     <tr>
                              <th>ID</th>
                             <th>Full Namle</th>
                             <th>Nick Name</th>
                             <th> Email</th>
                             <th>Address</th>
                             <th>Phone Number</th>
                             <th></th>
                             <th></th>
                     
              <?php  while($row =mysqli_fetch_array($result)) : ?>


                <tr>
                     <td><?php echo $row['id'];?> </td>
                     <td><?php echo $row['fullname'];?> </td>
                     <td><?php echo $row['nickname'];?> </td>
                     <td><?php echo $row['email'];?> </td>
                     <td><?php echo $row['address'];?> </td>
                     <td><?php echo $row['phone'];?> </td>
                     <td><a class="B" type = "submit" name="Delete" href="delete.php?id=<?php echo $row['id'];?>">Delete</a> </td>
                     <td><a class="B" type = "submit" name="update"  href="updateData.php?id=<?php echo $row['id'];?>">Update</a> </td>

                     </tr>

                 <?php endwhile; ?>

                 </table>


              </form>
</body>
</html>
