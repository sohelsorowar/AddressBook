<?php
session_start();

$db = mysqli_connect("localhost", "root" , "" ,"authentication");

// including the database connection file


if(isset($_POST['submit']))
{	
    
   
	$fullname =$_POST['fullname'];
	$nickname  =$_POST['nickname'];
	$email =$_POST['email'];	
	$address =$_POST['address'];
	$phone  = $_POST['phone'];

	$id=$_SESSION['id'];
	//echo $_SESSION['id'];
	//echo $id;
    

	// checking empty fields
	if(empty($fullname) || empty($nickname) || empty($email) || empty($address) || empty($phone)) {	
			
		if(empty($fullname)) {
			echo "<font color='red'>FullName field is empty.</font><br/>";
		}
		
		if(empty($nickname)) {
			echo "<font color='red'>Nickname field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($address)) {
			echo "<font color='red'>Address field is empty.</font><br/>";
		}
		if(empty($phone)) {
			echo "<font color='red'>Phone field is empty.</font><br/>";
		}		
	} 

	else {	
		//updating the table
		$result ="UPDATE add_db SET fullname='$fullname',nickname='$nickname',email='$email',address='$address',phone='$phone' WHERE id='$id'";

		echo $result;
		echo "<br>";

		echo $id;
		$val=mysqli_query($db,$result);
		if ($val) {

			header("Location: home.php");
		}

		else
		{

			echo "<script>alert('Error in update'); </script>";
		}


		
		//redirectig to the display page. In our case, it is index.php
		
	}
}
?>
