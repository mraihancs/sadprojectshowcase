<?php
echo "GG";
$server = "localhost";
$username = "root";
$password = "";
$database = "sadproject";

$conn = mysqli_connect($server, $username, $password, $database);

  if(isset($_POST['submit'])){
    
    
    $name=$_POST['uniname'];
    $ctg=$_POST['ctg'];
    
    echo "ADDED". $name . $ctg;

    $insertquery = "INSERT INTO `university` (`name`, `ctg`) VALUES ('$name', '$ctg');";

    if (mysqli_query($conn, $insertquery)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $insertquery . "<br>" . mysqli_error($conn);
      }
  }

?>