<?php 
  session_start();

  if(isset($_SESSION['UID'])){
    header("Location: welcome.php");
  }

  if(isset($_POST['login'])){
    include 'inc/connection.php';
    //name
    $name = mysqli_real_escape_string($conn, strip_tags(trim($_POST['username'])));
    $pass = strip_tags(trim($_POST['password']));

    if(!empty($name) && !empty($pass)){
     

      $select_record = mysqli_query($conn, "SELECT * FROM `signup` WHERE `email`='".$name."' && `password`='".md5($pass)."'");
      $count = mysqli_num_rows($select_record);

      if($count >= 1){
        $uRecord = mysqli_fetch_assoc($select_record);
        $uid = $uRecord['id'];

        $_SESSION['UID'] = $uid;
        header("Location: welcome.php");
      }else{
        $_SESSION['rg-success'] = 'Please Register after that try to login';
      }
    }else{
      $_SESSION['rg-success'] = "Wrong Email & Password !";
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Log-in </title>
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
  html {
  --scrollbarBG: #ffffff;
  --thumbBG: #0082cc;
}
body::-webkit-scrollbar {
  width: 15px;
}
body {
  scrollbar-width: thin;
  scrollbar-color: var(--thumbBG) var(--scrollbarBG);

}
body::-webkit-scrollbar-track {
  background: var(--scrollbarBG);
}
body::-webkit-scrollbar-thumb {
  background-color: var(--thumbBG) ;
  border-radius: 6px;
  border: 3px solid var(--scrollbarBG);
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #ffffff;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 83px;
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
  border-radius: 30px;
}

/* Add padding to container elements */
.container {
  padding: 13px;
  
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

<body >
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
          <div class="s1" style="margin-top: -12px;">
            <h5 style="color: white;font-size: 1.4rem;">Don't Have An Account..</h5>
           <a href="sign-up.php" target="-blank"><button class="button button1">Sign Up</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" id="navbar" style="background: #0071b2;"> 
     <!-- <a href="courses.html" class="get-started-btn">Get Started</a>-->
    </div>
  </header>
  <!-- End Header -->
  
   
    <div class="container" data-aos="fade-up" style="width: 100%;">
      <div class="row">
        <?php if(isset($_SESSION['rg-success'])){ ?>
          <div class="col-md-12">
            <p class="alert bg-success" style="color:#fff;"><?php echo $_SESSION['rg-success']; ?></p>
          </div>
        <?php } ?>
        <div class="col-md-8" style="background-image: url('assets/img/body-bg.png'); background-repeat: no-repeat;" >
          <!--<div class="col-md-12 " >
            <h4 style="margin-left: -6%;margin-top: -6px;">Our goal isn’t to build a website...</h4> 
            <h4 style="margin-left: -2%;margin-top: -3px;"> Our goal is to build your business...</h4>
          </div>--><br><br><br><br><br><br><br><br><br><br>
        </div>
        
        <div class="col-md-4" data-aos="fade-left" data-aos-delay="100">
          <div class="col-md-12" >
            <form method="post" style="border:1px solid #0082cc ;height: 470px;background-color: #0082cc4a;border-radius: 40px;">
              <div class="container" >
               <h1 style="text-align: center;color: #06bf59">Log-in</h1>
               <p>Please log-in to go forward.</p>
               <hr>
          
               <label for="username"><b>Email :</b></label>
               <input type="text" placeholder="Enter Your Email" name="username" id="username" required autocomplete="off">

               <label for="password"><b>Password :</b></label>
               <input type="password" placeholder="Enter Password" name="password" id="password" required autocomplete="off">

               <!--<label>
               <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
               </label>
          
               Forgot <a href="#"> password? </a>-->

               <div class="clearfix">
                 <button type="submit" class="loginbtn" name="login">Log-in</button>
               </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>    
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-3 justify-content-center" >

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
<?php unset($_SESSION['rg-success']); ?>
