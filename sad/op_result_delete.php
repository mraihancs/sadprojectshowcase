<?php
include 'connection.php';

if(isset($_GET['deleteid'])){
    $sno = $_GET['deleteid'];
    $sql = "DELETE FROM `universityresult` WHERE sno=$sno";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header('location: op_display_result.php');
        ?>
        <script>alert('Deleted Successfully')</script>
        
        <?php
    }
    else{
        ?>
        <script>alert('Data Not Deleted')</script>
        
        <?php
    }
}



?>