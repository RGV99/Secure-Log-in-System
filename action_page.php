<?php 

session_start();

include 'inc/connection.php';

if($conn){
    if(isset($_POST['signup'])){
        $username = mysqli_real_escape_string($conn, strip_tags(trim($_POST['username'])));
        $email = mysqli_real_escape_string($conn,strip_tags(trim($_POST['email'])));
        $password = mysqli_real_escape_string($conn,strip_tags(trim($_POST['password'])));
        $cfPass = mysqli_real_escape_string($conn,strip_tags(trim($_POST['password2'])));

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // check field is empty or not
            if(!empty($username) && !empty($email) && !empty($password) && !empty($cfPass)){
                if(strlen($email)>10){
                    $selectEmail = mysqli_num_rows(mysqli_query($conn, "SELECT `email` FROM `signup` WHERE `email`='".$email."'"));
                    if($selectEmail < 1){
                        if(strlen($password)>5){
                            if($password==$cfPass){
                                $insert = mysqli_query($conn, "INSERT INTO `signup` VALUES ('','".$username."','".$email."','".md5($password)."')");
                                if($insert){
                                    $_SESSION['rg-success'] = "Thank Your For Registration";
                                    header("Location:index.php");
                                }
                            }else{
                                echo "Password and Confirm Password not same!"; 
                            }
                        }else{
                            echo "Password can not be less than 5 characters"; 
                        }
                    }else{
                        echo "Username & Email is already exist"; 
                    }
                }else{
                    echo "Emali must be in the form of @gmail.com"; 
                }
            }
        }else{
            ?>
                <script>alert('please enter valid email id');window.location.href='sign-up.php';</script>
            <?php
        }
    }
}
