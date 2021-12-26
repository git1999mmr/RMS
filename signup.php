<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> RMS</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="bootstrap.css">
  	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Serif+Text&family=PT+Serif&display=swap" rel="stylesheet">
    <link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
			integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<link rel="icon" href="images/icon_browse.png">
    <script src="jquery.js"></script>
    <script src="bootstrap.js"></script>

</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "newuser";
    $data = mysqli_connect($servername,$username,$password,$database);
    if($data == false){
        die("Not Connected");
    }
    else{
        
        if(isset($_POST["email"])){
        $fname=$_POST["firstname"];
        $lname=$_POST["lastname"];
        $mail=$_POST["email"];
        $pass1=$_POST["password1"];
        $pass2=$_POST["password2"];


        if (empty($fname)) {
            echo "Invalid firstname";
            exit();
    
        }
        else if(empty($lname)){
            echo "Invalid lastname";
            exit();
        }

        else if(empty($mail)){
            echo "Invalid email";
            exit();
        }
        else if(empty($pass1)){
            echo "Invalid Password";
            exit();
        }
        else if(empty($pass2)){
            echo "Invalid Confirm-Password";
            exit();
        }

        else if(($pass1)!=($pass2)){
            echo "Invalid Confirm-Password ---- Typing Error";

        }
        else{
        $sql="INSERT INTO newusertable (firstname,lastname,email,passwordval) VALUES ('".$fname."','".$lname."','".$mail."','".$pass1."')";
        }

        if(mysqli_query($data,$sql)){
            echo "New Record created succesfully";
            header("location:regsuccess.html");
        }
        else{
            echo "error:".$sql.''.mysqli_error($data);
            header("location:regfailure.html");
        }
    }
        mysqli_close($data);
        
    }
    ?>

	<!-- Title & Nav bar -->
 <h1 class="text-success"><i class="fas fa-utensils"></i>  Roi élégant</h1>
  <nav class="navbar navbar-expand-lg navbar-dark font-weight-normal bg-info">
    <a class="navbar-brand text-light-bg font-weight-normal" style="font-size: 120%;" href="">Unlock Your Dine !</a>
     <button1 class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button1>
  <div class="collapse navbar-collapse" onclick="play()" id="navbarSupportedContent";>
    <ul class="navbar-nav ml-auto bg-info" >
        <li class="nav-item font-weight-normal text-white">
            <a class="nav-link" href="#" style="font-size: 100%" >Home</a>
        </li>
        <li class="nav-item font-weight-normal text-white">
            <a class="nav-link" href="menu.html" style="font-size: 100%" >Menu</a>
        </li>

		<li class="nav-item font-weight-normal text-white">
            <a class="nav-link" href="contact.html" style="font-size: 100%" >Contact Us</a>
        </li>
    </ul>
 </div>
</nav>
<!-- Login Form  -->
<div class="col-lg-6 col-md-8 col-xs-12" id="login">
    <div class="container-fluid" style="text-align: center;">
            <div class="row main-content bg-info text-light">
                <div class="col-lg-6 col-md-8 col-xs-10 col-sm-12 text-center restaurant__info" style="padding: 5%;">
                    <span class="restaurant__logo"><h2><img id="logo" src="images/logo.jpg" alt="No Photo" height="170px" width="170px" style="padding: 5%;"></h2></span>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12 login_form text-light" style="font-size: 70%;">
                    <div class="container-fluid text-light">
                        <div class="row">
                            <h2 style="font-size: 150%; padding-top: 5%; padding-left: 0%;">Sign Up</h2>
                        </div>
                        <div class="row">
                            <form control="" class="form-group" action="signup.php" method="post">
                                <div class="row text-light font-weight-italic">
                                    <input type="text" name="firstname" id="firstname" class="form__input" placeholder="First name">
                                </div>
                                <div class="row text-light font-weight-italic">
                                    <input type="text" name="lastname" id="lastname" class="form__input" placeholder="Last name">
                                </div>
                                <div class="row text-light font-weight-italic">
                                    <input type="email" name="email" id="email" class="form__input" placeholder="e-mail">
                                </div>
                                <div class="row text-light font-weight-italic">
                                    <input type="password" name="password1" id="password1" class="form__input" placeholder="Type Password">
                                </div>
                                <div class="row text-light font-weight-italic">
                                    <input type="password" name="Password2" id="password2" class="form__input" placeholder="confirm Password">
                                </div>
                                <audio id ="audio" src="click1.wav" autoplay="false"></audio>
                                <div class="row text-center font-weight-italic">
                                    <input onclick="" type="submit" value="Submit" class="btn" id="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <script src="jquery.js"></script>
    <script src="bootstrap.js"></script>
    <script src="index.js"></script>
</body>
</html>