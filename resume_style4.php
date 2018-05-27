<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <title>Dynamic Resume - Resume Style - 4</title>

    <!-- Title image from https://seeklogo.com/ -->
    <link rel="icon" href="images/brand.png" type="image/png">

    <!--CSS Section-->
    <style type="text/css">
      .container{
        border: 50px solid #8080ff;
      }
      .border{
        border: 6px solid #8080ff;
        margin-top: 10px;
        margin-bottom: 10px;
      }
      hr { 
        display: block;
        margin-top: 0.5em;
        margin-bottom: 0.5em;
        margin-left: 60px;
        margin-right: 60px;
        border-style: inset;
        border-width: 1px;
        border-color: #8080ff;
      }
      /* Aligning User Information */
      .row{
        margin-left: 150px;
        margin-right: 50px;
      }
      .title{
        color: #8080ff;
      }
    </style>
  </head>
  <body>
    <!-- Container Class-->
    <div class="container">
      <!-- Class for second border-->
      <div class="border">
            <center><h2><?php echo $_POST['name']; ?></h2></center>
            <br>
            <center><h4><?php echo $_POST['profession']; ?></h4></center>
            <br>
            <hr>
            <br>
            <!-- Class for rows and columns using bootsrap -->
            <div class="row">
            <div class="col">
                <h5 class="title">
                  <!-- Font Awesome link for icon-->
                  <i class="fas fa-user"></i>
                  <!-- Heading -->
                   <span>PROFILE</span>
                </h5>
                <br>
                <!-- Displaying User Information -->
                <p><?php echo $_POST['intro']; ?></p>
            </div>
            <div class="col">
                <h5 class="title">
                  <!-- Font Awesome link for icon-->
                  <i class="fas fa-school"></i>
                  <!-- Heading -->
                   <span>EDUCATION</span>
                </h5>
                <br>
                <!-- Displaying User Information -->
                <p><?php echo $_POST['education']; ?></p>
            </div>
            </div>
            <br>
            <br>
            <div class="row">
            <div class="col">
                <h5 class="title">
                  <!-- Font Awesome link for icon-->
                  <i class="fas fa-user"></i>
                  <!-- Heading -->
                   <b>CONTACT</b>
                </h5>
                <br>
                <!-- Displaying User Information -->
                <p><?php echo $_POST['address']; ?></p>
                <p><?php echo $_POST['mobile']; ?></p>
                <p><?php echo $_POST['email']; ?></p>
                <p class="linkdin">
                  <!-- Font Awesome link for icon-->
                  <i class="fab fa-linkedin-in"></i>
                   <?php echo $_POST['linkedin']; ?>
                </p>
            </div>
            <div class="col">
                <h5 class="title">
                  <!-- Font Awesome link for icon-->
                  <i class="fas fa-briefcase"></i>
                  <!-- Heading -->
                   <b>WORK EXPERIENCE</b>
                </h5>
                <br>
                <!-- Displaying User Information -->
                <p><?php echo $_POST['experience']; ?></p>
            </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <h5 class="title">
                      <!-- Font Awesome link for icon-->
                      <i class="far fa-chart-bar"></i>
                       <b>SOFTWARE SKILLS</b>
                    </h5>
                    <br>
                    <!-- Displaying User Information -->
                    <p><?php echo $_POST['software']; ?></p>
                </div>
                <div class="col">
                    <h5 class="title">
                      <!-- Font Awesome link for icon-->
                      <i class="fas fa-certificate"></i>
                      <!-- Heading -->
                       <b>CERTIFICATIONS</b>
                    </h5>
                    <br>
                    <!-- Displaying User Information -->
                    <p><?php echo $_POST['certificate']; ?></p>
                </div>
              </div>
              <br>
              <br>
              <div class="row">
              <div class="col">
                  <h5 class="title">
                    <!-- Font Awesome link for icon-->
                    <i class="fas fa-lightbulb"></i>
                    <!-- Heading -->
                     <b>INTERESTS</b>
                  </h5>
                  <br>
                  <!-- Displaying User Information -->
                  <p><?php echo $_POST['interest']; ?></p>
              </div>
              <div class="col">
                  <h5 class="title">
                    <!-- Font Awesome link for icon-->
                    <i class="fas fa-language"></i>
                    <!-- Heading -->
                     <b>LANGUAGES</b>
                  </h5>
                  <br>
                  <!-- Displaying User Information -->
                  <p><?php echo $_POST['lang']; ?></p>
              </div>
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