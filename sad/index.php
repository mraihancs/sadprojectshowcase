<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Service System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="images/Admission.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>

    <nav style="font-size: 17px; text-align: center;" class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->

        <div class="container-fluid">

            <a style="font-size: 25px; font-family: 'Tangerine', serif;text-shadow: 4px 4px 4px #aaa;" class="navbar-brand" href="index.php">Admission Service System</a>



            <!--Notification-->

            <a style="text-decoration: none; color:antiquewhite" href="./notification.php" class="notification">
                <span>Notification</span>
                <span class="badge">!</span>
            </a>
           
            

            <!---->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="contactus.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="feedback.php">FeedBack</a>
                    </li>

                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="logout.php">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!---->

    <div class="container">
        <img src="images/admissionassistant.png" alt="Hero Image">
        <div class='console-container'>
            <span id='text'></span>
            <div class='console-underscore' id='cursor'>|</div>
        </div>

    </div>
    <!--Title-->
    <div style="display: flex;margin-top: 30px; margin-left: 40%;" class="t">
        <img style="height: 50px; width: 50px;border-radius: 50%;" src="images/Admission.png" alt="" srcset="">
        <h3 style="font-family: 'Dosis', sans-serif; text-align: center;margin-left: 5px;">Admission Service System</h3>
    </div>




    <!--Features-->

    <div class="row my-auto mx-md-5 row-cols-1 row-cols-md-2 g-5">
        <div class="col">
            <div class="card">
                <img style="height: 80px; width: 80px; margin: auto; " src="images/university.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">University Information</h5>
                    <a style="margin: 5px;width: 97%;padding: 5px;font-family: 'Dosis', sans-serif;" href="university_list.php" class="btn btn-secondary">Details</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img style="height: 80px; width: 80px; margin: auto; " src="images/transport.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">Transport Services</h5>
                    <a style="margin: 5px;padding: 5px;width: 97%;font-family: 'Dosis', sans-serif;" href="transport_service.php" class="btn btn-secondary">Details</a>
                </div>
            </div>
        </div>
        <!--
        <div class="col">
            <div class="card">
                <img style="height: 80px; width: 80px; margin: auto; " src="images/hotel.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">Residencial Services</h5>
                    <a style="margin: 4px;padding: 5px;width: 97%;font-family: 'Dosis', sans-serif;" href="residential.php" class="btn btn-secondary">Details</a>
                </div>
            </div>
        </div>

-->

<!--
        <div class="col">
            <div class="card">
                <img style="height: 80px; width: 80px; margin: auto; " src="images/qbank.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="text-align: center;font-weight: bold;font-family: 'Dosis', sans-serif;" class="card-title">Question Bank</h5>
                    <a style="margin: 5px;padding: 5px;width: 97%;font-family: 'Dosis', sans-serif;" href="questionbank.php" class="btn btn-secondary">Details</a>
                </div>
            </div>
        </div>

-->
    </div>
    </div>
    </div>
    <br><br><br><br><br><br><br>

    <!--Footer-->
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






    <script>
        typing_effect(['Hello there,', 'Lessen the wasting time', 'Enhance the knowledge', 'Make your track easier with Admission Service System'],
            ['azure', 'white', '#7FFF00', 'white']);

        function typing_effect(words, colors) {

            var cursor = document.getElementById('cursor'); //cursor
            var text = document.getElementById('text') //text

            var blink = true;
            var wait = false;
            var letters_count = 1;
            var temp = 1;

            text.style.color = colors[0]
            window.setInterval(function() { //wait between words when it starts writting
                if (letters_count === 0 && wait === false) {
                    wait = true;

                    text.innerHTML = '' // leave a blank
                    window.setTimeout(function() {
                        var usedColor = colors.splice(0, 1)[0] //remove first element and get it as str
                        colors.push(usedColor);
                        var usedWord = words.splice(0, 1)[0]
                        words.push(usedWord);
                        temp = 1;
                        text.style.color = colors[0]
                        letters_count += temp;
                        wait = false;
                    }, 1000)
                } else if (letters_count === words[0].length + 1 && wait === false) {
                    wait = true;
                    window.setTimeout(function() { //wait a bit until words finished and start deleting
                        temp = -1;
                        letters_count += temp;
                        wait = false;
                    }, 1000)
                } else if (wait === false) { //write words                    
                    text.innerHTML = words[0].substr(0, letters_count)
                    letters_count += temp;
                }
            }, 130)
            window.setInterval(function() {
                if (blink) {
                    cursor.style.opacity = "0";
                    blink = false;
                } else {
                    cursor.style.opacity = "1";
                    blink = true;
                }
            }, 200)
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>