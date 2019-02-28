<?php
  $branch = $_GET['branchname'];

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title></title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <h1>T-shaped Enggg</h1>

<table id="attendence-table">
  <thead>
    <tr>
      <th class="name-col">Student Name</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
<form class="form-control">
  <select class="form-control">
    <option>Last week</option>
    <option>This month</option>
    <option>this semister</option>
  </select>
</form>
<br/>
<?php
  include_once('config.php');
  $query =  mysqli_query($conn, "SELECT * FROM `student_details` WHERE Branch='$branch'");
  // echo "SELECT * FROM `student_details` WHERE Branch='$branch'";
  if($query){
    
    $num=mysqli_num_rows($query);
    if($num>0)
    {
      $roll1=mysqli_fetch_array($query);
      $roll=$roll1['Rollno'];
      echo $roll;
      $query2=mysqli_query($conn,"SELECT * FROM `reports` WHERE Rollno='$roll' AND Attend='Absent'");
      // echo "SELECT * FROM `reports` WHERE Rollno='$roll' AND Attend='Absent'";
      print_r($query2);
      exit();
    }
  }
?>
<table>
  <div class="table-responsive">
    <thead class="display">
    <tr>
      <th class="name-col">Roll Number</th>
      <th class="name-col">Name</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>6</th>
      <th>7</th>
      <th>8</th>
      <th>9</th>
      <th>10</th>
      <th>11</th>
      <th>12</th>
      <th>13</th>
      <th>14</th>
      <th>15</th>
      <th>16</th>
      <th>17</th>
      <th>18</th>
      <th>19</th>
      <th>20</th>
      <th>21</th>
      <th>22</th>
      <th>23</th>
      <th>24</th>
      <th>25</th>
      <th>26</th>
      <th>27</th>
      <th>28</th>
      <th>29</th>
      <th>30</th>
      <th class="missed-col">Days Missed-col</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include('config.php');
    $sql = ""
    ?>
    <tr class="student" >
      <td class="name-col">Slappy the Frog</td>
      <td class="attend-col"><input type="checkbox" disabled=""></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      <td class="attend-col"><input type="checkbox"></td>
      
      <td class="missed-col">0</td>
    </tr>
    
  </tbody>
  </div>
</table>
<br/>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <!-- <script  src="js/index.js"></script> -->




</body>

</html>
