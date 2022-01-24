<?php

session_start();
$error = [];
 

 if(isset($_POST['submit'])){
     $name = trim(htmlentities($_POST["name"]));
     $uname = trim(htmlentities($_POST["uname"]));
     $email = trim(htmlentities($_POST["email"]));
     $password = $_POST["password"];
     $encPass = md5($password);
     $photo = $_FILES["photo"];
     $conformpassword = $_POST["conformpassword"];
     
     
 
 
     if(empty($name)){
        $_SESSION['nameError'] = $error['nameError'] = "Enter Your Name";
     } 
 
     if(empty($uname)){
        $_SESSION['unameError'] = $error['unameError'] = "Enter Your User Name";
     }
 
     if(empty($email)){
        $_SESSION['emailError'] = $error['emailError'] = "Enter Your Email";
     }
 
     if(empty($password)){
        $_SESSION['passwordError'] = $error['passwordError'] = "Enter Your Password";
     }
 
     if(empty($photo['name'])){
        $_SESSION['photoError'] = $error['photoError'] = "Seclected Your Photo";
     }
     
     if(empty($conformpassword) or $password != $conformpassword){
         
        $_SESSION['conformpasswordError'] = $error['conformpasswordError'] = "Password don't Match";
         
     }
 
 
     if(empty($error)){
         require 'db.php';
 
         $img_ext = explode('.', $photo['name']);
     
         $photo_name = $name."-".time().'.'.end($img_ext);
         
         
         $upload = move_uploaded_file($photo['tmp_name'], "uploads/profile/" .$photo_name);
     
         if ($upload){
 
             $query = "INSERT INTO users(name, uname, email, password, photo) VALUES ('$name','$uname','$email','$encPass','$photo_name')";
             
             $result = mysqli_query($conn, $query);
     
             if($result){
                $_SESSION['$success'] = "User Insert Successfully Done!";

                }
            }
        }
        
        
    }
  header("Location: index.php");