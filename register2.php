<?php
include_once("config.php");
 
if(isset($_POST['submit'])) {        
    $username = $_POST['username'];    
    $ic_no = $_POST['ic_no'];    
    $matric_no = $_POST['matric_no'];
    $phone_no = $_POST['phone_no'];
    $pin = $_POST['pin'];
    $rpin = $_POST['rpin'];
  

    if($pin == $rpin)
    {
        //insert data to database        
        $result = mysqli_query($mysqli, "INSERT INTO users(username,ic_no,matric_no,phone_no,pin) VALUES('$username','$ic_no','$matric_no','$phone_no','$pin')");                
        //display success message        
        echo "<font color='green'>Data added successfully.";        
            echo "<br/><a href=''>View Result</a>"; 
    }
    else
    {
        echo "<script>alert('Pin in not valid')</script>";
    }
                    
           

    }
?> 


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>e-Wallet UPNM Mart</title>
</head>

<body>

    <div class="container">
        <br> 
        <hr>
          
        <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Your e-Wallet Account Now!</h4>
            <br>

            <form action="register2.php" method="post" name="form1">

            <form>
            <!--full name-->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                <input name="username" class="form-control" placeholder="Full name" type="text" required>
            </div> <!-- form-group// -->

            <!--ic number-->
            <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input name="ic_no" class="form-control" placeholder="IC number" type="number" required>
                </div> <!-- form-group// -->

            <!--matric number-->
            <div class="form-group input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="matric_no" class="form-control" placeholder="Matric number" type="number" required>
            </div> <!-- form-group// -->

            <!--phone number-->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input name="phone_no" class="form-control" placeholder="Phone number" type="number" required>
            </div> <!-- form-group// -->

            <!--6-digit pin-->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="pin" class="form-control" placeholder="6-digit pin" type="password" required>
            </div> <!-- form-group// -->

            <!--Re-enter pin-->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="rpin" class="form-control" placeholder="Re-enter pin" type="password" required>
            </div> <!-- form-group// -->
            

            <!--Security question-->
            <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <select class="custom-select">
                        <option selected="">Select your security question</option>
                        <option value="1">What is your father's name?</option>
                        <option value="2">Where is your primary school?</option>
                        <option value="3">What is your favourite colour?</option>
                    </select>
                </div> <!-- form-group// -->

            <!--sec ques answer-->
            <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                    <input name="" class="form-control" placeholder="Security answer" type="text" required>
                </div> <!-- form-group// -->
            
            <!--Submit button-->
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block" onclick="myfunction()"> Create Account  </button>
            </div> <!-- form-group// --> 

            <p class="text-center">Already have an account? <a href="index.html">Log In</a> </p>                                                                 
        </form>
        </article>
        </div> <!-- card.// -->
        
        </div> 
        <!--container end.//-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>