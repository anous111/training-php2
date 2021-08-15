<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php 
$nameErr=$passErr="";
$Uname=$pass="";
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST["Uname"])) {
        $nameErr = "Name is required";
      } else {
        $Uname = test_input($_POST["Uname"]);
         // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Uname)) {
        $nameErr = "Only letters and white space allowed";
      }
      }

     
      if (empty($_POST["pass"])) {
        $passErr = "password is required";
      } else {
        $pass = test_input($_POST["pass"]);
      }
      
}

?>
<div class="container">
    <div class="row">
        <div class="col-md-11 mt-60 mx-md-auto">
            <div class="login-box bg-white pr-lg-5 pr-0">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 order-md-last">
                        <div class="form-wrap bg-white">
                            <h4 class="btm-sep pb-3 mb-5">Register</h4>
                            <form class="form" method="post" action="welcome.php">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group position-relative">
                                            <span class="zmdi zmdi-account"></span>
                                            <input type="text" id="username" class="form-control" placeholder="Username" name="Uname" value="<?php echo $Uname;?>">
                                            <p style="color:red; text-align: center;"><?php echo $nameErr; ?></p>

                                        </div>
                                    </div>
            
                                    <div class="col-12">
                                        <div class="form-group position-relative">
                                            <span class="zmdi zmdi-lock"></span>
                                            <input type="password" id="password" class="form-control" placeholder="Password" name="pass" value="<?php echo $pass;?>">
                                            <p style="color:red; text-align: center;"><?php echo $passErr; ?></p>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" id="submit" class="btn btn-lg btn-custom btn-dark btn-block">
                                            Sign Up
                                        </button>
                                    </div>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                    <div class="col-md-6 order-md-first">
                        <div class="content text-center">
                            <div class="border-bottom pb-5 mb-5">
                                <h3 class="c-black">Already have an account?</h3>
                                <a href="login.html" class="btn btn-custom">sign In</a>
                            </div>
                            <h5 class="c-black mb-4 mt-n1">Or Sign Up With</h5>
                            <div class="socials">
                                <a href="#" class="zmdi zmdi-facebook"></a>
                                <a href="#" class="zmdi zmdi-twitter"></a>
                                <a href="#" class="zmdi zmdi-google"></a>
                                <a href="#" class="zmdi zmdi-instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section style="margin-left: 30px ; color:white; font-family:cursive; font-weight:bold;">
<?php include 'date.php'; ?>
</section>
<br>
<br>
<?php  include 'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>