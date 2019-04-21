<?php  
	$conn=mysqli_connect('localhost','root','kelvingauki','consultancy');
	if(!$conn){
		echo "not connected";
	}
	else{
		$email=$_POST['email'];
		$password=hash('sha256',$_POST['password']);
		$sql=mysqli_query($conn,"SELECT * FROM register WHERE email='$email' AND password='$password'");
		$res=mysqli_num_rows($sql);
		if($res<1){
			echo "<h1>please check your inputs and try again</h1>";
			
		}
		else{
			echo "congratulation, login successful ";


		}
	}
?>