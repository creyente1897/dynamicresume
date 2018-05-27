<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dynamic Resume - Resume Style - 3</title>

    <!-- Title image from https://seeklogo.com/ -->
    <link rel="icon" href="images/brand.png" type="image/png">

    <!-- CSS Section-->
    <style type="text/css">
        .name{
            background: #ffcc00;
            margin-top: 10px;   
            margin-bottom: 30px;
        }
        .row{
            margin-left: 180px;
            margin-right: 500px;
        }
        /* Creating Vertical line*/
        .vr{
            width: 5px;
            height: 200%;
            background-color: #ffcc00;
            position: absolute;
            top: 100px;
            bottom: 40%;
            left: 480px;
            margin-bottom: 10px;
        }        
    </style>
  </head>
  <body>
    <!-- Container Class -->
    <div class="container">
        <div class="name">
            <center><h2><?php echo $_POST['name']; ?></h2></center>
            <br>
            <center><h3><?php echo $_POST['profession']; ?></h3></center>
            <br>
        </div>
        <br>
        <br>
        <!-- Division to create a vertical line -->
        <div class="vr"></div>
        <!-- Creation of rows and columns using bootstrap in order to keep the headings in adjacent to the user information -->
        <div class="row">
            <div class="col">
                <!-- Title Heading-->
                <h7>PROFILE</h7>
            </div>
            <div class="col">
                <!-- Displaying User Information-->
                <p>     </p><p><?php echo $_POST['intro']; ?></p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <!-- Title Heading-->
                <h7>CONTACT</h7>
            </div>
            <div class="col">
                <!-- Displaying User Information-->
                <p>     </p><h7>Address : <?php echo $_POST['address']; ?></h7>
                <p>     </p><h7>Mobile Number : <?php echo $_POST['mobile']; ?></h7>
                <p>     </p><h7>Email Address : <?php echo $_POST['email']; ?></h7>
                <p>     </p><h7>LinkedIn Id : <?php echo $_POST['linkedin']; ?></h7>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <!-- Title Heading-->
                <h7>EDUCATION</h7>
            </div>
            <div class="col">
                <!-- Displaying User Information-->
                <p>     </p><p><?php echo $_POST['education']; ?></p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <!-- Title Heading-->
                <h7>EXPERIENCE</h7>
            </div>
            <div class="col">
                <!-- Displaying User Information-->
                <p>     </p><p><?php echo $_POST['experience']; ?></p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <!-- Title Heading-->
                <h7>CERTIFICATIONS</h7>
            </div>
            <div class="col">
                <!-- Displaying User Information-->
                <p>     </p><p><?php echo $_POST['certificate']; ?></p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <!-- Title Heading-->
                <h7>SOFTWARE SKILLS</h7>
            </div>
            <div class="col">
                <!-- Displaying User Information-->
                <p>     </p><p><?php echo $_POST['software']; ?></p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <!-- Title Heading-->
                <h7>INTERESTS</h7>
            </div>
            <div class="col">
                <!-- Displaying User Information-->
                <p>     </p><p><?php echo $_POST['interest']; ?></p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
              <div class="col">
                  <!-- Title Heading-->
                  <h7>LANGUAGES</h7>
              </div>
              <div class="col">
                  <!-- Displaying User Information-->
                  <p>     </p><p><?php echo $_POST['lang']; ?></p>
              </div>
          </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>