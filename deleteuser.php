<?php 
	$conn=mysqli_connect('localhost','datacons_user','FlamigoKelvin@890','dataons_main_db');
	if (!$conn){
		echo "error";
	}
	else 
	{
		$id = $_GET['id'];
		$qry=mysqli_query($conn,"DELETE FROM register where id='$id'");
		if ($qry)
 {
	echo "<div id='delete'><h1><center>deletion done successfully</center></h1></div>";
	header("refresh:1;url=users.php");
}
else
{
	echo "deletion failed";
}

	}



 ?>