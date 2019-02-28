<?php
	include('config.php');
	
	if(isset($_POST['submit']))
	{
		echo $branch=$_GET['branch'];
		date_default_timezone_set('Asia/Kolkata');
	    echo $date = date('Y-m-d');
		 $select="select * from student_details WHERE Branch='$branch'";

		$re=mysqli_query($conn,$select);	
		while($row=mysqli_fetch_array($re))
		{
				//echo $row[1];
				$Attend=$_POST[$row[1]];
				
				//$select= "INSERT INTO `reports`(`Rollno`, `Name`, `Branch`, `College`, `Attend`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]')";
				$ins="INSERT INTO `reports`(`Rollno`, `Attend`,`Date`) VALUES ('$row[1]','$Attend','$date')";
				$res=mysqli_query($conn,$ins);

		}
		
		
	}
?>