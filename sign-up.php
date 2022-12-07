<?php 
  session_start();

  if(isset($_SESSION['UID'])){
    header("Location: welcome.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Log-in | WEB-MAKERS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/fav.jpg" rel="icon">
  <link href="assets/img/fav.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="assets/css/aos.css" rel="stylesheet">
  <link href="assets/css/style-2.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 0px 0 0px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #0082cc;
  margin-bottom: 0px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .loginbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">

    <div class="container  align-items-center" style="padding-bottom: 12px;">
      <div class="row">
        <div class="col-md-2">
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="index.php" class="logo me-auto">
            <img src="assets/img/logo.png" alt="WEB-MAKERS" class="img-fluid">
          </a>
        </div>
        <div class="col-md-6 text-center">
          <h1 >RAGHAV KUMAR JHA</h1>
        </div>
        <div class="col-md-4 d-md-flex justify-content-center">
          <div class="s1" style="margin-top: -12px;margin-left: 78px;">
            <h5 style="    color: white;font-size: 1.4rem;">Already Have An Account..</h5>
           <a href="index.php" target="-blank"><button class="button button1">Log-in</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" id="navbar" style="background: #0071b2;"> 
     <!-- <a href="courses.html" class="get-started-btn">Get Started</a>-->
    </div>
  </header>
  <!-- End Header -->
  
   

  <form action="action_page.php" style="border:1px solid #ccc" method="post">
    <div class="container" style="height: 470px">
      <h3 style="text-align: center;">Please Register Here</h3>
      
      <hr>
      
      <label for="username"><b>Username :</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required>

      <label for="email"><b>Email :</b></label>
      <input type="text" placeholder="Enter Username" name="email" id="email" required>

      

      <label for="password"><b>Password :</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required>

      <label for="password2"><b>Repeat Password :</b></label>
      <input type="text" placeholder="Enter Password Again" name="password2" id="password2" required>
      <!--
      <label for="agree">
        <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
        with the
        <a href="#" title="term of services">term of services</a>
      </label>
      -->
      <div class="clearfix">
        <button type="submit" name="signup" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>

  
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-3 justify-content-center" style="margin-top: 1.6%;" >

      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.instagram.com/raghavkumarjhaofficial/" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="https://m.facebook.com/raghav.kumarjha.56" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://www.linkedin.com/in/raghav-kumar-jha-5874a3206/" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="https://github.com/RGV99" class="github"><i class="fa fa-github"></i></a>

      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Template Main JS File -->
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
