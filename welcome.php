<?php 
  session_start();

  if(!isset($_SESSION['UID'])){
    header("Location: index.php");
  }

  // logout script
  if(isset($_POST['logout'])){
    unset($_SESSION['UID']);
    header("Location: index.php");
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
          <a href="index.html" class="logo me-auto">
            <img src="assets/img/logo.png" alt="WEB-MAKERS" class="img-fluid">
          </a>
        </div>
        <div class="col-md-6 text-center">
          <?php 
            include 'inc/connection.php';
            if(isset($_SESSION['UID'])){
              $selQuery = mysqli_fetch_assoc(mysqli_query($conn, "SELECT `username` FROM `signup` WHERE `id`=".$_SESSION['UID']));

              echo '<h1 >Welcome! '.ucfirst($selQuery['username']).'</h1>';
              
            }
          ?>
        </div>
        
      </div>
    </div>
    <div class="container-fluid" id="navbar" style="background: #0071b2;"> 
      <form method="post">
        <input type="submit" name="logout" value="Logout">
      </form>
    </div>
  </header>
  <!-- End Header -->
  
   
  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container" style="background-color:#0082cc80; margin-top:50px; margin-bottom:50px">

      <div class="section-title">
        <h2>Learn More About Me:-</h2>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <a href="https://www.linkedin.com/in/raghav-kumar-jha-5874a3206/" target="_blank">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <p class="font-italic" style="color: #000000">
          My Self <strong>Raghav Kumar Jha</strong>.<br>
          I am a undergraduate student pursuing Btech from CBPGEC which is affiliated to Guru Gobind Singh Indraprastha University in <b>Information Technology<b>.
          
          </p>
          <p>Coding has always fascinated me and I look forward to learning skills along with all tech enthusiasts. I solved problems in creative and efficient ways and I have keen interest in ML and Cyber Security.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul >
                <li><i class="bi bi-chevron-right"></i> <strong >College:</strong> <span>NSUT WEST CAMPUS</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>9315337956 </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New Delhi , India</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul >
                <li><i class="bi bi-chevron-right"></i> <strong>Branch:</strong> <span>Information Technology(2019-2023)</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Year:</strong> <span> 3<sup>rd</sup>-year </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span >raghavkr.jha1211@gmail.com</span></li>
                
              </ul>
            </div>
          </div>
          
        </div>
      </div>
      <br>
      <p>
        <h3>Technical Skills:-</h3>
         <ul>
           <li><b>Programming Language:-</b> PYTHON, JAVA, OOP’s, data structures and algorithms, DBMS, HTML,
                  CSS, JavaScript</li>
           <li><b>Operating System:-</b> WINDOWS, LINUX</li>
           <li><b>Computer Networking</b></li>
           <li><b>Cyber Security</b> and <b>Ethical Hacking</b></li>
         </ul>
      </p>
      <br>
      <p>
        <h3>Internships:-</h3>
         <ul>
           <li><b>Web Application Security Intern at CERT-in:-</b> Web Applications Vulnerability
                  Assessment & Penetration testing</li>
           <li><b>Cyber Security Research Intern at SISTMR, Australia:-</b> Had a great time during my
                  internship with SISTMR Australia under the training of Dr Pritam Gajkumar Shah learning
                  various techniques of exploiting and protecting systems.</li>
           <li><b>Ethical Hacking Internship at Internship Studio:-</b>  In this internship, I learned the same
                  basic terminology and phases of hacking.</li>
           <li><b>Web Developer at Gold Flame Ent. Studios:-</b> In this internship, I have worked on six
                  websites using html, CSS, and JavaScript.</li>
         
         </ul>
      </p>
      <br>
      <p>
        <h3>Participate in Competitions :-</h3>
         <ul>
           <li><b>Sainya Ranakshetram Indian Army’s Annual Cyber Security Hackathon </b> (organized
                  by Rashtriya Raksha University, and ISAC).</li>
           <li><b>National Engineering Olympiad (NEO.5).</b></li>
         </ul>
      </p>

    </div><!-- End About Me -->
  </section><!--End About Section-->       

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
