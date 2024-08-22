<?php
session_start();
include 'config.php'; // File koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mencegah SQL Injection
    $email = mysqli_real_escape_string($conn, $email);

    // Mengambil hash password dari database berdasarkan email
    $query = "SELECT * FROM user WHERE Email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['Password'];

        // Verifikasi password yang diinput dengan hash password di database
        if (password_verify($password, $hashed_password)) {
            // Password cocok, login berhasil
            $token = bin2hex(random_bytes(16));

            // Perbarui token di database
            $updateQuery = "UPDATE user SET Tokenkey='$token' WHERE Email='$email'";
            mysqli_query($conn, $updateQuery);

            // Simpan token dan username di sesi
            $_SESSION['token'] = $token;
            $_SESSION['username'] = $row['Username'];
            ?>
            <script>
                window.history.back();
            </script>
            <?php
            // Kirim respons JSON
            echo json_encode(['token' => $token, 'username' => $row['Username']]);
        } else {
            // Password tidak cocok
            // echo json_encode(['error' => 'Invalid email or password']);
            ?>
            <script>
                alert('Invalid email or password')
                window.history.back();
            </script>
            <?php
        }
    } else {
        // Email tidak ditemukan
        // echo json_encode(['error' => 'Invalid email or password']);
        ?>
            <script>
                alert('Invalid email or password')
                window.history.back();
            </script>
            <?php
    }
}
?>