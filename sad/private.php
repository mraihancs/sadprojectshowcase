<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Service System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="gstinfo.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<style>
  *{
margin: 0px;
padding: 0px;

  }
  .accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color: white;
  display: none;
  overflow: hidden;
}
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: rgb(33, 31, 31);
    color: white;
    text-align: center;
  }
</style>
</head>
<body>
    <nav style="font-size: 17px; text-align: center;" class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->

        <div class="container-fluid">

            <a style="font-size: 25px; font-family: 'Tangerine', serif;text-shadow: 4px 4px 4px #aaa;" class="navbar-brand" href="./index.php">Admission Service System</a>
            <div style="margin-right: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;text-align: justify" class="f">
                <i style="color:aliceblue;font-size: 12px;margin-right: 60px" class="fa-solid fa-phone"> 01717******</i>
                <br>
                <i style="color:white;font-size: 10px;" class="fa-regular fa-envelope">info@admissionservicesystem.com</i>
              </div>
 </div>
 </nav>

<div class="container">
<h3 style="margin-top: 1%;font-size:30px;text-decoration:underline;margin-left: 10%;">Private University</h3>
 <?php
  session_start();

  if($_SESSION['role']=="admin"){
    echo "
    <div style='width: 80%;background-color: white;margin-top: 2%;' class='bodyy'><br>
    <a type='button' class='btn btn-primary' href='./adduni.php'>Add University</a>
    <hr>
    </div><br><br>
    
    ";
  }

?>

</div>

<div class='container'>
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "sadproject";

$conn = mysqli_connect($server, $username, $password, $database);

$query="select * from university where ctg='private' ORDER BY id DESC";
$result=mysqli_query($conn,$query);


if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        { 


           
            echo "
            <button  class='accordion'><h4 style='margin-left: 5px;'><a style='text-decoration: none;color:black' href='./university/du.php'>". $row['name'] ."</a> </h4></button>

            <hr>
            ";
            
        }
    } 


?>

  </div>
  <br><br><br>


 <div class="footer">
    <h5 style="font-family: cursive;">All rights reserved | Admission service system (2023)</h5>
  </div>
</div>



<script>
  var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
</body>
</html>
