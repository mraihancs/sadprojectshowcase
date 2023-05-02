<?php
    
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "sadproject";

    $conn = mysqli_connect($server, $username, $password, $database);





    
if (isset($_POST['submit'])) {
    echo "HELLO";

    $title=$_POST['posttitle'];
    $desc=$_POST['postdes'];

    $insertquery = "INSERT INTO `posts` (`gst`, `title`, `desc`) VALUES (2, '$title', '$desc');";

    $result = mysqli_query($conn, $insertquery);

    header("Location: gst2.php");


}

?>