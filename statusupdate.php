<?php


    include_once "db.php";

    $id = $_GET['id'];
    
    $query = "SELECT status FROM users WHERE id = $id";

    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result)){
        $data = mysqli_fetch_assoc($result);
    }

    if($data['status'] == 1){
        $query = "UPDATE users SET status = '2' WHERE id = $id";
        $result = mysqli_query($conn, $query);
    }else{
        $query = "UPDATE users SET status = '1' WHERE id = $id";
        $result = mysqli_query($conn, $query);
    }
    header("Location: alluser.php");


?>