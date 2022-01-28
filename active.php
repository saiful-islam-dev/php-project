<?php


    include_once "db.php";

    $id = $_GET['id'];
    
    $query = "SELECT status FROM users WHERE  id = $id";

    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result)){
        $data = mysqli_fetch_assoc($result);
        print_r($data);
    }

?>