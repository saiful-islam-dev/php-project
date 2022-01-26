<?php
session_start();
//valedation of the form blank
if(isset($_POST['submit'])){
    
    $email = trim(htmlentities($_POST["email"]));
    $password = $_POST["password"];
    
    


    if(empty($email)){
       $_SESSION['emailError'] = $error['emailError'] = "Enter Your Email";
    } 

    if(empty($password)){
       $_SESSION['passwordError'] = $error['passwordError'] = "Enter Your Password";
    }
}


if(isset($_POST['submit'])){

    require_once 'db.php';

    $email = trim(htmlentities($_POST['email']));
    $password = $_POST['password'];
    $encpass = md5($password);

    $query = "SELECT id, name, uname, email, password FROM users WHERE email = '$email' AND password = '$encpass'"; 
    

    $result = mysqli_query($conn, $query);


    if(mysqli_num_rows($result)> 0){
        $data = mysqli_fetch_assoc($result);
        $_SESSION['id'] =  $data['id'];
        $_SESSION['name'] =  $data['name'];
        $_SESSION['uname'] =  $data['uname'];
        $_SESSION['email'] =  $data['email'];

        $_SESSION['success'] =  "login success!";

        header("Location: alluser.php");

    }else{
        header("Location: login.php");
    }

    }


?>