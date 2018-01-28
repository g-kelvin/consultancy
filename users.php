<?php 

	$conn=mysqli_connect('localhost','root','kelvingauki','consultancy');
	if (!$conn){
		echo "error ";
	}
	else {

		$qry =  "SELECT * FROM regitser "
		$res=mysqli_query($conn,$qry);
		if(mysqli_num_rows($res)>0){
			while ($row= mysql_fetch_assoc($res)){
				
			}
		}
	}


 ?>