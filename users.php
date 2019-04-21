<?php 

	$conn=mysqli_connect('localhost','root','kelvingauki','consultancy');
	if (!$conn){
		echo "error ";//no connection
	}
	else //all working well
		$qry = "SELECT * FROM feedback ";
		$res=mysqli_query($conn,$qry);
		if(mysqli_num_rows($res)>0){
			while ($row= mysqli_fetch_assoc($res)){
				echo "Name= ". $row['name']. "<br>"."Telephone Number= ".$row['telephone']. "<br>"."Email= ".$row['email']. "<br>"."Subject= ".$row['subject']. "<br>"."Message= ".$row['message']."<br>"."Time Posted =".$row['daten']."<hr/> <br><br>";
				
				
			}
		}
	}


 ?>