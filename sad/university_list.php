<html>

<head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css
">
    <title>University Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        *{
            margin: 0px;
            padding: 0px;
           
        }

        body{
            background-color: rgb(255, 255, 255);
        }
        .console-container {
  font-family: 'Open Sans', sans-serif;
  font-size: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.console-underscore {
  display: inline-block;
  position: relative;
  color: white;
}

.container {
  position: relative;
  text-align: center;
}

img {
  width: 100%;
}


.card {

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
}


.card:hover {
  box-shadow: 0 10px 18px 0 rgba(0, 0, 0, 0.2);
}


.container {
  padding: 2px 16px;
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

            <a style="font-size: 25px; font-family: 'Tangerine', serif;text-shadow: 4px 4px 4px #aaa;" class="navbar-brand" href="index.php">Admission Service System</a>
            <div style="margin-right: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;text-align: justify" class="f">
                <i style="color:aliceblue;font-size: 12px;margin-right: 60px" class="fa-solid fa-phone"> 01717******</i>
                <br>
                <i style="color:white;font-size: 10px;" class="fa-regular fa-envelope">info@admissionservicesystem.com</i>
              </div>
 </div>
 </nav>
    <br><br><br><br><br><br><br><br><br>
<div  class="row my-auto mx-md-5 row-cols-1 row-cols-md-4 g-5">
        <div class="col">
            <div class="card">
                <img style="height: 80px; width: 80px; margin: auto; " src="images/university.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">GST INFORMATION</h5>
                    <a style="margin: 5px;width: 97%;padding: 5px;font-family: 'Dosis', sans-serif;" href="./gst/gstinfo.php" class="btn btn-secondary">Details</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img style="height: 80px; width: 80px; margin: auto; " src="images/education.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">Public University Information</h5>
                    <a style="margin: 5px;width: 97%;padding: 5px;font-family: 'Dosis', sans-serif;" href="admissioncircular.php" class="btn btn-secondary">Details</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img style="height: 80px; width: 80px; margin: auto; " src="images/university.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">Private University</h5>
                    <a style="margin: 5px;width: 97%;padding: 5px;font-family: 'Dosis', sans-serif;" href="private.php" class="btn btn-secondary">Details</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img style="height: 80px; width: 80px; margin: auto; " src="images/medical.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">Medical & Dental</h5>
                    <a style="margin: 5px;width: 97%;padding: 5px;font-family: 'Dosis', sans-serif;" href="medical.php" class="btn btn-secondary">Details</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
    <h5 style="font-family: cursive;">All rights reserved | Admission service system (2023)</h5>
  </div>
</body>
</html>