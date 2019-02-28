<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

	<!-- jQuery library -->
	
	<!-- Latest compiled and minified CSS -->
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
							<select class="form-control" id='branchAll' required>
								<option value="CSE">CSE</option>
								<option value="ECE">ECE</option>
							</select>
						</div>
				</div>
						<div class="row">
							<div class="col-xs-3 col-xs-offset-2"></div>
								 <div class="col-xs-2 ">
									<button class="form-control btn btn-primary col-xs-offset-9" name="submit" type="submit" >Search</button>	
								</div>
							</div>
							<div class="col-xs-3 col-xs-offset-2"></div>
								 <div class="col-xs-2 ">
									<button type="button"  class="form-control btn btn-primary col-xs-offset-9" name="details" type="details" onclick="alldetails()">Att_details</button>	
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
	if(isset($_POST['submit']))
	{
		$Branch=$_POST['Branch'];
		$select="select * from student_details WHERE Branch='$Branch'";

		$re=mysqli_query($conn,$select);	
		
		$rc=mysqli_num_rows($re);
		?>
		<center>
			<form method="post" action="">
		<table  id="example" class="table table-bordered display center" style="width:80%">
			<thead>
				<tr>
					<th>Rollno</th> 
					<th>Name</th> 
					<th>Branch</th>
					<th>College</th>
					<th>No_of_working_days</th>
					<th>No_present_days</th>
					<th>No_Abscent_days</th>
					<th>attendance %</th>
					
					<th>View</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($row=mysqli_fetch_array($re))
				{
					$student_roll = $row['Rollno'];
					$sql = "SELECT * FROM `reports` WHERE `Rollno` = '$student_roll'";
					// echo $sql;exit();
					$query = mysqli_query($conn,$sql);
					$numberofdays = mysqli_num_rows($query);
					
					$sql1 = "SELECT * FROM `reports` WHERE `Rollno` = '$student_roll' AND `Attend`='Present'";
					$presentiesQuery = mysqli_query($conn, $sql1);
					$numberOfPrensetDays = mysqli_num_rows($presentiesQuery);
					$numberOfAbscenDays =($numberofdays-$numberOfPrensetDays);
					$studentPrensentage = ($numberOfPrensetDays/$numberofdays)*100;
				?>
						
						
						
						<tr>
							
							<td ><?php echo $row[1]; ?></td>
							<td><?php echo $row[2]; ?></td>
							<td><?php echo $row[3]; ?></td>
							<td><?php echo $row[4]; ?></td>
							<td><?php echo $numberofdays; ?></td>
							<td><?php echo $numberOfPrensetDays; ?></td>
							<td><?php echo $numberOfAbscenDays; ?></td>
							<td><?php echo round($studentPrensentage); ?>%</td>

							<td> <a href="example.php?rollno=<?php echo $row[1];?>"class="form-control btn btn-primary" type="view">View</a></td>
						</tr>
						
				<?php
				}
				?>
			</tbody>
			
			</table> 
		</form>
		</center>
			<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			
		<?php
		}
		 
	
?>

<script type="text/javascript">
	function alldetails(){
		var branch = $('#branchAll').val();
		// alert(branch);
		if(branch !== ''){
			location.href = 'att_view.php?branchname='+branch;
		}
	}
</script>