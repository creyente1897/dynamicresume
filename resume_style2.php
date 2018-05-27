<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dynamic Resume - Resume Style - 2</title>

    <!-- Title image from https://seeklogo.com/ -->
    <link rel="icon" href="images/brand.png" type="image/png">
    
    <!-- CSS Section-->
    <style type="text/css">
    /* Creating Vertical line*/
    .vr{
        width:5px;
        height: 200%;
        background-color:#0033cc;
        position:absolute;
        top:10px;
        bottom:10%;
        left:200px;
        margin-bottom: 10px;
    }
    /* Creating Horizontal line*/
    .hr{
        clear:both;
        width:100%;
        background-color:#0033cc;
        height:5px;
        margin-top:7px;
        margin-bottom:7px;
        margin-left: 10px;
        margin-right: 10px;
    }
    br{
        width: 5px;
    }
    .container{
        margin-right: 20px;
        margin-top: 10px;
    }
    </style>
  </head>
  <body>
    <div class="resume">
        <div class="vr"></div>
        <div class="container">
            </p>
            </p>
            <!-- Class to highlight the name-->
            <div class="alert alert-info">
                <!-- User Information-->
              <h2><?php echo $_POST['name']; ?></h2>
            </div>
            <!-- Users information-->
            <h3><?php echo $_POST['profession']; ?></h3>
            <br>
            <!-- Users information-->
            <h5><?php echo $_POST['address']; ?></h5>
            <br>
            <!-- Users information-->
            <h7>Mobile Number : <?php echo $_POST['mobile']; ?></h7>
            <br>
            <!-- Users information-->
            <h7>Email Address : <?php echo $_POST['email']; ?></h7>
            <br>
            <!-- Users information-->
            <h7>LinkedIn Id : <?php echo $_POST['linkedin']; ?></h7>
            <br>
            <!-- Users information-->
            <p><?php echo $_POST['intro']; ?></p>
        </div>
        <div class="hr" runat="server"></div>
        <div class="container">
            <!-- Class to highlight the educatiion field-->
            <div class="alert alert-info">
                <h4>Education</h4>
            </div>
            </p>
            <!-- Users education information-->
            <p><?php echo $_POST['education']; ?></p>
            </p>
            <!-- Class to highlight the experience field-->
            <div class="alert alert-info">
                <h4>Experience</h4>
            </div>
            </p>
            <!-- Users experience information-->
            <p><?php echo $_POST['experience']; ?></p>
            </p>
            <!-- Class to highlight the certification field-->
            <div class="alert alert-info">
                <h4>Certifications</h4>
            </div>
            </p>
            <!-- Users certification information-->
            <p><?php echo $_POST['certificate']; ?></p>
            </p>
            <!-- Class to highlight the field-->
            <div class="alert alert-info">
                <h4>Software Skills</h4>
            </div>
            </p>
            <!-- Users information-->
            <p><?php echo $_POST['software']; ?></p>
            </p>
            <!-- Class to highlight the field-->
            <div class="alert alert-info">
                <h4>Languages</h4>
            </div>
            </p>
            <!-- Users information-->
            <p><?php echo $_POST['lang']; ?></p>
            </p>
            <!-- Class to highlight the field-->
            <div class="alert alert-info">
                <h4>Interests</h4>
            </div>
            </p>
            <!-- Users information-->
            <p><?php echo $_POST['interest']; ?></p>
            </p>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>