<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dynamic Resume - Resume Style - 1</title>

    <!-- Title image from https://seeklogo.com/ -->
    <link rel="icon" href="images/brand.png" type="image/png">
    
    <!-- CSS Section-->
    <style type="text/css">
      hr { 
          display: block;
          margin-top: 0.5em;
          margin-bottom: 0.5em;
          margin-left: auto;
          margin-right: auto;
          border-style: inset;
          border-width: 1px;
          border-color: cyan;
      } 
    </style>
  </head>
  <body>
    <!-- Section to display the first resume style -->
    <div class="container">
      <!-- Displaying User Information-->
      <center><h2><?php echo $_POST['name']; ?></h2></center>
      <center><h3><?php echo $_POST['profession']; ?></h3></center>
      <center><h5><?php echo $_POST['address']; ?></h5></center>
      <center><h7>Mobile Number : <?php echo $_POST['mobile']; ?></h7></center>
      <center><h7>Email Address : <?php echo $_POST['email']; ?></h7></center>
      <center><h7>LinkedIn Id : <?php echo $_POST['linkedin']; ?></h7></center>
      </p>
      <hr>
      </p>
      <!-- Displaying User Information-->
      <p><?php echo $_POST['intro']; ?></p>
      </p>
      <!-- Title Heading-->
      <h4>Education</h4>
      <hr>
      </p>
      <!-- Displaying User Information-->
      <p><?php echo $_POST['education']; ?></p>
      </p>
      <!-- Title Heading-->
      <h4>Experience</h4>
      <hr>
      </p>
      <!-- Displaying User Information-->
      <p><?php echo $_POST['experience']; ?></p>
      </p>
      <!-- Title Heading-->
      <h4>Certifications</h4>
      <hr>
      </p>
      <!-- Displaying User Information-->
      <p><?php echo $_POST['certificate']; ?></p>
      </p>
      <!-- Title Heading-->
      <h4>Software Skills</h4>
      <hr>
      </p>
      <!-- Displaying User Information-->
      <p><?php echo $_POST['software']; ?></p>
      </p>
      <!-- Title Heading-->
      <h4>Languages</h4>
      <hr>
      </p>
      <!-- Displaying User Information-->
      <p><?php echo $_POST['lang']; ?></p>
      </p>
      <!-- Title Heading-->
      <h4>Interests</h4>
      <hr>
      </p>
      <!-- Displaying User Information-->
      <p><?php echo $_POST['interest']; ?></p>
      </p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>