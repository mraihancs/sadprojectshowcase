<?php
session_start();
if(isset($_SESSION['email']))
{
  header("location: ./user/index2.php");
}

$server = "localhost";
$username = "root";
$password = "";
$database = "sadproject";

$conn = mysqli_connect($server, $username, $password, $database);

if(isset($_POST['submit'])){


  $email = $_POST['email'];
  $password=md5($_POST['password']);
  $query="select * from signup where email='$email' and password = '$password'";
  $result=mysqli_query($conn,$query);
  $count=mysqli_num_rows($result);
  if($count>0)
  {
    $query2="select uname,role from signup where email='$email' and password = '$password'";
    $result2=mysqli_query($conn,$query2);
    $row=mysqli_fetch_assoc($result2);
    $_SESSION['email'] = $email;
    $_SESSION['uname']=$row['uname'];
    
    $role=$row['role'];
    $_SESSION['role']=$role;
 
    if($role == 'admin')header("Location: index.php");
    else header("Location: index.php");
  }
  else{
    header("Location: login.php");
        }
    
  }


mysqli_close($conn);
?>
