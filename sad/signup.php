<?php

include('connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $pass =md5( $_POST['password']);
    $rpass = md5( $_POST['rpassword']);

    $insertquery = "INSERT INTO `signup` (`uname`, `email`, `password`, `rpassword`,`role`) VALUES ('$username', '$email', '$pass', '$rpass','user');";

    $result = mysqli_query($conn, $insertquery);

    if ($result) {
?>
        <script>
            alert("Registration Successful");
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("Registration Unsuccessful");
        </script>

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
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">

</head>

<body>
    <form style="width:30%;margin: auto;" action="" method="POST" style="border:1px solid #ccc; margin-top: 80px;">
        <div class="container2">
            <h1 style=" text-align: center;font-family: 'Lobster', cursive;">Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="text"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="rpassword" required>

          

          
            <div class="clearfix">

                <button style="width:100%;font-family: 'Dosis', sans-serif;" type="submit" name="submit" class="signupbtn">Sign Up</button>
                <button style="height: 50px;font-family: 'Dosis', sans-serif;" class="btn btn-dark"><a style="text-align: center;text-decoration: none;color: aliceblue;" href="login.php">Login</a></button>
      
            </div>
        </div>
    </form>
</body>

</html>