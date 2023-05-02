<?php
    
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "sadproject";

    $conn = mysqli_connect($server, $username, $password, $database);





    
if (isset($_POST['submit'])) {
    

    $title=$_POST['posttitle'];
    $desc=$_POST['postdes'];


    echo "HELLO " . $title;
    $insertquery = "INSERT INTO `notification` ( `title`, `desc`) VALUES ('$title', '$desc');";

    $result = mysqli_query($conn, $insertquery);

    #header("Location: notification.php");


}

?>