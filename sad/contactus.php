<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactus.css">
    <link rel="shortcut icon" href="images/Admission.png">
  
</head>
<body>
    <div class="container">
        <div style="text-align:center">
          <h2 style="color:orangered" >Contact Us</h2>
          <p style="color:green" >( leave us a message )</p>
        </div>
        <div class="row">
          <div class="column">
            <img src="images/admissionassistant.png" style="width:100%;height: 500px;">
          </div>
          <div class="column">
            <form action="/action_page.php">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your first name..">
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">
              <label for="country">Country</label>
              <select id="country" name="country">
                <option value="usa">Bangladesh</option>
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
              </select>
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
              <input type="submit" value="Submit">

              <button style="height:40px;width:70px;background-color:darkgray" class="btn btn-success"><a style="text-decoration: none;color:aliceblue" href="index.php">Back</a></button>
            </form>
          </div>
        </div>
      </div>


      <div style="background-color: orangered;" class="footer">
  <p  style="text-align: center;color:aliceblue" >&copy;2023 Admission Service System | All Rights Reserved</p>
</div>
</body>
</html>