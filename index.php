<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dynamic Resume - Resume Styles</title>
    <!-- About the project - Dynamic Resume is a simple resume making site in which the user chooses a style / template for his/her resume and give their details;after which the site will generate an html resume page of the given style/template for the user. -->

    <!-- Title image from https://seeklogo.com/ -->
    <link rel="icon" href="images/brand.png" type="image/png">

    <!-- CSS Section -->
    <style type="text/css">
        .jumbotron {      
            background-image: url(images/background.jpg);
            text-align: center;
        }
        input[type="radio"]{
            height: 2em;
            width: 2.5%;
            margin: 0 100px 0 100px;
        }
        .container{
            margin-top: 0;
        }
    </style>

  </head>
  <body>
    <div class="jumbotron" id="jumbotron">
          <h1 class="display-3">Dynamic Resume</h1>
          <p class="lead">Create your free resume from the different resume styles!</p>
          <hr class="m-y-2">
          <p>More information - This project is a simple resume making site for users who want to choose different resume styles.This site will dynamically create your resume according to the information you provide. </p>
    </div>
    <div class="alert alert-success">
        <div class="container">
            <form method="post" action="resume.php">
                <center><H1>Select Your Resume Style :</H1></center>
                <div class="S1">
                    <input type="radio" name="resume_style" value="resume_style1.php" checked> <img src="images/resume_style1.jpg">
                    <input type="radio" name="resume_style" value="resume_style2.php"> <img src="images/resume_style2.jpg">
                </div>
                <br>
                <div class="S2">
                <input type="radio" name="resume_style" value="resume_style3.php"> <img src="images/resume_style3.jpg">
                <input type="radio" name="resume_style" value="resume_style4.php"> <img src="images/resume_style4.jpg">
                </div>
                <br>
                <center><input type="submit" name="submit" class="btn btn-outline-primary"></center>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>