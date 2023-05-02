<?php
include 'connection.php';


if(isset($_POST['submit'])){
    $uname = $_POST['universityname'];
    $ulink = $_POST['link'];
    $sql = "INSERT INTO `universityresult` (`name`, `link`) VALUES ('$uname', '$ulink')";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header ('location: op_display_result.php')
        ?>
<script>alert('data inserted successfully')</script>

<?php
    }
    else{
        ?>
        <script>alert('data not inserted')</script>
        
        <?php
    }
}



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Style inputs */
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Style the submit button */
input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Add a background color to the submit button on mouse-over */
input[type=submit]:hover {
  background-color: #45a049;
}
    </style>
</head>
<body>
<form style="width: 80%;margin-left:10%;margin-top:15%" action="" method="POST">
  <label for="fname">University Name</label>
  <input type="text" id="fname" name="universityname" placeholder="University Name">

  <label for="lname">Web Link</label>
  <input type="text" id="lname" name="link" placeholder="Web Link">

 

  <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>