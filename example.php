<?php 

	include("config.php");			
?>





<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src=" https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"> </script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"> </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"> </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"> </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"> </script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"> </script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"> </script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"></link>
			
		
	</head>
	<body>
		<table id="example" class="table table-striped table-bordered" style="width:100%">
		
		<thead>
			<tr>
				<th>Sno</th><th>Roll no</th>  <th>Date</th> <th>Attend</th> 
			</tr>
		</thead>

<?php
		$rollno=$_GET['rollno'];
		$select="select * from reports WHERE Rollno LIKE '%$rollno%'";
		$counter=0;
		$res=mysqli_query($conn,$select);	
		while($row=mysqli_fetch_array($res))
		{
?>
			<tr>
				<td><?php echo ++$counter; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $row[3]; ?></td>
				<td><?php echo $row[2]; ?></td>
			</tr>
		<?php
	}
	?>
		</table>
	</body>
</html>

