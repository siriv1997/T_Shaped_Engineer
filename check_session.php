<?php
include('config.php');
if(@$_SESSION['nameuser']=='' || @$_SESSION['id']==''){
	
    echo"<script > location.href='index.php'</script>";

}
?>