<?php 

	$conn=mysqli_connect('localhost','root','kelvingauki','consultancy');
	if (!$conn){
		echo "error ";
	}
	else {
		$name = $_POST['name'];
		$email= $_POST['email'];
		$subject = $_POST['subject'];
		$message=$_POST['message'];

		if(mysqli_query($conn, "INSERT INTO feedback (name, email, subject, message) VALUES ('$name', '$email', '$subject','$message')")){
			echo "Thanks you for getting to us $name. We value you";
		}
		else
		{
			echo "An error occured. please try again";
		}
	}


 ?>