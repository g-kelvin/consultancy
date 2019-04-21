<?php 

	$conn=mysqli_connect('localhost','root','kelvingauki','consultancy');
	if (!$conn){
		echo "error ";
	}
	else {
		$name = $_POST['name'];
		$email= $_POST['email'];
		$telephone = $_POST['telephone'];
		$subject = $_POST['subject'];
		$message=$_POST['message'];
		$daten = date('Y-m-d H:i:s');

		if(mysqli_query($conn, "INSERT INTO `feedback`(`id`, `name`, `email`, `telephone`, `subject`, `message`, `daten`) VALUES ('','$name','$email','$telephone','$subject','$message','$daten')")){
			echo "Thanks you for getting to us $name. We value you";
		}
		else
		{
			echo "An error occured. please try again";
		}
	}


 ?>