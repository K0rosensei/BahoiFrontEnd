<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['registerName'];
    $email = $_POST['registerEmail'];
    $password = $_POST['registerPassword'];
    
    // Mengenkripsi password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Menyesuaikan nama tabel dan kolom dengan entitas tabel Anda
    $sql = "INSERT INTO user (Username, Email, Password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
