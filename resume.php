<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dynamic Resume - Resume Details</title>
    
    <!-- Title image from https://seeklogo.com/ -->
    <link rel="icon" href="images/brand.png" type="image/png">

  </head>
  <body>
    <!-- Container Class-->
    <div class="container">
        <!-- Resume Form to take user information.......Using Bootstrap-->
        <!-- The information that would be provided by the user will be redirected to the given resume style page chose by him/her in the previous page using PHP. -->
        <form method="post" name="Form" onsubmit="return validateForm()" action="<?php echo $_POST[resume_style]; ?>">
            <!-- POST method is being used in order to redirect the information. -->
          <div class="alert alert-success">
            <center><h2>Resume Details</h2></center>
            <label>Name :</label>
            <input type="text" class="form-control" name="name" placeholder="Your Name">
          
            <label>Current Profession :</label>
            <input type="text" class="form-control" name="profession" placeholder="Your Profession">
          
            <label>A brief introduction about yourself :</label>
            <textarea class="form-control" name="intro" rows="3"></textarea>
          
            <label>Address :</label>
            <textarea class="form-control" name="address" rows="2"></textarea>
          
            <label>Mobile Number :</label>
            <input type="number" class="form-control" name="mobile" placeholder="Your Number">
          
            <label>Email address :</label>
            <input type="email" class="form-control" name="email" placeholder="name@example.com">
          
            <label>LinkedIn :</label>
            <input type="text" class="form-control" name="linkedin" placeholder="linkedin.com/handlename">
          
            <label>Experience :</label>
            <textarea class="form-control" name="experience" rows="10" placeholder="((from_year) - (to_year) - (Your Designation) <next_line> (Place_ of_work) <next_line> (Your Experience) <next_line> (Repeat for all your experience))"></textarea>
          
            <label>Education :</label>
            <textarea class="form-control" name="education" rows="5" placeholder="((from_year) - (to_year) - (College/Institute Full Name) <next_line> (Your Degree from that college/institution) <next_line> (Repeat for all your Education places))"></textarea>
         
            <label>Certification :</label>
            <textarea class="form-control" name="certificate" rows="5" placeholder="((from_year) - (to_year) - (Certification Name) <next_line> (Repeat for all your certifications))"></textarea>
          
            <label>Interests :</label>
            <textarea class="form-control" name="interest" rows="5" placeholder="((Your Interests) <next_line> (Repeat for all your interests))"></textarea>
         
            <label>Software Skills :</label>
            <textarea class="form-control" name="software" rows="5" placeholder="((Softwares that you know well!) <next_line> (Repeat for all your software skills))"></textarea>
          
            <label>Languages :</label>
            <textarea class="form-control" name="lang" rows="5" placeholder="((Language that you are fluent) <next_line> (Repeat for all your languages))"></textarea>
            
            </p>
            </p>
            <center><input type="submit" name="submit" class="btn btn-outline-primary"></center>
          </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--Javascript Validation for empty input field-->
    <script type="text/javascript">
        function validateForm()
        {
            var name=document.forms["Form"]["name"].value;
            var profession=document.forms["Form"]["profession"].value;
            var intro=document.forms["Form"]["intro"].value;
            var address=document.forms["Form"]["address"].value;
            var mobile=document.forms["Form"]["mobile"].value;
            var email=document.forms["Form"]["email"].value;
            var linkedin=document.forms["Form"]["linkedin"].value;
            var experience=document.forms["Form"]["experience"].value;
            var education=document.forms["Form"]["education"].value;
            var certificate=document.forms["Form"]["certificate"].value;
            var interest=document.forms["Form"]["interest"].value;
            var software=document.forms["Form"]["software"].value;
            var lang=document.forms["Form"]["lang"].value;
            if (name==null || name=="",profession==null || profession=="",intro==null || intro=="",address==null || address=="",mobile==null || mobile=="",email==null || email=="",linkedin==null || linkedin=="",experience==null || experience=="",education==null || education=="",certificate==null || certificate=="",interest==null || interest=="",software==null || software=="",lang==null || lang=="")
            {
                alert("Please Fill All The Fields Or Else Fill ' None ' In The Corresponding Field");
                return false;
            }
        }        
    </script>
  </body>
</html>