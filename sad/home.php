<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission Service System</title>
  <link rel="stylesheet" href="home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="shortcut icon" href="images/Admission.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css
">
</head>

<body>


  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">

      <a class="navbar-brand" href="home.html">
        <img src="images/Admission.png" alt="Admission Service System" style="width:40px;" class="rounded-pill">
      </a>
      <h4 style="color:white;font-family: 'Dosis', sans-serif;">Admission Service System</h4>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
        </ul>

      </div>
      <button style="width:100px" class="btn btn-secondary"><a style="text-decoration: none;color:white;" href="signup.php">SignUp</a></button>
      <button style="width:100px;margin-left:10px" class="btn btn-info"><a style="text-decoration: none;color:white;" href="login.php">Login</a></button>
    </div>
    <div style="margin-right: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;text-align: justify" class="f">
      <i style="color:aliceblue;font-size: 12px;margin-right: 60px" class="fa-solid fa-phone"> 01717******</i>
      <br>
      <i style="color:white;font-size: 10px;" class="fa-regular fa-envelope">info@admissionservicesystem.com</i>
    </div>
  </nav>
  <?php 
    if(isset($_GET['error'])){
      echo "<div class='alert alert-danger' role='alert'>
      You can not access this page.
    </div>";
    }
    
  ?>
  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

 
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div style="height:600px;width: 100%;" class="carousel-inner">
      <div class="carousel-item active">
        <img style="height:600px;width: 100%;" src="images/buet.jpg" alt="Admission Service System" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img style="height:600px;width: 100%;" src="images/du.jpg" alt="Admission Service System" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img style="height:600px;width: 100%;" src="images/uiu.jpg" alt="Admission Service System" class="d-block w-100">
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <!--Title-->
  <div style="display: flex;margin-top: 30px; margin-left: 40%;" class="t">
    <img style="height: 50px; width: 50px;border-radius: 50%;" src="images/Admission.png" alt="" srcset="">
    <h3 style="font-family: 'Dosis', sans-serif; text-align: center;margin-left: 5px;">Admission Service System</h3>
  </div>






  <!--Features-->

  <div class="row my-auto mx-md-5 row-cols-1 row-cols-md-4 g-5">
    <div class="col">
      <div class="card">
        <img style="height: 80px; width: 80px; margin: auto; " src="images/uni.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">University List</h5>
          <a style="margin: 5px;width: 97%;padding: 5px;font-family: 'Dosis', sans-serif;" href="login.php" class="btn btn-secondary">Details</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img style="height: 80px; width: 80px; margin: auto; " src="images/uni.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">Admission Circular</h5>
          <a style="margin: 5px;width: 97%;padding: 5px;font-family: 'Dosis', sans-serif;" href="login.php" class="btn btn-secondary">Details</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img style="height: 80px; width: 80px; margin: auto; " src="images/uni.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">Admission Date</h5>
          <a style="margin: 5px;width: 97%;padding: 5px;font-family: 'Dosis', sans-serif;" href="login.php" class="btn btn-secondary">Details</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img style="height: 80px; width: 80px; margin: auto; " src="images/uni.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">Admission Result</h5>
          <a style="margin: 5px;width: 97%;padding: 5px;font-family: 'Dosis', sans-serif;" href="login.php" class="btn btn-secondary">Details</a>
        </div>
      </div>
    </div>
  </div>





  <!--Other Services-->
  <div style="display: flex;margin-top: 30px; margin-left: 40%;" class="otherservices">
    <img style="height: 50px; width: 50px;border-radius: 50%;" src="images/Admission.png" alt="" srcset="">
    <h3 style="font-family: 'Dosis', sans-serif; text-align: center;margin-left: 15px;">Other Services</h3>
  </div>

  <!---->

  <div class="row my-auto mx-md-5 row-cols-1 row-cols-md-4 g-5">
    <div class="col">
      <div class="card">
        <img style="height: 80px; width: 80px; margin: auto;  " src="images/transport.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">Transport Services</h5>
          <a style="margin: 5px;padding: 5px;width: 97%;font-family: 'Dosis', sans-serif;" href="login.php" class="btn btn-secondary">Details</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img style="height: 80px; width: 80px; margin: auto; " src="images/hotel.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">Residencial Services</h5>
          <a style="margin: 4px;padding: 5px;width: 97%;font-family: 'Dosis', sans-serif;" href="login.php" class="btn btn-secondary">Details</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img style="height: 80px; width: 80px; margin: auto; " src="images/doubt.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">Doubt Solving</h5>
          <a style="margin: 5px;padding: 5px;width: 97%;font-family: 'Dosis', sans-serif;" href="login.php" class="btn btn-secondary">Details</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img style="height: 80px; width: 80px; margin: auto; " src="images/discussion.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">Discussion Forum</h5>
          <a style="margin: 5px;padding: 5px;font-family: 'Dosis', sans-serif;width: 97%;" href="login.php" class="btn btn-secondary">Details</a>
        </div>
      </div>
    </div>
  </div>


  <!--Footer-->
  <br>
  <br><br>
  <br><br>
  <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.facebook.com/maruf.raihan.165">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.twitter.com/@maruf_raihan_">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.instagram.com/maruf_raihan_">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="login.html">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="about.html">About</a></li>
      <li class="menu__item"><a class="menu__link" href="login.html">Services</a></li>
      <li class="menu__item"><a class="menu__link" href="team.html">Team</a></li>
      <li class="menu__item"><a class="menu__link" href="contact.html">Contact</a></li>

    </ul>
    <p>&copy;2023 Admission Service System | All Rights Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>