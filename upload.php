
<html>
<head>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="">
<table border="1">
<tr >
<td colspan="2" align="center"><strong>Import CSV file</strong></td>
</tr>
<tr>
<td align="center">CSV File:</td><td><input type="file" name="file" id="file"></td></tr>
<tr >
<td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
	
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="t_shape_engineers";
	$conn=mysqli_connect($servername,$username,$password,$dbname);	
    
	$filename=$_FILES["file"]["name"];
  echo $ext=substr($filename,strrpos($filename,"."));
$name="sudhir";

$newfilename=$name.".csv";
        $move = "uploads/";
        $_FILES["file"]['name']."<br>";
        $_FILES["file"]['tmp_name']."<br>";
        $_FILES["file"]['size']."<br>";
        $_FILES['file']['error']."<br>";
        move_uploaded_file($_FILES['file']['tmp_name'], $move.$filename);
	
//we check,file must be have csv extention
if($ext==".csv")
{
  $file = fopen($move.$_FILES["file"]['name'],"r");
         while (($emapData = fgetcsv($file,",")) !== FALSE)
         {
            $sql = "INSERT into student_details(id,Rollno,Name,Branch,College) values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]')";
            mysqli_query($conn,$sql);
         }
         fclose($file);
         //unlink('uploads/'.$filename);
         echo "<script>alert('data has been uploaded! successfully'); location.href='admin.php'</script>";

}
else {
    echo "Error: Please Upload only CSV File";
}
}
?>