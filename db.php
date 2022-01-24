<?php
// echo "ok";
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNMAE', 'iawd_2106');

$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNMAE);

// if($conn){
//     echo "oku";
// }

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}




?>