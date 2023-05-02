<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Service -Admission Service System</title>
    <link rel="stylesheet" href="transport.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/Admission.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:ital@1&display=swap" rel="stylesheet">
<style>
    /* The container must be positioned relative: */
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: DodgerBlue;
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a style="font-size: 26px;" class="navbar-brand" href="index.php">Admission Service System</a>
        </div>
    </nav>
    <br><br>
   
    <div class="bus">
   
    <div style="margin-left: 33%;margin-top:5%" class="columns">
        <ul style="font-family: 'Times New Roman', cursive;font-size:20px" class="price">
            <li class="header">Bus Service</li>
            <li>Departure Location</li>
            <li style="color:blueviolet">Dhaka</li>
            <li>Destination Location</li>
            <li class="grey"><div class="custom-select" style="width:300px;margin-left:22%">
  <select>
    <option value="0">Select Location:</option>
    <option value="1">RAJSHAHI - 710TK</option>
    <option value="2">SYLHET - 700TK</option>
    <option value="3">MYMENSINGH -150TK</option>
    <option value="4">CHITTAGONG -680TK</option>
    <option value="0">Select Location:</option>
    <option value="1">RAJSHAHI - 710TK</option>
    
  </select>
</div></li>
            
           
           
            <li>+8801717210888</li>
            <li class="grey"><a style="border-radius: 5px;" href="https://docs.google.com/forms/d/e/1FAIpQLScQNsj_OXaK4Y15VW4oK7oTCUuGHpb-8cxvy7OHo4Ma3q061A/viewform" class="button">Payment</a></li>
        </ul>
    </div><br>




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
        typing_effect(['Hello User,', 'Lessen the wasting time', 'Enhance the knowledge', 'Make your track easier with Admission Service System'],
            ['azure', 'white', '#7FFF00', 'white']);

        function typing_effect(words, colors) {

            var cursor = document.getElementById('cursor'); 
            var text = document.getElementById('text') 

            var blink = true;
            var wait = false;
            var letters_count = 1;
            var temp = 1;

            text.style.color = colors[0]
            window.setInterval(function() { 
                if (letters_count === 0 && wait === false) {
                    wait = true;

                    text.innerHTML = '' 
                    window.setTimeout(function() {
                        var usedColor = colors.splice(0, 1)[0] 
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
                    window.setTimeout(function() { 
                        temp = -1;
                        letters_count += temp;
                        wait = false;
                    }, 1000)
                } else if (wait === false) {                    
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

    <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>