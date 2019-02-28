<?php
include('config.php');
if(@$_SESSION['nameuser']!='' || @$_SESSION['id']!='')
{

    echo"<script > location.href='admin.php'</script>";

}
if(isset ($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query="select * from `login_details` where username='$_POST[username]' AND password='$_POST[password]'";
    //echo $query;
     $result=mysqli_query($conn,$query);
    //echo $result;
    $count=mysqli_num_rows($result);
   //echo $count;
    if($count==1){
        $fetch_details=mysqli_fetch_array($result);
        $name=$fetch_details['username'];
        $psw=$fetch_details['password'];
        if($name==$username && $psw==$password)
        {
            echo "success";
            session_start();
            $_SESSION['nameuser']=$name;
            $_SESSION['id']=$fetch_details['id'];
           echo"<script > location.href='admin.php'</script>";
}

        
        else{
            echo "<script>alert('please enter correct details')</script>";
        }
        
    
    }
    else{
            echo "<script>alert('please enter correct details111')</script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Student Log In Page</title>
  
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style>
  body {
  margin-left:0;
}
.header {
  width:100%;
  background-color:#0F1F38;
  height:5em;
  border-radius:0px;
  color:#fff;
  letter-spacing:3px;
  margin:0px auto;
  position:fixed;
  top:0px;
  font-family:"Century Gothic", sans-serif;
  z-index:10;
}

.title {
  width:100%;
  float:right;
  text-align:right;
  font-size:3em;
  margin-top:-0.15em;
  padding-left:0.1em;
  display:inline;
}

.logo {
  height:2em;
  margin-bottom:-0.8em;
}

h1 {
  text-align:center;
  font-family:"Trebuchet MS",sans-serif;
  font-size:3em;
  margin-top:70px;
}

body {
  padding-top:10em;
}

form {
  text-align: center;
  font-family:"Century Gothic",sans-seif;
  
}
input[type=text] {
  width: 8;
  border: 2px solid black;
  border-radius: 4px;
  padding: 4px 8px;
  -webkit-transition: width 0.5s ease_in_out;
  transition: width 0.5s ease-in-out;
}

input[type=text]:focus {
  width: 12%;
  background-color: lightblue;
}

input[type=password] {
  width: 8;
  border: 2px solid black;
  border-radius: 4px;
  padding: 4px 8px;
  -webkit-transition: width 0.5s
    ease_in_out;
  transition: width 0.5s ease-in-out;
}

input[type=password]:focus {
  width: 12%;
  background-color: lightblue;
}

input[type=submit] {
  background-color: #0F1F38;
  margin: 2px 4px;
  color: white;
  cursor: pointer;
  padding: 4px 8px;
}
</style>
  
</head>

<body>
  <body background="tshape3.jpg">
  <header>
  <div class="header">
    <div class="title">
      <!--<div class="menu" onclick="openNav()">MENU</div>-->
      <span class="pc">T Shaped Engineer</span>
      <img src="logo.png" class="logo" height="50px">
    </div>
  </div>
</header>

<div class="body">
  <h1>Admin Login!</h1>
</div>
<form method="post">
<form>
  Username:<br>
  <input type="text" name ="username">
  <br>
  Password:<br>
  <input type="password" name="password">
  <br><br>
  <input type="submit" value = "Submit" name="submit">
</form>
</form>
  
  

</body>

</html>
