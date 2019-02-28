<?php
session_start();
if(!isset($_SESSION['nameuser']) && !isset($_SESSION['id']) && $_SESSION['nameuser'] =='')
{
     echo "<script>location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<h1><b><center>Welcome to the Portal</center></b><h1>
     <style>
	  #menu {
     margin: 0;
     width: auto;
     background-color: #565656;
     font-size: 16px;
     font-family: Tahoma, Geneva, sans-serif;
     font-weight: bold;
     text-align: left;
     padding: 8px;
     border-radius: 8px;
     -webkit-border-radius: 8px;
     -moz-border-radius: 8px;
     -o-border-radius: 8px;
}

#menu ul {
     margin: 0;
     padding: 8px 0;
     list-style: none;
     height: auto;
}

#menu li {
     display: inline;
     padding: 8px;
}

#menu a {
     color: #FFF;
     padding: 10px;
     text-decoration: none;
}

#menu a:hover {
     background-color: #1B191B;
     color: #FFF;
     border-radius: 20px;
     -webkit-border-radius: 20px;
     -moz-border-radius: 20px;
     -o-border-radius: 20px;
}

#menu li .active {
     background-color: #1B191B;
     color: #FFF;
     border-radius: 20px;
     -webkit-border-radius: 20px;
     -moz-border-radius: 20px;
     -o-border-radius: 20px;
}

    </style>

</head>
<body>
   
	<div id="menu">
     <ul>
          
          <li class="bulk"><a href="upload.php">bulk</a></li>
          <li class="attendance"><a href="attendance.php">attendance</a></li>
          <li class="Reports"><a href="view.php">Reports</a></li>
          <li><a href="#">Marks</a></li>
          <li class="logout"><a href="logout.php">Logout</a></li> 

     </ul>
       
     
</div>
  

</body>
</html>

