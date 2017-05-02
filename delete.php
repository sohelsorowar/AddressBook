<?php 
$db = mysqli_connect("localhost", "root" , "" ,"authentication");
if (isset($_GET['id'])) {
	$id=$_GET['id'];

	$sql="DELETE FROM add_db WHERE id='$id'";
	$query=mysqli_query($db,$sql);
	echo "<script>alert('Are you sure want to delete?');</script>";
	header("Location:home.php");
}




 ?>