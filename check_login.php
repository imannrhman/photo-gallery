<?php

session_start();

include('connection.php');

try {
    $username     = $_POST['username'];
    $password      = $_POST['password'];
    
    //query
    $query = $connection->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    
    $row = $query->fetch();
    $num_row= count($row);
    
    if($num_row >=1) {
        
        echo "success";
    
        $_SESSION['id']       = $row['id'];
        $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
        $_SESSION['username']       = $row['username'];
    
    } else {
        echo "Username tidak ditemukan";
    
    }
} catch(Exception $e) { 
    echo $e->getMessage();
}

?>