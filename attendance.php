<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.container{
		padding-left: 200px;
		padding-top: 100px;
		text-align: center;
	}
	.btn{
	    
	    margin-top:30px;

	}
	.date1
	{
		margin-top: 20px;
		margin-left: 5px; 	
		margin-right: 140px;
	}
	.date
	{
		margin-top: 20px;
		
	}
	
	
	</style>
</head>
<body class="bg-info">
	<div class="container"><br>
		<form method=post enctype="multipart/form-data">
			<div class="col-md-12  thumbnail">
				<h3 class="text-primary text-center">Form</h3><hr>
				
				<br>
				<div class="row">
					<div class="col-xs-3 col-xs-offset-2">
						<label class="course">BRANCH:</label> 
					</div>
					<div class="col-xs-5">
						<select class="form-control" type="text" id="Branch" name="Branch" value="Branch" placeholder="Branch" required>
						  <option value="Branch">Select</option>
							<option value="CSE">CSE</option>
							<option value="ECE">ECE</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3 col-xs-offset-2"></div>
				 <div class="col-xs-2 ">
					<button class="form-control btn btn-primary col-xs-offset-9" name="submit" type="submit" >Search</button>	</div>
					</div>
				</div>
					
				</div>
				
				
		</div>
	
				
			</div>
		</form>
	</div>
</body>
</html>

<?php
	include('config.php');
	date_default_timezone_set('Asia/Kolkata');
	$date = date('Y-m-d');
	if(isset($_POST['submit']))
	{
		$Branch=$_POST['Branch'];
		$select="select * from student_details WHERE Branch='$Branch'";
		$re=mysqli_query($conn,$select);	
		
		$rc=mysqli_num_rows($re);
		?>
		<form method="post" action="insert.php?branch=<?php echo $Branch;?>">
		<table border="1">
			<tr><th>Rollno</th> <th>Name</th> <th>Branch</th><th>College</th><th>Attend</th></tr>
			<?php
		while($row=mysqli_fetch_array($re))
		{
		?>
			
				
				<div class="table">
				<tr>
					
					<td ><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; ?></td>
					<td><?php echo $row[4]; ?></td>
					
				
					<td class="attend-col">
						<select class="form-control" type="text" id="attend" name="<?php echo $row[1]; ?>" value="attend" placeholder="attend" required>
						  <option value="">Select</option>
							<option value="Present">Present</option>
							<option value="Absent">Absent</option>
					</select>
					</td>

					


				</tr>
				</div>
		<?php
		}
		?>
			</table>
			<div class="row">
					<div class="col-xs-3 col-xs-offset-2"></div>
				 <div class="col-xs-2 ">
					<input type="submit" name="submit"></div>
					</div>
				</div>
		
		
}
		<?php
		}
		 
	
?>