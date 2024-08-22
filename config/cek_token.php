<?php
session_start();
include 'config.php'; 

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    
    
    $query = "SELECT Username FROM user WHERE Tokenkey='$token'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $username = $row['Username'];
        
        
        $_SESSION['username'] = $username;
        
        echo json_encode([
            'isLoggedIn' => true,
            'username' => $username
        ]);
    } else {
        echo json_encode(['isLoggedIn' => false]);
    }
} else {
    echo json_encode(['isLoggedIn' => false]);
}
?>
