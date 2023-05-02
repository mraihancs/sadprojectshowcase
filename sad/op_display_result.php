<?php

include 'connection.php';
session_start();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

</head>
<body>
    <div class="container">
      <br><br>
        <?php
        if($_SESSION['role']=="admin"){
          echo " <button style='color:white;margin-top:5%' class='btn btn-secondary'><a style='text-decoration: none;color:white' href='op_admission_result.php'>ADD</a></button>";
        }
       
        ?>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">University</th>
      <th scope="col">Web Link</th>
      
      <?php
        if($_SESSION['role']=="admin"){
          echo "<th scope='col'>Operation</th>";
        }
       
        ?>
    </tr>
  </thead>
  <tbody>

<?php

$sql = "SELECT * FROM `universityresult` ";
$result = mysqli_query($conn,$sql);
if($result)
{
while(  $row = mysqli_fetch_assoc($result)){
$sno = $row['sno'];
$name = $row['name'];
$link = $row['link'];

echo '<tr>
<th scope="row">'.$sno.'</th>
<td>'.$name.'</td>
<td>'.$link.'</td>';

  if($_SESSION['role']=="admin"){
    echo '<td>
    <button class="btn btn-danger" ><a style="text-decoration:none;color:white" href="op_result_delete.php?deleteid='.$sno.'">DELETE</a></button>
  </td>';
  }


echo '</tr>';
}

 
  
}

?>

  </tbody>
</table>
    </div>
</body>
</html>