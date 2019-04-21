<?php 

	$conn=mysqli_connect('localhost','root','kelvingauki','consultancy');
	if (!$conn){
		echo "error ";
	}
	else {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$telephone = $_POST['telephone'];

		if(mysqli_query($conn, "INSERT INTO register (email, password, telephone ) VALUES ('$email', '$password', '$telephone')")){
			echo "Thank you for registering with us";
		}
		else
		{
			echo "Error in regitration";
		}
	}


 ?>